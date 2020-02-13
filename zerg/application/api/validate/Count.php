<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 11:02
 **/

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}