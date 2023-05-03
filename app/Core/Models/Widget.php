<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'template_id',
        'description',
        'position',
        'key',
        'type',
        'content'
    ];
}
