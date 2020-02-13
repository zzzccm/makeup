<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/13
 *Time: 13:12
 **/

namespace app\api\controller\v1;

use app\api\model\Image;
use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

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
        //AOP 面向切面编程思想
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        $img = new Image();
        $img->url;
        if (!$banner) {
            throw new BannerMissException();
        }
        return $banner;
    }
}