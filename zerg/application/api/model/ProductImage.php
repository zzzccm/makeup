<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/17
 *Time: 13:40
 **/

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id', 'delete_time', 'product_id'];

    public function imgUrl()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }
}