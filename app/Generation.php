<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $fillable = [
        'generation_origin', 'generation_caption', 'generation_text', 'generation_image',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
