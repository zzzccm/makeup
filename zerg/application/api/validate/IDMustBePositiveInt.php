<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/13
 *Time: 15:08
 **/

namespace app\api\validate;


use think\Validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
        'num' => 'in:1,2,3'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];

}