<?php
/**
 * url 自定义路由配置
 * m 模块名
 * c 控制器名
 * a 方法名
 * paramete 接收参数
 */

return array(

    //论坛
    'bbsindex'=>
        ['m'=>'app', 'c'=>'index', 'a'=>'bbsIndex', 'paramete'=>'{url}'],
  'user-login'=>
      ['m'=>'app', 'c'=>'member', 'a'=>'index', 'paramete'=>'{url}'],
  'user-register'=>
      ['m'=>'app', 'c'=>'member', 'a'=>'register', 'paramete'=>'{type}'],
  'login-out'=>
      ['m'=>'app', 'c'=>'member', 'a'=>'loginOut', 'paramete'=>''],
    'detail'=>
        ['m'=>'app', 'c'=>'detail', 'a'=>'index', 'paramete'=>'{id}'],
    'user-home'=>
        ['m'=>'app', 'c'=>'users', 'a'=>'home', 'paramete'=>'{uid}'],
    'user-index'=>
        ['m'=>'app', 'c'=>'users', 'a'=>'index', 'paramete'=>'{uid}'],
    'user-set'=>
        ['m'=>'app', 'c'=>'users', 'a'=>'set', 'paramete'=>'{uid}'],
    'user-message'=>
        ['m'=>'app', 'c'=>'users', 'a'=>'message', 'paramete'=>'{uid}'],
    'loginout'=>
        ['m'=>'app', 'c'=>'login', 'a'=>'loginout', 'paramete'=>''],
    'search-cid'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'search', 'paramete'=>'{cid}'],
    'search'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'search', 'paramete'=>'{status}-{orderBy}-{cid}'],
    'sear'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'search', 'paramete'=>'{status-cid}'],
    'page'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'search', 'paramete'=>'{current_page}-{page_size}-{status}-{orderBy}-{cid}'],
    'keyword'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'search', 'paramete'=>'{keyword}'],
    'login'=>
        ['m'=>'app', 'c'=>'login', 'a'=>'index', 'paramete'=>''],
    'signup'=>
        ['m'=>'app', 'c'=>'login', 'a'=>'signup', 'paramete'=>''],
    'forget_mobile'=>
        ['m'=>'app', 'c'=>'login', 'a'=>'forget_mobile', 'paramete'=>''],
    'forget'=>
        ['m'=>'app', 'c'=>'login', 'a'=>'forget', 'paramete'=>''],
    'post-add'=>
        ['m'=>'app', 'c'=>'post', 'a'=>'add', 'paramete'=>''],
    'post-edit'=>
        ['m'=>'app', 'c'=>'post', 'a'=>'edit', 'paramete'=>'{id}'],


  //测评
  'index'=>
      ['m'=>'app', 'c'=>'CepingIndex', 'a'=>'index', 'paramete'=>'{paramete1}-{paramete2}'],
  'ranking'=>
      ['m'=>'app', 'c'=>'ranking', 'a'=>'index', 'paramete'=>'{type}-{area_id}-{quota}-{product_type}-{current_page}-{page_size}'],
  'overview'=>
      ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'overview', 'paramete'=>'{id}-{paramete2}'],
  'available'=>
      ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'available', 'paramete'=>'{id}-{paramete2}'],
    'available'=>
        ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'available', 'paramete'=>'{id}-{type}-{orderby}'],
  'responsetime'=>
        ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'responseTime', 'paramete'=>'{id}-{paramete2}'],
    'responsetime'=>
        ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'responseTime', 'paramete'=>'{id}-{type}-{orderby}'],
  'charttest'=>
      ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'charttest', 'paramete'=>'{id}-{paramete2}'],
  'snapshot'=>
      ['m'=>'app', 'c'=>'CePingDetail', 'a'=>'snapshot', 'paramete'=>'{id}-{current_page}-{page_size}-{status}-{orderBy}'],
    'articlesearch'=>
        ['m'=>'app', 'c'=>'search', 'a'=>'searchArticle', 'paramete'=>'{type}-{title}-{current_page}-{page_size}'],

);
