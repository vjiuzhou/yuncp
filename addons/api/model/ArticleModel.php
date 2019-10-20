<?php
/**
 * @className  ：帖子接口数据模型
 * @description：增加帖子，删除帖子，编辑帖子，查询帖子，更新点赞、访问量
 * @author     :calfbbs技术团队
 * Date        : 2017年10月30日 23:28:08
 */

namespace Addons\api\model;

use Addons\api\model\BaseModel;
use think\facade\Session;

class ArticleModel extends BaseModel
{
    /**
     * @var string $tableName 帖子表
     */
    private static $tableName = "article";

    /**
     * @var string 地区表
     */
    private static $areaTableName = "area";


    /**
     * @var string 产品地区表
     */
    private static $product_areaTableName = "product_area";
    /**
     * @var string 厂商品牌表
     */
    private static $manufacturerTableName = "manufacturer";
    /**
     * @var string 任务表
     */
    private static $taskTableName = "task";


    /**
     * @var string 文章参数表
     */
    private static $parameterTableName = "parameter";

    /**
     * @var string 分类表
     */
    private static $classfyTableName = "classify";

    /**
     * @var string 用户表
     */
    private static $userTableName = "user";
    public function selectAreaDB($data){
        $result=db_select(self::$product_areaTableName,$fields = "*",$where = [],$data['current_page'], $data['page_size']);

        return $result;
    }

    public function selectManufacturerDB($data){
        $result=db_select(self::$manufacturerTableName,$fields = "*",$where = [],$data['current_page'], $data['page_size']);
        return $result;
    }

    /** 插入一条数据到文章
 *
 * @param array $data 传入数据
 *
 * @return int | bool $result
 */
    public function insertPost($data)
    {
        $result = db_insert(self::$tableName, $data);
        return $result;
    }

    /** 插入一条数据到参数
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function insertParameter($data)
    {
        $result = db_insert(self::$parameterTableName, $data);
        return $result;
    }

    /** 插入一条数据到参数
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function insertTask($data)
    {
        $result = db_insert(self::$taskTableName, $data);
        return $result;
    }

    /** 更新一条数据到帖子
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function updatePost($data, $where)
    {
        $result = db_update(self::$tableName, $data, $where);

        return $result;
    }

    /** 更新一条数据到帖子
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function updateParameter($data, $where)
    {
        $result = db_update(self::$parameterTableName, $data, $where);

        return $result;
    }

    /**
     * 假删除一条帖子数据
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function deletePost($data, $where)
    {
        return db_update(self::$tableName, $data, $where);
    }

    /** 真删除一条帖子数据
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function deleteRealPost($where)
    {
        return db_delete(self::$tableName, $where);
    }

    /**
     * 获取帖子数据列表
     *
     * @param array $data 传入数据
     *
     * @return array | bool $result
     */
    public function selectPost($data, $column = '*')
    {
        $sql = 'SELECT ' . $column . ' FROM ' . table_prefix(self::$tableName) . ' AS p LEFT JOIN ' . table_prefix(self::$userTableName) .
            ' AS u ON u.uid = p.uid LEFT JOIN ' . table_prefix(self::$classfyTableName) . ' AS c ON c.id = p.cid ';

        /**
         * 条件
         */
        if ( !isset($data['status'])) {
            $sql              .= 'WHERE p.`status` != :status ';
            $where[':status'] = 3;
        } else {
            $sql              .= 'WHERE p.`status` = :status ';
            $where[':status'] = $data['status'];
        }

        if ( !empty($data['cid'])) {
            $sql           .= 'AND p.`cid` = :cid ';
            $where[':cid'] = $data['cid'];
        }


        if ( !empty($data['uid'])) {
            $sql           .= 'AND p.`uid`=:uid';
            $where[':uid'] = $data['uid'];
        }

        if ( !empty($data['title'])) {
            $sql             .= ' AND title LIKE :title';
            $where[':title'] = "%" . $data['title'] . "%";
        }

        /**
         * 利用索引进行分页 倒序时不可用
         */
         //$sql .= ' and p.id > '.($data['current_page'] - 1) * $data['page_size'] ;

        /**
         * 排序
         */
        if ( !empty($data['orderBy']) && !empty($data['sort'])) {
            $sql .= ' ORDER BY p.' . $data['orderBy'] . ' ' . $data['sort'];
        }


        /**
         * 限制条数
         */
        $sql .= ' LIMIT ' . ($data['current_page'] - 1) * $data['page_size'] . "," . $data['page_size'];

        return db_query($sql, $where);
    }


    /**
     * 获取公告数据列表
     *
     * @param array $data 传入数据
     *
     * @return array | bool $result
     */
    public function selectBulletin()
    {

        $sql = 'SELECT id,cid,title FROM ' . table_prefix(self::$tableName) . '  where wnc_show=1 and  (cid=1 or cid=5) order by change_time desc limit 0,7';

        return db_query($sql);
    }


    /**
     * 获取公告数据列表
     *
     * @param array $data 传入数据
     *
     * @return array | bool $result
     */
    public function selectUserHot()
    {

        $sql = 'SELECT id,cid,title FROM ' . table_prefix(self::$tableName) . '  where wnc_show=1 and  cid !=1 and cid!=5  order by change_time desc limit 0,7';

        return db_query($sql);
    }

    /**
     * @function
     *
     * @param        $data
     * @param string $column
     *
     * @return mixed
     */
    public function selectPostByAdmin($data, $column = '*')
    {
        $sql = "SELECT $column FROM " . table_prefix(self::$tableName) .
            ' AS p LEFT JOIN ' . table_prefix(self::$userTableName) . " AS u ON u.uid = p.uid" .
            ' LEFT JOIN ' . table_prefix(self::$manufacturerTableName) . ' AS c ON c . id = p . manufacturer_id ';
        $sql .= 'WHERE 1 =1  ';
        //if (is_bool($data['status'])) {
        //  $sql .= 'WHERE p . status != :status ';
        /**
         * 3已删除
         */
        //    $where[':status'] = 3;
        // } else {
        // }
        $where=[];
        if ( !empty($data['status'])) {
            $sql .= 'AND p . status = :status ';

            $where[':status'] = $data['status'];
        }

        if ( !empty($data['manufacturer_id'])) {
            $sql .= ' AND manufacturer_id =:manufacturer_id ';

            $where[':manufacturer_id'] = $data['manufacturer_id'];

        }

        if ( !empty($data['uid'])) {
            $sql .= ' AND uid =:uid ';

            $where[':uid'] = $data['uid'];
        }

        if ( !empty($data['title'])) {
            $sql .= ' AND title LIKE :title';

            $where[':title'] = "%" . $data['title'] . "%";
        }

        /**
         * 利用索引进行分页 倒序时不可用
         */
        // $sql .= ' and p.id > '.($data['current_page'] - 1) * $data['page_size'] ;

        /**
         * 排序
         */
        $sql .= ' ORDER BY p . created_time ' . $data['sort'];


        /**
         * 限制条数
         */
        $sql .= ' LIMIT ' . ($data['current_page'] - 1) * $data['page_size'] . "," . $data['page_size'];


        return db_query($sql, $where);
    }
    public function selectPostByranking($data, $column = '*')
    {
        $sql = "SELECT $column FROM " . table_prefix(self::$tableName) .
            ' AS p LEFT JOIN ' . table_prefix(self::$userTableName) . " AS u ON u.uid = p.uid" .
            ' LEFT JOIN ' . table_prefix(self::$manufacturerTableName) . ' AS c ON c . id = p . manufacturer_id ';
        $sql .= 'WHERE 1 =1  ';
        //if (is_bool($data['status'])) {
        //  $sql .= 'WHERE p . status != :status ';
        /**
         * 3已删除
         */
        //    $where[':status'] = 3;
        // } else {
        // }
        $where=[];

            $sql .= 'AND p . status = :status ';

            $where[':status'] = 1;


        if ( !empty($data['manufacturer_id'])) {
            $sql .= ' AND manufacturer_id =:manufacturer_id ';

            $where[':manufacturer_id'] = $data['manufacturer_id'];

        }


        if ( !empty($data['uid'])) {
            $sql .= ' AND uid =:uid ';

            $where[':uid'] = $data['uid'];
        }

        if ( !empty($data['product_type'])) {
            $sql .= ' AND p.product_type =:product_type ';

            $where[':product_type'] = $data['product_type'];
        }

        if ( !empty($data['type'])) {
            $sql .= ' AND p.type =:type ';

            $where[':type'] = $data['type'];
        }

        if ( !empty($data['title'])) {
            $sql .= ' AND p.title LIKE :title';

            $where[':title'] = "%" . $data['title'] . "%";
        }

        if ( !empty($data['area_id'])) {
            $sql .= ' AND p.area_id =:area_id ';

            $where[':area_id'] = $data['area_id'];
        }

        /**
         * 利用索引进行分页 倒序时不可用
         */
        // $sql .= ' and p.id > '.($data['current_page'] - 1) * $data['page_size'] ;

        /**
         * 排序
         */
        $sql .= ' ORDER BY p . created_time ' . 'desc';


        /**
         * 限制条数
         */
        $sql .= ' LIMIT ' . ($data['current_page'] - 1) * $data['page_size'] . "," . $data['page_size'];


        return db_query($sql, $where);
    }

    /**
     * 统计帖子数据总条数
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function countPost($data)
    {

        $sql = 'SELECT count(*) AS num FROM ' . table_prefix(self::$tableName);
        $sql              .= ' WHERE  1 = 1';
//        if ( !isset($data['status'])) {
//            $sql              .= ' WHERE `status` != :status';
//            $where[':status'] = 3;
//        } else {
//            $sql              .= ' WHERE `status` = :status';
//            $where[':status'] = $data['status'];
//        }
        $where=[];
        if ( !empty($data['uid'])) {
            $sql           .= ' AND `uid` = ' . ':uid';
            $where[':uid'] = $data['uid'];

        }

        if ( !empty($data['cid'])) {
            $sql           .= ' AND cid = :cid';
            $where[':cid'] = $data['cid'];
        }

        if ( !empty($data['title'])) {
            $sql             .= ' AND title LIKE :title';
            $where[':title'] = '%' . $data['title'] . '%';
        }


        return db_fetch($sql, $where)['num'];
    }
    public function countRanking($data)
    {

        $sql = 'SELECT count(*) AS num FROM ' . table_prefix(self::$tableName);
        $sql              .= ' WHERE  1 = 1 and status=1';
//        if ( !isset($data['status'])) {
//            $sql              .= ' WHERE `status` != :status';
//            $where[':status'] = 3;
//        } else {
//            $sql              .= ' WHERE `status` = :status';
//            $where[':status'] = $data['status'];
//        }
        $where=[];
        if ( !empty($data['uid'])) {
            $sql           .= ' AND `uid` = ' . ':uid';
            $where[':uid'] = $data['uid'];

        }

        if ( !empty($data['cid'])) {
            $sql           .= ' AND cid = :cid';
            $where[':cid'] = $data['cid'];
        }

        if ( !empty($data['title'])) {
            $sql             .= ' AND title LIKE :title';
            $where[':title'] = '%' . $data['title'] . '%';
        }

        if ( !empty($data['product_type'])) {
            $sql .= ' AND product_type =:product_type ';

            $where[':product_type'] = $data['product_type'];
        }


        if ( !empty($data['type'])) {
            $sql .= ' AND type =:type ';

            $where[':type'] = $data['type'];
        }

        if ( !empty($data['area_id'])) {
            $sql .= ' AND area_id =:area_id ';

            $where[':area_id'] = $data['area_id'];
        }

        return db_fetch($sql, $where)['num'];
    }

    /**
     * 验证管理员身份
     *
     * @param $uid
     */
    public function checkAdminUser($uid)
    {
        $user = db_fetch("SELECT `status` FROM " . table_prefix('user') . " WHERE uid = :uid LIMIT 1", [':uid' => $uid]);
        if ( !empty($user) && $user['status'] == 2) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 验证帖子存在
     *
     * @param string $id 帖子id
     *
     * @return bool
     */
    public function hasPost($id)
    {
        return db_has(self::$tableName, ['id' => $id]);
    }

    /**
     * 获取单条文章
     *
     * @param string $id 帖子id
     *
     * @return bool
     */
    public function findPost($id, $column = '*')
    {
        $sql="select a.*,m.`name` as manufacturer_name,m.company_name,m.url as manufacturer_url,p.*  from  ".table_prefix(self::$tableName)." as a left join ".table_prefix(self::$manufacturerTableName)."  as m on  a.manufacturer_id=m.id left join ".table_prefix(self::$parameterTableName)."  as p on a.id=p.article_id where  a.id={$id} ";
        return db_fetch($sql);

    }

    /**
     * 获取单条文章参数
     *
     * @param string $id 帖子id
     *
     * @return bool
     */
    public function findParameter($id, $column = ['memory','cpu','ssd','bandwidth','ipv4','ipv6','outflow','month_price','half_year_price','year_price', 'availability_ratio_test','response_rate_test','bandwidth_test','concurrent_test','upload_file_test','download_file_test','ssd_test','cpu_test','memory_test'])
    {

        return db_find(self::$parameterTableName, $column, ['article_id' => $id]);
    }

    /**
     * 更新访问量
     *
     * @param string $id 帖子id
     *
     * @return bool
     */
    public function updateVisit($id)
    {
        return db_query("UPDATE " . table_prefix('posts') . " SET `visits_count` = `visits_count`+ 1 WHERE id = :id",
            [':id' => $id]);
    }

    /**
     * 更新回帖数
     *
     * @param string $id 帖子id
     *
     * @return bool
     */
    public function updateRelies($data)
    {
        if ($data['action'] == "add") {
            $action = "`reply_count`+ 1";
        } else if ($data['action'] == "minus") {
            $action = "`reply_count`- 1";
        } else {
            $action = "`reply_count`+ 1";
        }
        return db_query("UPDATE " . table_prefix('posts') . " SET `reply_count` = $action WHERE id = :id",
            [':id' => $data['id']]);
    }

    /**
     * @function 某段时间之内帖子排序
     *
     * @param        $begin
     * @param        $end
     * @param string $column
     * @param string $num
     *
     * @return mixed
     */
    public function getMaxList($begin, $end, $column = '*', $num = '10', $orderBy, $sort)
    {
        $sql = 'SELECT ' . $column . ' FROM ' . table_prefix(self::$tableName) . ' WHERE `status` != 3 AND `create_time` BETWEEN :begin AND :end ORDER BY ' . $orderBy . ' ' . $sort . ' LIMIT ' . $num;

        $where = [
            ':begin' => $begin,
            ':end'   => $end,
        ];

        return db_query($sql, $where);
    }

    /**
     * @function 获取置顶帖子
     *
     * @param $data
     * @param $column
     *
     * @return mixed
     */
    public function getTopPostsList($data, $column = '*')
    {
        $sql = 'SELECT ' . $column . ' FROM ' . table_prefix(self::$tableName) . ' AS p LEFT JOIN ' . table_prefix(self::$userTableName) .
            ' AS u ON u . uid = p . uid LEFT JOIN ' . table_prefix(self::$classfyTableName) . ' AS c ON c . id = p . cid WHERE p . `status` != 3 AND p . `top` = :top ';


        if ( !empty($data['cid'])) {
            $sql          .= ' AND `cid` = :cid ';
            $where['cid'] = $data['cid'];
        }
        $sql .= " ORDER BY p.id ASC ";
        $sql .= 'LIMIT ' . $data['num'];

        $where[':top'] = $data['top'];

        return db_query($sql, $where);
    }
    /**
     * @param 获取用户帖子数量
     * @var uid
     * */
    public function getUserPostModel($uid)
    {
       $sql = 'SELECT count(*) AS num  FROM '.table_prefix(self::$tableName) ." where uid = ".$uid;
       return db_query($sql);
    }
}