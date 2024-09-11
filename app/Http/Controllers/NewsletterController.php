<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => ['required', 'email', 'unique:subscribers,email']
        ]);

        $subs = new Subscribers();
        $subs->email = $request->email;
        $subs->save();

        return response(['message' => 'Subscribed Successfully.']);
    }
}
