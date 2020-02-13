<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2020/2/6
 *Time: 14:13
 **/

namespace app\api\model;


class ThirdApp extends BaseModel
{
    public static function check($ac, $se)
    {
        $app = self::where('app_id', '=', $ac)
            ->where('app_secret', '=', $se)
            ->find();
        return $app;
    }
}