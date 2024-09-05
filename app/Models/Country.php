<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'created_at', 'upadated_at'];

    function companies()
    {
        return $this->hasMany(Company::class, 'country', 'id');
    }
}
