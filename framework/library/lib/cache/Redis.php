<?php
namespace framework\library\lib\cache;

class Redis
{
    private $time = 3600;  #存活时间
    private $redis;

    public function __construct($option)
    {
        $this->redis = new \Redis();
        $option['servers']=!empty($option['servers']) ? @$option['servers'] : "127.0.0.1";
        $option['port']=!empty($option['port']) ? @$option['port'] : 6379;
        $option['password']=!empty($option['password']) ? @$option['password'] : "";


        $ret=$this->redis->connect($option['servers'],$option['port']);
        if(!empty($option['password'])){
            $this->redis->auth($option['password']);
        }

        if (!$ret) {
            \Framework\library\log::alert($this->redis->getLastError());
        }
    }

    public function get($name)
    {
        $ret= $this->redis->get($name);
        if (!$ret) {
            \Framework\library\log::alert($this->redis->getLastError());
        }
        return $ret;
    }

    public function set($name, $value, $time = NULL)
    {
        if (!$time) {
            $time = $this->time;
        }
        $ret = $this->redis->set($name, $value, $time);
        if (!$ret) {
            \Framework\library\log::alert($this->redis->getLastError());
        }
        return $ret;

    }

    public function del($name)
    {
        $ret = $this->redis->delete($name);
        if (!$ret) {
            \Framework\library\log::alert($this->redis->getLastError());
        }
        return $ret;

    }

    public function clear()
    {
        $ret = $this->redis->flushDb();
        if (!$ret) {
            \Framework\library\log::alert($this->redis->getLastError());
        }
        return $ret;
    }
}
