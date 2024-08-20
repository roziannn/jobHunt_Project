<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        // companyInfo
        'user_id',
        'name',
        'slug',
        'logo',
        'banner',
        'bio',
        'vision',
        //foundingInfo
        'industry_type_id',
        'organization_type_id',
        'team_size_id',
        'establishment_date',
        'website',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'address',
        'map_link'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    function industyType(): BelongsTo
    {
        return $this->belongsTo(IndustryType::class, 'industry_type_id', 'id');
    }

    function organizationType(): BelongsTo
    {
        return $this->belongsTo(OrganizationType::class, 'organization_type_id', 'id');
    }

    function teamSize(): BelongsTo
    {
        return $this->belongsTo(TeamSize::class, 'team_size_id', 'id');
    }

    function companyCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country', 'id');
    }

    function companyState(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state', 'id');
    }

    function companyCity(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city', 'id');
    }

    function userPlan(): HasOne
    {

        return $this->hasOne(UserPlan::class, 'company_id', 'id');
    }
}
