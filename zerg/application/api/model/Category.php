<?php
/**
 *Created by:
 *Author: aurora
 *Date: 2019/12/16
 *Time: 12:53
 **/

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

}