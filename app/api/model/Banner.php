<?php


namespace app\api\model;


class Banner extends Base
{
    public function items()
    {
        return $this->hasMany('Banner', 'banner_id', 'id');
    }

    /**
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\DataNotFoundException
     */
    public function getBanner() {
        return self::with(['items', 'items.img'])->select();
    }
}