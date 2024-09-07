<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\About;
use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsPageController extends Controller
{
    function Index(): View
    {
        $about = About::first();

        $blogs = Blog::latest()->take(6)->get();
        $reviews = Review::latest()->take(10)->get();


        return view('frontend.pages.about-us', compact('about', 'blogs', 'reviews'));
    }
}
