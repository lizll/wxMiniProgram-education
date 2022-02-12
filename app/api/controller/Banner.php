<?php


namespace app\api\controller;
use app\BaseController;
use app\api\model\Banner as BannerModel;

class Banner extends BaseController
{
    public function getBanner() {
        return BannerModel::getBanner();
    }
}