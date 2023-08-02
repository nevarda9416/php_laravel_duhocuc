<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'excerpt',
        'plain_text',
        'content',
        'author_name',
        'user_id',
        'slug',
        'status',
        'category_id',
        'country_id',
        'thumbnail_url',
        'latitude',
        'longitude',
        'type',
        'has_template_content',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'language'
    ];

    const STATUS_PUBLISH = 'publish';
}
