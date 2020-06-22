<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_title', 'service_slug', 'service_description', 'service_text', 'service_importance', 'service_image', 'service_cover',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];

    public function getRouteKeyName()
    {
      return 'service_slug';
    }

}
