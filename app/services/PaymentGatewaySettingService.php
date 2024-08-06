<?php

namespace App\Services;

use App\Models\PaymentSetting;
use Cache;

class PaymentGatewaySettingService
{

    function getSettings()
    {
        return Cache::rememberForever('gatewaySettings', function () {
            return PaymentSetting::pluck('value', 'key')->toArray(); // it will grab data like array ['key' => 'value']
        });
        // when the first reload the data will be saved into the cache & it will be saved forever in cache memory
    }

    function setGlobalSettings()
    {
        $settings = $this->getSettings();
        config()->set('gatewaySettings', $settings); //config.
    }

    function clearCachedSettings()
    {
        Cache::forget('gatewaySettings');
    }
}
