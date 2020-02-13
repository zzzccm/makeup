<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/13
 *Time: 13:12
 **/

namespace app\api\controller\v2;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     *
     */
    public function getBanner($id)
    {
        return 'This is V2 Version';
    }
}