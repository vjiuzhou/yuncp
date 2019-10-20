<?php

/* users/home.html */
class __TwigTemplate_e91a42c4eee2d9356bfb9208b93f207d30346dc742fd7f5fb976d016c7b9ca54 extends Twig_Template
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

<div class=\"fly-home fly-panel\" style=\"background-image: url();\">
  <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "avatar", array()), "html", null, true);
        echo "\" alt=\"贤心\">
  <i class=\"iconfont icon-renzheng\" title=\"Fly社区认证\"></i>
  <h1>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "
    <i class=\"iconfont icon-nan\"></i>
    <!-- <i class=\"iconfont icon-nv\"></i>  -->
  <!--  <i class=\"layui-badge fly-badge-vip\">VIP3</i>-->
    <!--
    <span style=\"color:#c00;\">（管理员）</span>
    <span style=\"color:#5FB878;\">（社区之光）</span>
    <span>（该号已被封）</span>
    -->
  </h1>

 <!-- <p style=\"padding: 10px 0; color: #5FB878;\">认证信息：layui 作者</p>-->

  <p class=\"fly-home-info\">
    <!--<i class=\"iconfont icon-kiss\" title=\"飞吻\"></i><span style=\"color: #FF7200;\">66666 飞吻</span>-->
    <i class=\"iconfont icon-shijian\"></i><span>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "create_time", array()), "Y-m-d"), "html", null, true);
        echo " 加入</span>
  <!--  <i class=\"iconfont icon-chengshi\"></i><span>来自杭州</span>-->
  </p>

  <p class=\"fly-home-sign\">（";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "signature", array()), "html", null, true);
        echo "）</p>

 <!-- <div class=\"fly-sns\" data-user=\"\">
    <a href=\"javascript:;\" class=\"layui-btn layui-btn-primary fly-imActive\" data-type=\"addFriend\">加为好友</a>
    <a href=\"javascript:;\" class=\"layui-btn layui-btn-normal fly-imActive\" data-type=\"chat\">发起会话</a>
  </div>-->

</div>

<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md6 fly-home-jie\">
      <div class=\"fly-panel\">
        <h3 class=\"fly-panel-title\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo " 最近的提问</h3>
        <ul class=\"jie-row\">
          <!--<li>
            <span class=\"fly-jing\">精</span>
            <a href=\"\" class=\"jie-title\"> 基于 layui 的极简社区页面模版</a>
            <i>刚刚</i>
            <em class=\"layui-hide-xs\">1136阅/27答</em>
          </li>-->
          ";
        // line 48
        if (($context["questionsList"] ?? null)) {
            // line 49
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["questionsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 50
                echo "            <li>
              <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo "detail-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo ".html\" class=\"jie-title\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                echo "</a>
              <i class=\"time_str\">";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "html", null, true);
                echo "</i>
              <em class=\"layui-hide-xs\">";
                // line 53
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
            // line 56
            echo "          ";
        } else {
            // line 57
            echo "           <div class=\"fly-none\" style=\"min-height: 50px; padding:30px 0; height:auto;\"><i style=\"font-size:14px;\">没有发表任何求解</i></div>
          ";
        }
        // line 59
        echo "
        </ul>
      </div>
    </div>
    
    <div class=\"layui-col-md6 fly-home-da\">
      <div class=\"fly-panel\">
        <h3 class=\"fly-panel-title\">";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo " 最近的回答</h3>
        <ul class=\"home-jieda\">
          ";
        // line 68
        if (($context["answersList"] ?? null)) {
            // line 69
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["answersList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 70
                echo "            <li>
            <p>
            <span class=\"time_str\">";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "html", null, true);
                echo "</span>
            在<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo "detail-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reid", array()), "html", null, true);
                echo ".html\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                echo "</a>中回答：
            </p>
            <div class=\"home-dacontent\">
              ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_text", array()), "html_attr");
                echo "

            </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "          ";
        } else {
            // line 82
            echo "           <div class=\"fly-none\" style=\"min-height: 50px; padding:30px 0; height:auto;\"><span>没有回答任何问题</span></div>

          ";
        }
        // line 85
        echo "
     <!--   <li>
          <p>
          <span>5分钟前</span>
          在<a href=\"\" target=\"_blank\">在Fly社区用的是什么系统啊?</a>中回答：
          </p>
          <div class=\"home-dacontent\">
            Fly社区采用的是NodeJS。分享出来的只是前端模版
          </div>
        </li>-->


        </ul>
      </div>
    </div>
  </div>
</div>
<script>
    layui.use(['util','jquery'], function(){
        var util = layui.util;
        var \$ = layui.\$ //由于layer弹层依赖jQuery，所以可以直接得到
        var setTimeAgo = function(y, M, d, H, m, s){
            var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
            return str
        };
        \$(function(){
            \$(\".time_str\").each(function(){
                var timestamp=\$(this).text()
                //console.log(\$(this).text())
                var date = new Date();
                date.setTime(timestamp * 1000);
                var year  = date.getFullYear();
                var month  = date.getMonth();
                var day   = date.getDate();
                var hour  = date.getHours();
                var minute = date.getMinutes();
                var second = date.getSeconds();
                var str=setTimeAgo(year,month,day,hour,minute,second);
                \$(this).html(str)
            });
        })
    });
</script>
";
        // line 128
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "users/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 128,  187 => 85,  182 => 82,  179 => 81,  168 => 76,  158 => 73,  154 => 72,  150 => 70,  145 => 69,  143 => 68,  138 => 66,  129 => 59,  125 => 57,  122 => 56,  111 => 53,  107 => 52,  99 => 51,  96 => 50,  91 => 49,  89 => 48,  78 => 40,  62 => 27,  55 => 23,  37 => 8,  29 => 5,  23 => 2,  19 => 1,);
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

<div class=\"fly-home fly-panel\" style=\"background-image: url();\">
  <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{user.avatar}}\" alt=\"贤心\">
  <i class=\"iconfont icon-renzheng\" title=\"Fly社区认证\"></i>
  <h1>
    {{user.username}}
    <i class=\"iconfont icon-nan\"></i>
    <!-- <i class=\"iconfont icon-nv\"></i>  -->
  <!--  <i class=\"layui-badge fly-badge-vip\">VIP3</i>-->
    <!--
    <span style=\"color:#c00;\">（管理员）</span>
    <span style=\"color:#5FB878;\">（社区之光）</span>
    <span>（该号已被封）</span>
    -->
  </h1>

 <!-- <p style=\"padding: 10px 0; color: #5FB878;\">认证信息：layui 作者</p>-->

  <p class=\"fly-home-info\">
    <!--<i class=\"iconfont icon-kiss\" title=\"飞吻\"></i><span style=\"color: #FF7200;\">66666 飞吻</span>-->
    <i class=\"iconfont icon-shijian\"></i><span>{{user.create_time|date('Y-m-d')}} 加入</span>
  <!--  <i class=\"iconfont icon-chengshi\"></i><span>来自杭州</span>-->
  </p>

  <p class=\"fly-home-sign\">（{{user.signature}}）</p>

 <!-- <div class=\"fly-sns\" data-user=\"\">
    <a href=\"javascript:;\" class=\"layui-btn layui-btn-primary fly-imActive\" data-type=\"addFriend\">加为好友</a>
    <a href=\"javascript:;\" class=\"layui-btn layui-btn-normal fly-imActive\" data-type=\"chat\">发起会话</a>
  </div>-->

</div>

<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md6 fly-home-jie\">
      <div class=\"fly-panel\">
        <h3 class=\"fly-panel-title\">{{user.username}} 最近的提问</h3>
        <ul class=\"jie-row\">
          <!--<li>
            <span class=\"fly-jing\">精</span>
            <a href=\"\" class=\"jie-title\"> 基于 layui 的极简社区页面模版</a>
            <i>刚刚</i>
            <em class=\"layui-hide-xs\">1136阅/27答</em>
          </li>-->
          {% if questionsList %}
            {% for data in questionsList %}
            <li>
              <a href=\"{{SUFFIX}}detail-{{data.id}}.html\" class=\"jie-title\"> {{data.title}}</a>
              <i class=\"time_str\">{{data.create_time}}</i>
              <em class=\"layui-hide-xs\">{{data.visits_count}}阅/{{data.reply_count}}答</em>
            </li>
            {% endfor %}
          {%else%}
           <div class=\"fly-none\" style=\"min-height: 50px; padding:30px 0; height:auto;\"><i style=\"font-size:14px;\">没有发表任何求解</i></div>
          {%endif%}

        </ul>
      </div>
    </div>
    
    <div class=\"layui-col-md6 fly-home-da\">
      <div class=\"fly-panel\">
        <h3 class=\"fly-panel-title\">{{user.username}} 最近的回答</h3>
        <ul class=\"home-jieda\">
          {% if answersList %}
            {% for data in answersList %}
            <li>
            <p>
            <span class=\"time_str\">{{data.create_time}}</span>
            在<a href=\"{{SUFFIX}}detail-{{data.reid}}.html\" target=\"_blank\">{{data.title}}</a>中回答：
            </p>
            <div class=\"home-dacontent\">
              {{ data.reply_text|e('html_attr') }}

            </div>
            </li>
            {% endfor %}
          {%else%}
           <div class=\"fly-none\" style=\"min-height: 50px; padding:30px 0; height:auto;\"><span>没有回答任何问题</span></div>

          {%endif%}

     <!--   <li>
          <p>
          <span>5分钟前</span>
          在<a href=\"\" target=\"_blank\">在Fly社区用的是什么系统啊?</a>中回答：
          </p>
          <div class=\"home-dacontent\">
            Fly社区采用的是NodeJS。分享出来的只是前端模版
          </div>
        </li>-->


        </ul>
      </div>
    </div>
  </div>
</div>
<script>
    layui.use(['util','jquery'], function(){
        var util = layui.util;
        var \$ = layui.\$ //由于layer弹层依赖jQuery，所以可以直接得到
        var setTimeAgo = function(y, M, d, H, m, s){
            var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
            return str
        };
        \$(function(){
            \$(\".time_str\").each(function(){
                var timestamp=\$(this).text()
                //console.log(\$(this).text())
                var date = new Date();
                date.setTime(timestamp * 1000);
                var year  = date.getFullYear();
                var month  = date.getMonth();
                var day   = date.getDate();
                var hour  = date.getHours();
                var minute = date.getMinutes();
                var second = date.getSeconds();
                var str=setTimeAgo(year,month,day,hour,minute,second);
                \$(this).html(str)
            });
        })
    });
</script>
{{ include(\"common/footer.html\")}}", "users/home.html", "/data/test/yunceping/bbs/app/template/users/home.html");
    }
}
