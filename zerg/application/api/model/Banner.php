<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/14
 *Time: 8:39
 **/

namespace app\api\model;

class Banner extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time'];

    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }


    public static function getBannerByID($id)
    {
        $banner = self::with(['items', 'items.img'])
            ->find($id);

        return $banner;
    }
}