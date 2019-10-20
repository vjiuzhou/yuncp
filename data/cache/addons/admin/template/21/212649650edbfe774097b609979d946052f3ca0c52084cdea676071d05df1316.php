<?php

/* index/index.html */
class __TwigTemplate_9c2df88e60d631c760d16cdb2220898f0c79d6806d39d9773a84b2af24d15351 extends Twig_Template
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

    <div class=\"aright\">
        <div class=\"aright_1\">
            <!--<blockquote style=\"padding: 10px;border-left: 5px solid #FF5722;\" class=\"layui-elem-quote\">欢迎使用Tpt-Blog博客管理系统，先温馨提醒几个常见问题：</blockquote>-->
            <!--<table width=\"100%\">-->
                <!--<tr>-->
                    <!--<td width=\"480px\">程序正式上线运营请把index.php里面调试模式关闭；</td>-->
                    <!--<td>确认服务器或空间开启了伪静态；</td>-->
                <!--</tr>-->
                <!--<tr>-->
                    <!--<td>安装完成后请将根目录install文件和index.php里面安装代码删除；</td>-->
                    <!--<td>请将程序内的所有文件直接放在根目录下，不要多层目录；</td>-->
                <!--</tr>-->
                <!--<tr>-->
                    <!--<td>尽管本程序在发布前已经经过了若干严格测试，但我们依然强烈建议您随时备份；</td>-->
                    <!--<td>程序安装好后一定记得修改密码和口令；</td>-->
                <!--</tr>-->
            <!--</table>-->
            <blockquote style=\"padding: 10px;border-left: 5px solid #009688;\" class=\"layui-elem-quote\">系统信息：</blockquote>
            <table width=\"100%\">
                <tr><td width=\"110px\">程序版本</td><td>calfbbs v2.0.0 专为社区而生的开源系统 <a href=\"http://www.calfbbs.cn/\" style=\"color:#FF5722;\" target=\"_blank\">查看最新版本</a></td></tr>
                <tr><td>服务器类型</td><td>";
        // line 25
        echo twig_escape_filter($this->env, ($context["PHP_UNAME"] ?? null), "html", null, true);
        echo "</td></tr>
                <tr><td>PHP版本</td><td>";
        // line 26
        echo twig_escape_filter($this->env, ($context["PHP_VERSION"] ?? null), "html", null, true);
        echo "</td></tr>
                <tr><td>Zend版本</td><td>";
        // line 27
        echo twig_escape_filter($this->env, ($context["Zend_Version"] ?? null), "html", null, true);
        echo "</td></tr>
                <tr><td>服务器解译引擎</td><td>";
        // line 28
        echo twig_escape_filter($this->env, ($context["SERVER_SOFTWARE"] ?? null), "html", null, true);
        echo "</td></tr>
                <tr><td>服务器语言</td><td>";
        // line 29
        echo twig_escape_filter($this->env, ($context["HTTP_ACCEPT_LANGUAGE"] ?? null), "html", null, true);
        echo "</td></tr>
                <tr><td>服务器Web端口</td><td>";
        // line 30
        echo twig_escape_filter($this->env, ($context["SERVER_PORT"] ?? null), "html", null, true);
        echo "</td></tr>
            </table>
            <blockquote style=\"padding: 10px;border-left: 5px solid #009688;\" class=\"layui-elem-quote\">开发团队：</blockquote>
            <table width=\"100%\">
                <tr><td width=\"110px\">版权所有</td><td>calfbbs团队版权所有</td></tr>
                <tr><td>核心成员</td>
                    <td>
                    <span style='color:#01AAED'>Rock</span>,
                    <span style='color:#01AAED'>Howard</span>,
                    <span style='color:#01AAED'>Jon</span>,
                    <span style='color:#01AAED'>Kenuo</span>,
                    <span style='color:#01AAED'>Kim</span>,
                    <span style='color:#01AAED'>Longer</span>,
                    <span style='color:#01AAED'>Rock</span>,
                    <span style='color:#01AAED'>Laof</span>,
                    <span style='color:#01AAED'>Kevin</span>,
                    <span style='color:#01AAED'>Baby</span>

                   </td></tr>
                <tr><td>使用说明</td><td>calfbbs是一款开源免费的社区程序,您无需向任何人缴纳授权费,并且您需要遵循国家法律法规使用本程序，<br />
                使用本程序产生的任何问题，由使用方承担，开发者团队不承担任何责任。</td></tr>
            </table>
        </div>
    </div>
</div>
";
        // line 55
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 55,  69 => 30,  65 => 29,  61 => 28,  57 => 27,  53 => 26,  49 => 25,  24 => 3,  19 => 1,);
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

    <div class=\"aright\">
        <div class=\"aright_1\">
            <!--<blockquote style=\"padding: 10px;border-left: 5px solid #FF5722;\" class=\"layui-elem-quote\">欢迎使用Tpt-Blog博客管理系统，先温馨提醒几个常见问题：</blockquote>-->
            <!--<table width=\"100%\">-->
                <!--<tr>-->
                    <!--<td width=\"480px\">程序正式上线运营请把index.php里面调试模式关闭；</td>-->
                    <!--<td>确认服务器或空间开启了伪静态；</td>-->
                <!--</tr>-->
                <!--<tr>-->
                    <!--<td>安装完成后请将根目录install文件和index.php里面安装代码删除；</td>-->
                    <!--<td>请将程序内的所有文件直接放在根目录下，不要多层目录；</td>-->
                <!--</tr>-->
                <!--<tr>-->
                    <!--<td>尽管本程序在发布前已经经过了若干严格测试，但我们依然强烈建议您随时备份；</td>-->
                    <!--<td>程序安装好后一定记得修改密码和口令；</td>-->
                <!--</tr>-->
            <!--</table>-->
            <blockquote style=\"padding: 10px;border-left: 5px solid #009688;\" class=\"layui-elem-quote\">系统信息：</blockquote>
            <table width=\"100%\">
                <tr><td width=\"110px\">程序版本</td><td>calfbbs v2.0.0 专为社区而生的开源系统 <a href=\"http://www.calfbbs.cn/\" style=\"color:#FF5722;\" target=\"_blank\">查看最新版本</a></td></tr>
                <tr><td>服务器类型</td><td>{{PHP_UNAME}}</td></tr>
                <tr><td>PHP版本</td><td>{{PHP_VERSION}}</td></tr>
                <tr><td>Zend版本</td><td>{{Zend_Version}}</td></tr>
                <tr><td>服务器解译引擎</td><td>{{SERVER_SOFTWARE}}</td></tr>
                <tr><td>服务器语言</td><td>{{HTTP_ACCEPT_LANGUAGE}}</td></tr>
                <tr><td>服务器Web端口</td><td>{{SERVER_PORT}}</td></tr>
            </table>
            <blockquote style=\"padding: 10px;border-left: 5px solid #009688;\" class=\"layui-elem-quote\">开发团队：</blockquote>
            <table width=\"100%\">
                <tr><td width=\"110px\">版权所有</td><td>calfbbs团队版权所有</td></tr>
                <tr><td>核心成员</td>
                    <td>
                    <span style='color:#01AAED'>Rock</span>,
                    <span style='color:#01AAED'>Howard</span>,
                    <span style='color:#01AAED'>Jon</span>,
                    <span style='color:#01AAED'>Kenuo</span>,
                    <span style='color:#01AAED'>Kim</span>,
                    <span style='color:#01AAED'>Longer</span>,
                    <span style='color:#01AAED'>Rock</span>,
                    <span style='color:#01AAED'>Laof</span>,
                    <span style='color:#01AAED'>Kevin</span>,
                    <span style='color:#01AAED'>Baby</span>

                   </td></tr>
                <tr><td>使用说明</td><td>calfbbs是一款开源免费的社区程序,您无需向任何人缴纳授权费,并且您需要遵循国家法律法规使用本程序，<br />
                使用本程序产生的任何问题，由使用方承担，开发者团队不承担任何责任。</td></tr>
            </table>
        </div>
    </div>
</div>
{{ include(\"common/footer.html\")}}", "index/index.html", "/data/test/yunceping/bbs/addons/admin/template/index/index.html");
    }
}
