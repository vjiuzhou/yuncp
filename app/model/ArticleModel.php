<?php
/**
 * @className：帖子控制器
 * @description：获取帖子列表
 * @author:calfbb技术团队
 * Date: 2017/12/26
 */

namespace App\model;
use App\model\ApiModel;
class ArticleModel extends  ApiModel
{

    /**
     * @var string $tableName 帖子表
     */
    private static $tableNameSnapshot = "snapshot";

    /**
     * @var string 地区表
     */
    private static $areaTableName = "area";

    //获取折线图数据 24小时

    public function getLineChart($articleId,$area_id){
        $sql="select avg(response_time) as response_time, date_format(FROM_UNIXTIME(created_time,'%Y-%m-%d %H:%i:%s'), '%H') as hours from ceping_snapshot 
where article_id={$articleId}  and area_id={$area_id}  and response_time>0 group by hours;";
        $data=db_fetchall($sql);
        return $data;
    }

    public function getLineChartAvailable($articleId,$area_id){
        $sql="select  count(*) as total, sum(if(response_time>0,1,0))  as available,date_format(FROM_UNIXTIME(created_time,'%Y-%m-%d %H:%i:%s'), '%H') as hours from ceping_snapshot 
where article_id={$articleId}  and area_id={$area_id}  group by hours;";
        $data=db_fetchall($sql);

        return $data;
    }

    //获取地图数据
    public function getMap($articleId,$type){
        $sql="select avg(s.response_time) as total,a.privonce_name from ceping_snapshot as s left join ceping_area as a on s.area_id = a.id 
where s.article_id={$articleId} and s.response_time>0 and a.type='{$type}' 
GROUP BY a.privonce_name ";
        $data=db_fetchall($sql);
        return $data;
    }


    //获取地图数据
    public function getMapAvailable($articleId,$type){
        $sql="select  count(*) as total, sum(if(response_time>0,1,0))  as available,a.privonce_name from ceping_snapshot as s left join ceping_area as a on s.area_id = a.id 
where s.article_id={$articleId}  and a.type='{$type}' 
GROUP BY a.privonce_name ";
        $data=db_fetchall($sql);
        foreach($data as $k=>$v){
            $data[$k]['total']=round($v['available']/$v['total'],2)*100;
            $data[$k]['totals']=$v['total'];
        }

        return $data;
    }

    //获取响应时间top十
    function responseTimeTop($articleId,$type="china",$orderBy="desc",$limit=10){
        $sql="select avg(s.response_time) as total,s.area_id,a.privonce_name,a.city_name  from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id  where s.article_id={$articleId} and s.response_time>0  and a.type='{$type}'   GROUP BY   s.area_id,a.privonce_name,a.city_name  order by total {$orderBy} limit 0,{$limit} ";
        $data=db_fetchall($sql);
      // echo db_sql();exit;
        return $data;
    }

    //获取平均可用率top十
    function availableTop($articleId,$type="china",$orderBy="desc",$limit=10){
        $sql="select  count(*) as total, sum(if(s.response_time>0,1,0))  as available,s.area_id,a.privonce_name,a.city_name  from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id  where s.article_id={$articleId}  and a.type='{$type}'   GROUP BY   s.area_id,a.privonce_name,a.city_name  order by available {$orderBy} limit 0,{$limit} ";
        $data=db_fetchall($sql);

        foreach($data as $k=>$v){
            $data[$k]['total']=round($v['available']/$v['total'],2)*100;
            $data[$k]['totals']=$v['total'];
        }

        // echo db_sql();exit;
        return $data;
    }

    //获取运营商应时间
    function    responseTimeOperator($articleId,$type="china",$orderBy="desc"){
        $sql="select avg(s.response_time) as total,o.name  from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id left join ceping_operator as o on o.id=a.operator_id  where s.article_id={$articleId} and s.response_time>0  and a.type='{$type}'   GROUP BY   o.name   order by total {$orderBy}  ";
        $data=db_fetchall($sql);

        return $data;
    }

    //获取运营商平均可用率
    function    availableTimeOperator($articleId,$type="china",$orderBy="desc"){
        $orderBy= $orderBy=="desc" ? "asc" : "desc";
        $sql="select count(*) as total, sum(if(s.response_time>0,1,0))  as available,o.name  from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id left join ceping_operator as o on o.id=a.operator_id  where s.article_id={$articleId}   and a.type='{$type}'   GROUP BY   o.name   order by available {$orderBy}  ";
        $data=db_fetchall($sql);
        foreach($data as $k=>$v){
            $data[$k]['total']=round($v['available']/$v['total'],2)*100;
            $data[$k]['totals']=$v['total'];
        }

        return $data;
    }

    //获取平均响应时间
    function responseTime($articleId,$type="china",$orderBy="desc"){
        $sql="select avg(s.response_time) as total   from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id  where s.article_id={$articleId} and s.response_time>0  and a.type='{$type}'  ";
        $data=db_fetch($sql);
        return $data;
    }


    //获取平均可用率
    function availableTime($articleId,$type="china",$orderBy="desc"){
        $sql="select count(*) as total, sum(if(s.response_time>0,1,0))  as available  from ceping_snapshot  as s left join ceping_area as a on s.area_id = a.id  where s.article_id={$articleId}   and a.type='{$type}'  ";
        $data=db_fetch($sql);
        if(is_array($data)){
            @$data['total']=round($data['available']/$data['total'],2)*100;
        }
        return $data;
    }


    //获取快照

    public function getsnapshotList($validateResult)//status默认除去删除状态的都选择
    {
        global $_G;
        /**
         * 获取当前页数总条数
         */
        $count = $this->countSnapshot($validateResult);
        if ($count > 0) {

            $result = $this->selectSnapshot($validateResult);
        }

        $data['pagination'] = $this->getPagination($validateResult['page_size'], $validateResult['current_page'], $count);

        $data['list'] = empty($result) ? [] : $result;
        return $data;
      //  return $this->returnMessage(1001, '响应成功', $data);
    }

    /**
     * 获取帖子数据列表
     *
     * @param array $data 传入数据
     *
     * @return array | bool $result
     */
    public function selectSnapshot($data, $column = '*')
    {
        $sql="select s.*,a.privonce_name,a.city_name,a.operator_id from ". table_prefix(self::$tableNameSnapshot) . " as s left join ". table_prefix(self::$areaTableName) . " as a on s.area_id=a.id where s.article_id=".$data['id'];

//        $sql = 'SELECT ' . $column . ' FROM ' . table_prefix(self::$tableNameSnapshot) . ' AS p LEFT JOIN ' . table_prefix(self::$userTableName) .
//            ' AS u ON u.uid = p.uid LEFT JOIN ' . table_prefix(self::$classfyTableName) . ' AS c ON c.id = p.cid ';
        $where=[];
        /**
         * 条件
         */
        if ( !empty($data['status'])) {
            $sql              .= ' and s.`status` = :status ';
            $where[':status'] = $data['status'];
        }

        if ( !empty($data['cid'])) {
            $sql           .= ' AND a.`operator_id` = :operator_id ';
            $where[':operator_id'] = $data['operator_id'];
        }


        if ( !empty($data['privonce_name'])) {
            $sql             .= '  AND s.privonce_name LIKE :privonce_name';
            $where[':privonce_name'] = "%" . $data['privonce_name'] . "%";
        }

        if ( !empty($data['city_name'])) {
            $sql             .= ' AND s.city_name LIKE :city_name';
            $where[':city_name'] = "%" . $data['city_name'] . "%";
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
     * 统计帖子数据总条数
     *
     * @param array $data 传入数据
     *
     * @return int | bool $result
     */
    public function countSnapshot($data)
    {
        $sql="select count(*) AS num from ". table_prefix(self::$tableNameSnapshot) . " as s left join ". table_prefix(self::$areaTableName) . " as a on s.area_id=a.id where s.article_id=".$data['id'];


//        if ( !isset($data['status'])) {
//            $sql              .= ' WHERE `status` != :status';
//            $where[':status'] = 3;
//        } else {
//            $sql              .= ' WHERE `status` = :status';
//            $where[':status'] = $data['status'];
//        }
        /**
         * 条件
         */
        $where=[];
        if ( !empty($data['status'])) {
            $sql              .= ' and s.`status` = :status ';
            $where[':status'] = $data['status'];
        } else {

        }

        if ( !empty($data['cid'])) {
            $sql           .= ' AND a.`operator_id` = :operator_id ';
            $where[':operator_id'] = $data['operator_id'];
        }


        if ( !empty($data['privonce_name'])) {
            $sql             .= ' AND s.privonce_name LIKE :privonce_name';
            $where[':privonce_name'] = "%" . $data['privonce_name'] . "%";
        }

        if ( !empty($data['city_name'])) {
            $sql             .= ' AND s.city_name LIKE :city_name';
            $where[':city_name'] = "%" . $data['city_name'] . "%";
        }


        return db_fetch($sql, $where)['num'];
    }


    /**
     * 提取分页信息
     *
     * @param int $page_size    每页显示数量
     * @param int $current_page 当前页码
     * @param int $count        总条数
     *
     * @return array
     */
    public function getPagination($page_size, $current_page, $count)
    {
        $pagination['total']        = (int)$count;
        $pagination['page_count']   = $count > 0 ? ceil($count / $page_size) : 0;
        $pagination['current_page'] = (int)$current_page;
        $pagination['page_size']    = (int)$page_size;

        return $pagination;
    }
    /**
     * 获取帖子列表
     */
    public function getPostList($cid=200000,$orderBy='create_time',$status=4,$page_size=10,$current_page=1,$keyword="",$uid="")//status默认除去删除状态的都选择
    {
        global $_G;

        $where['page_size']=$page_size;
        $where['current_page']=$current_page;
        if($status!=4){
            $where['status']=$status;
        }
        if($cid!=200000){
            $where['cid']=$cid;
        }
        if(!empty($keyword)){
            $where['title']=urldecode($keyword);
        }

        if(!empty($uid)){
            $where['uid']=$uid;
        }
        $where['orderBy']=$orderBy;
        $where['sort']="DESC";

        $data=$this->get(url("api/article/getPostList"),$where);

        if($data->code==1001 && $data->data){
            return  $data->data;
        }else{
            $data->data->list="";
            $data->data->pagination="";
            return  $data->data;
        }

    }
    public function getTopPosts($num=10,$top=1)
    {
        global $_G;

        $where['num']=$num;
        $where['top']=$top;
        $data=$this->get(url("api/post/getTopPosts"),$where);

        if($data->code==1001 && $data->data){
            return  $data->data;
        }else{
            return [];
        }
    }
    public function getHotPosts($num=10,$orderBy='reply_count',$sort='DESC')
    {
        global $_G;
        
        $where['num']=$num;
        $where['orderBy']=$orderBy;
        $where['sort']=$sort;
        $data=$this->get(url("api/post/getTimeMax"),$where);        
        if($data->code==1001 && $data->data){
            return  $data->data;
        }else{
            return [];
        }
    }

	//获取帖子内容
	public function getPostOne($post_id)
	{
		global $_G;
        $where['id']=$post_id;
        $data=$this->get(url("api/Article/getPostOne"),$where);
        
        if($data->code==1001 && $data->data){
            return  (array)$data->data;
        }
        return [];
	}

    /**
     * 更新访问量点赞数 或回帖数
     */
    public function getChangeVisitRelies($data){
        $result=$this->get(url('api/post/changeVisitRelies'),$data);
        return $result;
    }

    public function getUserPostNumMethod($uid)
    {
        $where['uid']=$uid;
        $result=$this->get(url('api/post/getUserPostNum'),$where);
        if($result->code==1001 && $result->data){
             return (array)$result->data[0];
        }else{
            return [];
        }

    }



}