<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPageEnquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact',
        'service',
        'message',
        'source',
        'status',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
        'gclid',
        'landing_page',
        'referrer',
        'user_ip',
        'user_agent',
    ];
}
