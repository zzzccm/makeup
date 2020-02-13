<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/17
 *Time: 21:53
 **/

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 100001;
}