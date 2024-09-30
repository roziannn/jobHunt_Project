<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\State;
use App\Models\Country;
use App\Models\JobType;
use Illuminate\View\View;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AppliedJob;
use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class FrontendJobPageController extends Controller
{
    function index(Request $request): View
    {
        $countries = Country::all();
        $jobCategories = JobCategory::withCount(['jobs' => function ($query) { // query = jobs instance result
            $query->where('status', 'active')->where('deadline', '>=', date('Y-m-d'));
        }])->get();
        $jobTypes = JobType::all();

        $selectedStates = null;
        $selectedCities = null;

        $query = Job::query();
        $query->where(['status' => 'active'])->where('deadline', '>=', date('Y-m-d'));

        // advance filter conditional purpose

        if ($request->has('search') && $request->filled('search')) { //has search with value.
            $query->where('title', 'like', '%' . $request->search . '%');
        }
        if ($request->has('country') && $request->filled('country')) { //has country with value.
            $query->where('country_id', $request->country);
        }
        if ($request->has('state') && $request->filled('state')) { //has country with value.
            $query->where('state_id', $request->state);
            $selectedStates = State::where('country_id', $request->country)->get();
            $selectedCities = City::where('state_id', $request->state)->get();
        }
        if ($request->has('city') && $request->filled('city')) { //has country with value.
            $query->where('city_id', $request->city);
        }

        if ($request->has('category') && $request->filled('category')) {
            if (is_array($request->category)) {
                $categoryIds = JobCategory::whereIn('slug', $request->category)->pluck('id')->toArray(); // whereIn : search automaticly depending on Array value.
                $query->whereIn('job_category_id', $categoryIds);
            } else {
                $category = JobCategory::where('slug', $request->category)->first();
                $query->where('job_category_id', $category->id);
            }
        }

        if ($request->has('min_salary') && $request->filled('min_salary') &&  $request->min_salary > 0) {
            $query->where('min_salary', '>=', $request->min_salary)->orWhere('max_salary', '>=', $request->min_salary);
        }

        if ($request->has('jobtype') && $request->filled('jobtype')) {
            $typeIds = JobType::whereIn('slug', $request->jobtype)->pluck('id')->toArray(); // whereIn : search automaticly depending on Array value.
            $query->whereIn('job_type_id', $typeIds);
        }

        $jobs = $query->paginate(8);


        return view('frontend.pages.jobs-index', compact(
            'jobs',
            'countries',
            'jobCategories',
            'jobTypes',
            'selectedStates',
            'selectedCities'
        ));
    }

    function show(string $slug): View
    {
        $job = Job::where('slug', $slug)->firstOrFail();
        $openJob = Job::where('company_id', $job->company_id)->where('status', 'active')
            ->where('deadline', '>=', date('Y-m-d'))->count();

        $alreadyApplied = AppliedJob::where(['job_id' => $job->id, 'candidate_id' => auth()?->user()?->id])->exists();
        $checkCompany =  Company::where(['user_id' => auth()?->user()?->id])->first();

        return view('frontend.pages.jobs-show', compact('job', 'openJob', 'alreadyApplied', 'checkCompany'));
    }

    function applyJob(String $id)
    {
        if (!auth()->check()) {
            throw ValidationException::withMessages(['You should login first for apply to the job.']);
        }

        $alreadyApplied = AppliedJob::where(['job_id' => $id, 'candidate_id' => auth()->user()->id])->exists();
        if ($alreadyApplied) {
            throw ValidationException::withMessages(['You already applied to this job.']);
        }

        $checkCompany = Company::where(['user_id' => auth()->user()->id])->first();
        if ($checkCompany) {
            throw ValidationException::withMessages(['You are candidate. Can\'t applied to this job.']);
        }

        $applyJob = new AppliedJob();
        $applyJob->job_id = $id;
        $applyJob->candidate_id = auth()->user()->id;
        $applyJob->save();

        return response(['message' => 'Applied Successfully!'], 200);
    }
}
