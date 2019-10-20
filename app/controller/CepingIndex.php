<?php
/**
 * @author rock
 * Date: 2019/9/30 12:08 PM
 */

namespace App\controller;
use App\controller\Base;
use  Framework\library\View;
use App\model\ApiModel;
use App\model\ArticleModel;
class CepingIndex extends Base
{
    use View;
    const RESPONSE_SUCCESS = 1001;//请求成功
    const RESPONSE_FAILURE = 2001;
    public function __construct()
    {
        parent::__construct();

    }

    //控制台
    public function index()
    {
        global $_GPC;
        @$param['current_page'] = $_GET['current_page'] ? $_GET['current_page'] : 1;
        @$param['page_size'] = $_GET['page_size'] ? $_GET['page_size'] : 10;
        //$param['admin_id'] = self::$userinfo['uid'];
        @$param['title'] = $_GET['title'];
        $param['sort']="DESC";
        $data       = $this->post(url("api/article/getPostListByAdmin"), $param);
        $list       = "";
        $pagination = "";
        if ($data->code == self::RESPONSE_SUCCESS && $data->data) {
            $list       = $data->data->list;
            $pagination = $data->data->pagination;
        }

        $this->assign('pagination', $pagination);
        $this->assign('list', $list);
        $this->display('index/cepingindex');

    }

    public function testSwoole(){
        $sql="select * from ".table_prefix('area');
        $data=db_fetchall($sql);

        exit;
        $cli = new Swoole\Http\Client('127.0.0.1', 80);
        $cli->setHeaders(array('User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36'));
        $cli->setCookies(array('test' => 'value'));
        foreach($data as $k=>$v){
            $arr=array(
                "guid" => $v['chinaz_code'],
                "host" => "204.152.213.194",
                "ishost" => 0,
                "isipv6" => 0,
                "checktype" => 0,
                "encode" => "ak5OGl2j2~ITXqF9pBrWYTGgQi~teRXK",
            );
            $cli->post('/iframe.ashx?t=ping&callback=jQuery11130506161722701236_1569990665716', $arr, function ($cli) {
                var_dump($cli->body);
//                $cli->get('/index.php', function ($cli) {
//                    var_dump($cli->cookies);
//                    var_dump($cli->headers);
//                });
            });
        }



    }

    public function testSwooleRedis(){
        $redis = new Swoole\Redis;
        $redis->connect('127.0.0.1', 6379, function ($redis, $result) {
            $redis->set('test_key', 'value', function ($redis, $result) {
                $redis->get('test_key', function ($redis, $result) {
                    var_dump($result);
                });
            });
        });
    }
}