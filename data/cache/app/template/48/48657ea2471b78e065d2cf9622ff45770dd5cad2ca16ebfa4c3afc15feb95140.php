<?php

/* users/index.html */
class __TwigTemplate_b4611140bbdbbdc3953e9c1c8b82770e6a7868d111868bf671b94cb01783bde7 extends Twig_Template
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
        // line 2
        echo twig_include($this->env, $context, "common/ceping_nav.html");
        echo "

<div class=\"layui-container fly-marginTop fly-user-main\">
  ";
        // line 5
        echo twig_include($this->env, $context, "users/usernav.html");
        echo "
  <div class=\"fly-panel fly-panel-user\" pad20>
    <!--
    <div class=\"fly-msg\" style=\"margin-top: 15px;\">
      您的邮箱尚未验证，这比较影响您的帐号安全，<a href=\"activate.html\">立即去激活？</a>
    </div>
    -->
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
      <ul class=\"layui-tab-title\" id=\"LAY_mine\">
        <li data-type=\"mine-jie\" lay-id=\"index\" class=\"layui-this\">我发的帖（<span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userPostNum"] ?? null), "num", array(), "array"), "html", null, true);
        echo "</span>）</li>
       <!-- <li data-type=\"collection\" data-url=\"/collection/find/\" lay-id=\"collection\">我收藏的帖（<span>16</span>）</li>-->
      </ul>
      <div class=\"layui-tab-content\" style=\"padding: 20px 0;\">
        <div class=\"layui-tab-item layui-show\">
          <ul class=\"mine-view jie-row\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["postList"] ?? null), "list", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "            <li>
              <a class=\"jie-title\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
              <i>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</i>
              <a class=\"mine-edit\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "post-edit',";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" target=\"_blank\">编辑</a>
              <em>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "阅/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "答</em>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </ul>
          <div style=\"text-align: center\">
            <!-- <div class=\"laypage-main\"> -->
            <div id=\"pages\"></div>
            <!-- </div> -->
          </div>
        </div>
        <div class=\"layui-tab-item\">
          <ul class=\"mine-view jie-row\">
            <li>
              <a class=\"jie-title\"  target=\"_blank\"></a>
              <i>收藏于23小时前</i>  </li>
          </ul>
          <div id=\"LAY_page1\"></div>
        </div>
      </div>
    </div>
  </div>
</div>　
<script>
    /**
     * 构造分页功能
     */

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
                var url=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/index", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });

</script>
";
        // line 80
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "users/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 80,  132 => 63,  126 => 60,  122 => 59,  117 => 57,  86 => 28,  75 => 25,  69 => 24,  65 => 23,  57 => 22,  54 => 21,  50 => 20,  41 => 14,  29 => 5,  23 => 2,  19 => 1,);
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

<div class=\"layui-container fly-marginTop fly-user-main\">
  {{ include(\"users/usernav.html\")}}
  <div class=\"fly-panel fly-panel-user\" pad20>
    <!--
    <div class=\"fly-msg\" style=\"margin-top: 15px;\">
      您的邮箱尚未验证，这比较影响您的帐号安全，<a href=\"activate.html\">立即去激活？</a>
    </div>
    -->
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
      <ul class=\"layui-tab-title\" id=\"LAY_mine\">
        <li data-type=\"mine-jie\" lay-id=\"index\" class=\"layui-this\">我发的帖（<span>{{userPostNum['num']}}</span>）</li>
       <!-- <li data-type=\"collection\" data-url=\"/collection/find/\" lay-id=\"collection\">我收藏的帖（<span>16</span>）</li>-->
      </ul>
      <div class=\"layui-tab-content\" style=\"padding: 20px 0;\">
        <div class=\"layui-tab-item layui-show\">
          <ul class=\"mine-view jie-row\">
            {% for data in postList.list %}
            <li>
              <a class=\"jie-title\" href=\"{{SUFFIX}}detail-{{data.id}}\" target=\"_blank\">{{data.title}}</a>
              <i>{{data.create_time|date('Y-m-d H:i:s')}}</i>
              <a class=\"mine-edit\" href=\"{{SUFFIX}}post-edit',{{data.id}}\" target=\"_blank\">编辑</a>
              <em>{{data.visits_count}}阅/{{data.reply_count}}答</em>
            </li>
            {%endfor%}
          </ul>
          <div style=\"text-align: center\">
            <!-- <div class=\"laypage-main\"> -->
            <div id=\"pages\"></div>
            <!-- </div> -->
          </div>
        </div>
        <div class=\"layui-tab-item\">
          <ul class=\"mine-view jie-row\">
            <li>
              <a class=\"jie-title\"  target=\"_blank\"></a>
              <i>收藏于23小时前</i>  </li>
          </ul>
          <div id=\"LAY_page1\"></div>
        </div>
      </div>
    </div>
  </div>
</div>　
<script>
    /**
     * 构造分页功能
     */

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"{{pagination.page_size}}\",
            curr:\"{{pagination.current_page}}\",
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
                var url=\"{{ G.url('app/users/index',{'current_page':'currs','page_size':'limit'})}}\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });

</script>
{{ include(\"common/footer.html\")}}", "users/index.html", "/data/test/yunceping/bbs/app/template/users/index.html");
    }
}
