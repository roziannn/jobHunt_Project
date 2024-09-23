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
use App\Traits\FileUploadTrait;

class SiteSettingController extends Controller
{
    use FileUploadTrait;

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

    function updateLogoSetting(Request $request): RedirectResponse
    {
        $request->validate([
            'logo' => ['image', 'max:3000'],
            'favicon' => ['image', 'max:3000']
        ]);

        $logoPath = $this->uploadFile($request, 'logo');
        $faviconPath = $this->uploadFile($request, 'favicon');

        $logoData = [];
        if ($logoPath) $logoData['value'] = $logoPath;
        SiteSetting::updateOrCreate(
            ['key' => 'site_logo'],
            $logoData
        );

        $faviconData = [];
        if ($faviconPath) $faviconData['value'] = $faviconPath;
        SiteSetting::updateOrCreate(
            ['key' => 'site_favicon'],
            $faviconData
        );


        $settingService = app(SiteSettingService::class);
        $settingService->clearCachedSettings(); //clear/delete from cache memory gatewaySettings item previous data

        Notify::updatedNotification();
        return redirect()->back();
    }
}
