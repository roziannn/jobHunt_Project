<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobCreateRequest;
use App\Models\Benefit;
use App\Models\Company;
use App\Models\Country;
use App\Models\Education;
use App\Models\Job;
use App\Models\JobBenefits;
use App\Models\JobCategory;
use App\Models\JobExperience;
use App\Models\JobRole;
use App\Models\JobSkills;
use App\Models\JobTag;
use App\Models\JobType;
use App\Models\SalaryType;
use App\Models\Skill;
use App\Models\Tag;
use App\Services\Notify;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.job.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $companies = Company::where(['profile_completion' => 1, 'visibility' => 1])->get();
        $categories = JobCategory::all();
        $countries = Country::all();
        $salaryType = SalaryType::all();
        $experiences = JobExperience::all();
        $jobRoles = JobRole::all();
        $educations = Education::all();
        $jobTypes = JobType::all();
        $tags = Tag::all();
        $skills = Skill::all();

        return view('admin.job.create', compact(
            'companies',
            'categories',
            'countries',
            'salaryType',
            'experiences',
            'jobRoles',
            'educations',
            'jobTypes',
            'tags',
            'skills'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobCreateRequest $request): RedirectResponse
    {
        $job = new Job();
        $job->title = $request->title;
        $job->company_id = $request->company;
        $job->job_category_id = $request->category;
        $job->vacancies = $request->vacancies;
        $job->deadline = $request->deadline;

        $job->country_id = $request->country;
        $job->state_id = $request->state;
        $job->city_id = $request->city;
        $job->address = $request->address;

        $job->salary_mode = $request->salary_mode;
        $job->min_salary = $request->min_salary;
        $job->max_salary = $request->max_salary;
        $job->custom_salary = $request->custom_salary;
        $job->salary_type_id = $request->salary_type;

        $job->job_experience_id = $request->experience;
        $job->job_role_id = $request->job_role;
        $job->job_education_id = $request->education;
        $job->job_type_id = $request->job_type;

        $job->apply_on = $request->receive_application;
        $job->featured = $request->featured;
        $job->highlight = $request->highlight;
        $job->description = $request->description;
        $job->save();

        //insert tags, benefits skills ect will go here
        foreach ($request->tags as $tag) {
            $createdTag = new JobTag();
            $createdTag->job_id = $job->id;
            $createdTag->tag_id = $tag;
            $createdTag->save();
        }

        $benefits = explode(',', $request->benefits);

        foreach ($benefits as $benefit) {
            // store to benefit table first
            $createdBenefit = new Benefit();
            $createdBenefit->company_id = $job->company_id;
            $createdBenefit->name = $benefit;
            $createdBenefit->save();

            // store to job_benefit table
            $jobBenefit = new JobBenefits();
            $jobBenefit->job_id = $job->id;
            $jobBenefit->benefit_id = $createdBenefit->id;
            $jobBenefit->save();
        }

        foreach ($request->skills as $skill) {
            $createdSkill = new JobSkills();
            $createdSkill->job_id = $job->id;
            $createdSkill->skill_id = $skill;
            $createdSkill->save();
        }


        Notify::createdNotification();

        return to_route('admin.jobs.index');
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
