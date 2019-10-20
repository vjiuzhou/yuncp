<?php

/* common/moduleNav.html */
class __TwigTemplate_97884c9e80a7a315edbdc0239ecb9e9b48e6d428ece2eb5fc56408390ac617e5 extends Twig_Template
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
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe643;</i>扩展操作</h3>
    <ul class=\"cl\">

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 6
            echo "        <li><i class=\"layui-icon\">&#xe635;</i><a class=\"click\" dir-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "dir_name", array()), "html", null, true);
            echo "\"  href=\"javascript:void(0);\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a></li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
   </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "common/moduleNav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  29 => 6,  25 => 5,  19 => 1,);
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
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe643;</i>扩展操作</h3>
    <ul class=\"cl\">

        {% for data in list %}
        <li><i class=\"layui-icon\">&#xe635;</i><a class=\"click\" dir-name=\"{{data.dir_name}}\"  href=\"javascript:void(0);\">{{data.name}}</a></li>

        {% endfor %}

   </ul>

</div>", "common/moduleNav.html", "/data/test/yunceping/bbs/addons/admin/template/common/moduleNav.html");
    }
}
