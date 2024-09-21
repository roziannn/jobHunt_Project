<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Artisan;
use File;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClearDatabaseController extends Controller
{
    function index(): View
    {
        return view('admin.clear-database.index');
    }

    function clearDatabase()
    {
        try {
            // wipe db
            Artisan::call('migrate:fresh');

            // seed default data
            Artisan::call('db:seed', ['--class' => 'RolePermissionSeeder']);
            Artisan::call('db:seed', ['--class' => 'AdminSeeder']);
            Artisan::call('db:seed', ['--class' => 'SiteSettingSeeder']);
            Artisan::call('db:seed', ['--class' => 'AdminMenuSeeder']);
            Artisan::call('db:seed', ['--class' => 'PaymentSettingSeeder']);


            // delete files
            $this->deleteFiles();

            return response(['message' => 'Database wiped successfully!']);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    function deleteFiles(): void
    {
        $path = public_path('uploads'); //also wipe the img that we uploaded
        $allFiles = File::allFiles($path); // get the collection

        foreach ($allFiles as $file) {
            $filename = $file->getFilename();

            File::delete($filename); // delete the file 1 by 1
        }
    }
}
