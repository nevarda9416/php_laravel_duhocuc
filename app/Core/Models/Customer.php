<?php

namespace App\Core\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'telephone',
        'organization',
        'position',
        'number_of_employees',
        'list_post_ids',
        'is_blocked',
        'type',
        'latitude',
        'longitude',
        'website',
        'address',
        'open_time',
        'ticket_price',
        'original_url',
    ];
}
