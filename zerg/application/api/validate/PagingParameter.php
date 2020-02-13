<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/31
 *Time: 13:01
 **/

namespace app\api\validate;


class PagingParameter extends BaseValidate
{
    protected $rule = [
        'page' => 'isPositiveInteger',
        'size' => 'isPositiveInteger'
    ];

    protected $message =[
        'page' => '分页参数必须时正整数',
        'size' => '分页参数必须时正整数'
    ];
}