<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'site_name', 'site_year', 'slide_image', 'site_description', 'references_cover', 'about_cover', 'contact_cover', 'Services_cover',
        'references_caption', 'about_caption', 'contact_caption', 'services_caption', 'team_caption',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
