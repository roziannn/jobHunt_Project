<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use App\Models\Country;
use App\Services\Notify;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class StateController extends Controller
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
        $query = State::query();
        $query->with('country');

        $this->seacrh($query, ['name']);
        $states = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.lcoation.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $countries = Country::all();
        return View('admin.lcoation.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'country' => ['required', 'integer'],
        ]);

        $state = new State();
        $state->name = $request->name;
        $state->country_id = $request->country;
        $state->save();

        Notify::createdNotification();

        return to_route('admin.states.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $countries = Country::all();
        $state = State::findOrFail($id);

        return view('admin.lcoation.state.edit', compact('countries', 'state'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'country' => ['required', 'integer'],
        ]);

        $state = State::findOrFail($id);
        $state->name = $request->name;
        $state->country_id = $request->country;
        $state->save();

        Notify::updatedNotification();

        return to_route('admin.states.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): Response
    {
        try {
            State::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
