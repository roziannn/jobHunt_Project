<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class JobCategoryController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = JobCategory::query();
        $this->seacrh($query, ['name']);
        $categories = $query->paginate(20);

        return view('admin.job.job-category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.job.job-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'icon' => ['required', 'max:100'],
            'name' => ['required', 'max:100']
        ]);

        $category = new JobCategory();
        $category->icon = $request->icon;
        $category->name = $request->name;
        $category->save();

        Notify::createdNotification();

        return to_route('admin.job-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $category = JobCategory::findOrFail($id);

        return view('admin.job.job-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'icon' => ['nullable', 'max:100'],
            'name' => ['required', 'max:100']
        ]);

        $category = JobCategory::findOrFail($id);
        if ($request->filled('icon')) $category->icon = $request->icon;
        $category->name = $request->name;
        $category->save();

        Notify::updatedNotification();

        return to_route('admin.job-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            JobCategory::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}