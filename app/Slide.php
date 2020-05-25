<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $fillable = [
        'slide_caption', 'slide_text', 'slide_image',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];

}
