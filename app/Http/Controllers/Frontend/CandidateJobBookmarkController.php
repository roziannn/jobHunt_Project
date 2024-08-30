<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobBookmark;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class CandidateJobBookmarkController extends Controller
{
    function  index(): View
    {

        $bookmarks = JobBookmark::where('candidate_id', auth()->user()->candidateProfile->id)->paginate(10);
        // dd($bookmarks);
        return view('frontend.candidate_dashboard.bookmarks.index', compact('bookmarks'));
    }

    function save(string $id): Response
    {
        if (!auth()->check()) {
            throw ValidationException::withMessages(['Please login first for bookmark this job!']);
        }
        if (auth()->check() && auth()->user()->role !== 'candidate') {
            throw ValidationException::withMessages(['Only candidate will be able to add bookmarks']);
        }

        $alreadyMarked = JobBookmark::where(['job_id' => $id, 'candidate_id' => auth()->user()->candidateProfile->id])->exists();
        if ($alreadyMarked) {
            throw ValidationException::withMessages(['Post is already bookmarked!']);
        }

        $bookmark = new JobBookmark();
        $bookmark->job_id = $id;
        $bookmark->candidate_id = auth()->user()->candidateProfile->id;
        $bookmark->save();

        return response(['message' => 'Bookmarked added successfully!', 'id' => $id]);
    }
}
