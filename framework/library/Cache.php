<?php
/* ========================================================================
 * 缓存类
 * ======================================================================== */
namespace  framework\library;


class Cache
{
    private $class;
    private static $cache=null;
    public function __construct()
    {
        if(is_null(self::$cache)){
            $type = \Framework\library\conf::get('CACHE_TYPE','cache');
            $option = \Framework\library\conf::get('OPTION','cache');
            $class = '\\Framework\\library\\lib\\cache\\'.$type;
            self::$cache = new $class($option);
        }
    }

    public function get($name)
    {

        return self::$cache->get($name);
    }

    public function set($name, $value, $time = false)
    {

        return self::$cache->set($name,$value,$time);
    }

    public function del($name)
    {
        return self::$cache->del($name);
    }

    public function clear()
    {
        return self::$cache->clear();
    }

}