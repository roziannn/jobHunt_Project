<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'company_id',
        'plan_id',
        'job_limit',
        'featured_job_limit',
        'highlight_job_limit',
        'profile_verified',
    ];

    function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
