<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IndustryType;
use App\Services\Notify;
use Illuminate\Http\RedirectResponse;

class IndustryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $industryTypes = IndustryType::paginate(20);
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:industry_types,name']
        ]);

        $type = new IndustryType();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification(); //static method for notify

        return to_route('admin.industry-types.index');
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
    public function destroy(string $id)
    {
        //
    }
}
