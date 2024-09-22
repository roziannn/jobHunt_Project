<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobTag;
use Illuminate\Http\RedirectResponse;

class TagController extends Controller
{
    use Searchable;

    function __construct()
    {
        $this->middleware(['permission:job attributes']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Tag::query();
        $this->seacrh($query, ['name']);
        $tags = $query->paginate(20);

        return view('admin.job.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('admin.job.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $type = new Tag();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification();

        return to_route('admin.tags.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $tag = Tag::findOrFail($id);

        return view('admin.job.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $tag = Tag::findOrFail($id);
        $tag->name = $request->name;
        $tag->save();

        Notify::updatedNotification();

        return to_route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jobtagExists = JobTag::where('tag_id', $id)->exists();
        if ($jobtagExists) {
            return response(['message' => 'This item is already been used can\'t delete!'], 500);
        }
        try {
            Tag::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
