<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 18:29
 **/

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}