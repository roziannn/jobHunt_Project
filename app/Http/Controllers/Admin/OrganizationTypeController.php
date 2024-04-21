<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\OrganizationType;
use App\Http\Controllers\Controller;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrganizationTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = OrganizationType::query();
        $this->seacrh($query, ['name']);
        $organizationType = $query->paginate(20);

        return view('admin.organization-type.index', compact('organizationType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.organization-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:organization_types,name']
        ]);

        $type = new OrganizationType();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification(); //static method for notify

        return to_route('admin.organization-types.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $organizationType = OrganizationType::findOrFail($id);
        return view('admin.organization-type.edit', compact('organizationType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:organization_types,name,' . $id]
        ]);

        $type = OrganizationType::findOrFail($id);
        $type->name = $request->name;
        $type->save();

        Notify::updatedNotification(); //static method for notify

        return to_route('admin.organization-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        try {
            OrganizationType::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
