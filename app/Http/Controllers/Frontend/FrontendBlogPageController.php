<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Searchable;

class FrontendBlogPageController extends Controller
{
    use Searchable;

    function index(): View
    {
        $query = Blog::query();
        $this->seacrh($query, ['title', 'slug']);
        $blogs = $query->where('status', 1)->orderBy('id', 'DESC')->paginate(20);

        $featured = Blog::where('status', 1)->where('featured', 1)->orderBy('id', 'DESC')->take(10)->get();

        return view('frontend.pages.blog-index', compact('blogs', 'featured'));
    }

    function show(string $slug): View
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('frontend.pages.blog-show', compact('blog'));
    }
}
