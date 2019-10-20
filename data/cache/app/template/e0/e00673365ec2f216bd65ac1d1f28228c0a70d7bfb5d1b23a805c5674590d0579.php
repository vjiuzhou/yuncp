<?php

/* users/usernav.html */
class __TwigTemplate_07b7ffd4b39dfa30372813a44399b3f0637872fd1049470b75a552e984e913ea extends Twig_Template
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
        echo "<ul class=\"layui-nav layui-nav-tree layui-inline\" lay-filter=\"user\" style=\"background-color: #1f516a\">
    <li class=\"layui-nav-item ";
        // line 2
        if (($this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "a", array(), "array") == "home")) {
            echo "layui-this ";
        }
        echo "\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-home-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo ".html\">
            <i class=\"layui-icon\">&#xe609;</i>
            我的主页
        </a>
    </li>
    <li class=\"layui-nav-item ";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "a", array(), "array") == "index")) {
            echo "layui-this ";
        }
        echo "\">
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-index.html\">
            <i class=\"layui-icon\">&#xe612;</i>
            帖子管理
        </a>
    </li>
    <li class=\"layui-nav-item ";
        // line 14
        if (($this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "a", array(), "array") == "set")) {
            echo "layui-this ";
        }
        echo "\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-set-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo ".html\">
            <i class=\"layui-icon\">&#xe620;</i>
            基本设置
        </a>
    </li>
    <li class=\"layui-nav-item ";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "a", array(), "array") == "message")) {
            echo "layui-this ";
        }
        echo "\">
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-message.html\">
            <i class=\"layui-icon\">&#xe611;</i>
            社区消息
        </a>
    </li>
</ul>
<div class=\"site-tree-mobile layui-hide\">
    <i class=\"layui-icon\">&#xe602;</i>
</div>
<div class=\"site-mobile-shade\"></div>

<div class=\"site-tree-mobile layui-hide\">
    <i class=\"layui-icon\">&#xe602;</i>
</div>
<div class=\"site-mobile-shade\"></div>

";
    }

    public function getTemplateName()
    {
        return "users/usernav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  68 => 20,  58 => 15,  52 => 14,  44 => 9,  38 => 8,  28 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"layui-nav layui-nav-tree layui-inline\" lay-filter=\"user\" style=\"background-color: #1f516a\">
    <li class=\"layui-nav-item {% if G.GPC['a']=='home' %}layui-this {%endif%}\">
        <a href=\"{{SUFFIX}}user-home-{{userinfo.uid}}.html\">
            <i class=\"layui-icon\">&#xe609;</i>
            我的主页
        </a>
    </li>
    <li class=\"layui-nav-item {% if G.GPC['a']=='index' %}layui-this {%endif%}\">
        <a href=\"{{SUFFIX}}user-index.html\">
            <i class=\"layui-icon\">&#xe612;</i>
            帖子管理
        </a>
    </li>
    <li class=\"layui-nav-item {% if G.GPC['a']=='set' %}layui-this {% endif %}\">
        <a href=\"{{SUFFIX}}user-set-{{userinfo.uid}}.html\">
            <i class=\"layui-icon\">&#xe620;</i>
            基本设置
        </a>
    </li>
    <li class=\"layui-nav-item {% if G.GPC['a']=='message' %}layui-this {%endif%}\">
        <a href=\"{{SUFFIX}}user-message.html\">
            <i class=\"layui-icon\">&#xe611;</i>
            社区消息
        </a>
    </li>
</ul>
<div class=\"site-tree-mobile layui-hide\">
    <i class=\"layui-icon\">&#xe602;</i>
</div>
<div class=\"site-mobile-shade\"></div>

<div class=\"site-tree-mobile layui-hide\">
    <i class=\"layui-icon\">&#xe602;</i>
</div>
<div class=\"site-mobile-shade\"></div>

", "users/usernav.html", "/data/test/yunceping/bbs/app/template/users/usernav.html");
    }
}
