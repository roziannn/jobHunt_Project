<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CountryController extends Controller
{
    use Searchable;

    function __construct()
    {
        $this->middleware(['permission:job locations']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Country::query();
        $this->seacrh($query, ['name']);
        $countries = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.lcoation.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.lcoation.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:countries,name']
        ]);

        $type = new Country();
        $type->name = $request->name;
        $type->save();

        Notify::createdNotification(); //static method for notify

        return to_route('admin.countries.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $country = Country::findOrFail($id);
        return view('admin.lcoation.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:countries,name,' . $id]
        ]);

        $type = Country::findOrFail($id);
        $type->name = $request->name;
        $type->save();

        Notify::updatedNotification(); //static method for notify

        return to_route('admin.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Country::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
