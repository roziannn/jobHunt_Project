<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use App\Models\Education;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class EducationController extends Controller
{
    use Searchable;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Education::query();

        $this->seacrh($query, ['name', 'slug']);
        $educations = $query->orderBy('id', 'DESC')->paginate(20);


        return view('admin.job.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.job.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255']
        ]);

        $education  = new Education();
        $education->name = $request->name;
        $education->save();

        Notify::createdNotification();

        return to_route('admin.educations.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $education = Education::findOrFail($id);
        return view('admin.job.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'max:255']
        ]);

        $education  = Education::findOrFail($id);
        $education->name = $request->name;
        $education->save();

        Notify::updatedNotification();

        return to_route('admin.educations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Education::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
