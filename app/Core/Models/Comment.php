<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'category_id',
        'comment_type',
        'comment_source',
        'author_name',
        'author_age',
        'author_address',
        'author_avatar',
        'content',
        'rating',
        'status',
        'published_at',
        'user_id',
        'created_by',
        'updated_by',
        'deleted_by',
        'is_published',
        'published_by'
    ];
}
