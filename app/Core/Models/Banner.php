<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'title',
        'name',
        'file',
        'url',
        'position',
        'page',
        'device_type',
        'route',
        'user_id'
    ];
}
