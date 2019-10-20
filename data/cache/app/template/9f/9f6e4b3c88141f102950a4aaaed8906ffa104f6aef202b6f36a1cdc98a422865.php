<?php

/* ranking/index.html */
class __TwigTemplate_a33280eadb22df52ba10ecab03267bf6a015d64b5f980a0e3f361850e4c1228d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "common/ceping_header.html");
        echo "

";
        // line 3
        echo twig_include($this->env, $context, "common/ceping_nav.html");
        echo "



    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/label.css\">



    <div class=\"inn-user-filter layui-form\">
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >国外地区排行</a>
                    <a class=\"all-item type_one   ";
        // line 17
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == "no")) {
            echo " on  ";
        }
        echo " \" href=\"ranking-no-no-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">全部</a>

                    <a class=\"all-item type_one   ";
        // line 19
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 2)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-abroad-2-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">韩国</a>

                    <a class=\"all-item type_one  ";
        // line 21
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 1)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-abroad-1-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">美国</a>
                    <a class=\"type_one  ";
        // line 22
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 3)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-abroad-3-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">新加坡</a>
                    <a class=\"type_one  ";
        // line 23
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 4)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-abroad-4-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">俄罗斯</a>
                    <a class=\"type_one  ";
        // line 24
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 5)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-abroad-5-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">日本</a>
                </div>
            </div>
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content role\" style=\"width:100%!important\">
                <div class=\"list clearfix open\">
                    <a class=\"\" >国内地区排行</a>
                    <!--<a class=\"role_one on \" href=\"ranking-china-0-";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">全部</a>-->
                    <a class=\" all-item role_one ";
        // line 34
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 6)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-china-6-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">香港</a>
                    <a class=\"role_one ";
        // line 35
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 7)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-china-7-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">台湾</a>
                    <a class=\"role_one ";
        // line 36
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 8)) {
            echo " on  ";
        }
        echo " \" href=\"ranking-china-8-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">上海</a>
                    <a class=\"role_one ";
        // line 37
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 9)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-china-9-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">北京</a>
                    <a class=\"role_one ";
        // line 38
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 10)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-china-10-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">广州</a>
                    <a class=\"role_one ";
        // line 39
        if (($this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array") == 11)) {
            echo " on  ";
        }
        echo "\" href=\"ranking-china-11-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">深圳</a>

                </div>
            </div>
            <!--<span class=\"filter-more roleMore\">收起</span>-->
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >购买指标排行</a>
                    <a class=\"type_one  ";
        // line 50
        if (($this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array") == "no")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-no-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">全部</a>
                    <a class=\" type_one ";
        // line 51
        if (($this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array") == "time")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-time-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">评测时间</a>
                    <a class=\"type_one ";
        // line 52
        if (($this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array") == "price")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-price-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">价格</a>
                    <a class=\"type_one ";
        // line 53
        if (($this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array") == "responsetitime")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-responsetitime-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">响应速度</a>
                    <a class=\"type_one ";
        // line 54
        if (($this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array") == "available")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-available-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo ".html\">可用率</a>
                </div>
            </div>
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >产品类别排行</a>
                    <a class=\"type_one  ";
        // line 63
        if (($this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array") == "no")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-no.html\">全部</a>

                    <a class=\"all-item type_one ";
        // line 65
        if (($this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array") == "cloud_server")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-cloud_server.html\">云服务器</a>
                    <a class=\"type_one  ";
        // line 66
        if (($this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array") == "vps_server")) {
            echo " on  ";
        }
        echo "\" href=\"ranking-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "-vps_server.html\">VPS服务器</a>
                    <!--<a class=\"type_one \" href=\"/2/0/0/0.html\">虚拟主机</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class=\"layui-row layui-col-space20 contentBot\">
        <div class=\"layui-col-md8 index-list\">
            <h2>最新评测</h2>
            <ul class=\"newsList\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 77
            echo "                <li>
                    <a class=\"img\" href=\"overview-";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cover", array()), "html", null, true);
            echo "\"></a><div class=\"txt\">
                    <a href=\"overview-";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
                    <div class=\"label\">
                        ";
            // line 81
            if (($this->getAttribute($context["data"], "product_type", array()) == "cloud_server")) {
                // line 82
                echo "                        <span>云服务器</span>
                        ";
            } else {
                // line 84
                echo "                        <span class=\"violet\">VPS服务器</span>
                        ";
            }
            // line 86
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo " <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "comment_num", array()), "html", null, true);
            echo "</div>
                    <p class=\"cont\">
                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "describes", array()), "html_attr");
            echo "
                    </p>
                </div>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
            </ul>


                <div style=\"text-align: center\">
                    <!-- <div class=\"laypage-main\"> -->
                    <div id=\"pages\"></div>
                    <!-- </div> -->
                </div>


        </div>
        <div class=\"layui-col-md4 index-side\">
            <div class=\"newsSide\">
                <h2>热门测评</h2>
                <ul>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交部：施压与讹诈不会起作用</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交 部：施压与讹诈不会起作用</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>
</div>



<script>
    /**
     * 构造分页功能
     */
//    var status=";
        // line 132
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "
    var current_page=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "current_page", array(), "array"), "html", null, true);
        echo "\";
    var page_size=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "page_size", array(), "array"), "html", null, true);
        echo "\";
    var type=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "\";
    var area_id=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "\";
    var quota=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "\";
    var product_type=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo "\";

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function(obj,first){
                // console.log(obj)
                // var url=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("current_page" => "currs", "page_size" => "limit", "status" => "statuss", "orderBy" => "orderByy", "cid" => "cidd")), "method"), "html", null, true);
        echo "\";
                var url=\"ranking-types-area_ids-quotas-product_types-current_pages-page_sizes.html\";

                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"current_pages\", obj.curr);
                url = url.replace(\"page_sizes\", obj.limit);
                url = url.replace(\"types\", type);
                url = url.replace(\"area_ids\", area_id);
                url = url.replace(\"quotas\", quota);
                url = url.replace(\"product_types\", product_type);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });
</script>

";
        // line 176
        echo twig_include($this->env, $context, "common/ceping_footer.html");
    }

    public function getTemplateName()
    {
        return "ranking/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 176,  476 => 152,  469 => 148,  465 => 147,  460 => 145,  450 => 138,  446 => 137,  442 => 136,  438 => 135,  434 => 134,  430 => 133,  426 => 132,  409 => 118,  405 => 117,  401 => 116,  397 => 115,  393 => 114,  389 => 113,  385 => 112,  381 => 111,  377 => 110,  373 => 109,  355 => 93,  344 => 88,  336 => 86,  332 => 84,  328 => 82,  326 => 81,  319 => 79,  311 => 78,  308 => 77,  304 => 76,  283 => 66,  271 => 65,  258 => 63,  238 => 54,  226 => 53,  214 => 52,  202 => 51,  190 => 50,  170 => 39,  160 => 38,  150 => 37,  140 => 36,  130 => 35,  120 => 34,  114 => 33,  96 => 24,  86 => 23,  76 => 22,  66 => 21,  55 => 19,  44 => 17,  31 => 7,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"common/ceping_header.html\")}}

{{ include(\"common/ceping_nav.html\")}}



    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/label.css\">



    <div class=\"inn-user-filter layui-form\">
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >国外地区排行</a>
                    <a class=\"all-item type_one   {% if _GPC['area_id']=='no' %} on  {% endif %} \" href=\"ranking-no-no-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">全部</a>

                    <a class=\"all-item type_one   {% if _GPC['area_id']==2 %} on  {% endif %}\" href=\"ranking-abroad-2-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">韩国</a>

                    <a class=\"all-item type_one  {% if _GPC['area_id']==1 %} on  {% endif %}\" href=\"ranking-abroad-1-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">美国</a>
                    <a class=\"type_one  {% if _GPC['area_id']==3%} on  {% endif %}\" href=\"ranking-abroad-3-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">新加坡</a>
                    <a class=\"type_one  {% if _GPC['area_id']==4 %} on  {% endif %}\" href=\"ranking-abroad-4-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">俄罗斯</a>
                    <a class=\"type_one  {% if _GPC['area_id']==5 %} on  {% endif %}\" href=\"ranking-abroad-5-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">日本</a>
                </div>
            </div>
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content role\" style=\"width:100%!important\">
                <div class=\"list clearfix open\">
                    <a class=\"\" >国内地区排行</a>
                    <!--<a class=\"role_one on \" href=\"ranking-china-0-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">全部</a>-->
                    <a class=\" all-item role_one {% if _GPC['area_id']==6 %} on  {% endif %}\" href=\"ranking-china-6-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">香港</a>
                    <a class=\"role_one {% if _GPC['area_id']==7 %} on  {% endif %}\" href=\"ranking-china-7-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">台湾</a>
                    <a class=\"role_one {% if _GPC['area_id']==8 %} on  {% endif %} \" href=\"ranking-china-8-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">上海</a>
                    <a class=\"role_one {% if _GPC['area_id']==9 %} on  {% endif %}\" href=\"ranking-china-9-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">北京</a>
                    <a class=\"role_one {% if _GPC['area_id']==10 %} on  {% endif %}\" href=\"ranking-china-10-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">广州</a>
                    <a class=\"role_one {% if _GPC['area_id']==11 %} on  {% endif %}\" href=\"ranking-china-11-{{_GPC['quota']}}-{{_GPC['product_type']}}.html\">深圳</a>

                </div>
            </div>
            <!--<span class=\"filter-more roleMore\">收起</span>-->
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >购买指标排行</a>
                    <a class=\"type_one  {% if _GPC['quota'] =='no' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-no-{{_GPC['product_type']}}.html\">全部</a>
                    <a class=\" type_one {% if _GPC['quota'] =='time' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-time-{{_GPC['product_type']}}.html\">评测时间</a>
                    <a class=\"type_one {% if _GPC['quota'] =='price' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-price-{{_GPC['product_type']}}.html\">价格</a>
                    <a class=\"type_one {% if _GPC['quota'] =='responsetitime' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-responsetitime-{{_GPC['product_type']}}.html\">响应速度</a>
                    <a class=\"type_one {% if _GPC['quota'] =='available' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-available-{{_GPC['product_type']}}.html\">可用率</a>
                </div>
            </div>
        </div>
        <div class=\"filter-box clearfix layui-form-item\">

            <div class=\"filter-content type\" style=\"width:100%!important\">
                <div class=\"list clearfix\">
                    <a class=\"\" >产品类别排行</a>
                    <a class=\"type_one  {% if _GPC['product_type'] =='no' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-{{_GPC['quota']}}-no.html\">全部</a>

                    <a class=\"all-item type_one {% if _GPC['product_type'] =='cloud_server' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-{{_GPC['quota']}}-cloud_server.html\">云服务器</a>
                    <a class=\"type_one  {% if _GPC['product_type'] =='vps_server' %} on  {% endif %}\" href=\"ranking-{{_GPC['type']}}-{{_GPC['area_id']}}-{{_GPC['quota']}}-vps_server.html\">VPS服务器</a>
                    <!--<a class=\"type_one \" href=\"/2/0/0/0.html\">虚拟主机</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class=\"layui-row layui-col-space20 contentBot\">
        <div class=\"layui-col-md8 index-list\">
            <h2>最新评测</h2>
            <ul class=\"newsList\">
                {% for data in list %}
                <li>
                    <a class=\"img\" href=\"overview-{{data.id}}.html\"><img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.cover}}\"></a><div class=\"txt\">
                    <a href=\"overview-{{data.id}}.html\">{{data.title}}</a>
                    <div class=\"label\">
                        {% if data.product_type==\"cloud_server\" %}
                        <span>云服务器</span>
                        {% else %}
                        <span class=\"violet\">VPS服务器</span>
                        {% endif %}
                        {{data.name}} <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>{{data.comment_num}}</div>
                    <p class=\"cont\">
                        {{ data.describes|e('html_attr') }}
                    </p>
                </div>
                </li>
                {% endfor %}

            </ul>


                <div style=\"text-align: center\">
                    <!-- <div class=\"laypage-main\"> -->
                    <div id=\"pages\"></div>
                    <!-- </div> -->
                </div>


        </div>
        <div class=\"layui-col-md4 index-side\">
            <div class=\"newsSide\">
                <h2>热门测评</h2>
                <ul>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交部：施压与讹诈不会起作用</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交 部：施压与讹诈不会起作用</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
                    <li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>
</div>



<script>
    /**
     * 构造分页功能
     */
//    var status={{status}}
    var current_page=\"{{_GPC['current_page']}}\";
    var page_size=\"{{_GPC['page_size']}}\";
    var type=\"{{_GPC['type']}}\";
    var area_id=\"{{_GPC['area_id']}}\";
    var quota=\"{{_GPC['quota']}}\";
    var product_type=\"{{_GPC['product_type']}}\";

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"{{pagination.page_size}}\",
            curr:\"{{pagination.current_page}}\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function(obj,first){
                // console.log(obj)
                // var url=\"{{ G.url('app/search/search',{'current_page':'currs','page_size':'limit','status':'statuss','orderBy':'orderByy','cid':'cidd'})}}\";
                var url=\"ranking-types-area_ids-quotas-product_types-current_pages-page_sizes.html\";

                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"current_pages\", obj.curr);
                url = url.replace(\"page_sizes\", obj.limit);
                url = url.replace(\"types\", type);
                url = url.replace(\"area_ids\", area_id);
                url = url.replace(\"quotas\", quota);
                url = url.replace(\"product_types\", product_type);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });
</script>

{{ include(\"common/ceping_footer.html\")}}", "ranking/index.html", "/data/test/yunceping/bbs/app/template/ranking/index.html");
    }
}
