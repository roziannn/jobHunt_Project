<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PaymentSettingController extends Controller
{
    function index(): View
    {

        return view('admin.payment-setting.index');
    }

    function updatePaypal(Request $request): RedirectResponse
    {
        dd($request->all());
        return redirect()->back();
    }
}
