<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/17
 *Time: 19:59
 **/

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id', 'delete_time', 'user_id'];
}