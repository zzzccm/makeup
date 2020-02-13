<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/13
 *Time: 14:33
 **/

namespace app\api\validate;


use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}