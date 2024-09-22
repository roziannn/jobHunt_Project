<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Services\Notify;
use Illuminate\View\View;
use App\Models\Profession;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\RedirectResponse;

class ProfessionController extends Controller
{
    use Searchable;

    function __construct()
    {
        $this->middleware(['permission:job attributes']);
    }

    public function index(): View
    {
        $query = Profession::query();
        $this->seacrh($query, ['name']);
        $professions = $query->paginate(20);

        return view('admin.profession.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('admin.profession.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:professions,name']
        ]);

        $profession = new Profession();
        $profession->name = $request->name;
        $profession->save();

        Notify::createdNotification(); //static method for notify

        return to_route('admin.professions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $profession = Profession::findOrFail($id);

        return view('admin.profession.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'max:255', 'unique:professions,name,' . $id]
        ]);

        $profession = Profession::findOrFail($id);
        $profession->name = $request->name;
        $profession->save();

        Notify::updatedNotification(); //static method for notify

        return to_route('admin.professions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professionExists = Candidate::where('profession_id', $id)->exists();
        if ($professionExists) {
            return response(['message' => 'This item is already been used can\'t delete!'], 500);
        }
        try {
            Profession::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
