<?php

namespace App\Http\Controllers\Frontend;

use Redirect;
use App\Models\Skill;
use App\Models\Language;
use App\Services\Notify;
use App\Models\Candidate;
use Illuminate\View\View;
use App\Models\Experience;
use App\Models\Profession;
use Illuminate\Http\Request;
use App\Models\CandidateSkill;
use App\Traits\FileUploadTrait;
use App\Models\CandidateLanguage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Frontend\CandidateProfileInfoUpdateRequest;
use App\Http\Requests\Frontend\CandidateBasicProfileUpdateRequest;
use App\Models\CandidateExperience;

class CandidateProfileController extends Controller
{
    use FileUploadTrait;

    function index(): View
    {
        $candidate = Candidate::with(['skills'])->where('user_id', auth()->user()->id)->first();
        $candidateExperiences = CandidateExperience::where('candidate_id', $candidate->id)->orderBy('id', 'DESC')
            ->get();

        $experiences = Experience::all();
        $professions = Profession::all();


        $skills = Skill::all();
        $languages = Language::all();

        return view('frontend.candidate_dashboard.profile.index', compact(
            'candidate',
            'experiences',
            'professions',
            'skills',
            'languages',
            'candidateExperiences'
        ));
    }

    function basicInfoUpdate(CandidateBasicProfileUpdateRequest $request): RedirectResponse
    {
        //handle file
        $imagePath = $this->uploadFile($request, 'profile_picture');
        $cvPath = $this->uploadFile($request, 'cv');

        $data = [];
        if (!empty($imagePath)) $data['image'] = $imagePath;
        if (!empty($cvPath)) $data['cv'] = $cvPath;

        $data['full_name'] = $request->full_name;
        $data['title'] = $request->title;
        $data['experience_id'] = $request->experience_level;
        $data['website'] = $request->website;
        $data['birth_date'] = $request->date_of_birth;

        //update data
        Candidate::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $data
        );

        Notify::updatedNotification();

        return redirect()->back();
    }

    function profileInfoUpdate(CandidateProfileInfoUpdateRequest $request): RedirectResponse
    {
        $data = [];
        $data['gender'] = $request->gender;
        $data['marital_status'] = $request->marital_status;
        $data['profession_id'] = $request->profession;
        $data['status'] = $request->availability;
        $data['bio'] = $request->biography;


        //update data
        Candidate::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $data
        );


        $candidate = Candidate::where('user_id', auth()->user()->id)->first();

        CandidateLanguage::where('candidate_id', $candidate->id)?->delete();
        foreach ($request->language_you_know as $language) {
            $candidateLang = new CandidateLanguage();
            $candidateLang->candidate_id = $candidate->id;
            $candidateLang->language_id = $language;
            $candidateLang->save();
        }

        CandidateSkill::where('candidate_id', $candidate->id)?->delete();
        foreach ($request->skill_you_have as $skill) {
            $candidateSkill = new CandidateSkill();
            $candidateSkill->candidate_id = $candidate->id;
            $candidateSkill->skill_id = $skill;
            $candidateSkill->save();
        }

        Notify::updatedNotification();

        return redirect()->back();
    }
}
