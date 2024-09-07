<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactMailRequest;

class ContactController extends Controller
{
    function index(): View
    {
        return view('frontend.pages.contact');
    }

    function sendMail(ContactMailRequest $request)
    {
        dd($request->all());
    }
}
