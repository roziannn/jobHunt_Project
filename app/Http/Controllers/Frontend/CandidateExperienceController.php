<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CandidateExperienceStoreRequest;
use App\Models\Candidate;
use App\Models\CandidateExperience;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Notify;

class CandidateExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidateExperiences = CandidateExperience::where('candidate_id', auth()->user()->candidateProfile->id)
            ->orderBy('id', 'DESC')->get();

        return view(
            'frontend.candidate_dashboard.profile.ajax-experience-table',
            compact('candidateExperiences')
        )->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidateExperienceStoreRequest $request): Response
    {
        // dd(auth()->user()->candidateProfile);
        $experience = new CandidateExperience();
        $experience->candidate_id = auth()->user()->candidateProfile->id;

        $experience->company = $request->company;
        $experience->department = $request->department;
        $experience->designation = $request->designation;
        $experience->start = $request->start;
        $experience->end = $request->end;
        $experience->currently_working = $request->filled('currently_working') ? 1 : 0;
        $experience->responsibilities = $request->responsibilities;
        $experience->save();

        return response(['message' => 'Created Successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        $experience = CandidateExperience::findOrFail($id);

        return response($experience);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidateExperienceStoreRequest $request, string $id)
    {
        $experience = CandidateExperience::findOrFail($id);

        if (auth()->user()->candidateProfile->id !== $experience->candidate_id) {
            abort(404);
        }

        $experience->company = $request->company;
        $experience->department = $request->department;
        $experience->designation = $request->designation;
        $experience->start = $request->start;
        $experience->end = $request->end;
        $experience->currently_working = $request->filled('currently_working') ? 1 : 0;
        $experience->responsibilities = $request->responsibilities;
        $experience->save();

        return response(['message' => 'Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $experience = CandidateExperience::findOrFail($id);
            if (auth()->user()->candidateProfile->id !== $experience->candidate_id) {
                abort(404);
            }
            $experience->delete();
            return response(['message' => 'Deleted Successfully!'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
