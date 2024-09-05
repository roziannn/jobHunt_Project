<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnMore extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'image',
        'title',
        'main_title',
        'subtitle',
        'url',
    ];
}
