<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\Tag;
use App\Models\Skill;
use App\Models\State;
use App\Models\JobTag;
use App\Models\Benefit;
use App\Models\Company;
use App\Models\Country;
use App\Models\JobRole;
use App\Models\JobType;
use App\Services\Notify;
use App\Models\Education;
use App\Models\JobSkills;
use Illuminate\View\View;
use App\Models\SalaryType;
use App\Traits\Searchable;
use App\Models\JobBenefits;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Models\JobExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\JobCreateRequest;
use App\Models\City;
use Illuminate\Http\Response;

class JobController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */

    function __construct()
    {
        $this->middleware(['permission:job create|job update|job delete'])->only(['index']);

        //based on the method CRUD
        $this->middleware(['permission:job create'])->only(['create', 'store']);
        $this->middleware(['permission:job update'])->only(['edit', 'update', 'changeStatus']);
        $this->middleware(['permission:job delete'])->only(['destroy']);
    }

    public function index(): View
    {
        $query = Job::query();
        $this->seacrh($query, ['title', 'slug']);
        $jobs = $query->orderBy('id', 'desc')->paginate(20);

        return view('admin.job.index', compact('jobs'));
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
        $job->status = 'active';

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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Job::findOrFail($id);
        $companies = Company::where(['profile_completion' => 1, 'visibility' => 1])->get();
        $categories = JobCategory::all();
        $countries = Country::all();
        $states = State::where('country_id', $job->country_id)->get();
        $cities = City::where('state_id', $job->state_id)->get();
        $salaryType = SalaryType::all();
        $experiences = JobExperience::all();
        $jobRoles = JobRole::all();
        $educations = Education::all();
        $jobTypes = JobType::all();
        $tags = Tag::all();
        $skills = Skill::all();

        return view('admin.job.edit', compact(
            'companies',
            'categories',
            'countries',
            'states',
            'cities',
            'salaryType',
            'experiences',
            'jobRoles',
            'educations',
            'jobTypes',
            'tags',
            'skills',
            'job'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobCreateRequest $request, string $id): RedirectResponse
    {
        $job = Job::findOrFail($id);
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

        //insert tags
        JobTag::where('job_id', $id)->delete();
        foreach ($request->tags as $tag) {
            $createdTag = new JobTag();
            $createdTag->job_id = $job->id;
            $createdTag->tag_id = $tag;
            $createdTag->save();
        }

        $selectedBenefits = JobBenefits::where('job_id', $id);
        foreach ($selectedBenefits->get() as $selectedBenefit) {
            Benefit::find($selectedBenefit->benefit_id)->delete();
        }
        $selectedBenefits->delete();

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

        JobSkills::where('job_id', $id)->delete();
        foreach ($request->skills as $skill) {
            $createdSkill = new JobSkills();
            $createdSkill->job_id = $job->id;
            $createdSkill->skill_id = $skill;
            $createdSkill->save();
        }


        Notify::updatedNotification();

        return to_route('admin.jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Job::findOrFail($id)->delete();
            Notify::deletedNotification();
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong. Please Try Again!'], 500);
        }
    }

    function changeStatus(string $id): Response
    {
        $job = Job::findOrFail($id);
        $job->status = $job->status == 'active' ? 'pending' : 'active';
        $job->save();
        Notify::updatedNotification();
        return response(['message' => 'success'], 200);
    }
}
