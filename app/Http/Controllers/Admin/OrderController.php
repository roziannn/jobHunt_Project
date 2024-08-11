<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    function index(): View
    {
        $orders = Order::paginate(20);
        return view('admin.order.index', compact('orders'));
    }
}
