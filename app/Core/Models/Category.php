<?php
namespace App\Core\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'category_type',
        'country_id',
        'thumbnail_url',
        'is_actived',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];
    const CATEGORY_ID_HOMEPAGE = 56;
    const CATEGORY_ID_STUDYABROAD = 16;
    const CATEGORY_ID_SCHOOL = 41;
    const CATEGORY_ID_LIST_SCHOOL = [42,43,44,45,46,47,48,49,50];//temp
    const CATEGORY_TYPE_COURSE = 'course';
    const CATEGORY_TYPE_SCHOOL = 'school';
    const CATEGORY_TYPE_MAJOR = 'major';
}
