<?php
/**
 * Created by : PhpStorm
 * User: Administrator
 * Date: 2020/11/21
 * Time: 12:00
 */

namespace app\admin\controller;

class Index extends \think\Controller
{
    public function index(){

        return $this->fetch();
    }
}

