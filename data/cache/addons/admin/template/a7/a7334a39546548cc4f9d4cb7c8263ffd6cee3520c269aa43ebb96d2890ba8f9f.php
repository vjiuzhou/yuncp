<?php

/* common/header.html */
class __TwigTemplate_e7da7079f113fcc071a3135bc6d10bcf70392c99a9196a0df308d9552b4f543b extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["keywords"] ?? null), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/admin.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/css/layui.css\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/calfbbs.js\"></script>


    <style>
        .navleft-logo{line-height: 60px;padding-left:30px;color:#FFF;}
        .navleft-logo a{font-size: 1.7rem;font-weight: 400;}
        .navright .navBase{font-size: 1.05rem;font-family: \"微软雅黑\";font-weight: 300}
    </style>
</head>
<body>
<div class=\"header layui-row\">
    <div class=\"layui-col-md2 navleft-logo\" ><a  href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/index/index"), "method"), "html", null, true);
        echo "\"> Calfbbs</a></div>
    <ul class=\"layui-nav layui-col-md9 layui-bg-green\">
        <li class=\"layui-nav-item navright \">
            <a  class=\"navBase\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/index/index"), "method"), "html", null, true);
        echo "\" >基础</a>
        </li>
        <li class=\"layui-nav-item navright\">
            <a class=\"navBase\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/index/setting"), "method"), "html", null, true);
        echo "\">设置</a>
        </li>
        <li class=\"layui-nav-item navright\" >
            <a class=\"navBase\" >扩展</a>
            <dl class=\"layui-nav-child\"> <!-- 二级菜单 -->
                <dd><a  href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/modulesList"), "method"), "html", null, true);
        echo "\">已安装扩展</a></dd>
                <dd><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/uninstallModulesList"), "method"), "html", null, true);
        echo "\">未安装扩展</a></dd>
            </dl>
        </li>

        <li class=\"layui-nav-item \" style=\"float:right;\">
            <a href=\"\"><img src=\"http://t.cn/RCzsdCq\" class=\"layui-nav-img\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "username", array()), "html", null, true);
        echo "</a>
            <dl class=\"layui-nav-child\">
                <dd><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/setting/password"), "method"), "html", null, true);
        echo "\">修改密码</a></dd>
                <!--<dd><a href=\"javascript:;\">安全管理</a></dd>-->
                <dd><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/login/loginout"), "method"), "html", null, true);
        echo "\">退出</a></dd>
            </dl>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a id=\"clearcache\" href=\"javascript:clear()\">清除缓存<span class=\"-dot\"></span></a>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "/bbsindex.html\" target=\"_blank\">讨论区主页<span class=\"layui-badge-dot\"></span></a
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "\" target=\"_blank\">网站主页</a
        </li>
    </ul>
</div>


<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

    });
    layui.use('form', function () {
        var form = layui.form;


    });

    //清除缓存";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/files/dirName"), "method"), "html", null, true);
        echo "
        function clear() {

            var path = \"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "CALFBB", array(), "array"), "html", null, true);
        echo "./data/cache\";

            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5 浏览器执行代码
                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    layer.msg(\"主人、缓存已全部干掉！\");


                }
            }
            xmlhttp.open(\"GET\",\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/files/dirName"), "method"), "html", null, true);
        echo "\",true);
            xmlhttp.send();
        }
</script>";
    }

    public function getTemplateName()
    {
        return "common/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 97,  149 => 75,  143 => 72,  122 => 54,  116 => 51,  106 => 44,  101 => 42,  96 => 40,  88 => 35,  84 => 34,  76 => 29,  70 => 26,  64 => 23,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>{{title}}</title>
    <meta name=\"keywords\" content=\"{{keywords}}\">
    <meta name=\"description\" content=\"{{description}}\">
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/css/admin.css\">
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/layui/css/layui.css\">
    <script src=\"{{_G['APP']}}/resource/layui/layui.js\"></script>
    <script src=\"{{_G['APP']}}/resource/js/calfbbs.js\"></script>


    <style>
        .navleft-logo{line-height: 60px;padding-left:30px;color:#FFF;}
        .navleft-logo a{font-size: 1.7rem;font-weight: 400;}
        .navright .navBase{font-size: 1.05rem;font-family: \"微软雅黑\";font-weight: 300}
    </style>
</head>
<body>
<div class=\"header layui-row\">
    <div class=\"layui-col-md2 navleft-logo\" ><a  href=\"{{ G.url('admin/index/index')}}\"> Calfbbs</a></div>
    <ul class=\"layui-nav layui-col-md9 layui-bg-green\">
        <li class=\"layui-nav-item navright \">
            <a  class=\"navBase\" href=\"{{ G.url('admin/index/index')}}\" >基础</a>
        </li>
        <li class=\"layui-nav-item navright\">
            <a class=\"navBase\" href=\"{{ G.url('admin/index/setting')}}\">设置</a>
        </li>
        <li class=\"layui-nav-item navright\" >
            <a class=\"navBase\" >扩展</a>
            <dl class=\"layui-nav-child\"> <!-- 二级菜单 -->
                <dd><a  href=\"{{ G.url('admin/modules/modulesList')}}\">已安装扩展</a></dd>
                <dd><a href=\"{{G.url('admin/modules/uninstallModulesList')}}\">未安装扩展</a></dd>
            </dl>
        </li>

        <li class=\"layui-nav-item \" style=\"float:right;\">
            <a href=\"\"><img src=\"http://t.cn/RCzsdCq\" class=\"layui-nav-img\">{{userinfo.username}}</a>
            <dl class=\"layui-nav-child\">
                <dd><a href=\"{{ G.url('admin/setting/password')}}\">修改密码</a></dd>
                <!--<dd><a href=\"javascript:;\">安全管理</a></dd>-->
                <dd><a href=\"{{ G.url('admin/login/loginout')}}\">退出</a></dd>
            </dl>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a id=\"clearcache\" href=\"javascript:clear()\">清除缓存<span class=\"-dot\"></span></a>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a href=\"{{_G['APP_URL']}}/bbsindex.html\" target=\"_blank\">讨论区主页<span class=\"layui-badge-dot\"></span></a
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a href=\"{{_G['APP_URL']}}\" target=\"_blank\">网站主页</a
        </li>
    </ul>
</div>


<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

    });
    layui.use('form', function () {
        var form = layui.form;


    });

    //清除缓存{{ G.url('admin/files/dirName')}}
        function clear() {

            var path = \"{{_G['CALFBB']}}./data/cache\";

            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5 浏览器执行代码
                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    layer.msg(\"主人、缓存已全部干掉！\");


                }
            }
            xmlhttp.open(\"GET\",\"{{ G.url('admin/files/dirName')}}\",true);
            xmlhttp.send();
        }
</script>", "common/header.html", "/data/test/yunceping/bbs/addons/admin/template/common/header.html");
    }
}
