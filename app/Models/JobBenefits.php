<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobBenefits extends Model
{
    use HasFactory;

    function benefit(): BelongsTo
    {
        return $this->belongsTo(Benefit::class, 'benefit_id', 'id');
    }
}
