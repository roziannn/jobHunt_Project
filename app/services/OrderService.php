<?php

namespace App\Services;

use App\Models\Order;
use App\Models\UserPlan;
use Auth;
use Session;

class OrderService
{
    static function storeOrder(
        string $transactionId,
        string $payment_provider,
        string $amount,
        string $paidInCurrency,
        string $payment_status
    ) {
        $order = new Order();
        $order->company_id = Auth::user()->company->id;
        $order->plan_id = Session::get('selected_plan')['id'];
        $order->package_name = Session::get('selected_plan')['label'];
        $order->transaction_id = $transactionId;
        $order->order_id = uniqid();
        $order->payment_provider = $payment_provider;
        $order->amount = $amount;
        $order->paid_in_currency = $paidInCurrency;
        $order->default_amount = Session::get('selected_plan')['price'] . config('settings.site_default_currency');
        $order->payment_status = $payment_status;
        $order->save();
    }

    static function setUserPlan()
    {
        $userPlan = UserPlan::where('company_id',  Auth::user()->company->id)->first();
        UserPlan::updateOrCreate(
            ['company_id' => Auth::user()->company->id], // key for checking
            [
                'plan_id' => Session::get('selected_plan')['id'],

                'job_limit' => $userPlan?->job_limit ? $userPlan->job_limit + Session::get('selected_plan')['job_limit']
                    : Session::get('selected_plan')['job_limit'],

                'featured_job_limit' =>  $userPlan?->featured_job_limit ?
                    $userPlan->featured_job_limit + Session::get('selected_plan')['featured_job_limit'] :
                    Session::get('selected_plan')['featured_job_limit'],

                'highlight_job_limit' =>  $userPlan?->highlight_job_limit ?
                    $userPlan->highlight_job_limit + Session::get('selected_plan')['highlight_job_limit'] :
                    Session::get('selected_plan')['highlight_job_limit'],

                'profile_verified' =>  Session::get('selected_plan')['profile_verified'],
            ]
        );
    }
}
