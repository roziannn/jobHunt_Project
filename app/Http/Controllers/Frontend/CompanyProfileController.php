<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CompanyInfoUpdateRequest;
use App\Models\Company;
use App\Traits\FileUploadTrait;

class CompanyProfileController extends Controller
{
    use FileUploadTrait; //inject here

    function index(): View
    {
        $companyInfo = Company::where('user_id', auth()->user()->id)->first();
        return view('frontend.company_dashboard.profile.index', compact('companyInfo'));
    }

    function updateCompanyInfo(CompanyInfoUpdateRequest $request)
    {
        $logoPath = $this->uploadFile($request, 'logo');
        $bannerPath = $this->uploadFile($request, 'banner');

        $data = [];
        if (!empty($logoPath)) $data['logo'] = $logoPath;
        if (!empty($bannerPath)) $data['banner'] = $bannerPath;

        $data['name'] = $request->name;
        $data['bio'] = $request->bio;
        $data['vision'] = $request->vision;

        Company::updateOrCreate(
            ['user_id' => auth()->user()->id], //if data ada (berdasarkan user_id nya), update. kalau blm ada, create a new.
            $data
        );

        return redirect()->back();
    }
}
