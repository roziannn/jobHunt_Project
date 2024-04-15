<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyDashboardController extends Controller
{
    function index(): View
    {
        return view('frontend.company_dashboard.dashboard');
    }
}
