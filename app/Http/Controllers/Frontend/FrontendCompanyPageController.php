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

class FrontendCompanyPageController extends Controller
{
    function index(Request $request): View
    {
        $countries = Country::all();
        $industryTypes = IndustryType::withCount('companies')->get();
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
        if ($request->has('city') && $request->filled('city')) { //has country with value.
            $query->where('city', $request->city);
        }

        $companies = $query->paginate(21);

        return View('frontend.pages.company-index', compact(
            'companies',
            'countries',
            'selectedStates',
            'selectedCities',
            'industryTypes'
        ));
    }

    function show(string $slug): View
    {
        $company = Company::where(['profile_completion' => 1, 'visibility' => 1, 'slug' => $slug])->firstOrFail();

        return View('frontend.pages.company-show', compact('company'));
    }
}
