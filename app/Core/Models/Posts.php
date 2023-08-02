<?php
namespace App\Core\Models;
use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'plain_text',
        'content',
        'album',
        'author_name',
        'user_id',
        'status',
        'published_at',
        'post_type',
        'category_type',
        'price',
        'address',
        'continent',
        'country',
        'province',
        'district',
        'subdistrict',
        'banner_image',
        'banner_url',
        'category_id',
        'disease_id',
        'is_deleted',
        'deleted_at',
        'thumbnail_url',
        'top_background_url',
        'is_highlight',
        'time_expired_deal',
        'date',
        'time',
        'place',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'language'
    ];

    const STATUS_PUBLISH = 'publish';
    const CATEGORY_ID_SUKIEN = 11;
    const CATEGORY_ID_TINTUC = 12;
    const CATEGORY_ID_TUYENDUNG = 13;
    const CATEGORY_ID_HOCBONG = 14;
    const CATEGORY_ID_HOITHAO = 15;
}
