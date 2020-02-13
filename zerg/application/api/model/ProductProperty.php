<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/17
 *Time: 13:43
 **/

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['product_id', 'delete_time', 'id'];
}