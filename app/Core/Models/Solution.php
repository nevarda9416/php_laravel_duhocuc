<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'share_url',
        'icon',
        'excerpt',
        'content',
        'user_id'
    ];
}
