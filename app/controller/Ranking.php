<?php
/**
 * @author rock
 * Date: 2019/9/28 9:12 PM
 */

namespace App\controller;
use App\controller\Base;
use  Framework\library\View;
use App\model\ApiModel;
use App\model\ArticleModel;
class Ranking extends Base
{
    use View;
    const RESPONSE_SUCCESS = 1001;//请求成功
    const RESPONSE_FAILURE = 2001;
    //控制台
    public function index()
    {
        global $_GPC;
        @$_GPC['current_page'] = $_GET['current_page'] ? $_GET['current_page'] : 1;
        @$_GPC['page_size'] = $_GET['page_size'] ? $_GET['page_size'] : 10;
        @$_GPC['type'] = $_GET['type'] ? $_GET['type'] : 0;
        @$_GPC['area_id'] = $_GET['area_id'] ? $_GET['area_id'] : 'no';
        @$_GPC['quota'] = $_GET['quota'] ? $_GET['quota'] : 'no';//time price responsetime available
        @$_GPC['product_type'] = $_GET['product_type'] ? $_GET['product_type'] : 'no';
        //$param['admin_id'] = self::$userinfo['uid'];
//        @$param['title'] = $_GET['title'];
//        $param['sort']="DESC";
        $data       = $this->post(url("api/article/getPostListByRanking"), $_GPC);
        $list       = "";
        $pagination = "";
        if ($data->code == self::RESPONSE_SUCCESS && $data->data) {
            $list       = $data->data->list;
            $pagination = $data->data->pagination;
        }
//        p($_GPC);
        $this->assign('pagination', $pagination);
        $this->assign('list', $list);


        $this->display('ranking/index');

    }
}