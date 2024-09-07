<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Hero;
use App\Models\Plan;
use App\Models\Company;
use App\Models\Counter;
use App\Models\Country;
use App\Models\LearnMore;
use App\Models\JobCategory;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\JobLocation;
use App\Models\Review;

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

        $featuredCategories = JobCategory::where('show_at_featured', 1)->take(10)->get();
        $whyChooseUs = WhyChooseUs::first();
        $learnMore = LearnMore::first();
        $counter = Counter::first();

        $companies = Company::select('id', 'logo', 'name', 'slug', 'country')
            ->where(['profile_completion' => 1, 'visibility' => 1])->withCount(['jobs' => function ($query) {
                $query->where(['status' => 'active'])->where('deadline', '>=', date('Y-m-d'));
            }])
            ->latest()->take(45)->get();

        /*Job locations section*/
        $locations = JobLocation::latest()->take(8)->get();

        /*Reviews section*/
        $reviews = Review::latest()->take(10)->get();

        /*Blogs section*/
        $blogs = Blog::latest()->take(6)->get();

        $plans = Plan::where(['frontend_show' => 1, 'homepage_show' => 1])->get();

        return view('frontend.home.index', compact(
            'plans',
            'hero',
            'jobCategories',
            'countries',
            'jobCount',
            'popularCategories',
            'featuredCategories',
            'whyChooseUs',
            'learnMore',
            'counter',
            'companies',
            'locations',
            'reviews',
            'blogs'
        ));
    }
}
