<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobLocationCreateRequest;
use App\Http\Requests\Admin\JobLocationUpdateRequest;
use App\Models\Country;
use App\Models\JobLocation;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;

class JobLocationController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $locations = JobLocation::paginate(20);

        return view('admin.job-location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $countries = Country::all();

        return view('admin.job-location.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobLocationCreateRequest $request): RedirectResponse
    {
        $imagePath = $this->uploadFile($request, 'image');

        $location = new JobLocation();
        $location->image = $imagePath;
        $location->country_id = $request->country;
        $location->status = $request->status;
        $location->save();

        Notify::createdNotification();

        return to_route('admin.job-location.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = JobLocation::findOrFail($id);
        $countries = Country::all();


        return view('admin.job-location.edit', compact('location', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobLocationUpdateRequest $request, string $id)
    {
        $imagePath = $this->uploadFile($request, 'image');

        $location = JobLocation::findOrFail($id);
        if (!empty($imagePath)) $location->image = $imagePath;
        $location->country_id = $request->country;
        $location->status = $request->status;
        $location->save();

        Notify::updatedNotification();

        return to_route('admin.job-location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            JobLocation::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}