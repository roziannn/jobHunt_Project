<?php

namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuBuilderController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:menu builder']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.menu-builder.index');
    }
}
