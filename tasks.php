<?php
/**
 * @author rock
 * Date: 2019/10/2 5:03 PM
 */

error_reporting(-1);
ini_set('display_errors', 1);
//Swoole\Runtime::enableCoroutine(SWOOLE_HOOK_ALL);
//Swoole\Runtime::enableCoroutine(SWOOLE_HOOK_CURL);


//$host='39.105.197.166';
//$dbname='yunceping';
//$user='root';
//$pass='4f70f5007d';

$host='127.0.0.1';
$dbname='yunceping';
$user='root';
$pass='';

$pdo=new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8;port=3306',$user,$pass);



$arr=$pdo->query("select * from ceping_task where status=1 limit 0,1");
$arr->setFetchMode(PDO::FETCH_ASSOC);

foreach($arr as $k=>$d){
        if(is_array($d)){
            if($d['task_num'] >=24){
                changeTaskStatus($d,$pdo);
            }else{
                taskStart($pdo,$d['article_id'],$d,$d['host']);
            }
        }
}


function insertTaskData($newData,$pdo){

        $sql="insert into  `ceping_snapshot` ( `response_time`, `area_id`, `ttl`, `article_id`, `bytes`, `ip`, `ip_address`, `created_time`, `updated_time`) values ( '{$newData['response_time']}', '{$newData['area_id']}',  '{$newData['ttl']}', '{$newData['article_id']}', '{$newData['bytes']}', '{$newData['ip']}', '{$newData['ip_address']}',".time().",".time().")";
    $arr=$pdo->query($sql);
    if($arr){
        echo "任务完成".$newData['area_id'];
        echo "\r\n";
    }

}

//修改任务状态 为已经完成

function changeTaskStatus($task,$pdo){
    $sql="update `ceping_task` set `status`='2',  `updated_time`=".time()." where `id`= ".$task['id'];
    $arr=$pdo->query($sql);
    echo  "修改任务状态 为已经完成";
}
function changeTask($task,$pdo){
    $sql="update `ceping_task` set `task_num`=task_num+1,  `updated_time`=".time()." where `id`= ".$task['id'];
    $arr=$pdo->query($sql);
}



function taskStart($pdo,$article_id,$task,$host){
    $url="http://ping.chinaz.com/iframe.ashx?t=ping&callback=jQuery1113009036460078948827_1569503499834";
    $data=['guid'=>'5bea1430-f7c2-4146-88f4-17a7dc73a953','encode'=>'ak5OGl2j2~KWuGbN1qWnBsV7fCKTveix',"host"=>$host,"ishost"=>0,"isipv6"=>0];

    $arr=$pdo->query("select * from ceping_area");
    $arr->setFetchMode(PDO::FETCH_ASSOC);
    foreach($arr as $k=>$d){
        go(function () use ($url, $data, $d,$article_id,$pdo) {
            $data['guid']=$d['chinaz_code'];
            $data= httpRequest($url,'post',$data,[],false);
            $data=explode(',',$data);
            $newData['ip']="";
            $newData['ip_address']="";
            $newData['response_time']=0;
            $newData['ttl']=0;
            $newData['bytes']=0;

            foreach($data as $k=>$v){
                if($k==2){
                    $ip=explode("'",$v);
                    $newData['ip']=$ip[1];
                }
                if($k==3){
                    $ip=explode("'",$v);
                    $newData['ip_address']=$ip[1];
                }
                if($k==4){
                    $ip=explode("'",$v);
                    $newData['response_time']=findNum($ip[1]);
                    if($newData['response_time'] =="" || $newData['response_time']  <0){
                        $newData['response_time']=0;
                    }
                }

                if($k==5){
                    $ip=explode("'",$v);
                    $newData['ttl']=findNum($ip[1]);
                    if($newData['ttl'] =="" || $newData['ttl']  <0){
                        $newData['ttl']=0;
                    }
                }

                if($k==5){
                    $ip=explode("'",$v);
                    $newData['bytes']=findNum($ip[1]);
                    if($newData['bytes'] =="" || $newData['ttl']  <0){
                        $newData['bytes']=0;
                    }
                }
            }
            $newData['article_id']=$article_id;
            $newData['area_id']=$d['id'];
            insertTaskData($newData,$pdo);
        });
    }

    changeTask($task,$pdo);
}



/**
 * CURL请求
 * @param $url 请求url地址
 * @param $method 请求方法 get post
 * @param null $postfields post数据数组
 * @param array $headers 请求header信息
 * @param bool|false $debug  调试开启 默认false
 * @return mixed
 */
function httpRequest($url, $method, $postfields = null, $headers = array(), $debug = false) {
    $method = strtoupper($method);
    $ci = curl_init();
    /* Curl settings */
    curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    curl_setopt($ci, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0");
    curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 60); /* 在发起连接前等待的时间，如果设置为0，则无限等待 */
    curl_setopt($ci, CURLOPT_TIMEOUT, 7); /* 设置cURL允许执行的最长秒数 */
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
    switch ($method) {
        case "POST":
            curl_setopt($ci, CURLOPT_POST, true);
            if (!empty($postfields)) {
                $tmpdatastr = is_array($postfields) ? http_build_query($postfields) : $postfields;
                curl_setopt($ci, CURLOPT_POSTFIELDS, $tmpdatastr);
            }
            break;
        default:
            curl_setopt($ci, CURLOPT_CUSTOMREQUEST, $method); /* //设置请求方式 */
            break;
    }
    $ssl = preg_match('/^https:\/\//i',$url) ? TRUE : FALSE;
    curl_setopt($ci, CURLOPT_URL, $url);
    if($ssl){
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
        curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, FALSE); // 不从证书中检查SSL加密算法是否存在
    }
    curl_setopt($ci, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ci, CURLOPT_MAXREDIRS, 2);/*指定最多的HTTP重定向的数量，这个选项是和CURLOPT_FOLLOWLOCATION一起使用的*/
    curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ci, CURLINFO_HEADER_OUT, true);
    $response = curl_exec($ci);
    $requestinfo = curl_getinfo($ci);
    if ($debug) {
        echo "=====post data======\r\n";
        var_dump($postfields);
        echo "=====info===== \r\n";
        print_r($requestinfo);
        echo "=====response=====\r\n";
        print_r($response);
    }
    curl_close($ci);
    return $response;
}

function findNum($str=''){
    $str=trim($str);
    if(empty($str)){return '';}
    $result='';
    for($i=0;$i<strlen($str);$i++){
        if(is_numeric($str[$i])){
            $result.=$str[$i];
        }
    }
    return $result;
}
