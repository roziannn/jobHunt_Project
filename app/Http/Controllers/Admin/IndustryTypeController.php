<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use App\Models\IndustryType;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class IndustryTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = IndustryType::query();
        $this->seacrh($query, ['name']);
        $industryTypes = $query->paginate(20);

        return view('admin.industry-type.index', compact('industryTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.industry-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): View
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:industry_types,name']
        ]);

        $type = new IndustryType();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification(); //static method for notify

        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $industryType = IndustryType::findOrFail($id);
        return view('admin.industry-type.edit', compact('industryType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:industry_types,name,' . $id] //ignore the id while checking unique
        ]);

        $type = IndustryType::findOrFail($id);
        $type->name = $request->name;
        $type->save();

        /* The first generate(created) slug will not update.*/

        Notify::updatedNotification(); //static method for notify

        return to_route('admin.industry-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        try {
            IndustryType::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
