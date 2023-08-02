<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'parent_id',
        'has_child',
        'category_id',
        'position',
        'item_url',
        'item_title',
        'user_id',
        'is_actived',
        'order',
        'language'
    ];
    const MENU_ITEM_DU_HOC_CAC_NUOC = 2;
}
