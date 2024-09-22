<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use App\Services\Notify;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WhyChooseUsController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:sections']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $whyChooseUs = WhyChooseUs::first();
        return view('admin.why-choose-us.index', compact('whyChooseUs'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon_one' => ['nullable', 'max:255'],
            'title_one' => ['nullable', 'max:255'],
            'subtitle_one' => ['nullable', 'max:255'],

            'icon_two' => ['nullable', 'max:255'],
            'title_two' => ['nullable', 'max:255'],
            'subtitle_two' => ['nullable', 'max:255'],

            'icon_three' => ['nullable', 'max:255'],
            'title_three' => ['nullable', 'max:255'],
            'subtitle_three' => ['nullable', 'max:255'],
        ]);

        $data =  [
            // 'icon_one' => $request->icon_one,
            'title_one' => $request->title_one,
            'subtitle_one' => $request->subtitle_one,

            // 'icon_two' => $request->icon_two,
            'title_two' => $request->title_two,
            'subtitle_two' => $request->subtitle_two,

            // 'icon_three' => $request->icon_three,
            'title_three' => $request->title_three,
            'subtitle_three' => $request->subtitle_three,
        ];

        if ($request->filled('icon_one')) $data['icon_one'] = $request->icon_one;
        if ($request->filled('icon_two')) $data['icon_two'] = $request->icon_two;
        if ($request->filled('icon_three')) $data['icon_three'] = $request->icon_three;

        WhyChooseUs::updateOrCreate(
            ['id' => 1],
            $data

        );

        Notify::createdNotification();

        return redirect()->back();
    }
}
