<?php
namespace App\Core\Models;
use Illuminate\Database\Eloquent\Model;
class Location extends Model
{
    protected $fillable = [
        'name',
        'share_url',
        'top_search',
        'hot_location',
        'popular_location',
        'content',
        'thumbnail_url',
        'top_background_url',
        'country',
        'album',
        'city',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'user_id'
    ];
}
