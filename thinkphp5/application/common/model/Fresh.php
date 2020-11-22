<?php
/**
 * 继承 think Model 另外设置一些模型通用的方法
 * Created by : PhpStorm
 * User: Administrator
 * Date: 2020/11/20
 * Time: 15:57
 */

namespace app\common\model;


class Fresh extends \think\Model
{
    /**
     * @param null|array $data
     * @return bool|false|int
     */
    public function fresh_addData($data=NULL){

        return !is_null($data) ? $this->save($data) : FALSE;

    }

    public function fresh_delData($where=NULL){

        return !is_null($where) ? $this->where($where)->delete() : FALSE;

    }

    public function fresh_saveData($where=NULL,$data=NULL){

        return ( !is_null($where) && !is_null($data) ) ? $this->save($data,$where) : FALSE;

    }

    /**
     * 单表查询是否存在某一条数据
     * @param bool $where 查询条件
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function fresh_isExists($where=FALSE){
        return $where && ( gettype($where)=='array' ) ? ( !is_null( $this->where($where)->find() ) ? : FALSE ) : $where ;
    }

    /**
     * 获取纯净清新数据
     * @param string $field 查找的字段
     * @param string $where 查询条件
     * @param string $limit 偏移量
     * @param string $order 排序
     * @param string|null $paginate 分页选项
     * @param bool $isCount
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     *
     */
    public function fresh_getData($field='',$where='1=1',$limit='',$order='date desc',$paginate=NULL,$isCount=false){

        $arr1 = [];
        $query = $this->field($field)->where($where)->limit($limit)->order($order);
        if( is_null($paginate) ){
            $data = $query->select();
        } else {
            $data = $query->paginate($paginate);
        }
        if (count($data)>0){
            foreach ($data as $k=>$v){
                $arr1[] = $v->getData();
            }
        }
        if( $isCount ){
            $arr2['list'] = $arr1;
            $arr2['total'] = $data->total();
            $arr1 = $arr2;
        }

        return $arr1;
    }

}