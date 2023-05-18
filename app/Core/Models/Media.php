<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = [
        'file',
        'path',
        'url',
        'category_id',
        'post_id',
        'page_id',
        'mime_type',
        'quality',
        'width',
        'height',
        'size',
        'type',
        'alt',
        'title',
        'caption',
        'description',
        'copyright',
        'uploaded_by',
        'device',
        'html',
        'user_id',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
}
