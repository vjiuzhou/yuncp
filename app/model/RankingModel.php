<?php
/**
 * @className：帖子控制器
 * @description：获取帖子列表
 * @author:calfbb技术团队
 * Date: 2017/12/26
 */

namespace App\model;
use App\model\ApiModel;
class RankingModel extends  ApiModel
{


        public function getArea($type){
            global $_G;
            $where['type']=$type;
            $data=$this->get(url("api/Article/getPostOne"),$where);

            if($data->code==1001 && $data->data){
                return  (array)$data->data;
            }
            return [];
        }


}