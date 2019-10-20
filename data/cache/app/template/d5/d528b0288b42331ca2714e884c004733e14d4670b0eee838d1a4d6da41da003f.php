<?php

/* common/ceping_nav.html */
class __TwigTemplate_824597eccc83979e38a9217811f9bdc12d913686e15daf8821c103f142381127 extends Twig_Template
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
<div class=\"news-header\">
    <div class=\"layui-container\">
        <a id=\"logo\" href=\"index.html\"><img style=\"width:57px;height:49px;margin-top:-4px;\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/images/logo.png\"></a>

        <ul class=\"layui-nav header-nav close\">
            <li class=\"layui-nav-item layui-this\">
                <a href=\"index.html\">首页</a>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"ranking.html\">排行榜</a>
            </li>
            <!--<li class=\"layui-nav-item more\">-->
                <!--<a href=\"javaScript:;\">排行榜</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            <!--</li>-->
            <li class=\"layui-nav-item more\">
                <a href=\"articlesearch-china.html\" target=\"_blank\">国内服务器测评</a>
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            </li>
            <li class=\"layui-nav-item more\">
                <a href=\"articlesearch-abroad.html\" target=\"_blank\">国外服务器测评</a>
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">国外VPS推荐</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            </li>

            <!--<li class=\"layui-nav-item more\">-->
                <!--<a href=\"javaScript:;\">推荐+优惠码</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案VPS</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案域名</a> </dd>-->
                <!--</dl>-->
            <!--</li>-->
            <li class=\"layui-nav-item\">
                <a href=\"bbsindex.html\">讨论区</a>
            </li>
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"list.html\">娱乐</a>-->
            <!--</li>-->
            <li class=\"layui-nav-item more\">
                <a href=\"javaScript:;\">更多</a>
                <dl class=\"layui-nav-child\">
                    <dd><a class=\"hida\" href=\"list.html\">推荐+优惠码</a> </dd>
                    <dd><a class=\"hida\" href=\"list.html\">新手问答</a> </dd>
                    <dd><a class=\"hida\" href=\"list.html\">建站教程</a> </dd>
                </dl>
            </li>
        </ul>

        <button id=\"switch\">
            <span></span><span class=\"second\"></span><span class=\"third\"></span>
        </button>
        <div class=\"layui-form header-search\">
            <input type=\"text\" placeholder=\"搜索关键字按回车键\" class=\"layui-input\">
        </div>
        ";
        // line 68
        if ((($context["userinfo"] ?? null) == "")) {
            // line 69
            echo "
        <!--<div class=\"layui-form header-login\">-->
            <!--<a href=\"login.html\">登入</a>-->
            <!--<a href=\"\"><i class=\"layui-icon layui-icon-news-qq\"></i></a>-->
            <!--<a href=\"\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a>-->
        <!--</div>-->
        <!--<ul class=\"layui-nav header-login\">-->
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\"><img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
            echo "/resource/static/img/header1.png\" class=\"layui-nav-img\"></a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"user.html\">个人中心</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">退出登录</a></dd>-->
                <!--</dl>-->
            <!--</li>-->
        <!--</ul>-->
        ";
        } else {
            // line 85
            echo "
        <ul class=\"layui-nav fly-nav-user\" style=\"padding:0px;background-color:transparent;margin-top:-6px;\">
        <li class=\"layui-nav-item\">
            <a class=\"fly-nav-avatar\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
            echo ".html\">
                <!--<a class=\"fly-nav-avatar\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()))), "method"), "html", null, true);
            echo "\">-->
                <cite class=\"layui-hide-xs\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "username", array()), "html", null, true);
            echo "</cite>
                ";
            // line 91
            if (($this->getAttribute(($context["userinfo"] ?? null), "membership_grade", array()) == "vip")) {
                // line 92
                echo "                <!--<i class=\"iconfont icon-renzheng layui-hide-xs\" title=\"认证信息：layui 作者\"></i>-->
                <i class=\"layui-badge fly-badge-vip layui-hide-xs\">VIP</i>
                ";
            }
            // line 95
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "avatar", array()), "html", null, true);
            echo "\">
            </a>
            <dl class=\"layui-nav-child\">
                <dd><a href=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
            echo ".html\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe68e;</i>我的主页</a></dd>
                <dd><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-index.html\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe63c;</i>帖子管理</a></dd>
                <dd><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-set-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
            echo ".html\"><i class=\"layui-icon\">&#xe620;</i>基本设置</a></dd>
                <dd><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-message.html\"><i class=\"iconfont icon-tongzhi\" style=\"top: 4px;\"></i>社区消息</a></dd>

            <dd ><a href=\"./index.php?m=app&c=logIn&a=loginOut\"><i class=\"layui-icon\">&#x1006;</i>退出登陆</a> </dd>
                <!--<hr style=\"margin: 5px 0;\">-->
                <!--<dd><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "loginout.html\" style=\"text-align: center;\"> <i class=\"layui-icon\">&#x1006;</i>退出</a></dd>-->
            </dl>
        </li>
        </ul>
        ";
        }
        // line 110
        echo "    </div>
</div>
<div class=\"layui-container news-index\">
    <div class=\"fly-panel \">
        <div class=\"layui-row fly-panel-main\" style=\"padding: 15px;\">
            <div class=\"layui-carousel fly-topline\" id=\"FLY_topline\" lay-anim=\"\" lay-indicator=\"inside\" lay-arrow=\"always\" style=\"width: 100%; height: 90px;\">
                <div carousel-item=\"\">
                    <div class=\"\">
                        <a href=\"https://promotion.aliyun.com/ntms/act/enterprise-discount.html?userCode=mf7la2pg\" target=\"_blank\">
                            <img src=\"http://www.itbiaoju.com/Content/ad/img/1000_90.jpg\" style=\"width:100%\">
                        </a>
                    </div>
                    <div class=\"layui-this\">
                        <a href=\"https://promotion.aliyun.com/ntms/act/enterprise-discount.html?userCode=mf7la2pg\" target=\"_blank\">
                            <img src=\"http://www.itbiaoju.com/Content/ad/img/1000_90.jpg\" style=\"width:100%;\">
                        </a>
                    </div>
                </div>



                <div class=\"layui-carousel-ind\"><ul><li class=\"\"></li><li class=\"layui-this\"></li></ul></div><button class=\"layui-icon layui-carousel-arrow\" lay-type=\"sub\"></button><button class=\"layui-icon layui-carousel-arrow\" lay-type=\"add\"></button></div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "common/ceping_nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 110,  172 => 105,  165 => 101,  159 => 100,  155 => 99,  149 => 98,  140 => 95,  135 => 92,  133 => 91,  129 => 90,  125 => 89,  119 => 88,  114 => 85,  103 => 77,  93 => 69,  91 => 68,  24 => 4,  19 => 1,);
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
<div class=\"news-header\">
    <div class=\"layui-container\">
        <a id=\"logo\" href=\"index.html\"><img style=\"width:57px;height:49px;margin-top:-4px;\" src=\"{{_G['APP']}}/resource/images/logo.png\"></a>

        <ul class=\"layui-nav header-nav close\">
            <li class=\"layui-nav-item layui-this\">
                <a href=\"index.html\">首页</a>
            </li>
            <li class=\"layui-nav-item\">
                <a href=\"ranking.html\">排行榜</a>
            </li>
            <!--<li class=\"layui-nav-item more\">-->
                <!--<a href=\"javaScript:;\">排行榜</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            <!--</li>-->
            <li class=\"layui-nav-item more\">
                <a href=\"articlesearch-china.html\" target=\"_blank\">国内服务器测评</a>
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            </li>
            <li class=\"layui-nav-item more\">
                <a href=\"articlesearch-abroad.html\" target=\"_blank\">国外服务器测评</a>
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">国外VPS推荐</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">VPS</a> </dd>-->
                    <!--&lt;!&ndash;<dd><a class=\"hida\" href=\"list.html\">体育</a> <a class=\"hida\" href=\"list.html\">美食</a></dd>&ndash;&gt;-->
                <!--</dl>-->
            </li>

            <!--<li class=\"layui-nav-item more\">-->
                <!--<a href=\"javaScript:;\">推荐+优惠码</a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案云服务器</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案VPS</a> </dd>-->
                    <!--<dd><a class=\"hida\" href=\"list.html\">免备案域名</a> </dd>-->
                <!--</dl>-->
            <!--</li>-->
            <li class=\"layui-nav-item\">
                <a href=\"bbsindex.html\">讨论区</a>
            </li>
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"list.html\">娱乐</a>-->
            <!--</li>-->
            <li class=\"layui-nav-item more\">
                <a href=\"javaScript:;\">更多</a>
                <dl class=\"layui-nav-child\">
                    <dd><a class=\"hida\" href=\"list.html\">推荐+优惠码</a> </dd>
                    <dd><a class=\"hida\" href=\"list.html\">新手问答</a> </dd>
                    <dd><a class=\"hida\" href=\"list.html\">建站教程</a> </dd>
                </dl>
            </li>
        </ul>

        <button id=\"switch\">
            <span></span><span class=\"second\"></span><span class=\"third\"></span>
        </button>
        <div class=\"layui-form header-search\">
            <input type=\"text\" placeholder=\"搜索关键字按回车键\" class=\"layui-input\">
        </div>
        {% if userinfo==\"\" %}

        <!--<div class=\"layui-form header-login\">-->
            <!--<a href=\"login.html\">登入</a>-->
            <!--<a href=\"\"><i class=\"layui-icon layui-icon-news-qq\"></i></a>-->
            <!--<a href=\"\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a>-->
        <!--</div>-->
        <!--<ul class=\"layui-nav header-login\">-->
            <!--<li class=\"layui-nav-item\">-->
                <!--<a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/header1.png\" class=\"layui-nav-img\"></a>-->
                <!--<dl class=\"layui-nav-child\">-->
                    <!--<dd><a href=\"user.html\">个人中心</a></dd>-->
                    <!--<dd><a href=\"javascript:;\">退出登录</a></dd>-->
                <!--</dl>-->
            <!--</li>-->
        <!--</ul>-->
        {% else %}

        <ul class=\"layui-nav fly-nav-user\" style=\"padding:0px;background-color:transparent;margin-top:-6px;\">
        <li class=\"layui-nav-item\">
            <a class=\"fly-nav-avatar\" href=\"{{SUFFIX}}user-home-{{userinfo.uid}}.html\">
                <!--<a class=\"fly-nav-avatar\" href=\"{{G.url('app/users/home',{'uid':userinfo.uid})}}\">-->
                <cite class=\"layui-hide-xs\">{{userinfo.username}}</cite>
                {% if userinfo.membership_grade==\"vip\" %}
                <!--<i class=\"iconfont icon-renzheng layui-hide-xs\" title=\"认证信息：layui 作者\"></i>-->
                <i class=\"layui-badge fly-badge-vip layui-hide-xs\">VIP</i>
                {% endif %}
                <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{userinfo.avatar}}\">
            </a>
            <dl class=\"layui-nav-child\">
                <dd><a href=\"{{SUFFIX}}user-home-{{userinfo.uid}}.html\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe68e;</i>我的主页</a></dd>
                <dd><a href=\"{{SUFFIX}}user-index.html\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe63c;</i>帖子管理</a></dd>
                <dd><a href=\"{{SUFFIX}}user-set-{{userinfo.uid}}.html\"><i class=\"layui-icon\">&#xe620;</i>基本设置</a></dd>
                <dd><a href=\"{{SUFFIX}}user-message.html\"><i class=\"iconfont icon-tongzhi\" style=\"top: 4px;\"></i>社区消息</a></dd>

            <dd ><a href=\"./index.php?m=app&c=logIn&a=loginOut\"><i class=\"layui-icon\">&#x1006;</i>退出登陆</a> </dd>
                <!--<hr style=\"margin: 5px 0;\">-->
                <!--<dd><a href=\"{{SUFFIX}}loginout.html\" style=\"text-align: center;\"> <i class=\"layui-icon\">&#x1006;</i>退出</a></dd>-->
            </dl>
        </li>
        </ul>
        {% endif %}
    </div>
</div>
<div class=\"layui-container news-index\">
    <div class=\"fly-panel \">
        <div class=\"layui-row fly-panel-main\" style=\"padding: 15px;\">
            <div class=\"layui-carousel fly-topline\" id=\"FLY_topline\" lay-anim=\"\" lay-indicator=\"inside\" lay-arrow=\"always\" style=\"width: 100%; height: 90px;\">
                <div carousel-item=\"\">
                    <div class=\"\">
                        <a href=\"https://promotion.aliyun.com/ntms/act/enterprise-discount.html?userCode=mf7la2pg\" target=\"_blank\">
                            <img src=\"http://www.itbiaoju.com/Content/ad/img/1000_90.jpg\" style=\"width:100%\">
                        </a>
                    </div>
                    <div class=\"layui-this\">
                        <a href=\"https://promotion.aliyun.com/ntms/act/enterprise-discount.html?userCode=mf7la2pg\" target=\"_blank\">
                            <img src=\"http://www.itbiaoju.com/Content/ad/img/1000_90.jpg\" style=\"width:100%;\">
                        </a>
                    </div>
                </div>



                <div class=\"layui-carousel-ind\"><ul><li class=\"\"></li><li class=\"layui-this\"></li></ul></div><button class=\"layui-icon layui-carousel-arrow\" lay-type=\"sub\"></button><button class=\"layui-icon layui-carousel-arrow\" lay-type=\"add\"></button></div>
        </div>
    </div>


", "common/ceping_nav.html", "/data/test/yunceping/bbs/app/template/common/ceping_nav.html");
    }
}
