<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobLocation extends Model
{
    use HasFactory;

    function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
