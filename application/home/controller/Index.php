<?php

namespace app\home\controller;
// use think\Page;
// use think\Verify;
// use think\Image;
// use think\Db;
class Index extends Base{
    public function index()
    {
        return  $this->fetch();
    }
}