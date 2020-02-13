<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/17
 *Time: 16:34
 **/

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}