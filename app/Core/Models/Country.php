<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'thumbnail_url'
    ];
}
