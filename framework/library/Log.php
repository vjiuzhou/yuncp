<?php
/* ========================================================================
 * 日志类
 * 日志驱动和储存位置请查看config/log.php
 * 使用方法(全局中)
 * \Calfbb\log::log('DEBUG','出现了一个BUG');
 * ======================================================================== */
namespace  framework\library;


class Log
{
    static public $class;
    static public $logMessage;

    static public function init()
    {
        if (!self::$class) {

            $type = Conf::get('LOG_TYPE', 'log');

            $class = '\\Framework\\library\\lib\\log\\' . $type;

            self::$class = new $class();
        }
    }

    static public function debug($message)
    {
        if(DEBUG)
        {
            $apiPath="m=".M."&c=".C."&a=".A;
            $message=['api_path'=>$apiPath,"message"=>$message];
            self::$class->debug('DEBUG', json_encode($message));
        }


    }

    static public function info($message)
    {
        self::$class->info('INFO', $message);
    }

    static public function notice($message)
    {
        self::$class->notice('NOTICE', $message);
    }

    static public function warning($message)
    {
        self::$class->warning('WARNING', $message);
    }

    static public function error($message)
    {
        $apiPath="m=".M."&c=".C."&a=".A;
        $message=['api_path'=>$apiPath,"message"=>$message];
        self::$class->error('ERROR', json_encode($message));
    }

    static public function critical($message)
    {
        self::$class->critical('CRITICAL', $message);
    }

    static public function alert($message)
    {
        self::$class->alert('ALETR', $message);
    }

    static public function addlog($level, $message)
    {
        self::$class->log($level, $message);
    }
}