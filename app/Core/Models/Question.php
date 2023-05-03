<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id',
        'author_name',
        'question',
        'slug',
        'status',
        'published_at',
        'category_id',
        'tags',
        'is_highlight',
        'has_answer',
        'thumbnail_url',
        'created_by',
        'updated_by',
        'is_deleted',
        'deleted_by',
        'deleted_at',
        'is_published',
        'published_by'
    ];
}
