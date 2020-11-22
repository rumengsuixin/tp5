<?php
/**
 * Created by : PhpStorm
 * User: Administrator
 * Date: 2020/11/21
 * Time: 15:24
 */

namespace app\admin\controller;

use think\Response;

class controller extends \think\Controller
{
    protected $success_code = 1; //成功码
    protected $error_code = 0; //失败码

    public function successResponse($msg='成功',$data=[]){
        $json['code'] = $this->success_code;
        $json['msg'] = $msg;
        $json['data'] = $data;
        $this->returnResponseJson($json);
    }

    public function errorResponse($msg='异常'){
        $json['code'] = $this->error_code;
        $json['error_msg'] = $msg;
        $this->returnResponseJson($json);
    }

    /**
     * 创建一个响应并发送
     * @param $json json数组
     */
    public function returnResponseJson($json){
        $res = Response::create($json,'json');
        $res->send();
    }

}