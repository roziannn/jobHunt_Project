<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppliedJob extends Model
{
    use HasFactory;

    function job(): BelongsTo
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }

    function candidate(): BelongsTo
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'user_id');
        /** get the user id instead of candidate id bcs current situation in the Candidate table
         *  while store the apply-job, the colom candidate_id column was accidentally filled by auth->user->id
         * instead of the correct one ($user = auth()->user->id, then $candidate = where 'user_id', $user->id)->get() );
         * OR, while store => auth()->user()->candidateProfile->id. bcs its was establish.
         */
    }
}
