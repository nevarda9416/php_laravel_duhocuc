<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'meta_image',
        'user_id'
    ];
}
