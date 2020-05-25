<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'member_name', 'member_surname', 'member_mission', 'member_facebook', 'member_instagram', 'member_twitter', 'member_image',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
