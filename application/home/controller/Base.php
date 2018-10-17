<?php

namespace app\home\controller;
use think\Controller;
use think\Db;
use think\Session;

class Base extends Controller {
    /*
     * 
     */
    public function ajaxReturn($data)
    {
        exit(json_encode($data));
    }
}