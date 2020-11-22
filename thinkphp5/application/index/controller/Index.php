<?php
namespace app\index\controller;


use app\index\model\Goods;
use app\index\model\Order;
use app\index\model\User;

class Index extends \think\Controller
{
    public function index()
    {
        return 'index start';
    }
    public function test(){

        $user = new Order();

        $data = [
            'goods_id'=>1,
            'user_id'=>2,
            'date'=>time()
        ];

        dump($user->fresh_getData());


    }
}
