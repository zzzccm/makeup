<?php

namespace app\api\model;

use think\Model;

class BaseModel extends Model
{

    protected function prefixImgUrl($value, $data)
    {
        $finalUrl = $value;
        $from = isset($data["from"]) ? $data["from"] : 0;
        if ($from == 1) {
            $finalUrl = config('setting.img_prefix') . $value;
        }
        return $finalUrl;
    }
}
