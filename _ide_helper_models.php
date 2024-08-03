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
 * @property-read \App\Models\OrganizationType|null $organizationType
 * @property-read \App\Models\TeamSize|null $teamSize
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
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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
 * @property string $name
 * @property string|null $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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

