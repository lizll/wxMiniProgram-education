<?php


namespace app\api\model;


class BannerItem extends Base
{
    public function img() {
        return $this->belongsTo('img', 'img_id', 'id');
    }
}