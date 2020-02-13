<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 11:17
 **/

namespace app\lib\exception;


class ProductException extends BaseException
{
    public $code = 404;
    public $msg = '指定的商品不存在，请检查参数';
    public $errorCode = 20000;
}