<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/14
 *Time: 18:42
 **/

namespace app\lib\exception;


class ParamterException extends BannerMissException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}