<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait
{
    /**
     * Handle file uploads
     **/

    /*
     Notes:
     //  inputName => name='...' of the field
     */
    function uploadFile(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads'): string
    {
        if ($request->hasFile($inputName)) {
            $file = $request->{$inputName}; // ex: $request->logo
            $ext = $file->getClientOriginalExtension(); // it will give the extension of the file ex: jpg, png.. etc
            $fileName = 'media_' . uniqid() . '.' . $ext;

            $file->move(public_path($path), $fileName);

            return $path . '/' . $fileName;
        }

        return '';
    }
}
