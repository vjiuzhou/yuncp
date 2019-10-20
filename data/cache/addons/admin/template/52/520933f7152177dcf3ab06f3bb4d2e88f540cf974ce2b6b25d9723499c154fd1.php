<?php

/* index/setting.html */
class __TwigTemplate_ab597f6d6c53e9cb51d85e1f3d939203560e94aaaaa39b3339ccc471088bf06a extends Twig_Template
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
        echo twig_include($this->env, $context, "common/settingNav.html");
        echo "


</div>
";
        // line 7
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "index/setting.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  24 => 3,  19 => 1,);
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
    {{ include(\"common/settingNav.html\")}}


</div>
{{ include(\"common/footer.html\")}}", "index/setting.html", "/data/test/yunceping/bbs/addons/admin/template/index/setting.html");
    }
}
