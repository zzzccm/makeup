<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/18
 *Time: 9:39
 **/

namespace app\api\controller;


use app\api\service\Token as TokenService;
use think\Controller;

class BaseController extends Controller
{
    //前置方法
    protected function checkPrimaryScope()
    {
        TokenService::needPrimaryScope();
    }

    protected function checkExclusiveScope()
    {
        TokenService::needExclusiveScope();
    }
}