<?php
/**
 * @className：首页控制器
 * @description：首页入口，加载首页模版,广告列表,友情链接
 * @author:calfbb技术团队
 * Date: 2017/10/13
 */
namespace App\controller;

use App\controller\Base;
use App\model\ApiModel;
use App\model\AdvertisementModel;
use App\model\PostModel;

use App\model\NavModel;
use  \Gregwar\Captcha\CaptchaBuilder;
use  \Gregwar\Captcha\PhraseBuilder;
use  Framework\library\Session;
use Addons\api\library\RedisPage;
use framework\library\Conf;
use Curl\Curl;
use App\controller\CepingIndex;

class Index extends Base
{
    const RESPONSE_SUCCESS = 1001;//请求成功
    const RESPONSE_FAILURE = 2001;
    public function __construct()
    {
        parent::__construct();
        /**
         * 获取分类列表
         */
        $classifyList=$this->column();
        $this->assign('classifyList', $classifyList);
    }

    //控制台
    public function index()
    {
        global $_GPC;
        $data=new CepingIndex();
        $data->index();

        //$this->display('index/cepingindex');

    }


    //控制台
    public function bbsIndex()
    {
        global $_G,$_GPC;
        if (!empty($_GPC['token'])) {
            $token=$_GPC['token'];
            $value = RedisPage::instance()->get($token);
            $userinfo = RedisPage::instance()->unserialize($value);
            if (!empty($userinfo)) {
                $userInfo=$this->get(url("api/user/getUserInfoByuuid", ['uuid'=>$userinfo['uuid']]));

                if ($userInfo->code==1001 && $userInfo->data) {

              /**
               *  用户缓存数据更新
               */
                    @$access_token = md5($this->randomkeys(6) + $userInfo->data->uid);
                    $access_token = self::$session->set('access_token', $access_token);
                    $userinfo = self::$session->set($access_token, (array)$userInfo->data);
                    $this->assign('userinfo', $userinfo);
                } else {//如果没有同步到社区，读取官网user表，重新注册
                $domain = Conf::all('domain');//读取配置文件
                $where['type']=3;
                    $where['uuid']=$userinfo['uuid'];
                    $url=url("api/User/findUser");
                    $url=str_replace($domain['bbs'], $domain['main'], $url);

                    $curl=new Curl();
                    $data=$curl->get($url, $where);

                    $where['username']=$data->data->username;
                    $where['mobile']=$data->data->mobile;
                    $where['password']=$data->data->password;
                    $where['token']=$data->data->token;
                    $where['uuid']=$data->data->uuid;
                    $avatar = \framework\library\Conf::get('AVATAR', 'calfbbs');
                    if (!$avatar) {
                        $avatar = 'default';
                    }
                    $jpg = "boy" . rand(1, 10) . ".jpg";
                    $where['avatar'] = "avatar/" . $avatar . "/" . $jpg;
                    $userInfo=$this->post(url("api/User/addUserFromWannengcha"), $where);
                    /**
                     *  用户缓存数据更新
                     */
                    @$access_token = md5($this->randomkeys(6) + $userInfo->data->uid);
                    $access_token = self::$session->set('access_token', $access_token);
                    $userinfo = self::$session->set($access_token, (array)$userInfo->data);
                    $this->assign('userinfo', $userinfo);
                }
            }
        }

        $advertisement=new AdvertisementModel();
        $post=new PostModel();

        /**
         * 获取友情链接列表
         */
        $friendLinkList=$advertisement->getAdvertisementList(4);

        /**
         * 获取首页广告列表
         */
        $advertisementFristList=$advertisement->getAdvertisementList(1);
        /**
         * 获取首页置顶帖子列表
         */
        $topPostList=$post->getTopPosts();

        /**
         * 获取首页综合帖子列表
         */
        $comprehensivePostList=$post->getPostList();

        /**
         * 获取本周热议帖子列表
         */
        $hotPostList=$post->getHotPosts();


        $this->assign('link', $friendLinkList);
        $this->assign('firstList', $advertisementFristList);
        $this->assign('topPostList', $topPostList);
        $this->assign('comprehensivePostList', $comprehensivePostList->list);
        $this->assign('hotPostList', $hotPostList);

        $this->assign('cid', 200000);
        $this->assign('status', 4);
        $this->assign('orderBy', 'create_time');
        $this->display('index/index');
    }


    public function test()
    {
        $this->display('index/test');
    }

    public function search()
    {
        global $_G;

        $this->display('index/search');
    }



    public function cases()
    {
        global $_G;

        $this->display('index/cases');
    }
    public function tips()
    {
        global $_G;

        $this->display('index/tips');
    }
    public function notice()
    {
        global $_G;

        $this->display('index/notice');
    }
    public function e404()
    {
        global $_G;

        $this->display('index/404');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function captcha()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $phraseBuilder = new PhraseBuilder(5, '0123456789');

        $builder = new CaptchaBuilder(null, $phraseBuilder);

        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 45, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        $session=new Session();
        //把内容存入session
        $session->set('postcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

    /**
     * @function 富文本编辑器图片 上传
     */
    public function doUploadPic()
    {
        global $_G;
        if(!isset($_FILES['wangEditorH5File']) && isset($_FILES['wangEditorPasteFile'])){
            $_FILES['wangEditorH5File']=$_FILES['wangEditorPasteFile'];
        }
        $res = $this->post(url("api/files/uploadFile"), ['file' => $_FILES['wangEditorH5File']]);
        echo($res->code == self::RESPONSE_SUCCESS ? $_G['ATTACHMENT_ROOT'] . '/' : 'error|') . $res->data;
    }
}
