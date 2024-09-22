<?php

//1. create Helpers Global
//2. after that, register it to composer.json -> on :"autoload"
//3. create a function

//note: dump autoload as we make changes into our composer --composer du

/** Check input error */

use App\Models\Candidate;
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


/** Check company profile completion */

if (!function_exists('isCompanyProfileComplete')) {
    function isCompanyProfileComplete(): bool
    {
        $requiredFields = [
            'logo',
            'banner',
            'bio',
            'vision',
            'name',
            'industry_type_id',
            'organization_type_id',
            'team_size_id',
            'establishment_date',
            'phone',
            'email',
            'country'
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

/** Check candidate profile completion */

if (!function_exists('isCandidateProfileComplete')) {
    function isCandidateProfileComplete(): bool
    {
        $requiredFields = [
            'experience_id',
            'profession_id',
            'image',
            'full_name',
            'birth_date',
            'gender',
            'bio',
            'marital_status',
            'country',
            'status'
        ];

        $candidateProfile = Candidate::where('user_id', auth()->user()->id)->first();

        foreach ($requiredFields as $field) {
            if (empty($candidateProfile->{$field})) {
                return false;
            }
        }
        return true;
    }
}

/** Format date */

if (!function_exists('formatDate')) {
    function formatDate(?string $date): ?string
    {
        if ($date) {
            return date('d M Y', strtotime($date));
        }
        return null;
    }
}

/** Store plan info in session */

if (!function_exists('storePlanInformation')) {
    function storePlanInformation()
    {
        session()->forget('user_plan');
        session([
            'user_plan' => isset(auth()->user()?->company?->userPlan) ?
                auth()->user()->company->userPlan : []
        ]);
    }
}

/** Func format location */

if (!function_exists('formatLocation')) {
    function formatLocation($country = null, $state = null, $city = null, $address = null): string
    {
        $location = '';
        if ($address) {
            $location .= $address;
        }
        if ($city) {
            $location .= $address ?  ", " . $city : $city;
        }
        if ($state) {
            $location .=  $city ?  ", " . $state : $state;
        }
        if ($country) {
            $location .=  $state ?  ", " . $country : $country;
        }

        return $location;
    }
}

/** Func Calculate Earnings */
if (!function_exists('calcEarnings')) {
    function calcEarnings($amounts)
    {
        $total = 0;
        foreach ($amounts as $value) {
            $amount = intval(preg_replace('/{^0-9}/', '', $value));
            // dd($amount);
            $total += $amount;
        }
        return $total;
    }
}

/** check permission based on role */
if (!function_exists('canAccess')) {
    function canAccess(array $permissons): bool
    {
        $permisson = auth()->guard('admin')->user()->hasAnyPermission($permissons);
        $superAdmin = auth()->guard('admin')->user()->hasRole('Super Admin');

        if ($permisson || $superAdmin) {
            return true;
        }

        return false;
    }
}
