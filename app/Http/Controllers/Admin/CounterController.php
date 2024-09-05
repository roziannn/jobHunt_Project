<?php

namespace App\Http\Controllers\Admin;

use App\Models\Counter;
use App\Services\Notify;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $counter = Counter::first();

        return view('admin.counter.index', compact('counter'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'counter_one' => ['required', 'numeric'],
            'title_one' => ['required', 'max:255'],
            'counter_two' => ['required', 'numeric'],
            'title_two' => ['required', 'max:255'],
            'counter_three' => ['required', 'numeric'],
            'title_three' => ['required', 'max:255'],
            'counter_four' => ['required', 'numeric'],
            'title_four' => ['required', 'max:255'],
        ]);

        Counter::updateOrCreate(
            ['id' => 1],
            [
                'counter_one' => $request->counter_one,
                'title_one' => $request->title_one,
                'counter_two' => $request->counter_two,
                'title_two' => $request->title_two,
                'counter_three' => $request->counter_three,
                'title_three' => $request->title_three,
                'counter_four' => $request->counter_four,
                'title_four' => $request->title_four,
            ]
        );

        Notify::updatedNotification();

        return redirect()->back();
    }
}
