<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Hero;
use App\Models\Plan;
use App\Models\Country;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(): View
    {
        $hero = Hero::first();
        $countries = Country::all();
        $jobCategories = JobCategory::all();
        $jobCount = Job::count();

        $popularCategories = JobCategory::withCount(['jobs' => function ($query) {
            $query->where(['status' => 'active'])->where('deadline', '>=', date('Y-m-d'));
        }])->where('show_at_popular', 1)->get();

        $plans = Plan::where(['frontend_show' => 1, 'homepage_show' => 1])->get();

        return view('frontend.home.index', compact(
            'plans',
            'hero',
            'jobCategories',
            'countries',
            'jobCount',
            'popularCategories'
        ));
    }
}
