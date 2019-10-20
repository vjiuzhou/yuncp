<?php

/* common/ceping_detail_nav.html */
class __TwigTemplate_e1205f92edf0e887294305240d1caeeb4a7009cc2800ec484309a6a3a32b7e32 extends Twig_Template
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
        echo "
<!--<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/global.css\">-->
<!--<div class=\"fly-panel fly-column\">-->

    <!--<div class=\"layui-container\">-->
        <!--<ul class=\"layui-clear\">-->
            <!--<li class=\"layui-hide-xs layui-this\"><a href=\"overview.html\">评测概览-->
                <!--&lt;!&ndash;<span class=\"layui-badge-dot\"></span>&ndash;&gt; </a></li>-->
            <!--<li><a href=\"available.html\">24小时响应时间统计</a></li>-->
            <!--<li><a href=\"available.html\">24小时可用率统计</a></li>-->
            <!--<li><a href=\"available.html\">24小时测试数据详情</a></li>-->
            <!--<li><a href=\"/course/zdgg\"> 历史手动测评文章</a></li>-->
            <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>-->
            <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"/member/score/\">用户评论（13）</a></li>-->
        <!--</ul>-->


        <!--&lt;!&ndash;<div class=\"fly-column-right layui-hide-xs\">&ndash;&gt;-->
        <!--&lt;!&ndash;&lt;!&ndash;<span class=\"fly-search\"><a href=\"/search/keyword-在这里输入相应的关键词\"><i class=\"layui-icon\"></i></a></span>&ndash;&gt;&ndash;&gt;-->
        <!--&lt;!&ndash;&lt;!&ndash;<a href=\"/member/qiandao/\"><button class=\"layui-btn layui-btn-sm layui-bg-black signin\">每日签到</button></a>&ndash;&gt;&ndash;&gt;-->

        <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/label.css\">



<div class=\"inn-user-filter layui-form\" style=\"padding:0px;background-color:#F2F2F2\">
    <div class=\"fly-panel fly-column\">

        <div class=\"layui-container\">
            <ul class=\"layui-clear\">
                <li class=\"layui-hide-xs  ";
        // line 35
        if (($this->getAttribute(($context["_GPC"] ?? null), "a", array(), "array") == "overview")) {
            echo "  layui-this ";
        }
        echo "\"><a href=\"overview-";
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\">评测概览
                    <!--<span class=\"layui-badge-dot\"></span>--> </a></li>
                <!--<li><a href=\"available-";
        // line 37
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\">测评参数及排行</a></li>-->

                <li class=\"layui-hide-xs  ";
        // line 39
        if (($this->getAttribute(($context["_GPC"] ?? null), "a", array(), "array") == "responseTime")) {
            echo "  layui-this ";
        }
        echo "\"><a href=\"responsetime-";
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\">24小时响应时间统计</a></li>
                <li  class=\"layui-hide-xs  ";
        // line 40
        if (($this->getAttribute(($context["_GPC"] ?? null), "a", array(), "array") == "available")) {
            echo "  layui-this ";
        }
        echo "\"><a href=\"available-";
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\">24小时可用率统计</a></li>
                <li  class=\"layui-hide-xs  ";
        // line 41
        if (($this->getAttribute(($context["_GPC"] ?? null), "a", array(), "array") == "snapshot")) {
            echo "  layui-this ";
        }
        echo "\"><a href=\"snapshot-";
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\">24小时测试数据详情</a></li>
                <!--<li  ><a href=\"snapshot-";
        // line 42
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo ".html\"> 历史手动测评文章</a></li>-->
                <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>-->
                <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"/member/score/\">用户评论（13）</a></li>-->
            </ul>


            <!--<div class=\"fly-column-right layui-hide-xs\">-->
            <!--&lt;!&ndash;<span class=\"fly-search\"><a href=\"/search/keyword-在这里输入相应的关键词\"><i class=\"layui-icon\"></i></a></span>&ndash;&gt;-->
            <!--&lt;!&ndash;<a href=\"/member/qiandao/\"><button class=\"layui-btn layui-btn-sm layui-bg-black signin\">每日签到</button></a>&ndash;&gt;-->

            <!--</div>-->
        </div>
    </div>
    <!--<div class=\"filter-box clearfix layui-form-item\">-->

        <!--<div class=\"filter-content type\" style=\"width:100%!important\">-->
            <!--<div class=\"list clearfix\">-->
                <!--<a class=\"\" >产品类别排行</a>-->

                <!--<a class=\"all-item type_one on\" href=\"/0/0/0/0.html\">云服务器</a>-->
                <!--<a class=\"type_one \" href=\"/1/0/0/0.html\">VPS服务器</a>-->
                <!--<a class=\"type_one \" href=\"/2/0/0/0.html\">虚拟主机</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
</div>
<blockquote class=\"layui-elem-quote ceping-border-left\" style=\"margin-bottom:20px;\">

    ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "title", array()), "html", null, true);
        echo "

</blockquote>

";
    }

    public function getTemplateName()
    {
        return "common/ceping_detail_nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 70,  99 => 42,  91 => 41,  83 => 40,  75 => 39,  70 => 37,  61 => 35,  49 => 26,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!--<link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/global.css\">-->
<!--<div class=\"fly-panel fly-column\">-->

    <!--<div class=\"layui-container\">-->
        <!--<ul class=\"layui-clear\">-->
            <!--<li class=\"layui-hide-xs layui-this\"><a href=\"overview.html\">评测概览-->
                <!--&lt;!&ndash;<span class=\"layui-badge-dot\"></span>&ndash;&gt; </a></li>-->
            <!--<li><a href=\"available.html\">24小时响应时间统计</a></li>-->
            <!--<li><a href=\"available.html\">24小时可用率统计</a></li>-->
            <!--<li><a href=\"available.html\">24小时测试数据详情</a></li>-->
            <!--<li><a href=\"/course/zdgg\"> 历史手动测评文章</a></li>-->
            <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>-->
            <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"/member/score/\">用户评论（13）</a></li>-->
        <!--</ul>-->


        <!--&lt;!&ndash;<div class=\"fly-column-right layui-hide-xs\">&ndash;&gt;-->
        <!--&lt;!&ndash;&lt;!&ndash;<span class=\"fly-search\"><a href=\"/search/keyword-在这里输入相应的关键词\"><i class=\"layui-icon\"></i></a></span>&ndash;&gt;&ndash;&gt;-->
        <!--&lt;!&ndash;&lt;!&ndash;<a href=\"/member/qiandao/\"><button class=\"layui-btn layui-btn-sm layui-bg-black signin\">每日签到</button></a>&ndash;&gt;&ndash;&gt;-->

        <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->
<!--</div>-->

<link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/label.css\">



<div class=\"inn-user-filter layui-form\" style=\"padding:0px;background-color:#F2F2F2\">
    <div class=\"fly-panel fly-column\">

        <div class=\"layui-container\">
            <ul class=\"layui-clear\">
                <li class=\"layui-hide-xs  {% if _GPC['a'] == 'overview' %}  layui-this {%endif%}\"><a href=\"overview-{{post_id}}.html\">评测概览
                    <!--<span class=\"layui-badge-dot\"></span>--> </a></li>
                <!--<li><a href=\"available-{{post_id}}.html\">测评参数及排行</a></li>-->

                <li class=\"layui-hide-xs  {% if _GPC['a'] == 'responseTime' %}  layui-this {%endif%}\"><a href=\"responsetime-{{post_id}}.html\">24小时响应时间统计</a></li>
                <li  class=\"layui-hide-xs  {% if _GPC['a'] == 'available' %}  layui-this {%endif%}\"><a href=\"available-{{post_id}}.html\">24小时可用率统计</a></li>
                <li  class=\"layui-hide-xs  {% if _GPC['a'] == 'snapshot' %}  layui-this {%endif%}\"><a href=\"snapshot-{{post_id}}.html\">24小时测试数据详情</a></li>
                <!--<li  ><a href=\"snapshot-{{post_id}}.html\"> 历史手动测评文章</a></li>-->
                <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>-->
                <!--<li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"/member/score/\">用户评论（13）</a></li>-->
            </ul>


            <!--<div class=\"fly-column-right layui-hide-xs\">-->
            <!--&lt;!&ndash;<span class=\"fly-search\"><a href=\"/search/keyword-在这里输入相应的关键词\"><i class=\"layui-icon\"></i></a></span>&ndash;&gt;-->
            <!--&lt;!&ndash;<a href=\"/member/qiandao/\"><button class=\"layui-btn layui-btn-sm layui-bg-black signin\">每日签到</button></a>&ndash;&gt;-->

            <!--</div>-->
        </div>
    </div>
    <!--<div class=\"filter-box clearfix layui-form-item\">-->

        <!--<div class=\"filter-content type\" style=\"width:100%!important\">-->
            <!--<div class=\"list clearfix\">-->
                <!--<a class=\"\" >产品类别排行</a>-->

                <!--<a class=\"all-item type_one on\" href=\"/0/0/0/0.html\">云服务器</a>-->
                <!--<a class=\"type_one \" href=\"/1/0/0/0.html\">VPS服务器</a>-->
                <!--<a class=\"type_one \" href=\"/2/0/0/0.html\">虚拟主机</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
</div>
<blockquote class=\"layui-elem-quote ceping-border-left\" style=\"margin-bottom:20px;\">

    {{posts.title}}

</blockquote>

", "common/ceping_detail_nav.html", "/data/test/yunceping/bbs/app/template/common/ceping_detail_nav.html");
    }
}
