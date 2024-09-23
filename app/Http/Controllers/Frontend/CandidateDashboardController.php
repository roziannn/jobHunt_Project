<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppliedJob;
use App\Models\JobBookmark;

class CandidateDashboardController extends Controller
{
    function index(): View
    {
        $jobAppliedCount = AppliedJob::where('candidate_id', auth()->user()->id)->count();
        $userBookmarkCount = JobBookmark::where('candidate_id', auth()->user()->candidateProfile?->id)->count();

        $appliedJobs = AppliedJob::with('job')->where('candidate_id', auth()->user()->id)->orderBy('id', 'DESC')->take(10)->get();

        return view('frontend.candidate_dashboard.dashboard', compact('jobAppliedCount', 'userBookmarkCount', 'appliedJobs'));
    }
}
