<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 21:32
 **/

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}