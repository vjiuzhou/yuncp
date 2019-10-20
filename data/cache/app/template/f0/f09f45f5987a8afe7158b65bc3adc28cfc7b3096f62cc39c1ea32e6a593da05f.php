<?php

/* common/column.html */
class __TwigTemplate_ea5e2488d116231f797618d39e5ba0033b0949d5c6aa7ac3154a6e0c7d8e2f1f extends Twig_Template
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
        echo "<div class=\"fly-panel fly-column\" style=\"display: block;\">
  <div class=\"layui-container\">
    <ul class=\"layui-clear\">
      
      <li ";
        // line 5
        if ((($context["cid"] ?? null) == 200000)) {
            echo " class=\"layui-hide-xs layui-this\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "/bbsindex.html\">首页</a></li>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["classifyList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 7
            echo "      <!-- ";
            if (($this->getAttribute($context["data"], "level", array()) == 1)) {
                echo " -->
      <li ";
                // line 8
                if (($this->getAttribute($context["data"], "id", array()) == ($context["cid"] ?? null))) {
                    echo " class=\"layui-hide-xs layui-this\" ";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo "search-cid-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo ".html\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a></li>
      <!--<li ";
                // line 9
                if (($this->getAttribute($context["data"], "id", array()) == ($context["cid"] ?? null))) {
                    echo " class=\"layui-hide-xs layui-this\" ";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("cid" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a></li>-->
      <!-- ";
            }
            // line 10
            echo " -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      <!-- <li><a href=\"./index.php?m=app&c=index&a=search\">分享<span class=\"layui-badge-dot\"></span></a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">讨论</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">建议</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">公告</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">动态</a></li> -->
      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>  
      
      <!-- 用户登入后显示 -->
      ";
        // line 20
        if (($context["userinfo"] ?? null)) {
            // line 21
            echo "      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-index.html\">我发表的贴</a></li>
      ";
        }
        // line 23
        echo "     <!-- <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"./index.php?m=app&c=users&a=index#collection\">我收藏的贴</a></li> -->
    </ul>

    <div class=\"fly-column-right layui-hide-xs\"> 
      <span class=\"fly-search\"><i class=\"layui-icon\"></i></span> 
      <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "post-add.html\" class=\"layui-btn\">发表新帖</a>
    </div> 
    <div class=\"layui-hide-sm layui-show-xs-block\" style=\"margin-top: -10px; padding-bottom: 10px; text-align: center;\"> 
      <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "post-add.html\" class=\"layui-btn\">发表新帖</a>
    </div> 
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "common/column.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  97 => 28,  90 => 23,  84 => 21,  82 => 20,  72 => 12,  65 => 10,  54 => 9,  42 => 8,  37 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fly-panel fly-column\" style=\"display: block;\">
  <div class=\"layui-container\">
    <ul class=\"layui-clear\">
      
      <li {% if cid==200000 %} class=\"layui-hide-xs layui-this\" {% endif %}><a href=\"{{_G['APP_URL']}}/bbsindex.html\">首页</a></li>
      {% for data in classifyList %}
      <!-- {% if data.level==1 %} -->
      <li {% if data.id==cid %} class=\"layui-hide-xs layui-this\" {% endif %}><a href=\"{{SUFFIX}}search-cid-{{data.id}}.html\">{{data.name}}</a></li>
      <!--<li {% if data.id==cid %} class=\"layui-hide-xs layui-this\" {% endif %}><a href=\"{{ G.url('app/search/search',{'cid':data.id})}}\">{{data.name}}</a></li>-->
      <!-- {% endif %} -->
      {% endfor %}
      <!-- <li><a href=\"./index.php?m=app&c=index&a=search\">分享<span class=\"layui-badge-dot\"></span></a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">讨论</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">建议</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">公告</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">动态</a></li> -->
      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>  
      
      <!-- 用户登入后显示 -->
      {% if userinfo%}
      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"{{SUFFIX}}user-index.html\">我发表的贴</a></li>
      {%endif%}
     <!-- <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"./index.php?m=app&c=users&a=index#collection\">我收藏的贴</a></li> -->
    </ul>

    <div class=\"fly-column-right layui-hide-xs\"> 
      <span class=\"fly-search\"><i class=\"layui-icon\"></i></span> 
      <a href=\"{{SUFFIX}}post-add.html\" class=\"layui-btn\">发表新帖</a>
    </div> 
    <div class=\"layui-hide-sm layui-show-xs-block\" style=\"margin-top: -10px; padding-bottom: 10px; text-align: center;\"> 
      <a href=\"{{SUFFIX}}post-add.html\" class=\"layui-btn\">发表新帖</a>
    </div> 
  </div>
</div>", "common/column.html", "/data/test/yunceping/bbs/app/template/common/column.html");
    }
}
