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
}
