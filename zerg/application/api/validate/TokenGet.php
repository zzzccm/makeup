<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 17:20
 **/

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $rule = [
        'code' => 'require|isNotEmpty'
    ];

    protected $message = [
        'code' => '没有code无法获取Token'
    ];
}