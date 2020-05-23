<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $fillable = [
        'caption', 'text', 'image',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];

}
