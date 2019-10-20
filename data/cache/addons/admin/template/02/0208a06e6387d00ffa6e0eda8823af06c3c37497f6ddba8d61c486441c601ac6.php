<?php

/* common/settingNav.html */
class __TwigTemplate_090a72a10d0384a2fa9a1e0e89eb671f981a00bd212eabc1389d70a5839a2dd5 extends Twig_Template
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
        echo "<div class=\"aleft\">
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe643;</i>设置操作</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\">&#xe620;</i><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/setting/configure", 1 => "t=configure"), "method"), "html", null, true);
        echo "\">网站设置</a></li>
       <li><i class=\"layui-icon\">&#xe601;</i><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=setting&a=updateShow\">在线升级</a></li>
        <li><i class=\"layui-icon\">&#xe631;</i><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/setting/password", 1 => "t=configure"), "method"), "html", null, true);
        echo "\">修改密码</a></li>

    </ul>
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe612;</i>帮助中心</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\"  >&#xe705;</i><a href=\"https://www.kancloud.cn/calfbbs/calfbbs/534995\" target=\"_blank\">开发文档</a></li>
        <li><i class=\"layui-icon\" >&#xe63a;</i><a target=\"_blank\" href=\"http://www.calfbbs.cn/\">官方网站</a></li>
    </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "common/settingNav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"aleft\">
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe643;</i>设置操作</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\">&#xe620;</i><a href=\"{{ G.url('admin/setting/configure','t=configure')}}\">网站设置</a></li>
       <li><i class=\"layui-icon\">&#xe601;</i><a href=\"{{_G['APP_URL']}}?m=admin&c=setting&a=updateShow\">在线升级</a></li>
        <li><i class=\"layui-icon\">&#xe631;</i><a href=\"{{ G.url('admin/setting/password','t=configure')}}\">修改密码</a></li>

    </ul>
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe612;</i>帮助中心</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\"  >&#xe705;</i><a href=\"https://www.kancloud.cn/calfbbs/calfbbs/534995\" target=\"_blank\">开发文档</a></li>
        <li><i class=\"layui-icon\" >&#xe63a;</i><a target=\"_blank\" href=\"http://www.calfbbs.cn/\">官方网站</a></li>
    </ul>

</div>", "common/settingNav.html", "/data/test/yunceping/bbs/addons/admin/template/common/settingNav.html");
    }
}
