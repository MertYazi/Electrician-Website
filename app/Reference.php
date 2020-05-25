<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $fillable = [
        'reference_title', 'reference_image', 'reference_link',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
