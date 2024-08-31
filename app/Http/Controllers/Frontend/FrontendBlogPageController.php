<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendBlogPageController extends Controller
{
    function index(): View
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(12);

        return view('frontend.pages.blog-index', compact('blogs'));
    }

    function show(string $slug): View
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.blog-show', compact('blog'));
    }
}
