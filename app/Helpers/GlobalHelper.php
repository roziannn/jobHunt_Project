<?php

//1. create Helpers Global
//2. after that, register it to composer.json -> on :"autoload"
//3. create a function

//note: dump autoload as we make changes into our composer --composer du

/** Check input error */

use App\Models\Company;

if (!function_exists('hasError')) { //jika blm ada, tambahkan
    function hasError($errors, string $name): ?String
    {
        return $errors->has($name) ? 'is-invalid' : '';
    }
}

/** Set sidebar active */

if (!function_exists('setSidebarActive')) {
    function setSidebarActive(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }

        return null;
    }
}


/** Check profile completion */

if (!function_exists('isCompanyProfileComplete')) {
    function isCompanyProfileComplete(): bool
    {
        $requiredFields = [
            'logo', 'banner', 'bio', 'vision', 'name',
            'industry_type_id', 'organization_type_id', 'team_size_id',
            'establishment_date', 'phone', 'email', 'country'
        ];

        $companyProfile = Company::where('user_id', auth()->user()->id)->first();

        foreach ($requiredFields as $field) {
            if (empty($companyProfile->{$field})) {
                return false;
            }
        }
        return true;
    }
}
