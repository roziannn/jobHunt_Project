<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CompanyInfoUpdateRequest;
use App\Traits\FileUploadTrait;

class CompanyProfileController extends Controller
{
    use FileUploadTrait; //inject here

    function index(): View
    {
        return view('frontend.company_dashboard.profile.index');
    }

    function updateCompanyInfo(CompanyInfoUpdateRequest $request)
    {
        $logoPath = $this->uploadFile($request, 'logo');

        dd($logoPath);
    }
}
