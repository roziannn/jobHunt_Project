<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Order;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserPlan;

class CompanyDashboardController extends Controller
{
    function index(): View
    {
        $jobPosts = Job::where('company_id', auth()->user()->company->id)->where('status', 'pending')->count();
        $totalJobs = Job::where('company_id', auth()->user()->company->id)->count();
        $totalOrders = Order::where('company_id', auth()->user()->company->id)->count();

        $userPackage = UserPlan::where('company_id', auth()->user()->company->id)->first();

        return view('frontend.company_dashboard.dashboard', compact(
            'jobPosts',
            'totalJobs',
            'totalOrders',
            'userPackage'
        ));
    }
}
