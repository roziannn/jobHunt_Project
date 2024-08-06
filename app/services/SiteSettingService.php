<?php

namespace App\Services;

use App\Models\PaymentSetting;
use App\Models\SiteSetting;
use Cache;

class SiteSettingService
{

    function getSettings()
    {
        return Cache::rememberForever('settings', function () {
            return SiteSetting::pluck('value', 'key')->toArray(); // it will grab data like array ['key' => 'value']
        });
        // when the first reload the data will be saved into the cache & it will be saved forever in cache memory
    }

    function setGlobalSettings()
    {
        $settings = $this->getSettings();
        config()->set('settings', $settings); //config.
    }

    function clearCachedSettings()
    {
        Cache::forget('settings');
    }
}
