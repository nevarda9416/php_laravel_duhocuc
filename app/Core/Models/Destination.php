<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'location_id',
        'name',
        'slug',
        'content',
        'album',
        'author_name',
        'thumbnail_url',
        'top_background_url',
        'top_search',
        'hot_location',
        'popular_location',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'user_id',
        'is_reviewed'
    ];
}
