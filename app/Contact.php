<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_text', 'contact_address_short', 'contact_address_long', 'contact_email', 'contact_phone', 'contact_fax',
        'contact_facebook_link', 'contact_twitter_link', 'contact_instagram_link', 'contact_googleplus_link', 'contact_linkedin_link',
    ];


    protected $hidden = [

    ];


    protected $casts = [

    ];
}
