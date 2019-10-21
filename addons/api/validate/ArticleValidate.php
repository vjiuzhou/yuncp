<?php
/**
 * @className  ：帖子接口数据字段验证
 * @description：对接口传入的参数进行验证及过滤
 * @author     :calfbbs技术团队
 * Date        : 2017年10月30日 23:25:57
 */

namespace Addons\api\validate;

use framework\library\Validator;
use \Addons\api\validate\BaseValidate;

class ArticleValidate extends BaseValidate
{

    public $data;

    public function __construct(array $data = [])
    {
        $this->data = $this->trimStrings($data);
    }

    public function createTaskValidate(){

        $validator = new Validator($this->data);
        if(isset($this->data['host'])){
            $validator
                ->required('host')
                ->validate('host');
        }
        $validator
            ->integer('文章id必须是一个整型integer')
            ->min(1, TRUE, '帖子id最小为1')
            ->validate('id');


        return $this->returnValidate($validator);
    }
    /** 插入数据传入参数验证
     *
     * @param array $data
     */
    public function addPostValidate()
    {
        $validator = new Validator($this->data);
        $validator
            ->required('用户不能为空')
            ->integer('用户必须是一个整型integer')
            ->min(1, TRUE, '用户最小为1')
            ->validate('uid');
        $validator
            ->required('国内国外不能为空')
            ->validate('type');
        $validator
            ->required('产品类型不能为空')
            ->validate('product_type');
        $validator
            ->required('封面不能为空')
            ->validate('cover');
        $validator
            ->required('简介不能为空')
            ->validate('describes');
        $validator
            ->required('简介不能为空')
            ->validate('url');
        $validator
            ->required('优惠券不能为空')
            ->validate('discount');
        $validator
            ->required('必须是一个数字')
            ->validate('discount_num');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('manufacturer_id');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('area_id');
        $validator
            ->minLength(1, '标题不能为空')
            ->maxLength(255, '字符太长,不能超过255字节')
            ->validate('title');
        $validator
            ->filter(function($val) {
                $val = preg_replace("/<[^><]*script[^><]*>/i",'',$val);
                return $val;
            })
            ->minLength(1, '内容不能为空')
            ->validate('text');

        //if (isset($data['description'])) {
//        $validator
//            ->minLength(1, '描述不能为空')
//            //->maxLength(4000, '描述字符太长')
//            ->validate('description');
//        //}

        /*$validator
            ->required('该参数值不能为空')
            ->oneOf('0,1,2,3', '该参数值有误')
            ->validate('status');*/

        return $this->returnValidate($validator);
    }

    /** 插入数据传入参数验证
     *
     * @param array $data
     */
    public function addParameterValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->integer('必须是一个整型integer')
            ->validate('memory');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('cpu');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('ssd');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('bandwidth');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('ipv4');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('ipv6');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('outflow');
        $validator
            ->required('必须是一个整型integer')
            ->validate('month_price');
        $validator
            ->required('必须是一个整型integer')
            ->validate('half_year_price');
        $validator
            ->required('必须是一个整型integer')
            ->validate('year_price');


        if(isset($this->data['availability_ratio_test'])){
            $validator
                ->required('availability_ratio_test')
                ->validate('availability_ratio_test');
        }
        if(isset($this->data['response_rate_test'])){
            $validator
                ->required('response_rate_test')
                ->validate('response_rate_test');
        }
        if(isset($this->data['bandwidth_test'])){
            $validator
                ->required('bandwidth_test')
                ->validate('bandwidth_test');
        }
        if(isset($this->data['concurrent_test'])){
            $validator
                ->required('concurrent_test')
                ->validate('concurrent_test');
        }
        if(isset($this->data['upload_file_test'])){
            $validator
                ->required('upload_file_test')
                ->validate('upload_file_test');
        }
        if(isset($this->data['download_file_test'])){
            $validator
                ->required('download_file_test')
                ->validate('download_file_test');
        }
        if(isset($this->data['ssd_test'])){
            $validator
                ->required('ssd_test')
                ->validate('ssd_test');
        }
        if(isset($this->data['cpu_test'])){
            $validator
                ->required('cpu_test')
                ->validate('cpu_test');
        }
        if(isset($this->data['memory_test'])){
            $validator
                ->required('memory_test')
                ->validate('memory_test');
        }
        
        return $this->returnValidate($validator);
    }

    /** 更新数据传入参数验证
     *
     * @param array $data
     */
    public function changePostValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->integer('文章id必须是一个整型integer')
            ->min(1, TRUE, '帖子id最小为1')
            ->validate('id');

        $validator
            ->required('用户不能为空')
            ->integer('用户必须是一个整型integer')
            ->min(1, TRUE, '用户最小为1')
            ->validate('uid');
        $validator
            ->required('国内国外不能为空')
            ->validate('type');
        $validator
            ->required('产品类型不能为空')
            ->validate('product_type');
        $validator
            ->required('封面不能为空')
            ->validate('cover');
        $validator
            ->required('简介不能为空')
            ->validate('describes');
        $validator
            ->required('简介不能为空')
            ->validate('url');
        $validator
            ->required('优惠券不能为空')
            ->validate('discount');
        $validator
            ->required('必须是一个数字')
            ->validate('discount_num');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('manufacturer_id');
        $validator
            ->integer('必须是一个整型integer')
            ->validate('area_id');
        $validator
            ->minLength(1, '标题不能为空')
            ->maxLength(255, '字符太长,不能超过255字节')
            ->validate('title');
        if(isset($this->data['host'])){
            $validator
                ->required('host')
                ->validate('host');
        }
        $validator
            ->filter(function($val) {
                $val = preg_replace("/<[^><]*script[^><]*>/i",'',$val);
                return $val;
            })
            ->minLength(1, '内容不能为空')
            ->validate('text');

        if (isset($this->data['status'])) {
            $validator
                ->oneOf('0,1,2,3', '文章状态有误')
                ->validate('status');
        }


        return $this->returnValidate($validator);
    }

    /**
     * 删除数据传入参数验证
     *
     * @param array $data
     */
    public function delPostValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->integer('帖子id必须是一个整型integer')
            ->min(1, TRUE, '帖子id最小为1')
            ->validate('id');

        $validator
            ->integer('用户id必须是一个整型integer')
            ->min(1, TRUE, '用户id最小为1')
            ->validate('uid');

        if(!empty($this->data['status'])){
            $validator
                ->integer('status必须是一个整型integer')
                ->validate('status');
        }

        return $this->returnValidate($validator);
    }

    /**
     * 获取帖子数据列表传入参数验证
     *
     * @param array $data
     */
    public function getPostListValidate()
    {
        $validator = new Validator($this->data);

        if (isset($this->data['cid']))
            $validator
                ->integer('分类必须是一个整型')
                ->min(1, TRUE, '分类最小为1')
                ->validate('cid');

        if (isset($this->data['uid']))
            $validator
                ->integer('用户id必须是一个整型')
                ->min(1, TRUE, '用户id最小为1')
                ->validate('uid');

        if (isset($this->data['status']))
            $validator
                ->oneOf('0,1,2', '帖子状态有误')
                ->validate('status');

        if (isset($this->data['title'])) {
            $validator
                ->maxLength(255, '标题太长')
                ->validate('title');
        }

        $validator
            ->integer('页大小必须是一个整型')
            ->between(10, 100, TRUE, '页大小只能为10-100')
            ->validate('page_size');

        $validator
            ->integer('当前页必须是一个整型')
            ->min(1, TRUE, '当前页最小为1')
            ->validate('current_page');
        if (isset($this->data['sort'])) {
            $validator
                ->oneOf('DESC,ASC', '排序有误')
                ->validate('sort');
        }
        if (isset($this->data['orderBy'])) {
            $validator
                ->required('排序类别不能为空')
                ->oneOf('reply_count,create_time')
                ->validate('orderBy');
        }


        return $this->returnValidate($validator);
    }


    /**
     * 获取帖子数据列表传入参数验证
     *
     * @param array $data
     */
    public function getWncPostListValidate()
    {
        $validator = new Validator($this->data);

        if (isset($this->data['cid']))
            $validator
                ->integer('分类必须是一个整型')
                ->min(1, TRUE, '分类最小为1')
                ->validate('cid');

        if (isset($this->data['type']))
            $validator
                ->required('type必填')
                ->validate('type');


        return $this->returnValidate($validator);
    }

    /**
     * @function 获取后台 帖子数据列表传入参数验证
     *
     * @param array $data
     *
     * @return mixed
     */
    public function getPostListByAdminValidate()
    {
        $validator = new Validator($this->data);

        if (isset($this->data['cid'])) {
            $validator
                ->integer('分类必须是一个整型integer')
                ->min(1, TRUE, '分类最小为1')
                ->validate('cid');
        }
        if (isset($this->data['uid'])) {
            $validator
                ->integer('用户id必须是一个整型integer')
                ->min(1, TRUE, '用户id最小为1')
                ->validate('uid');
        }
        if (isset($this->data['title'])) {
            $validator
                ->maxLength(255, '标题太长')
                ->validate('title');
        }
        /**
         * 管理员id
         */
        //$validator
        //    ->required('管理员id必填')
        //    ->integer('管理员id必须是一个整型integer')
        //    ->min(1, TRUE, '参数最小为1')
        //    ->validate('admin_id');
        $validator
            ->integer('页大小必须是一个整型integer')
            ->between(10, 100, TRUE, '页大小只能为10-100')
            ->validate('page_size');
        $validator
            ->integer('当前页必须是一个整型integer')
            ->min(1, TRUE, '当前页最小为1')
            ->validate('current_page');
        $validator
            ->oneOf('DESC,ASC', '排序方式有误')
            ->validate('sort');
        $validator
            ->oneOf('0,1,2', '帖子状态有误')
            ->validate('status');

        return $this->returnValidate($validator);
    }

    /**
     * @function 获取后台 帖子数据列表传入参数验证
     *
     * @param array $data
     *
     * @return mixed
     */
    public function getPostListByRankingValidate()
    {
        $validator = new Validator($this->data);


        if (isset($this->data['title'])) {
            $validator
                ->maxLength(255, '标题太长')
                ->validate('title');
        }
        if ( !empty($this->data['type']) && $this->data['type'] !="no") {
            $validator
                ->required('type')
                ->validate('type');
        }

        if ( !empty($this->data['area_id']) && $this->data['area_id'] !="no") {
            $validator
                ->required('area_id')
                ->validate('area_id');
        }
        if ( !empty($this->data['quota']) && $this->data['quota'] !="no") {
            $validator
                ->required('quota')
                ->validate('quota');
        }
        if ( !empty($this->data['product_type']) && $this->data['product_type'] !="no" ) {
            $validator
                ->required('product_type')
                ->validate('product_type');
        }

        $validator
            ->integer('页大小必须是一个整型integer')
            ->between(10, 100, TRUE, '页大小只能为10-100')
            ->validate('page_size');
        $validator
            ->integer('当前页必须是一个整型integer')
            ->min(1, TRUE, '当前页最小为1')
            ->validate('current_page');


        return $this->returnValidate($validator);
    }

    /**
     * @function 帖子详情验证
     *
     * @param array $data
     *
     * @return mixed
     */
    public function getPostValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->required('帖子id必填')
            ->integer('帖子id必须是一个整型')
            ->min(1, TRUE, '帖子id最小为1')
            ->validate('id');

        return $this->returnValidate($validator);
    }

    /**
     * 点赞数、访问量传入参数验证
     *
     * @param array $data
     */
    public function changeVisitReliesValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->integer('帖子id必须是一个整型integer')
            ->min(1, TRUE, '帖子id最小为1')
            ->validate('id');

        $validator
            ->required('类型不能为空')
            ->oneOf('1,2', '类型有误,不符合约定')
            ->validate('type');
        if ( !empty($this->data['action'])) {
            $validator
                ->required('模式不能为空')
                ->oneOf('add,minus', '模式有误,不符合约定')
                ->validate('action');
        }
        return $this->returnValidate($validator);
    }


    /**
     * @function 本周热议验证
     *
     * @param array $data
     */
    public function getTimeMaxValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->required('获取数量不能为空')
            ->integer('获取数量必须是整数')
            ->min(1, true, '获取数量最小为1')
            ->validate('num');

        $validator
            ->required('排序类别不能为空')
            ->oneOf('reply_count,visits_count,thumb_cnt')
            ->validate('orderBy');

        $validator
            ->required('排序方式不能为空')
            ->oneOf('DESC,ASC')
            ->validate('sort');

        return $this->returnValidate($validator);
    }

    /**
     * @function 置顶参数验证
     *
     * @param array $data
     *
     * @return mixed
     */
    public function getTopPostsValidate()
    {
        $validator = new Validator($this->data);

        $validator
            ->integer('置顶参数不能为空')
            ->oneOf('0,1', '置顶参数不符合约定')
            ->validate('top');

        if (isset($this->data['cid'])) {
            $validator
                ->integer('分类必须是整数')
                ->validate('cid');
        }

        $validator
            ->required('数量不能为空')
            ->integer('数量必须是整数')
            ->between(1, 20, TRUE, '数量只能为1-20')
            ->validate('num');

        return $this->returnValidate($validator);
    }


    /** 获取单条帖子数据传入参数验证
     *
     * @param array $data
     */
    public function getPostOneValidate()
    {
        $validator = new Validator($this->data);
        $validator
            ->requestMethod('GET');
        $validator
            ->integer('帖子id必须是一个整型integer')
            ->validate('id');

        return $this->returnValidate($validator);

    }


    /** 获取用户发帖量
     * @param int $uid
     */
    public function getUserNum(array $data=array()){
        $validator = new \Framework\library\Validator($data);
        $validator
            ->requestMethod('GET');
        $validator
            ->integer('该参数值必须是一个整型integer')
            ->validate('uid');
        return $this->returnValidate($validator);

    }

}