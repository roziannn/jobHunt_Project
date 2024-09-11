<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FooterController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $footer = Footer::first();
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imgPath = $this->uploadFile($request, 'logo');

        $data =   [
            'details' => $request->details,
            'copyright' => $request->copyright
        ];

        if ($imgPath) $data['logo'] = $imgPath;

        Footer::updateOrCreate(
            ['id' => 1],
            $data
        );

        Notify::updatedNotification();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
