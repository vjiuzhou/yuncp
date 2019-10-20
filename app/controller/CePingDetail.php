<?php
/**
 * @author rock
 * Date: 2019/9/28 11:33 PM
 */

namespace App\controller;
use App\model\ApiModel;
use App\model\ArticleModel;
use App\model\UserModel;
use  \Gregwar\Captcha\CaptchaBuilder;
use  \Gregwar\Captcha\PhraseBuilder;
use  Framework\library\Session;
use Addons\api\library\RedisPage;
use framework\library\Conf;
use Curl\Curl;
use  Framework\library\View;
class CePingDetail extends Base
{
    use View;

    public function commonPosts()
    {
        global $_GPC;

        $post = new ArticleModel();
        $user = new UserModel();
        /**
         * 获取帖子内容
         */
        if(empty($_GET['id'])){
            header("Location:".url('app/index/e404'));
            return;
        }
        $post_id=$_GET['id'];
        $posts = $post->getPostOne($post_id);

        $title = $posts['title'] ;

        $description = @$posts['describes'] ?  @strip_tags($posts['describes']) : "";

        $keywords=$description;
        //获取用户信息
        $userInfo = $user->getUserOne($posts['uid']);
        //获得访问用户信息
        $access_token=self::$session->get('access_token');
        $loginUserinfo=self::$session->get($access_token);

        $this->assign('posts',$posts);
        $this->assign('userInfo',$userInfo);
        $this->assign('loginUserinfo',$loginUserinfo);
        $this->assign('post_id',$post_id);
        $this->assign('title',$title);
        $this->assign('keywords',$keywords);
        $this->assign('description',$description);
    }

    public function overview()
    {
        $this->commonPosts();

        $this->display('detail/overview');

    }

    public function getLineChart(){
        global $_GPC;
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();
        $type="china";
        $getMap=$response->responseTimeTop($_GPC['id'],$_GPC['type'],$_GPC['orderby'],$limit=5);

        $data=[];
        $chartDataTime=[];
        $chartDataValue=[];
        $retrunData=[];
        $retrunName=[];
        if(!empty($getMap)){
            foreach($getMap as $k=>$v){
            //    $data[$k]['value']= round($v['total'],2);
                $retrunData['name'][]=$v['privonce_name'].'-'.$v['city_name'];
                $chart=$response->getLineChart($_GPC['id'],$v['area_id']);
                foreach($chart as $key=>$value){
                    $chartDataValue[$k][$value['hours']]=$value['response_time'];
                }

            }

            $retrunData['chartData']=$this->addPoint($chartDataValue,$data);

        }

        echo json_encode($retrunData);exit;
    }

    public function getLineChartAvailable(){
        global $_GPC;
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();
        $type="china";
        $getMap=$response->responseTimeTop($_GPC['id'],$_GPC['type'],$_GPC['orderby'],$limit=5);

        $data=[];
        $chartDataTime=[];
        $chartDataValue=[];
        $retrunData=[];
        $retrunName=[];
        if(!empty($getMap)){
            foreach($getMap as $k=>$v){
                //    $data[$k]['value']= round($v['total'],2);
                $retrunData['name'][]=$v['privonce_name'].'-'.$v['city_name'];
                $chart=$response->getLineChartAvailable($_GPC['id'],$v['area_id']);
                foreach($chart as $key=>$value){
                    $chartDataValue[$k]['available']=round($value['available']/$value['total'],2)*100;
                    $chartDataValue[$k][$value['hours']]=round($value['available']/$value['total'],2)*100;
                }

            }

            $retrunData['chartData']=$this->addPoint($chartDataValue,$data);

        }

        echo json_encode($retrunData);exit;
    }
    //数据补点
    public function addPoint($data,$name){
       // lineX: ['00:00', '01:15', '02:30', '03:45', '05:00', '06:15', '07:30', '08:45', '10:00', '11:15', '12:30', '13:45', '15:00', '16:15', '17:30', '18:45', '20:00', '21:15', '22:30', '23:45'],
        $retrunDatatime=[];
        $retrunDataValue=[];
        $retrunData=[];
        foreach($data as $k=>$v){
            $retrunValue=[];
            for($i=0;$i<24;$i++){
                if(isset($v[$i])){
                    $retrunValue[]=$v[$i];
                }else{
                    $retrunValue[]=0;
                }
            }
            array_push($retrunDataValue,$retrunValue);
        }

        for($i=0;$i<24;$i++){
            if($i<10){
                $retrunDatatime[]="0".$i.":00";
            }else{
                $retrunDatatime[]=$i.":00";
            }
        }
        $retrunData['lineX']=$retrunDatatime;
        $retrunData['value']=$retrunDataValue;
        return  $retrunData;
    }


    public function getMapDataAvailable(){
        global $_GPC;
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();
        $type="china";
        $getMap=$response->getMapAvailable($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $data=[];
        if(!empty($getMap)){
            foreach($getMap as $k=>$v){
                $data[$k]['value']= round($v['total'],2);
                $data[$k]['name']=$v['privonce_name'];
                // $data[$k]=$this->array2object($data[$k]);
            }
        }
        echo json_encode($data);exit;
    }

    public function getMapData(){
        global $_GPC;
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();
        $type="china";
        $getMap=$response->getMap($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $data=[];
        if(!empty($getMap)){
            foreach($getMap as $k=>$v){
                $data[$k]['value']= round($v['total'],2);
                $data[$k]['name']=$v['privonce_name'];
               // $data[$k]=$this->array2object($data[$k]);
            }
        }
        echo json_encode($data);exit;
    }
    public function array2object($array) {
        if (is_array($array)) {
            $obj = new \StdClass();
            foreach ($array as $key => $val){
                $obj->$key = $val;
            }
        }
        else { $obj = $array; }
        return $obj;
    }



    public function responseTime()
    {
        global $_GPC;

        $this->commonPosts();
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();
        $type="china";
        $responseTimeTop10=$response->responseTimeTop($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $responseTimeOperator=$response->responseTimeOperator($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $responseTime=$response->responseTime($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $averageTime=0;
        if(!empty($responseTime['total'])){
            $averageTime=$responseTime['total'];
        }
        // p(db_sql("all"));
        $this->assign('responseTimeTop10',$responseTimeTop10);
        $this->assign('responseTimeOperator',$responseTimeOperator);
        $this->assign('averageTime',$averageTime);
        $this->display('detail/response_time');

    }

    public function available()
    {
        global $_GPC;
        $this->commonPosts();
        $_GPC['orderby']=!empty($_GPC['orderby']) ? $_GPC['orderby'] : 'desc';
        $_GPC['type']=!empty($_GPC['type']) ? $_GPC['type'] : 'china';
        $response = new ArticleModel();

        $responseTimeTop10=$response->availableTop($_GPC['id'],$_GPC['type'],$_GPC['orderby']);

        $responseTimeOperator=$response->availableTimeOperator($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $responseTime=$response->availableTime($_GPC['id'],$_GPC['type'],$_GPC['orderby']);
        $averageTime=0;
        if(!empty($responseTime['total'])){
            $averageTime=$responseTime['total'];
        }

        $this->assign('availableTop10',$responseTimeTop10);
        $this->assign('availableOperator',$responseTimeOperator);
        $this->assign('averageTime',$averageTime);
        $this->display('detail/available');

    }


    public function snapshot(){
        $this->commonPosts();
        global $_G;
        @$status=isset($_GET['status']) ? $_GET['status'] : 4;
        @$orderBy=!empty($_GET['orderBy']) ? $_GET['orderBy'] : 'create_time';
        @$cid=!empty($_GET['cid']) ? $_GET['cid'] : 200000;
        @$_GET['current_page']=!empty($_GET['current_page']) ? $_GET['current_page'] : 1;
        @$_GET['page_size']=!empty($_GET['page_size']) ? $_GET['page_size'] : 10;
        @$_GET['keyword']=!empty($_GET['keyword']) ? $_GET['keyword'] : "";
        $snapshot=new ArticleModel();

        /**
         * 获取分类帖子列表
         */
        $snapshotList=$snapshot->getsnapshotList($_GET);

        $list       = "";
        $pagination = "";

        if (!empty($snapshotList['list'])) {
            $list       = $snapshotList['list'];
            $pagination = $snapshotList['pagination'];
        }

        $this->assign('pagination', $pagination);
       // p($snapshotList);
        $this->assign('snapshotList',$list);

        $this->display('detail/snapshot');
    }

    public function charttest()
    {
        global $_GPC;
        $this->commonPosts();
        $this->display('detail/charttest');

    }
}