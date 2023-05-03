<?php

namespace App\Core\Business;

use App\Core\Connection\RedisServer;
use App\Core\Repositories\Mysql\CategoryMysql;
use App\Core\Repositories\Redis\CategoryRedis;

class CategoryBusiness
{
    const CATEGORY_ID_BLOG_DULICH = 1000;
    /**
     * @param $listCategories
     */
    public static function setListPostsByAllCategory($listCategories)
    {
        $redis = RedisServer::getConnection();
        foreach ($listCategories as $categoryId) {
            $result = CategoryMysql::getListPostsByAllCategory($categoryId);
            CategoryRedis::setListPostsByAllCategory($redis, $categoryId, $result);
        }
    }
}
