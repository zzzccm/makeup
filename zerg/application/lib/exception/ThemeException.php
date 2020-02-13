<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 9:20
 **/

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定的主题不存在，请检查主题ID';
    public $errorCode = 30000;

}