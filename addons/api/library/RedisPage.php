<?php
/**
 * Created by PhpStorm.
 * User: longer
 * Date: 2018/10/8
 * Time: 下午3:20
 */

namespace Addons\api\library;

use framework\library\Conf;

class RedisPage
{
    private static $redis = null;
    protected $type = 'datum'; //前缀名称
    private static $self = null;
    public function __construct()
    {
        $redisConf = Conf::all('redis');
        self::$redis = new \redis();
        self::$redis->connect($redisConf['redis_host'], $redisConf['redis_port']);
        if(!empty($redisConf['redis_password'])){
            self::$redis->auth($redisConf['redis_password']); //密码验证
        }
    }

    /**
     * 防止克隆
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function instance()
    {
        if (is_null(self::$self) || is_null(self::$redis)) {
            self::$self = new self();
        }
        return self::$self;
    }

    /*
    * 添加记录
    * @param $id id
    * @param $data hash数据
    * @param $hashName Hash 记录名称
    * @param $SortName Redis SortSet 记录名称
    * @param $redis Redis 对象
    * @return bool
    */
    public function set_redis_page_info($id, $data, $uuid, $type)
    {
        if (!is_numeric($id) || !is_array($data)) return false;
        $hashName = $uuid . '_' . $type .'_' . $id;
        self::$redis->hMset($hashName, $data);
        self::$redis->zAdd($uuid . '_'. $type, $data['expire_time'], $id);
        return true;
    }

    /*
    * 获取分页数据
    * @param $page 当前页数
    * @param $pageSize 每页多少条
    * @param $hashName Hash 记录名称
    * @param $SortName Redis SortSet 记录名称
    * @param $redis Redis 对象
    * @param $key 字段数组 不传为取出全部字段
    * @return array
    */
    public function get_redis_page_info($page, $pageSize, $uuid, $type, $key = array())
    {
        if (!is_numeric($page) || !is_numeric($pageSize)) return false;
        $limit_s = ($page - 1) * $pageSize;
        $limit_e = ($limit_s + $pageSize) - 1;
        $range = self::$redis->ZRANGE($uuid. '_'. $type, $limit_s, $limit_e); //指定区间内，带有 score 值(可选)的有序集成员的列表。
        $count = self::$redis->zCard($uuid . '_'. $type); //统计ScoreSet总数
        $pageCount = ceil($count / $pageSize); //总共多少页
        $pageList = array();
        foreach ($range as $qid) {
            if (count($key) > 0) {
                $pageList[] = self::$redis->hMGet($uuid . '_' . $type .'_'.$qid, $key); //获取hash表中所有的数据
            } else {
                $pageList[] = self::$redis->hGetAll($uuid . '_' . $type .'_'. $qid); //获取hash表中所有的数据
            }
        }
        $pageList = array_reverse($pageList);
        $data = array(

            'pagination' => array(
                'page' => $page, //当前页数
                'pageSize' => $pageSize, //每页多少条
                'count' => $count, //记录总数
                'pageCount' => $pageCount //总页数
            ),
            'list' => $pageList, //需求数据
        );
        return $data;
    }

    /**
    * 删除记录
    * @param $id id
    * @param $hashName Hash 记录名称
    * @param $SortName Redis SortSet 记录名称
    * @param $redis Redis 对象
    * @return bool
    */
    public function del_redis_page_info($id, $uuid, $type)
    {
        if (!is_array($id)) return false;
        foreach ($id as $value) {
            $hashName = $uuid . '_' . $type .'_'. $value;
            self::$redis->del($hashName);
            self::$redis->zRem($uuid . '_'. $type, $value);
        }
        return true;
    }

    /**
     * 删除过期
     * @param $id
     * @param $data
     * @return bool
     */
    public function del_redis_expire_info($uuid, $type)
    {
        $ids = self::$redis->zRange($uuid.'_'. $type, 0, -1);
        $time = strtotime('-30 day');
        foreach ($ids as $value){
            $result = self::$redis->hGetAll($uuid . '_' .  $type .'_'. $value);
            if ($result['expire_time'] < $time){
                $hashName = $uuid . '_' . $type .'_'.$value;
                self::$redis->del($hashName);
                self::$redis->zRem($uuid . '_'. $type, $value);
            }
        }
        return true;
    }

    /**
     * 设置hash键值
     * @param $key 键
     * @param $value array
     * @return bool
     */
    public function setex($key, $expire_time, $value)
    {
        self::$redis->setex($key, $expire_time, $value);
        return true;
    }

    /**
     * 将key中存储的数字值增1
     * @param $key
     */
    public function incr($key)
    {
        return self::$redis->incr($key);
    }

    /**
     * 设置key为某个字符串
     * @param $key
     * @param $value
     * @return bool
     */
    public function set($key, $value)
    {
        return self::$redis->set($key, $value);
    }

    /**
     * 获取hash键值
     * @param $key 键
     * @param $value array
     * @return bool
     */
    public function get($key)
    {
        return self::$redis->get($key);
    }

    /**删除缓存
     * @param $key
     * @return bool
     */
    public function del($key)
    {
        self::$redis->del($key);
        return true;
    }

    /**
     * 序列化
     * @param $data
     * @return string
     */
    public function serialize($data)
    {
        return serialize($data);
    }

    /**
     * 反序列化
     * @param $data
     * @return mixed
     */
    public function unserialize($data)
    {
        return unserialize($data);
    }

    /**
     * 设置key秒过期时间
     * @param $key
     * @param $expire_time 秒为单位
     */
    public function expire($key, $expire_time)
    {
        self::$redis->expire($key, $expire_time);
    }

    /**
     * 设置key的过期时间
     * @param $key
     * @param $time 具体时间戳 秒
     */
    public function expireat($key, $time)
    {
        self::$redis->expireAt($key, $time);
    }

    /**
     * 设置key毫秒过期时间
     * @param $key
     * @param $millisecond
     */
    public function pexpire($key, $millisecond)
    {
        self::$redis->pExpire($key, $millisecond);
    }

    /**
     * 设置key的过期时间
     * @param $key
     * @param $time 具体时间戳 毫秒
     */
    public function pexpireat($key, $time)
    {
        self::$redis->pExpireAt($key, $time);
    }

    /**
     * 查询key的剩余时间 秒
     * @param $key
     */
    public function ttl($key)
    {
        self::$redis->ttl($key);
    }
    /**
     * 查看key的剩余时间 毫秒
     * @param $key
     */
    public function pttl($key)
    {
        self::$redis->pttl($key);
    }
    /**
     * 移除给定key的生成时间
     * @param $key
     */
    public function persist($key)
    {
        self::$redis->persist($key);
    }

    /**
     * 重命名key
     * @param $key
     * @param $new_key
     */
    public function rename($key, $new_key)
    {
        self::$redis->rename($key, $new_key);
    }

    /**
     * 重命名
     * @param $key
     * @param $new_key 不存在时有效
     */
    public function renamenx($key, $new_key)
    {
        self::$redis->renameNx($key,$new_key);
    }

    /**
     * 返回key所存储值的类型
     * @param $key
     */
    public function type($key)
    {
        self::$redis->type($key);
    }
}