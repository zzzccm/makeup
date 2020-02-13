<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2020/2/6
 *Time: 14:04
 **/

namespace app\api\validate;


class AppTokenGet extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|isNotEmpty',
        'se' => 'require|isNotEmpty'
    ];
}