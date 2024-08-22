<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendJobPageController extends Controller
{
    function index(): View
    {
        $jobs = Job::where(['status' => 'active'])->where('deadline', '>=', date('Y-m-d'))
            ->paginate(10);
        return view('frontend.pages.jobs-index', compact('jobs'));
    }

    function show(string $slug): View
    {
        $job = Job::where('slug', $slug)->firstOrFail();
        $openJob = Job::where('company_id', $job->company_id)->where('status', 'active')->where('deadline', '>=', date('Y-m-d'))->count();
        return view('frontend.pages.jobs-show', compact('job', 'openJob'));
    }
}
