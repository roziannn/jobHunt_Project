<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $description
 * @property string|null $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUrl($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $job_id
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Candidate|null $candidate
 * @property-read \App\Models\Job|null $job
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppliedJob whereUpdatedAt($value)
 */
	class AppliedJob extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Benefit whereUpdatedAt($value)
 */
	class Benefit extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $slug
 * @property int $author_id
 * @property string $description
 * @property int $status
 * @property int $featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin|null $author
 * @method static \Illuminate\Database\Eloquent\Builder|Blog findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $experience_id
 * @property int|null $profession_id
 * @property string|null $title
 * @property string|null $image
 * @property string|null $full_name
 * @property string|null $slug
 * @property string|null $gender
 * @property string|null $website
 * @property string|null $phone_one
 * @property string|null $phone_two
 * @property string|null $email
 * @property string|null $cv
 * @property string|null $bio
 * @property string|null $marital_status
 * @property string|null $birth_date
 * @property string|null $address
 * @property int|null $city
 * @property int|null $state
 * @property int|null $country
 * @property string|null $status
 * @property int $profile_complete
 * @property int $visibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City|null $candidateCity
 * @property-read \App\Models\Country|null $candidateCountry
 * @property-read \App\Models\State|null $candidateState
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CandidateEducation> $educations
 * @property-read int|null $educations_count
 * @property-read \App\Models\Experience|null $experience
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CandidateExperience> $experiences
 * @property-read int|null $experiences_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CandidateLanguage> $languages
 * @property-read int|null $languages_count
 * @property-read \App\Models\Profession|null $profession
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CandidateSkill> $skills
 * @property-read int|null $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate query()
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereCv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereExperienceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePhoneOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate wherePhoneTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereProfessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereProfileComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Candidate withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Candidate extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $candidate_id
 * @property string $level
 * @property string $degree
 * @property string $year
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateEducation whereYear($value)
 */
	class CandidateEducation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $candidate_id
 * @property string $company
 * @property string $department
 * @property string $designation
 * @property string $start
 * @property string $end
 * @property string|null $responsibilities
 * @property int $currently_working
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereCurrentlyWorking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereResponsibilities($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateExperience whereUpdatedAt($value)
 */
	class CandidateExperience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $candidate_id
 * @property int $language_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Language|null $language
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateLanguage whereUpdatedAt($value)
 */
	class CandidateLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $candidate_id
 * @property int $skill_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Skill|null $skill
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill query()
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CandidateSkill whereUpdatedAt($value)
 */
	class CandidateSkill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $state_id
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\State|null $state
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $name
 * @property string|null $slug
 * @property int|null $industry_type_id
 * @property int|null $organization_type_id
 * @property int|null $team_size_id
 * @property string|null $logo
 * @property string|null $banner
 * @property string|null $establishment_date
 * @property string|null $website
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $bio
 * @property string|null $vision
 * @property int $total_views
 * @property string|null $address
 * @property int|null $city
 * @property int|null $state
 * @property int|null $country
 * @property string|null $map_link
 * @property int $is_profile_verified
 * @property string|null $document_verified_at
 * @property int $profile_completion
 * @property int $visibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City|null $companyCity
 * @property-read \App\Models\Country|null $companyCountry
 * @property-read \App\Models\State|null $companyState
 * @property-read \App\Models\IndustryType|null $industyType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $jobs
 * @property-read int|null $jobs_count
 * @property-read \App\Models\OrganizationType|null $organizationType
 * @property-read \App\Models\TeamSize|null $teamSize
 * @property-read \App\Models\UserPlan|null $userPlan
 * @method static \Illuminate\Database\Eloquent\Builder|Company findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDocumentVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEstablishmentDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereIndustryTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereIsProfileVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereOrganizationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereProfileCompletion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereTeamSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereTotalViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVisibility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereVision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $counter_one
 * @property string $title_one
 * @property int $counter_two
 * @property string $title_two
 * @property int $counter_three
 * @property string $title_three
 * @property int $counter_four
 * @property string $title_four
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereTitleFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereTitleOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereTitleThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereTitleTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUpdatedAt($value)
 */
	class Counter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $page_name
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder wherePageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomerPageBuilder withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class CustomerPageBuilder extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Education findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Education extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience query()
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Experience whereUpdatedAt($value)
 */
	class Experience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $background_image
 * @property string $title
 * @property string $subtitle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Hero newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereBackgroundImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereUpdatedAt($value)
 */
	class Hero extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType query()
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndustryType withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IndustryType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property int $job_category_id
 * @property int $job_role_id
 * @property int $job_experience_id
 * @property int $job_education_id
 * @property int $job_type_id
 * @property int $salary_type_id
 * @property string $title
 * @property string $slug
 * @property string $vacancies
 * @property float|null $min_salary
 * @property float|null $max_salary
 * @property string|null $custom_salary
 * @property string $deadline
 * @property string $description
 * @property string $status
 * @property string $apply_on
 * @property string|null $apply_email
 * @property string|null $apply_url
 * @property int|null $featured
 * @property int|null $highlight
 * @property string|null $featured_until
 * @property string|null $highlight_until
 * @property int $total_views
 * @property int|null $city_id
 * @property int|null $state_id
 * @property int|null $country_id
 * @property string|null $address
 * @property string $salary_mode
 * @property string|null $company_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AppliedJob> $applications
 * @property-read int|null $applications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobBenefits> $benefits
 * @property-read int|null $benefits_count
 * @property-read \App\Models\JobCategory $category
 * @property-read \App\Models\City|null $city
 * @property-read \App\Models\Company $company
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\Education|null $jobEducation
 * @property-read \App\Models\JobExperience|null $jobExperience
 * @property-read \App\Models\JobRole|null $jobRole
 * @property-read \App\Models\JobType|null $jobType
 * @property-read \App\Models\SalaryType|null $salaryType
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobSkills> $skills
 * @property-read int|null $skills_count
 * @property-read \App\Models\State|null $state
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\JobTag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Job findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereApplyEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereApplyOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereApplyUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCustomSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereFeaturedUntil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereHighlight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereHighlightUntil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobEducationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobExperienceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereJobTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereMaxSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereMinSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSalaryTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTotalViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereVacancies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Job withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Job withoutTrashed()
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $job_id
 * @property int $benefit_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Benefit|null $benefit
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits whereBenefitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBenefits whereUpdatedAt($value)
 */
	class JobBenefits extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $job_id
 * @property int $candidate_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Job|null $job
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark whereCandidateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobBookmark whereUpdatedAt($value)
 */
	class JobBookmark extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $slug
 * @property int $show_at_popular
 * @property int $show_at_featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Job> $jobs
 * @property-read int|null $jobs_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereShowAtFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereShowAtPopular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class JobCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobExperience withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class JobExperience extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property int $country_id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobLocation whereUpdatedAt($value)
 */
	class JobLocation extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobRole withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class JobRole extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $job_id
 * @property int $skill_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Skill|null $skill
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobSkills whereUpdatedAt($value)
 */
	class JobSkills extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $job_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Tag|null $tag
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobTag whereUpdatedAt($value)
 */
	class JobTag extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JobType findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobType withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class JobType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $title
 * @property string $main_title
 * @property string $subtitle
 * @property string|null $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore query()
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereMainTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LearnMore whereUrl($value)
 */
	class LearnMore extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property int $plan_id
 * @property string $package_name
 * @property string $transaction_id
 * @property string $order_id
 * @property string $payment_provider
 * @property float $amount
 * @property string $paid_in_currency
 * @property string $default_amount
 * @property string $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @property-read \App\Models\Plan|null $plan
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDefaultAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePackageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaidInCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Company> $companies
 * @property-read int|null $companies_count
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrganizationType withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class OrganizationType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentSetting whereValue($value)
 */
	class PaymentSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $label
 * @property float $price
 * @property int $job_limit
 * @property int $featured_job_limit
 * @property int $highlight_job_limit
 * @property int $profile_verified
 * @property int $recommended
 * @property int $frontend_show
 * @property int $homepage_show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Plan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereFeaturedJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereFrontendShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereHighlightJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereHomepageShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereProfileVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereRecommended($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plan whereUpdatedAt($value)
 */
	class Plan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Profession findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profession withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Profession extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $title
 * @property string $review
 * @property int $rating
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalaryType withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class SalaryType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteSetting whereValue($value)
 */
	class SiteSetting extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Skill findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tag findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class Tag extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamSize whereUpdatedAt($value)
 */
	class TeamSize extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $role
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Candidate|null $candidateProfile
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $company_id
 * @property int $plan_id
 * @property int $job_limit
 * @property int $featured_job_limit
 * @property int $highlight_job_limit
 * @property int $profile_verified
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereFeaturedJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereHighlightJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereJobLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereProfileVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPlan whereUpdatedAt($value)
 */
	class UserPlan extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $icon_one
 * @property string|null $title_one
 * @property string|null $subtitle_one
 * @property string|null $icon_two
 * @property string|null $title_two
 * @property string|null $subtitle_two
 * @property string|null $icon_three
 * @property string|null $title_three
 * @property string|null $subtitle_three
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereIconOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereIconThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereIconTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereSubtitleOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereSubtitleThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereSubtitleTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereTitleOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereTitleThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereTitleTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereUpdatedAt($value)
 */
	class WhyChooseUs extends \Eloquent {}
}

