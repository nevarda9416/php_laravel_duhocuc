<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'share_url',
        'avatar',
        'content',
        'user_id'
    ];
}
