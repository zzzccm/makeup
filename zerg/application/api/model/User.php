<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 17:31
 **/

namespace app\api\model;


class User extends BaseModel
{
    public function address()
    {
        return $this->hasOne('UserAddress', 'user_id', 'id');
    }

    public static function getByOpenID($openid)
    {
        $user = self::where('openid', '=', $openid)
            ->find();
        return $user;
    }
}