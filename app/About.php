<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'history_image', 'history_text', 'mission_image', 'mission_text', 'vision_image', 'vision_text',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
