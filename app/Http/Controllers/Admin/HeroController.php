<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hero;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Http\Controllers\Controller;
use App\Services\Notify;

class HeroController extends Controller
{
    use FileUploadTrait;

    function __construct()
    {
        $this->middleware(['permission:sections']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $hero = Hero::first();

        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'background_image' => ['nullable', 'image', 'max:3000'],
            'title' => ['required', 'max:255'],
            'subtitle' => ['required', 'max:255']
        ]);

        $imagePath = $this->uploadFile($request, 'image');
        $bgPath = $this->uploadFile($request, 'background_image');

        $formData = [];
        if ($imagePath) $formData['image'] = $imagePath;
        if ($bgPath) $formData['background_image'] = $bgPath;
        $formData['title'] = $request->title;
        $formData['subtitle'] = $request->subtitle;

        Hero::updateOrCreate(
            ['id' => 1],
            $formData
        );

        Notify::updatedNotification();

        return redirect()->back();
    }
}
