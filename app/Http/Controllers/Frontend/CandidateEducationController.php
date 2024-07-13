<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CandidateEducationStoreRequest;
use App\Models\CandidateEducation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CandidateEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidateEducations = CandidateEducation::where('candidate_id', auth()->user()->candidateProfile->id)
            ->orderBy('id', 'DESC')->get();

        return view(
            'frontend.candidate_dashboard.profile.ajax-education-table',
            compact('candidateEducations')
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
    public function store(CandidateEducationStoreRequest $request)
    {
        $education = new CandidateEducation();
        $education->candidate_id = auth()->user()->candidateProfile->id;

        $education->level = $request->level;
        $education->degree = $request->degree;
        $education->year = $request->year;
        $education->note = $request->note;
        $education->save();

        return response(['message' => 'Updated Successfully'], 200);
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
        $education = CandidateEducation::findOrFail($id);

        return response($education);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidateEducationStoreRequest $request, string $id)
    {
        $education = CandidateEducation::findOrFail($id);

        if (auth()->user()->candidateProfile->id !== $education->candidate_id) {
            abort(404);
        }

        $education->level = $request->level;
        $education->degree = $request->degree;
        $education->year = $request->year;
        $education->note = $request->note;
        $education->save();

        return response(['message' => 'Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $education = CandidateEducation::findOrFail($id);
            if (auth()->user()->candidateProfile->id !== $education->candidate_id) {
                abort(404);
            }
            $education->delete();
            return response(['message' => 'Deleted Successfully!'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
