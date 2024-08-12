<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class CompanyOrderController extends Controller
{
    function index(): View
    {
        $orders = Order::where('company_id', auth()->user()->company->id)->paginate(10);
        return view('frontend.company_dashboard.order.index', compact('orders'));
    }

    function show(string $id): View
    {
        $order = Order::findOrFail($id);
        return view('frontend.company_dashboard.order.show', compact('order'));
    }

    function invoice(string $id)
    {
        $order = Order::findOrFail($id);

        $customer = new Buyer([
            'name'          =>  $order->company->name,
            'custom_fields' => [
                'email' =>  $order->company->email,
                'transaction' => $order->transaction_id,
                'payment_method' => $order->payment_provider,
            ],
        ]);

        $seller = new Party([
            'name'          => config('settings.site_name'),
            'phone'         => config('settings.site_phone'),
            'custom_fields' => [
                // 'note'        => 'IDDQD',
                // 'business id' => '365#GG',
                'email' => config('settings.site_email'),
            ],
        ]);


        $item = InvoiceItem::make($order->package_name . ' Plan')->pricePerUnit($order->amount);

        $invoice = Invoice::make()
            ->series($order->order_id)
            ->currencyCode($order->paid_in_currency)
            ->currencySymbol($order->paid_in_currency)
            ->buyer($customer)
            ->seller($seller)
            ->status('paid')
            ->dateFormat($order->created_at)
            ->addItem($item);

        return $invoice->download();
    }
}
