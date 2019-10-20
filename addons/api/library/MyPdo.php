<?php
/**
 * Created by PhpStorm.
 * User: longer
 * Date: 2018/10/14
 * Time: 下午10:07
 */

namespace Addons\api\library;

use PDO;
use Exception;
use PDOException;
use framework\library\Conf;

class MyPdo
{
    protected static $self = null;
    protected $dsn;
    protected $user;
    protected $passwd;
    private static $pdo = null;
    public function __construct()
    {
        $database = Conf::all('database');
        $this->dsn = 'mysql:host='.$database['server'].';dbname='.$database['database_name'].';charset='.$database['charset'].';port='.$database['port'];
        $this->user = $database['username'];
        $this->passwd = $database['password'];
        self::$pdo = new PDO($this->dsn,$this->user,$this->passwd);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置为异常模式

        return $this;
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
        if (is_null(self::$self) || is_null(self::$pdo)) {
            self::$self = new self();
        }
        return self::$self;
    }

    /**
     * 查询某个字段
     * @param $column 查询的字段
     * @param $tablename 查询的表
     * @param $where 查询条件
     * @return mixed
     */
    public function getOne($column, $tablename, $where)
    {
        foreach ($where as $key => $value){
            $where_string = $key. ' = ' .$value;
        }
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置为警告模式
        $sql = "select ".$column." from ".$tablename." where ".$where_string;
        $res = self::$pdo->prepare($sql);
        $res->execute();
        $result = $res->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    /**
     * 根据字段数组添加一条数据
     * @param array $column
     * @param $tablename
     * @param array $arr
     * @return int
     */
    public function addOne(array $column, $tablename, array $arr)
    {
        $column_string = implode(',', $column);
        $arr_string = implode(',', $arr);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置为警告模式
        $sql = "insert into ".$tablename."(".$column_string.") values (".$arr_string.")";
        $res = self::$pdo->prepare($sql);
        $result = $res->execute();
        return $arr_string;
    }

    /**
     * 减掉会员值
     * @param $tablename
     * @param $amount
     * @param $uid
     * @return int
     */
    public function decValue($tablename, $amount, $uid)
    {
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//设置为警告模式
        $sql = "UPDATE ".$tablename." SET balance = balance - ".$amount." WHERE uid = ".$uid;
        $res = self::$pdo->prepare($sql);
        $result = $res->execute();
        return $result;

    }

    /**
     * 增加会员值
     * @param $tablename
     * @param $amount
     * @param $uid
     * @return int
     */
    public function incValue($tablename, $amount, $uid)
    {
        $sql = "UPDATE ".$tablename." SET balance = balance + ".$amount." WHERE uid = ".$uid;
        $res = self::$pdo->prepare($sql);
        $result = $res->execute();
        return $result;

    }

    /**
     * 设置属性
     * @param $p
     * @param $d
     */
    public function setAttribute($p, $d)
    {
        self::$pdo->setAttribute($p, $d);
    }

    /**
     * beginTransaction 事务开始
     */
    public function beginTransaction()
    {
        self::$pdo->beginTransaction();
    }

    /**
     * 提交事务
     */
    public function commit()
    {
        self::$pdo->commit();
    }

    /**
     * 事务回滚
     */
    public function rollback()
    {
        self::$pdo->rollBack();
    }
}