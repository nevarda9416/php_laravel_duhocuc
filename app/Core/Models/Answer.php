<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_id',
        'author_name',
        'answer',
        'slug',
        'status',
        'published_at',
        'question_id',
        'created_by',
        'updated_by',
        'is_deleted',
        'deleted_by',
        'deleted_at',
        'is_published',
        'published_by'
    ];
}
