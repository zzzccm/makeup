<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/19
 *Time: 12:18
 **/

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\WxNotify;
use app\api\validate\IDMustBePositiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id = '')
    {
        (new IDMustBePositiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function receiveNotify(){
        // 通知频率15/15/30/180/1800/1800/1800/1800/3600，单位：秒

        // 1.检测库存量，超卖
        // 2.更新这个订单的status状态
        // 3.减库存
        // 4.如果成功处理，返回微信成功处理的信息，否则需要返回没有成功处理的信息。

        // 特点：post；xml格式；不会携带参数
        $notify = new WxNotify();
        $notify->Handle();
    }
}