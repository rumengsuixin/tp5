<?php

use think\Response;

/**
 * Created by : PhpStorm
 * User: Administrator
 * Date: 2020/11/21
 * Time: 14:54
 */

namespace app\admin\controller;

use app\admin\controller\Controller;
use app\admin\model\Goods as goodsModel;
use think\Request;
use think\Response as Res;

class Goods extends Controller
{
    public function goodsList(Request $request)

    {
        $paginate = $request->get('limit');
        $page = $request->get('page');
        $offset = ($paginate * $page).",".$paginate; //limit 表达式
        $goodModel = new goodsModel();
        $aggregate = $goodModel->fresh_getData('','',$offset,'',$paginate,true);
        $data['data'] = $aggregate['list'];
        $data['code'] = 0;
        $data['count'] = $aggregate['total'];
        $response = Res::create($data,'json');
        $response->send();

    }

    public function goodsAdd(Request $request){

        $request_postdata = $request->post();

        if( count($request_postdata)==0 ){
            $this->errorResponse('缺少必要参数');
        }

        $data = $request_postdata['data'];
        $data['date'] = time();
        $where['goods_name'] = $data['goods_name'];
        $goodModel = new goodsModel();
        $is_exists = $goodModel->fresh_isExists($where);//是否存在名称相同的商品

        if($is_exists){
            $this->errorResponse('商品已存在');
        }else{
            $this->successResponse(( $goodModel->fresh_addData($data) ) ? '添加成功' : '添加失败');
        }

    }

    public function goodsDel(Request $request,goodsModel $goodsModel){

        $request_postdata = $request->get();

        if( count($request_postdata)==0 ){
            $this->errorResponse('缺少必要参数');
        }

        $goods_id = $request_postdata['goods_id'];
        $result = $goodsModel->fresh_delData("goods_id = $goods_id");
        if($result){
            $this->successResponse('删除成功');
        }else{
            $this->errorResponse('删除失败');
        }


    }

    public function index(){
        return $this->fetch();
    }

}