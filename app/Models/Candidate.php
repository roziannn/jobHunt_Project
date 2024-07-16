<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'user_id', 'image', 'cv', 'full_name', 'title',
        'experience_id', 'website', 'birth_date', 'gender', 'marital_status', 'profession_id',
        'status', 'bio', 'country', 'state', 'city', 'address', 'phone_one', 'phone_two', 'email'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }

    function skills(): HasMany
    {
        return $this->hasMany(CandidateSkill::class, 'candidate_id', 'id');
    }

    function languages(): HasMany
    {
        return $this->hasMany(CandidateLanguage::class, 'candidate_id', 'id');
    }

    function candidateCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country', 'id');
    }

    function candidateState(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state', 'id');
    }

    function candidateCity(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city', 'id');
    }
}
