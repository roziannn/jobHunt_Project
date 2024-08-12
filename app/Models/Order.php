<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }
}
