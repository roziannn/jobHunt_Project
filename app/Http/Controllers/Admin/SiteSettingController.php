<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\GeneralSettingUpdateRequest;
use App\Services\SiteSettingService;

class SiteSettingController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:site settings']);
    }

    function index(): View
    {
        return view('admin.site-setting.index');
    }

    function updateGeneralSetting(GeneralSettingUpdateRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        foreach ($validatedData as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        $settingService = app(SiteSettingService::class);
        $settingService->clearCachedSettings(); //clear/delete from cache memory gatewaySettings item previous data

        Notify::updatedNotification();
        return redirect()->back();
    }
}
