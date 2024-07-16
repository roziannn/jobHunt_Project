<?php

namespace App\Http\Controllers\Frontend;

use Redirect;
use App\Models\City;
use App\Models\State;
use App\Models\Company;
use App\Models\Country;
use App\Models\TeamSize;
use App\Services\Notify;
use Illuminate\View\View;
use App\Models\IndustryType;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Models\OrganizationType;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Frontend\CompanyInfoUpdateRequest;
use App\Http\Requests\Frontend\CompanyFoundingInfoUpdateRequest;

class CompanyProfileController extends Controller
{
    use FileUploadTrait; //inject here

    function index(): View
    {
        $companyInfo = Company::where('user_id', auth()->user()->id)->first();

        $industryTypes = IndustryType::all();
        $organizationTypes = OrganizationType::all();
        $teamSizes = TeamSize::all();

        $countries = Country::all();
        $states = State::select(['id', 'name', 'country_id'])->where('country_id', $companyInfo?->country)->get();
        $cities = City::select(['id', 'name', 'state_id', 'country_id'])->where('state_id', $companyInfo?->state)->get();

        return view('frontend.company_dashboard.profile.index', compact(
            'companyInfo',
            'industryTypes',
            'organizationTypes',
            'teamSizes',
            'countries',
            'states',
            'cities'
        ));
    }

    function updateCompanyInfo(CompanyInfoUpdateRequest $request): RedirectResponse
    {
        $logoPath = $this->uploadFile($request, 'logo');
        $bannerPath = $this->uploadFile($request, 'banner');

        $data = [];
        if (!empty($logoPath)) $data['logo'] = $logoPath;
        if (!empty($bannerPath)) $data['banner'] = $bannerPath;

        $data['name'] = $request->name;
        $data['bio'] = $request->bio;
        $data['vision'] = $request->vision;

        Company::updateOrCreate(
            ['user_id' => auth()->user()->id], //if data ada (berdasarkan user_id nya), update. kalau blm ada, create a new.
            $data
        );

        if (isCompanyProfileComplete()) {
            $companyProfile = Company::where('user_id', auth()->user()->id)->first();
            $companyProfile->profile_completion = 1;
            $companyProfile->visibility = 1;
            $companyProfile->save();
        }

        Notify::updatedNotification();

        return redirect()->back();
    }

    function updateFoundingInfo(CompanyFoundingInfoUpdateRequest $request): RedirectResponse
    {
        Company::updateOrCreate(
            ['user_id' => auth()->user()->id], //if data ada (berdasarkan user_id nya), update. kalau blm ada, create a new.
            [
                'industry_type_id' => $request->industry_type,
                'organization_type_id' => $request->organization_type,
                'team_size_id' => $request->team_size,
                'establishment_date' => $request->establishment_date,
                'website' => $request->website,
                'email' => $request->email,
                'phone' => $request->phone,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'address' => $request->address,
                'map_link' => $request->map_link

            ]
        );

        if (isCompanyProfileComplete()) {
            $companyProfile = Company::where('user_id', auth()->user()->id)->first();
            $companyProfile->profile_completion = 1;
            $companyProfile->visibility = 1;
            $companyProfile->save();
        }

        Notify::updatedNotification();

        return redirect()->back();
    }

    function updateAccountInfo(Request $request): RedirectResponse
    {
        // we have only 2 input fields data so not gonna make the request separated file
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email']
        ]);

        Auth::user()->update($validatedData);

        Notify::updatedNotification();

        return redirect()->back();
    }

    function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        Auth::user()->update(['password' => bcrypt($request->password)]);

        Notify::updatedNotification();

        return redirect()->back();
    }
}
