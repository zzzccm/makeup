<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/14
 *Time: 11:48
 **/

namespace app\lib\exception;


class BannerMissException extends BaseException
{
        public $code = 404;
        public $msg = '请求的banner不存在';
        public $errorCode = 40000;
}