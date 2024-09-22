<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerPageBuilder;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomPageBuilderController extends Controller
{
    use Searchable;

    function __construct()
    {
        $this->middleware(['permission:pages']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = CustomerPageBuilder::query();
        $this->seacrh($query, ['page_name']);
        $pages = $query->orderBy('id', 'DESC')->paginate(20);

        return view('admin.page-builder.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.page-builder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name' => ['required', 'max:255'],
            'content' => ['required']
        ]);

        $page = new CustomerPageBuilder();
        $page->page_name = $request->page_name;
        $page->content = $request->content;
        $page->save();

        Notify::createdNotification();

        return to_route('admin.page-builder.index');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $page = CustomerPageBuilder::findOrFail($id);
        return view('admin.page-builder.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'page_name' => ['required', 'max:255'],
            'content' => ['required']
        ]);

        $page = CustomerPageBuilder::findOrFail($id);
        $page->page_name = $request->page_name;
        $page->content = $request->content;
        $page->save();

        Notify::updatedNotification();

        return to_route('admin.page-builder.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            CustomerPageBuilder::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }
}
