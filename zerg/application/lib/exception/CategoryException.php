<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 13:04
 **/

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查参数';
    public $errorCode = 50000;

}