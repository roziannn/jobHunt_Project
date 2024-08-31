<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogCreateRequest;
use App\Http\Requests\Admin\BlogUpdateRequest;
use App\Models\Blog;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    use FileUploadTrait, Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Blog::query();
        $this->seacrh($query, ['title', 'slug']);
        $blogs = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCreateRequest $request)
    {
        $imagePath = $this->uploadFile($request, 'image');

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image = $imagePath;
        $blog->author_id = auth()->user()->id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->featured = $request->featured;
        $blog->save();

        Notify::createdNotification();

        return to_route('admin.blogs.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, string $id)
    {
        $imagePath = $this->uploadFile($request, 'image');

        $blog = Blog::findOrFail($id);

        if ($imagePath) {
            $blog->image = $imagePath;
        }

        $blog->title = $request->title;
        $blog->author_id = auth()->user()->id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->featured = $request->featured;
        $blog->save();

        Notify::updatedNotification();

        return to_route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Blog::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
