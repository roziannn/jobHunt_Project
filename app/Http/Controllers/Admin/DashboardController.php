<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Job;
use App\Models\Order;
use App\Traits\Searchable;

class DashboardController extends Controller
{
    use Searchable;

    // function __construct()
    // {
    //     $this->middleware(['permission:']);
    // }

    function index(): View
    {
        $amounts = Order::pluck('default_amount')->toArray();
        $totalEarnings = calcEarnings($amounts);

        $totalCandidate = Candidate::count();
        $totalCompanies = Company::count();
        $totalJobs = Job::count();

        $activeJobs = Job::where('deadline', '>=', date('Y-m-d'))->count();
        $expJobs = Job::where('deadline', '<=', date('Y-m-d'))->count();
        $pendingJobs = Job::where('status', 'pending')->count();

        $totalArticle = Blog::count();

        $query = Job::query();
        $this->seacrh($query, ['title', 'slug']);
        $jobs = $query->where('status', 'pending')->paginate(20);


        return view('admin.dashboard.index', compact(
            'totalEarnings',
            'totalCandidate',
            'totalCompanies',
            'totalJobs',
            'activeJobs',
            'expJobs',
            'totalArticle',
            'jobs'
        ));
    }
}