<?php

namespace App\Http\Controllers\Admin;

use App\Services\Notify;
use Illuminate\View\View;
use App\Models\SalaryType;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class SalaryTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = SalaryType::query();
        $this->seacrh($query, ['name']);
        $salaryTypes = $query->paginate(20);

        return view('admin.job.salary-type.index', compact('salaryTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('admin.job.salary-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $type = new SalaryType();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification();

        return to_route('admin.salary-types.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $type = SalaryType::findOrFail($id);

        return view('admin.job.salary-type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:100']
        ]);

        $type = SalaryType::findOrFail($id);
        $type->name = $request->name;
        $type->save();

        Notify::updatedNotification();

        return to_route('admin.salary-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            SalaryType::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
