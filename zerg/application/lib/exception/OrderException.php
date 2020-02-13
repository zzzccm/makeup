<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/18
 *Time: 11:21
 **/

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存咋，请检查ID';
    public $errorCode = 80000;
}