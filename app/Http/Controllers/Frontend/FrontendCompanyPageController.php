<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\City;
use App\Models\State;
use App\Models\Company;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IndustryType;
use App\Models\OrganizationType;

class FrontendCompanyPageController extends Controller
{
    function index(Request $request): View
    {
        $countries = Country::all();
        $industryTypes = IndustryType::withCount('companies')->get();
        $organizations = OrganizationType::withCount('companies')->get();
        $selectedStates = null;
        $selectedCities = null;

        $query = Company::query();
        $query->withCount(['jobs' => function ($query) {
            $query->where('status', 'active')->where('deadline', '>=', date('Y-m-d')); //count the job post data with status active n deadline.
        }])->where(['profile_completion' => 1, 'visibility' => 1]);

        // advance filter conditional purpose

        if ($request->has('search') && $request->filled('search')) { //has search with value.
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->has('country') && $request->filled('country')) { //has country with value.
            $query->where('country', $request->country);
        }
        if ($request->has('state') && $request->filled('state')) { //has country with value.
            $query->where('state', $request->state);
            $selectedStates = State::where('country_id', $request->country)->get();
            $selectedCities = City::where('state_id', $request->state)->get();
        }
        if ($request->has('industry') && $request->filled('industry')) {
            $query->whereHas('industyType', function ($query) use ($request) {
                $query->where('slug', $request->industry);
            });
        }
        if ($request->has('organization') && $request->filled('organization')) {
            $query->whereHas('organizationType', function ($query) use ($request) {
                $query->where('slug', $request->organization);
            });
        }

        $companies = $query->paginate(21);

        return View('frontend.pages.company-index', compact(
            'companies',
            'countries',
            'selectedStates',
            'selectedCities',
            'industryTypes',
            'organizations'
        ));
    }

    function show(string $slug): View
    {
        $company = Company::where(['profile_completion' => 1, 'visibility' => 1, 'slug' => $slug])->firstOrFail();
        $openJobs = Job::where('company_id', $company->id)->where('status', 'active')->where('deadline', '>=', date('Y-m-d'))->paginate(10);

        return View('frontend.pages.company-show', compact('company', 'openJobs'));
    }
}
