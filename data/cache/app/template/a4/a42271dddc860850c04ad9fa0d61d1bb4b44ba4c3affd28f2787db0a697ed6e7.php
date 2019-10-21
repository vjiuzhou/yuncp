<?php

/* common/ceping_header.html */
class __TwigTemplate_1c6647436d96b5caab7a9a910fdd7c0e0961c35942d780158e426a3468965807 extends Twig_Template
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
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "_云测评</title>
    <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["keywords"] ?? null), "html", null, true);
        echo ",云测评\">
    <meta name=\"description\" itemprop=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "_万能查_关注有价值的商业信息\">
    <meta content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
    <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/images/logox80.jpg\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/css/layui.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/index.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/ceping.css\">
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery-1.4.2.min.js\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.js\"></script>
    <!--<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.all.js\"></script>-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/global.css\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/calfbbs.js\"></script>
    <!--<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/reset.css\" rel=\"stylesheet\" type=\"text/css\" />-->

    <!--<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>-->


    <!--<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>-->
    <!--<script>-->
    <!--(adsbygoogle = window.adsbygoogle || []).push({-->
    <!--google_ad_client: \"ca-pub-9606766828005336\",-->
    <!--enable_page_level_ads: true-->
    <!--});-->
    <!--</script>-->
</head>

<body>


";
    }

    public function getTemplateName()
    {
        return "common/ceping_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  76 => 20,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  39 => 10,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{{title}}_云测评</title>
    <meta name=\"keywords\" content=\"{{keywords}},云测评\">
    <meta name=\"description\" itemprop=\"description\" content=\"{{description}}_万能查_关注有价值的商业信息\">
    <meta content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
    <link rel=\"shortcut icon\" href=\"{{_G['APP']}}/resource/images/logox80.jpg\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/layui/css/layui.css\">
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/index.css\">
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/ceping.css\">
    <script src=\"{{_G['APP']}}/resource/js/jquery-1.4.2.min.js\"></script>
    <script src=\"{{_G['APP']}}/resource/layui/layui.js\"></script>
    <!--<script src=\"{{_G['APP']}}/resource/layui/layui.all.js\"></script>-->
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/css/global.css\">
    <script src=\"{{_G['APP']}}/resource/js/calfbbs.js\"></script>
    <!--<link href=\"{{_G['APP']}}/resource/css/reset.css\" rel=\"stylesheet\" type=\"text/css\" />-->

    <!--<script src=\"{{_G['APP']}}/resource/js/jquery.min.js\"></script>-->


    <!--<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>-->
    <!--<script>-->
    <!--(adsbygoogle = window.adsbygoogle || []).push({-->
    <!--google_ad_client: \"ca-pub-9606766828005336\",-->
    <!--enable_page_level_ads: true-->
    <!--});-->
    <!--</script>-->
</head>

<body>


", "common/ceping_header.html", "/data/test/yuncp/app/template/common/ceping_header.html");
    }
}
