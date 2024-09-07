<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReviewCreateRequest;
use App\Http\Requests\Admin\ReviewUpdateRequest;
use App\Models\Review;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    use FileUploadTrait, Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Review::query();
        $this->seacrh($query, ['name', 'title', 'review']);
        $reviews = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewCreateRequest $request)
    {
        $imgPath = $this->uploadFile($request, 'image');

        $review = new Review();
        $review->image = $imgPath;
        $review->name = $request->name;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        Notify::createdNotification();

        return to_route('admin.reviews.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = Review::findOrFail($id);

        return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewUpdateRequest $request, string $id)
    {
        $imgPath = $this->uploadFile($request, 'image');

        $review = Review::findOrFail($id);
        if ($imgPath) $review->image = $imgPath;
        $review->name = $request->name;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->save();

        Notify::updatedNotification();

        return to_route('admin.reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Review::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
