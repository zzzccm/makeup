<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/15
 *Time: 21:51
 **/

namespace app\api\model;

use app\api\model\Product as ProductModel;


class Product extends BaseModel
{
    protected $hidden = ['delete_time', 'pivot', 'from', 'create_time', 'update_time', 'category_id'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    //商品详情图片
    public function imgs()
    {
        return $this->hasMany('ProductImage', 'product_id', 'id');
    }

    //商品参数
    public function properties()
    {
        return $this->hasMany('ProductProperty', 'product_id', 'id');
    }

    //最近新品
    public static function getMostRecent($count)
    {
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;
    }

    //商品分类
    public static function getProductsByCategoryID($categoryID)
    {
        $products = self::where('category_id', '=', $categoryID)
            ->select();
        return $products;
    }

    //商品详情
    public static function getProductDetail($id)
    {
        //Query查询构造器
        $products = self::with([
            'imgs' => function($query){
                $query->with(['imgUrl'])
                ->order('order','asc');
            }
        ])
            ->with(['properties'])
            ->find($id);
        return $products;
    }

}