<?php

/* index/404.html */
class __TwigTemplate_6f6170561fded38e6b24e60349ed646c25d18353220f84e98b68f34ff00f29f7 extends Twig_Template
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

";
        // line 5
        echo twig_include($this->env, $context, "common/column.html");
        echo "

<div class=\"layui-container fly-marginTop\">
\t<div class=\"fly-panel\">
\t  <div class=\"fly-none\">
\t    <h2><i class=\"iconfont icon-404\"></i></h2>
\t    <p>页面或者数据被<a href=\"http://s.calfbbs.com\" target=\"_blank\"> 纸飞机 </a>运到火星了，啥都看不到了…</p>
\t  </div>
\t</div>
</div>
";
        // line 15
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "index/404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  29 => 5,  24 => 3,  19 => 1,);
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

{{ include(\"common/column.html\")}}

<div class=\"layui-container fly-marginTop\">
\t<div class=\"fly-panel\">
\t  <div class=\"fly-none\">
\t    <h2><i class=\"iconfont icon-404\"></i></h2>
\t    <p>页面或者数据被<a href=\"http://s.calfbbs.com\" target=\"_blank\"> 纸飞机 </a>运到火星了，啥都看不到了…</p>
\t  </div>
\t</div>
</div>
{{ include(\"common/footer.html\")}}", "index/404.html", "/data/test/yunceping/bbs/app/template/index/404.html");
    }
}
