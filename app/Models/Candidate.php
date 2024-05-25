<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'image', 'cv', 'full_name', 'title',
        'experience_id', 'website', 'birth_date', 'gender', 'marital_status', 'profession_id',
        'status', 'bio'
    ];

    function skills(): HasMany
    {
        return $this->hasMany(CandidateSkill::class, 'candidate_id', 'id');
    }

    function languages(): HasMany
    {
        return $this->hasMany(CandidateLanguage::class, 'candidate_id', 'id');
    }
}
