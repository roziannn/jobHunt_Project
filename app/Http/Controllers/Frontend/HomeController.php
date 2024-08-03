<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function index(): View
    {
        $plans = Plan::where(['frontend_show' => 1, 'homepage_show' => 1])->get();

        return view('frontend.home.index', compact('plans'));
    }
}
