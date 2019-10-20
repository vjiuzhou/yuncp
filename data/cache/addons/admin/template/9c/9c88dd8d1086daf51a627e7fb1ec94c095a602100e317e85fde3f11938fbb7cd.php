<?php

/* article/edit.html */
class __TwigTemplate_a1654edc2faa79062633a058b6f6925c0a065b73bbb0210a1d6583d9f34ffd66 extends Twig_Template
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
        echo twig_include($this->env, $context, "common/header.html");
        echo "
<div class=\"admin\">
    ";
        // line 3
        echo twig_include($this->env, $context, "common/nav.html");
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/css/wangEditor.min.css\">
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/js/wangEditor.min.js\"></script>
    <style type=\"text/css\">
        .tpt_sels a {
            padding-right: 15px;
            position: relative
        }

        .tpt_sels a {
            padding: 0 20px 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a.selected {
            padding: 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a {
            padding: 0 8px;
            color: #fff;
            background: #5AC7A9;
            border: 1px #5AC7A9 solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_sels a em {
            width: 12px;
            height: 12px;
            font-style: normal;
            display: block;
            position: absolute;
            top: 7px;
            right: 4px;
            z-index: 2;
            background: url(/blog/Public/img/sx.png) no-repeat 0 0;
        }

        .wangEditor-menu-container .menu-item a {
            padding: 12px 0;
        }

        .wangEditor-menu-container .menu-item {
            height: 37px;
            width: 37px;
        }

        .wangEditor-menu-container .menu-group {
            padding: 0;
        }

        .wangEditor-container {
            border: 1px solid #e6e6e6;
        }
    </style>
    <div class=\"aright\">

        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin: 20px 30px 20px 20px;\">
            <legend>修改帖子</legend>
        </fieldset>

        <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/edit"), "method"), "html", null, true);
        echo "\"
              enctype=\"multipart/form-data\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">文章标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" required lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\"
                           class=\"layui-input\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">文章封面</label>
                <div class=\"layui-input-block\">
                    <div class=\"file-box\">

                        <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                            上传图片
                        </button>&nbsp;&nbsp;图片尺寸200X200
                        <input type=\"hidden\" name=\"cover\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "cover", array()), "html", null, true);
        echo "\"/>
                    </div>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\"></label>
                <div class=\"layui-input-block\">
                    <img width=\"115\" id=\"image\" height=\"40\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "cover", array()), "html", null, true);
        echo "\" alt=\"\"/>


                </div>
            </div>
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">国内或者国外</label>
                <div class=\"layui-input-block\">
                    <select name=\"type\">


                        <option value=\"china\" ";
        // line 126
        if (($this->getAttribute(($context["data"] ?? null), "type", array()) == "china")) {
            echo "selected";
        }
        echo ">国内</option>
                        <option value=\"abroad\" ";
        // line 127
        if (($this->getAttribute(($context["data"] ?? null), "type", array()) == "abroad")) {
            echo "selected";
        }
        echo ">国外</option>

                    </select>
                </div>
            </div>
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">国内或者国外</label>
                <div class=\"layui-input-block\">
                    <select name=\"product_type\">


                        <option value=\"cloud_server\" ";
        // line 138
        if (($this->getAttribute(($context["data"] ?? null), "product_type", array()) == "cloud_server")) {
            echo "selected";
        }
        echo ">云服务器</option>
                        <option value=\"vps_server\" ";
        // line 139
        if (($this->getAttribute(($context["data"] ?? null), "product_type", array()) == "vps_server")) {
            echo "selected";
        }
        echo ">VPS服务器</option>

                    </select>
                </div>
            </div>


            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">厂商</label>
                <div class=\"layui-input-block\">
                    <select name=\"manufacturer_id\">
                        ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufcturer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufcturers"]) {
            // line 151
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manufcturers"], "id", array()), "html", null, true);
            echo "\"  ";
            if (($this->getAttribute(($context["data"] ?? null), "manufacturer_id", array()) == $this->getAttribute($context["manufcturers"], "id", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["manufcturers"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufcturers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
                    </select>
                </div>
            </div>
            <!--<div class=\"layui-form-item\" style=\"width: 300px;\">-->
                <!--<label class=\"layui-form-label\">区域</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<select name=\"area_id\">-->
                        <!--";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["area"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["areaData"]) {
            echo "-->
                        <!--<option value=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["areaData"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == $this->getAttribute($context["areaData"], "id", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["areaData"], "name", array()), "html", null, true);
            echo "</option>-->
                        <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['areaData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "-->
                    <!--</select>-->
                <!--</div>-->
            <!--</div>-->
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">区域</label>
                <div class=\"layui-input-block\">
                    <select name=\"area_id\">
                        <option value=\"1\" ";
        // line 171
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 1)) {
            echo "selected";
        }
        echo ">美国</option>
                        <option value=\"2\" ";
        // line 172
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 2)) {
            echo "selected";
        }
        echo ">韩国</option>
                        <option value=\"3\" ";
        // line 173
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 3)) {
            echo "selected";
        }
        echo ">新加坡</option>
                        <option value=\"4\" ";
        // line 174
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 4)) {
            echo "selected";
        }
        echo ">俄罗斯</option>
                        <option value=\"5\" ";
        // line 175
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 5)) {
            echo "selected";
        }
        echo ">日本</option>
                        <option value=\"6\" ";
        // line 176
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 6)) {
            echo "selected";
        }
        echo ">香港</option>
                        <option value=\"7\" ";
        // line 177
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 7)) {
            echo "selected";
        }
        echo ">台湾</option>
                        <option value=\"8\" ";
        // line 178
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 8)) {
            echo "selected";
        }
        echo ">上海</option>
                        <option value=\"9\" ";
        // line 179
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 9)) {
            echo "selected";
        }
        echo ">北京</option>
                        <option value=\"10\" ";
        // line 180
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 10)) {
            echo "selected";
        }
        echo ">广州</option>
                        <option value=\"11\" ";
        // line 181
        if (($this->getAttribute(($context["data"] ?? null), "area_id", array()) == 11)) {
            echo "selected";
        }
        echo ">深圳</option>
                    </select>
                </div>
            </div>


            <!--<div class=\"layui-form-item\">-->
                <!--<label class=\"layui-form-label\">置顶</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<input type=\"radio\" name=\"top\" value=\"0\" title=\"否\" ";
        // line 190
        if (($this->getAttribute(($context["data"] ?? null), "top", array()) == 0)) {
            echo "checked";
        }
        echo ">-->
                    <!--<input type=\"radio\" name=\"top\" value=\"1\" title=\"是\" ";
        // line 191
        if (($this->getAttribute(($context["data"] ?? null), "top", array()) == 1)) {
            echo "checked";
        }
        echo ">-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class=\"layui-form-item\">-->
                <!--<label class=\"layui-form-label\">是否在万能查首页展示</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<input type=\"radio\" name=\"wnc_show\" value=\"0\" title=\"否\" ";
        // line 197
        if (($this->getAttribute(($context["data"] ?? null), "wnc_show", array()) == 0)) {
            echo "checked";
        }
        echo ">-->
                    <!--<input type=\"radio\" name=\"wnc_show\" value=\"1\" title=\"是\" ";
        // line 198
        if (($this->getAttribute(($context["data"] ?? null), "wnc_show", array()) == 1)) {
            echo "checked";
        }
        echo ">-->
                <!--</div>-->
            <!--</div>-->

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"status\" value=\"0\" title=\"未发布\" ";
        // line 205
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 0)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"1\" title=\"已发布\" ";
        // line 206
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 1)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"2\" title=\"置顶\" ";
        // line 207
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 2)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"3\" title=\"删除\" ";
        // line 208
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 3)) {
            echo "checked";
        }
        echo ">
                </div>
            </div>

            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">内存</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"memory\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "memory", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">CPU</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"cpu\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "cpu", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">磁盘</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ssd\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "ssd", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">带宽</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"bandwidth\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "bandwidth", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">ipv4</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ipv4\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "ipv4", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">ipv6</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ipv6\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "ipv6", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">流量</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"outflow\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "outflow", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">每月价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"month_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "month_price", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">半年价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"half_year_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "half_year_price", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">每年价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"year_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "year_price", array()), "html", null, true);
        echo "\">
                    </div>
                </div>

            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">测试host_ip</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"host\"   class=\"layui-input\" value=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "host", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">内存测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"memory_test\"   class=\"layui-input\" value=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "memory_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">CPU测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"cpu_test\"   class=\"layui-input\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "cpu_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">磁盘测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ssd_test\" class=\"layui-input\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "ssd_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">带宽测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"bandwidth_test\" class=\"layui-input\"  value=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "bandwidth_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">可用率</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"availability_ratio_test\" class=\"layui-input\"  value=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "availability_ratio_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">响应率测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"response_rate_test\"  class=\"layui-input\"  value=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "response_rate_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">并发测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"concurrent_test\"  autocomplete=\"off\" class=\"layui-input\"  value=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "concurrent_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">文件上传测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"upload_file_test\"  class=\"layui-input\"  value=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "upload_file_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">文件下载测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"download_file_test\"  class=\"layui-input\"  value=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "download_file_test", array()), "html", null, true);
        echo "\">
                    </div>
                </div>

            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">官网地址</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"url\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "url", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">优惠卷</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"discount\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "discount", array()), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">优惠折扣</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"discount_num\"   placeholder=\"输入整数或者浮点数\"  lay-verify=\"required|number\"  value=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "discount_num", array()), "html", null, true);
        echo "\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
            </div>

            <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<textarea name=\"description\" placeholder=\"用于搜索引擎\"-->
                              <!--class=\"layui-textarea\">";
        // line 364
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>-->
                <!--</div>-->
            <!--</div>-->
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">描述</label>
                <div class=\"layui-input-block\">
                    <textarea    id=\"describe\"   placeholder=\"用于搜索引擎\"  class=\"layui-textarea\" name=\"describes\" style=\"height:200px;width: 100%;\">
   ";
        // line 371
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "describes", array()), "html", null, true);
        echo "
                    </textarea>
                </div>
            </div>

            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
      <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
      ";
        // line 380
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "text", array()), "html", null, true);
        echo "
      </textarea>
                </div>
            </div>

            <div class=\"tpt_item\">
                <!--<input type=\"hidden\" name=\"keywords\" value=\"\">-->
                <input type=\"hidden\" name=\"uid\" value=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "uid", array()), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "id", array(), "array"), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"submit\" value=\"1\"/>
                <div id=\"tpt_sel\" class=\"tpt_sels\" style=\"margin-top: 20px;\">
\t\t<span style=\"margin-bottom: 5px;float: left;margin-left: 110px;\">
\t\t\t\t</span>
                    <div class=\"layui-form-item\" style=\"margin-bottom: 10px;\">
                        <!--<label class=\"layui-form-label\">文章标签</label>-->
                        <!--<div class=\"layui-input-block\">-->
                        <!--<input id=\"tpt_input\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 400px;float: left;margin-right: 20px;\">-->
                        <!--<button class=\"layui-btn\" id=\"tpt_btn\" type=\"button\" style=\"background: #FF5722;\">添加标签</button>-->
                        <!--</div>-->
                    </div>
                </div>
                <div id=\"tpt_pre\" class=\"tpt_pres layui-input-block cl\" style=\"margin-bottom: 0px;\">
                    <!--<a href=\"javascript:;\">新媒体</a><a href=\"javascript:;\">iphone8</a><a href=\"javascript:;\">游戏</a><a href=\"javascript:;\">视频</a><a href=\"javascript:;\">淘宝</a><a href=\"javascript:;\">雷军</a><a href=\"javascript:;\">网红</a><a href=\"javascript:;\">人工智能</a><a href=\"javascript:;\">大朋VR</a><a href=\"javascript:;\">机器人</a><a href=\"javascript:;\">小米</a><a href=\"javascript:;\">综艺</a><a href=\"javascript:;\">真人秀</a><a href=\"javascript:;\">自定义</a> -->
                </div>

                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">立即提交</button>
                        <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\" style=\"margin-top: 100px;\">

                    </div>
                </div>

            </div>
        </form>

        <script type=\"text/javascript\">
            \$(function () {
                \$('#tpt_input').keydown(function (e) {
                    if (e.which === 13) {
                        \$(\"#tpt_btn\").click();
                        e.preventDefault();
                        return false;
                    }
                });
                \$(\"#tpt_sel\").on('click', 'a>em', function () {
                    var name = \"keywords\";
                    var tag = \$(this).parent().text();
                    \$(this).parent().remove();
                    var tags = new Array();
                    \$(\"#tpt_sel\").find('a').each(function () {
                        tags.push(\$(this).text());
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_pre a:contains('\" + tag + \"')\").removeClass(\"selected\");
                });
                \$(\"#tpt_btn\").click(function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(\"#tpt_input\").val());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                        \$(\"#tpt_pre a:contains('\" + tag + \"')\").addClass(\"selected\");
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_input\").val('');
                });
                \$(\"#tpt_pre\").on('click', 'a:not(.selected)', function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(this).text());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(this).addClass('selected');
                });
            });
        </script>
        <script>
            layui.use('form', function () {
//                var form = layui.form();
            });
        </script>
        <script type=\"text/javascript\">
            var editor = new wangEditor('textarea');
            editor.config.uploadImgUrl = \"";
        // line 488
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/doUploadPic"), "method"), "html", null, true);
        echo "\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor.create();
        </script>
        <script type=\"text/javascript\">
            var editor2 = new wangEditor('describe');
            editor2.config.uploadImgUrl = \"";
        // line 544
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/doUploadPic"), "method"), "html", null, true);
        echo "\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor2.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor2.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor2.create();
        </script>


        <script>

            layui.use(['form','upload'], function(){
                var upload = layui.upload;
                /**
                 * 图片上传
                 */
                var uploadInst = upload.render({
                    elem: '#upload' //绑定元素
                    ,url: escapeUrl(\"";
        // line 609
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=files&a=uploadFile\") //上传接口
                    ,method:\"post\"
                    ,data:{width:350}
                    ,done: function(res){
                        if(res.code==1001 && res.data){
                            \$('#image').attr('src',\"";
        // line 614
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/\"+res.data);
                            \$('input[name=cover]').val(res.data);
                        }
                    }
                    ,error: function(res){

                    }
                });
            });


        </script>
    </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "article/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 614,  899 => 609,  831 => 544,  772 => 488,  669 => 388,  665 => 387,  655 => 380,  643 => 371,  633 => 364,  621 => 355,  612 => 349,  603 => 343,  591 => 334,  582 => 328,  573 => 322,  564 => 316,  555 => 310,  545 => 303,  536 => 297,  527 => 291,  518 => 285,  509 => 279,  497 => 270,  488 => 264,  479 => 258,  470 => 252,  461 => 246,  452 => 240,  443 => 234,  434 => 228,  425 => 222,  416 => 216,  403 => 208,  397 => 207,  391 => 206,  385 => 205,  373 => 198,  367 => 197,  356 => 191,  350 => 190,  336 => 181,  330 => 180,  324 => 179,  318 => 178,  312 => 177,  306 => 176,  300 => 175,  294 => 174,  288 => 173,  282 => 172,  276 => 171,  266 => 163,  252 => 162,  246 => 161,  236 => 153,  221 => 151,  217 => 150,  201 => 139,  195 => 138,  179 => 127,  173 => 126,  157 => 115,  147 => 108,  133 => 97,  123 => 90,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"common/header.html\")}}
<div class=\"admin\">
    {{ include(\"common/nav.html\")}}
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/wangEditor/css/wangEditor.min.css\">
    <script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/wangEditor/js/wangEditor.min.js\"></script>
    <style type=\"text/css\">
        .tpt_sels a {
            padding-right: 15px;
            position: relative
        }

        .tpt_sels a {
            padding: 0 20px 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a.selected {
            padding: 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a {
            padding: 0 8px;
            color: #fff;
            background: #5AC7A9;
            border: 1px #5AC7A9 solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_sels a em {
            width: 12px;
            height: 12px;
            font-style: normal;
            display: block;
            position: absolute;
            top: 7px;
            right: 4px;
            z-index: 2;
            background: url(/blog/Public/img/sx.png) no-repeat 0 0;
        }

        .wangEditor-menu-container .menu-item a {
            padding: 12px 0;
        }

        .wangEditor-menu-container .menu-item {
            height: 37px;
            width: 37px;
        }

        .wangEditor-menu-container .menu-group {
            padding: 0;
        }

        .wangEditor-container {
            border: 1px solid #e6e6e6;
        }
    </style>
    <div class=\"aright\">

        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin: 20px 30px 20px 20px;\">
            <legend>修改帖子</legend>
        </fieldset>

        <form class=\"layui-form bform\" method=\"post\" action=\"{{ G.url('admin/article/edit')}}\"
              enctype=\"multipart/form-data\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">文章标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" required lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\"
                           class=\"layui-input\" value=\"{{data.title}}\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">文章封面</label>
                <div class=\"layui-input-block\">
                    <div class=\"file-box\">

                        <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                            上传图片
                        </button>&nbsp;&nbsp;图片尺寸200X200
                        <input type=\"hidden\" name=\"cover\" value=\"{{data.cover}}\"/>
                    </div>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\"></label>
                <div class=\"layui-input-block\">
                    <img width=\"115\" id=\"image\" height=\"40\" src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.cover}}\" alt=\"\"/>


                </div>
            </div>
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">国内或者国外</label>
                <div class=\"layui-input-block\">
                    <select name=\"type\">


                        <option value=\"china\" {% if data.type=='china' %}selected{% endif %}>国内</option>
                        <option value=\"abroad\" {% if data.type=='abroad' %}selected{% endif %}>国外</option>

                    </select>
                </div>
            </div>
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">国内或者国外</label>
                <div class=\"layui-input-block\">
                    <select name=\"product_type\">


                        <option value=\"cloud_server\" {% if data.product_type=='cloud_server' %}selected{% endif %}>云服务器</option>
                        <option value=\"vps_server\" {% if data.product_type=='vps_server' %}selected{% endif %}>VPS服务器</option>

                    </select>
                </div>
            </div>


            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">厂商</label>
                <div class=\"layui-input-block\">
                    <select name=\"manufacturer_id\">
                        {% for manufcturers in manufcturer %}
                        <option value=\"{{manufcturers.id}}\"  {% if data.manufacturer_id==manufcturers.id %}selected{% endif %}>{{manufcturers.name}}</option>
                        {% endfor %}

                    </select>
                </div>
            </div>
            <!--<div class=\"layui-form-item\" style=\"width: 300px;\">-->
                <!--<label class=\"layui-form-label\">区域</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<select name=\"area_id\">-->
                        <!--{% for areaData in area %}-->
                        <!--<option value=\"{{areaData.id}}\" {% if data.area_id==areaData.id %}selected{% endif %}>{{areaData.name}}</option>-->
                        <!--{% endfor %}-->
                    <!--</select>-->
                <!--</div>-->
            <!--</div>-->
            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">区域</label>
                <div class=\"layui-input-block\">
                    <select name=\"area_id\">
                        <option value=\"1\" {% if data.area_id==1 %}selected{% endif %}>美国</option>
                        <option value=\"2\" {% if data.area_id==2 %}selected{% endif %}>韩国</option>
                        <option value=\"3\" {% if data.area_id==3 %}selected{% endif %}>新加坡</option>
                        <option value=\"4\" {% if data.area_id==4 %}selected{% endif %}>俄罗斯</option>
                        <option value=\"5\" {% if data.area_id==5 %}selected{% endif %}>日本</option>
                        <option value=\"6\" {% if data.area_id==6 %}selected{% endif %}>香港</option>
                        <option value=\"7\" {% if data.area_id==7 %}selected{% endif %}>台湾</option>
                        <option value=\"8\" {% if data.area_id==8 %}selected{% endif %}>上海</option>
                        <option value=\"9\" {% if data.area_id==9 %}selected{% endif %}>北京</option>
                        <option value=\"10\" {% if data.area_id==10 %}selected{% endif %}>广州</option>
                        <option value=\"11\" {% if data.area_id==11 %}selected{% endif %}>深圳</option>
                    </select>
                </div>
            </div>


            <!--<div class=\"layui-form-item\">-->
                <!--<label class=\"layui-form-label\">置顶</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<input type=\"radio\" name=\"top\" value=\"0\" title=\"否\" {% if data.top==0 %}checked{% endif %}>-->
                    <!--<input type=\"radio\" name=\"top\" value=\"1\" title=\"是\" {% if data.top==1 %}checked{% endif %}>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class=\"layui-form-item\">-->
                <!--<label class=\"layui-form-label\">是否在万能查首页展示</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<input type=\"radio\" name=\"wnc_show\" value=\"0\" title=\"否\" {% if data.wnc_show==0 %}checked{% endif %}>-->
                    <!--<input type=\"radio\" name=\"wnc_show\" value=\"1\" title=\"是\" {% if data.wnc_show==1 %}checked{% endif %}>-->
                <!--</div>-->
            <!--</div>-->

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"status\" value=\"0\" title=\"未发布\" {% if data.status==0 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"1\" title=\"已发布\" {% if data.status==1 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"2\" title=\"置顶\" {% if data.status==2 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"3\" title=\"删除\" {% if data.status==3 %}checked{% endif %}>
                </div>
            </div>

            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">内存</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"memory\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"{{data.memory}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">CPU</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"cpu\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"{{data.cpu}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">磁盘</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ssd\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\" value=\"{{data.ssd}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">带宽</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"bandwidth\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.bandwidth}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">ipv4</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ipv4\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.ipv4}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">ipv6</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ipv6\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.ipv6}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">流量</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"outflow\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.outflow}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">每月价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"month_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.month_price}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">半年价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"half_year_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.half_year_price}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">每年价格</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"year_price\" lay-verify=\"required|number\" autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.year_price}}\">
                    </div>
                </div>

            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">测试host_ip</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"host\"   class=\"layui-input\" value=\"{{data.host}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">内存测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"memory_test\"   class=\"layui-input\" value=\"{{data.memory_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">CPU测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"cpu_test\"   class=\"layui-input\" value=\"{{data.cpu_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">磁盘测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"ssd_test\" class=\"layui-input\" value=\"{{data.ssd_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">带宽测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"bandwidth_test\" class=\"layui-input\"  value=\"{{data.bandwidth_test}}\">
                    </div>
                </div>

                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">可用率</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"availability_ratio_test\" class=\"layui-input\"  value=\"{{data.availability_ratio_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">响应率测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"response_rate_test\"  class=\"layui-input\"  value=\"{{data.response_rate_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">并发测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"concurrent_test\"  autocomplete=\"off\" class=\"layui-input\"  value=\"{{data.concurrent_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">文件上传测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"upload_file_test\"  class=\"layui-input\"  value=\"{{data.upload_file_test}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">文件下载测试</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"download_file_test\"  class=\"layui-input\"  value=\"{{data.download_file_test}}\">
                    </div>
                </div>

            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">官网地址</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"url\" autocomplete=\"off\" class=\"layui-input\" value=\"{{data.url}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">优惠卷</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"discount\" autocomplete=\"off\" class=\"layui-input\" value=\"{{data.discount}}\">
                    </div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">优惠折扣</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"discount_num\"   placeholder=\"输入整数或者浮点数\"  lay-verify=\"required|number\"  value=\"{{data.discount_num}}\" autocomplete=\"off\" class=\"layui-input\">
                    </div>
                </div>
            </div>

            <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<textarea name=\"description\" placeholder=\"用于搜索引擎\"-->
                              <!--class=\"layui-textarea\">{{data.description}}</textarea>-->
                <!--</div>-->
            <!--</div>-->
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">描述</label>
                <div class=\"layui-input-block\">
                    <textarea    id=\"describe\"   placeholder=\"用于搜索引擎\"  class=\"layui-textarea\" name=\"describes\" style=\"height:200px;width: 100%;\">
   {{data.describes}}
                    </textarea>
                </div>
            </div>

            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
      <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
      {{data.text}}
      </textarea>
                </div>
            </div>

            <div class=\"tpt_item\">
                <!--<input type=\"hidden\" name=\"keywords\" value=\"\">-->
                <input type=\"hidden\" name=\"uid\" value=\"{{data.uid}}\"/>
                <input type=\"hidden\" name=\"id\" value=\"{{_GPC['id']}}\"/>
                <input type=\"hidden\" name=\"submit\" value=\"1\"/>
                <div id=\"tpt_sel\" class=\"tpt_sels\" style=\"margin-top: 20px;\">
\t\t<span style=\"margin-bottom: 5px;float: left;margin-left: 110px;\">
\t\t\t\t</span>
                    <div class=\"layui-form-item\" style=\"margin-bottom: 10px;\">
                        <!--<label class=\"layui-form-label\">文章标签</label>-->
                        <!--<div class=\"layui-input-block\">-->
                        <!--<input id=\"tpt_input\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 400px;float: left;margin-right: 20px;\">-->
                        <!--<button class=\"layui-btn\" id=\"tpt_btn\" type=\"button\" style=\"background: #FF5722;\">添加标签</button>-->
                        <!--</div>-->
                    </div>
                </div>
                <div id=\"tpt_pre\" class=\"tpt_pres layui-input-block cl\" style=\"margin-bottom: 0px;\">
                    <!--<a href=\"javascript:;\">新媒体</a><a href=\"javascript:;\">iphone8</a><a href=\"javascript:;\">游戏</a><a href=\"javascript:;\">视频</a><a href=\"javascript:;\">淘宝</a><a href=\"javascript:;\">雷军</a><a href=\"javascript:;\">网红</a><a href=\"javascript:;\">人工智能</a><a href=\"javascript:;\">大朋VR</a><a href=\"javascript:;\">机器人</a><a href=\"javascript:;\">小米</a><a href=\"javascript:;\">综艺</a><a href=\"javascript:;\">真人秀</a><a href=\"javascript:;\">自定义</a> -->
                </div>

                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">立即提交</button>
                        <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\" style=\"margin-top: 100px;\">

                    </div>
                </div>

            </div>
        </form>

        <script type=\"text/javascript\">
            \$(function () {
                \$('#tpt_input').keydown(function (e) {
                    if (e.which === 13) {
                        \$(\"#tpt_btn\").click();
                        e.preventDefault();
                        return false;
                    }
                });
                \$(\"#tpt_sel\").on('click', 'a>em', function () {
                    var name = \"keywords\";
                    var tag = \$(this).parent().text();
                    \$(this).parent().remove();
                    var tags = new Array();
                    \$(\"#tpt_sel\").find('a').each(function () {
                        tags.push(\$(this).text());
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_pre a:contains('\" + tag + \"')\").removeClass(\"selected\");
                });
                \$(\"#tpt_btn\").click(function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(\"#tpt_input\").val());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                        \$(\"#tpt_pre a:contains('\" + tag + \"')\").addClass(\"selected\");
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_input\").val('');
                });
                \$(\"#tpt_pre\").on('click', 'a:not(.selected)', function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(this).text());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(this).addClass('selected');
                });
            });
        </script>
        <script>
            layui.use('form', function () {
//                var form = layui.form();
            });
        </script>
        <script type=\"text/javascript\">
            var editor = new wangEditor('textarea');
            editor.config.uploadImgUrl = \"{{ G.url('admin/posts/doUploadPic') }}\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor.create();
        </script>
        <script type=\"text/javascript\">
            var editor2 = new wangEditor('describe');
            editor2.config.uploadImgUrl = \"{{ G.url('admin/posts/doUploadPic') }}\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor2.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor2.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor2.create();
        </script>


        <script>

            layui.use(['form','upload'], function(){
                var upload = layui.upload;
                /**
                 * 图片上传
                 */
                var uploadInst = upload.render({
                    elem: '#upload' //绑定元素
                    ,url: escapeUrl(\"{{_G['APP_URL']}}?m=admin&c=files&a=uploadFile\") //上传接口
                    ,method:\"post\"
                    ,data:{width:350}
                    ,done: function(res){
                        if(res.code==1001 && res.data){
                            \$('#image').attr('src',\"{{_G['ATTACHMENT_ROOT']}}/\"+res.data);
                            \$('input[name=cover]').val(res.data);
                        }
                    }
                    ,error: function(res){

                    }
                });
            });


        </script>
    </div>
</div>
</body>
</html>", "article/edit.html", "/data/test/yunceping/bbs/addons/admin/template/article/edit.html");
    }
}