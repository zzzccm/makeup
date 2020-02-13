<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/18
 *Time: 15:05
 **/

namespace app\api\model;


class Order extends BaseModel
{
    protected $hidden = ['user_id', 'delete_time', 'update_time'];

    // 自動寫入時間戳
    protected $autoWriteTimestamp = true;

    // 读取器
    public function getSnapItemsAttr($value){
        if (empty($value)){
            return null;
        }
        return json_decode($value);
    }

    public function getSnapAddressAttr($value){
        if (empty($value)){
            return null;
        }
        return json_decode($value);
    }

    public static function getSummaryByUser($uid, $page = 1, $size = 15)
    {
        $pagingData = self::where('user_id', '=', $uid)
            ->order('create_time desc')
            ->paginate($size, true, ['page' => $page]);
        return $pagingData;
    }
}