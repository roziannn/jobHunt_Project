<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaypalSettingUpdateRequest;
use App\Http\Requests\Admin\RazorpaySettingUpdateRequest;
use App\Http\Requests\Admin\StripeSettingUpdateRequest;
use App\Models\PaymentSetting;
use App\Services\Notify;
use App\Services\PaymentGatewaySettingService;
use Illuminate\Http\RedirectResponse;

class PaymentSettingController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:payment settings']);
    }

    function index(): View
    {

        return view('admin.payment-setting.index');
    }

    function updatePaypal(PaypalSettingUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $key => $value) {
            PaymentSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(PaymentGatewaySettingService::class);
        $settingService->clearCachedSettings(); //clear/delete from cache memory gatewaySettings item previous data

        Notify::updatedNotification();

        return redirect()->back();
    }

    function updateStripe(StripeSettingUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $key => $value) {
            PaymentSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(PaymentGatewaySettingService::class);
        $settingService->clearCachedSettings(); //clear/delete from cache memory gatewaySettings item previous data

        Notify::updatedNotification();

        return redirect()->back();
    }

    function updateRazorpay(RazorpaySettingUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $key => $value) {
            PaymentSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(PaymentGatewaySettingService::class);
        $settingService->clearCachedSettings(); //clear/delete from cache memory gatewaySettings item previous data

        Notify::updatedNotification();

        return redirect()->back();
    }
}
