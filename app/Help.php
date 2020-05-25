<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = [
        'help_caption', 'help_keywords', 'decide_image', 'decide_text', 'reach_image', 'reach_text', 'consult_image', 'consult_text',
        'get_service_image', 'get_service_text',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
