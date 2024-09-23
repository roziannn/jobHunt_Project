<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileUpdateController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        $admin = auth()->guard('admin')->user();

        return view('admin.profile.index', compact('admin'));
    }

    function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'image' => ['nullable', 'max:2000', 'image'],
            'email' => ['required', 'email', 'max:255']
        ]);

        $imagePath = $this->uploadFile($request, 'image');

        $admin = auth()->guard('admin')->user();
        if ($imagePath) $admin->image = $imagePath;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        Notify::updatedNotification();

        return redirect()->back();
    }

    function passwordUpdate(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'confirmed']
        ]);

        $admin = auth()->guard('admin')->user();
        $admin->password = bcrypt($request->password);
        $admin->save();

        Notify::updatedNotification();

        return redirect()->back();
    }
}
