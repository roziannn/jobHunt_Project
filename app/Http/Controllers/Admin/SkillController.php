<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidateSkill;
use App\Models\JobSkills;
use Illuminate\Http\RedirectResponse;

class SkillController extends Controller
{
    use Searchable;

    function __construct()
    {
        $this->middleware(['permission:job attributes']);
    }

    public function index(): View
    {

        $query = Skill::query();
        $this->seacrh($query, ['name']);
        $skills = $query->paginate(20);

        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:skills,name']
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->save();

        Notify::createdNotification(); //static method for notify

        return to_route('admin.skills.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:skills,name,' . $id]
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->save();

        Notify::updatedNotification(); //static method for notify

        return to_route('admin.skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skillExist = JobSkills::where('skill_id', $id)->exists();
        $candidateSkillExists = CandidateSkill::where('skill_id', $id)->exists();
        if ($skillExist || $candidateSkillExists) {
            return response(['message' => 'This item is already been used can\'t delete!'], 500);
        }
        try {
            Skill::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
