<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PlanCreateRequest;
use App\Models\Plan;
use App\Services\Notify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.plan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlanCreateRequest $request): RedirectResponse
    {
        $plan = new Plan();
        $plan->label = $request->label;
        $plan->price = $request->price;
        $plan->job_limit = $request->job_limit;
        $plan->featured_job_limit = $request->featured_job_limit;
        $plan->highlight_job_limit = $request->highlight_job_limit;
        $plan->profile_verified = $request->profile_verified;
        $plan->recommended = $request->recommended;
        $plan->frontend_show = $request->frontend_show;
        $plan->save();

        Notify::createdNotification();

        return to_route('admin.plans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
