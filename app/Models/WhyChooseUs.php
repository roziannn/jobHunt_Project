<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyChooseUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'icon_one',
        'title_one',
        'subtitle_one',

        'icon_two',
        'title_two',
        'subtitle_two',

        'icon_three',
        'title_three',
        'subtitle_three',
    ];
}
