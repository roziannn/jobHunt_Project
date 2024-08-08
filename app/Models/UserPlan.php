<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
