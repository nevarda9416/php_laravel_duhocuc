<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Subcriber extends Model
{
    protected $table = 'newsletter_subcribers';
    protected $fillable = [
        'email',
        'status'
    ];
}
