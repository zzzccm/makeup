<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/15
 *Time: 21:51
 **/

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeException;
use think\Route;

class Theme
{
    /**
     * @url /theme?ids=id1,id2,id3,...
     * @return 一组theme模型
      */
    public function getSimpleList($ids = '')
    {
        (new IDCollection())->goCheck();
        $ids = explode(',', $ids);
        $resule = ThemeModel::with('topicImg,headImg')
            ->select($ids);
        if($resule->isEmpty()){
            throw new ThemeException();
        }
        return $resule;
    }

    /**
     * @url /theme/:id
     */
    public function getComplexOne($id){
        (new IDMustBePositiveInt())->goCheck();
        $theme = ThemeModel::getThemeWithProduct($id);
        if(!$theme){
            throw new ThemeException();
        }
        return $theme;
    }
}