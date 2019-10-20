<?php
/**
 * @className：search控制器
 * @description：搜索页面
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
namespace App\controller;
use App\controller\Base;
use App\model\AdvertisementModel;
use App\model\PostModel;
use  Framework\library\View;
use App\model\ApiModel;
use App\model\ArticleModel;
class Search extends Base
{

    use View;
    const RESPONSE_SUCCESS = 1001;//请求成功
    const RESPONSE_FAILURE = 2001;

    public function searchArticle()
    {
        global $_GPC;
        @$_GPC['current_page'] = $_GET['current_page'] ? $_GET['current_page'] : 1;
        @$_GPC['page_size'] = $_GET['page_size'] ? $_GET['page_size'] : 10;
        @$_GPC['type'] = $_GET['type'] ? $_GET['type'] : 'china';
        @$_GPC['area_id'] = $_GET['area_id'] ? $_GET['area_id'] : 'no';
        @$_GPC['quota'] = $_GET['quota'] ? $_GET['quota'] : 'no';//time price responsetime available
        @$_GPC['product_type'] = $_GET['product_type'] ? $_GET['product_type'] : 'no';
        @$_GPC['title'] = $_GET['title'] ? urldecode($_GET['title']) : '';


        $data       = $this->post(url("api/article/getPostListByRanking"), $_GPC);
        $list       = "";
        $pagination = "";
        if ($data->code == self::RESPONSE_SUCCESS && $data->data) {
            $list       = $data->data->list;
            if(!empty($_GPC['title'] )){
                foreach($list as $k=>$v){
                    $list[$k]->title=$this->handleHighlight($v->title,$_GPC['title'] );
                    $list[$k]->describes=$this->handleHighlight($v->describes,$_GPC['title'] );
                }
            }

            $pagination = $data->data->pagination;
        }

        $this->assign('pagination', $pagination);
        $this->assign('list', $list);
        $this->display('search/cepingindex');

    }

    //查找关键字并进行高亮显示
    public function handleHighlight($title,$keyword){
//        $str="在中国古典四大名著中，绝大多数儿童最喜欢的就是西游记。";//定义原始字符串
//        $keyword="西游记";//指定要替换的关键字
        return  str_replace($keyword,"<span class=\"red\">$keyword</span>",$title);//加粗加颜色

    }

    //控制台
    public function search()
    {

        global $_G;
        @$status=isset($_GET['status']) ? $_GET['status'] : 4;
        @$orderBy=!empty($_GET['orderBy']) ? $_GET['orderBy'] : 'create_time';
        @$cid=!empty($_GET['cid']) ? $_GET['cid'] : 200000;
        @$current_page=!empty($_GET['current_page']) ? $_GET['current_page'] : 1;
        @$page_size=!empty($_GET['page_size']) ? $_GET['page_size'] : 10;
        @$keyword=!empty($_GET['keyword']) ? $_GET['keyword'] : "";
        $advertisement=new AdvertisementModel();
        $post=new PostModel();


        /**
         * 获取友情链接列表
         */
        $friendLinkList=$advertisement->getAdvertisementList(4);
        /**
         * 获取分类页广告列表
         */
        $advertisementFristList=$advertisement->getAdvertisementList(2);
        /**
         * 获取分类帖子列表
         */
        $topPostList=$post->getPostList($cid,$orderBy,$status,$page_size,$current_page,$keyword);
        /**
         * 获取本周热议帖子列表
         */
        $hotPostList=$post->getHotPosts();

        /**
         * 获取分类列表
         */
        $classifyList=$this->column();

        if($cid){
            foreach($classifyList as $k=>$v){
                if($cid==$v->id){
                    $this->assign('title',$v->name);
                }
            }
        }






        $this->assign('link',$friendLinkList);
        $this->assign('firstList',$advertisementFristList);
        $this->assign('topPostList',$topPostList->list);
        $this->assign('pagination',$topPostList->pagination);
        $this->assign('hotPostList',$hotPostList);
        $this->assign('classifyList',$classifyList);
        $this->assign('status',$status);
        $this->assign('orderBy',$orderBy);
        $this->assign('cid',$cid);
        $this->display('search/search');
    }
    public function column(){
        global $_G;
        $data=$this->get(url("api/classify/getClassifylist"));
        if($data->code==1001 && $data->data){
            return  $data->data;
        }else{
            return [];
        }
    }
    

}