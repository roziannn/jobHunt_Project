<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Models\JobExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class JobExperienceController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = JobExperience::query();
        $this->seacrh($query, ['name']);
        $jobExperiences = $query->paginate(20);

        return view('admin.job.job-experience.index', compact('jobExperiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('admin.job.job-experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $type = new JobExperience();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification();

        return to_route('admin.job-experiences.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $experience = JobExperience::findOrFail($id);

        return view('admin.job.job-experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $experience = JobExperience::findOrFail($id);
        $experience->name = $request->name;
        $experience->save();

        Notify::updatedNotification();

        return to_route('admin.job-experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            JobExperience::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
