<?php

/* index/index.html */
class __TwigTemplate_c6f382ec0189dd38fac81a9bb426e9548c7916b740c1550735424fbccef48977 extends Twig_Template
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
        echo "

";
        // line 3
        echo twig_include($this->env, $context, "common/ceping_header.html");
        echo "



";
        // line 7
        echo twig_include($this->env, $context, "common/ceping_nav.html");
        echo "
";
        // line 8
        echo twig_include($this->env, $context, "common/column.html");
        echo "


<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md8\">
      <div class=\"fly-panel\">
        <div class=\"fly-panel-title fly-filter\">
          <a>置顶</a>
         <!-- <a href=\"#signin\" class=\"layui-hide-sm layui-show-xs-block fly-right\" id=\"LAY_goSignin\" style=\"color: #FF5722;\">去签到</a>-->
        </div>
        <ul class=\"fly-list\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topPostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 21
            echo "          <li>
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" class=\"fly-avatar\">
              <!--<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" class=\"fly-avatar\">-->

              <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "\">
            </a>
            <h2>
              <a class=\"layui-badge\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cname", array()), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
              <!--<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>-->
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" link>
                <!--<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" link>-->
                <cite>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite>
              <!--  <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>-->
              </a>
              <span class=\"time_str\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "change_time", array()), "html", null, true);
            echo "</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "</span>
              ";
            // line 42
            if (($this->getAttribute($context["data"], "status", array()) == 1)) {
                // line 43
                echo "              <span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>
              ";
            }
            // line 45
            echo "              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i>  ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "
              </span>
            </div>
            <div class=\"fly-list-badge\">
              ";
            // line 50
            if (($this->getAttribute($context["data"], "top", array()) == 1)) {
                // line 51
                echo "              <span class=\"layui-badge layui-bg-black\">置顶</span>
              ";
            }
            // line 53
            echo "              ";
            if (($this->getAttribute($context["data"], "status", array()) == 2)) {
                // line 54
                echo "               <span class=\"layui-badge layui-bg-red\">精帖</span>
               ";
            }
            // line 56
            echo "
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "          
        </ul>
      </div>

      <div class=\"fly-panel\" style=\"margin-bottom: 0;\">
        
        <div class=\"fly-panel-title fly-filter\">
          
          <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-4.html\" class=\"layui-this\" >综合</a>
          <span class=\"fly-mid\"></span>

          <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-0.html\" >未结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-1.html\" >已结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-2.html\" >精华</a>
          <span class=\"fly-filter-right layui-hide-xs\">
            

            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "-create_time.html\" ";
        if ((($context["orderBy"] ?? null) == "create_time")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按最新</a>
            <!--<a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("status" => ($context["status"] ?? null), "orderBy" => "create_time")), "method"), "html", null, true);
        echo "\" ";
        if ((($context["orderBy"] ?? null) == "create_time")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按最新</a>-->
            <span class=\"fly-mid\"></span>
            <a href=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "-reply_count.html\" ";
        if ((($context["orderBy"] ?? null) == "reply_count")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按热议</a>
            <!--<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("status" => ($context["status"] ?? null), "orderBy" => "reply_count")), "method"), "html", null, true);
        echo "\" ";
        if ((($context["orderBy"] ?? null) == "reply_count")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按热议</a>-->
          </span>
        </div>

        <ul class=\"fly-list\"> 
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comprehensivePostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "         
          <li>
            <a href=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" class=\"fly-avatar\">
              <!--<a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
            echo "\" class=\"fly-avatar\">-->
              <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "\">
            </a>
            <h2>
              <a class=\"layui-badge\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cname", array()), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" link>
                <cite>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite>
                <!--
                <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>
                -->
              </a>
              <span class=\"time_str\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "change_time", array()), "html", null, true);
            echo "</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "</span>
              <!--<span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>-->
              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "
              </span>
            </div>
            <div class=\"fly-list-badge\">
              <!--<span class=\"layui-badge layui-bg-red\">精帖</span>-->
            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </ul>
        <div style=\"text-align: center\">
          <div class=\"laypage-main\">
            <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search.html\" class=\"laypage-next\">更多求解</a>
          </div>
        </div>

      </div>
    </div>
    <div class=\"layui-col-md4\">


    <dl class=\"fly-panel fly-list-one\">
        <dt class=\"fly-panel-title\">一周热议</dt>
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotPostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo " 
        <dd>
          <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
          <span><i class=\"iconfont icon-pinglun1\"></i> ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "</span>
        </dd>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "        

        <!-- 无数据时 -->
        <!--
        <div class=\"fly-none\">没有相关数据</div>
        -->
      </dl>

      <div class=\"fly-panel\">
        <div class=\"fly-panel-title\">
          首页广告
        </div>
        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["firstList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 154
            echo "          ";
            if (($this->getAttribute($context["data"], "type", array()) == 1)) {
                // line 155
                echo "          <div class=\"fly-panel-main\">
            <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a>
          </div>
          ";
            } else {
                // line 159
                echo "            <div class=\"fly-panel-main\">
              <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
              <img src=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "image", array()), "html", null, true);
                echo "\" style=\"width:350px;height:60px;\" alt=\"\"/>
              </a>
            </div>
           ";
            }
            // line 165
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
      </div>
      
      <div class=\"fly-panel fly-link\">
        <h3 class=\"fly-panel-title\">友情链接</h3>
        <dl class=\"fly-panel-main\">
          ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["link"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 173
            echo "          <dd><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a><dd>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
          <dd><a href=\"";
        // line 176
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "/detail-2.html\" class=\"fly-link\">申请友链</a><dd>
        </dl>
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
        // line 209
        echo twig_include($this->env, $context, "common/footer.html");
        echo "



";
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
        return array (  478 => 209,  442 => 176,  439 => 175,  428 => 173,  424 => 172,  416 => 166,  410 => 165,  401 => 161,  397 => 160,  394 => 159,  385 => 156,  382 => 155,  379 => 154,  375 => 153,  361 => 141,  352 => 138,  344 => 137,  337 => 135,  323 => 124,  318 => 121,  304 => 113,  298 => 110,  293 => 108,  284 => 102,  278 => 101,  268 => 98,  264 => 97,  254 => 94,  250 => 93,  244 => 92,  237 => 90,  225 => 85,  215 => 84,  206 => 82,  196 => 81,  189 => 77,  183 => 74,  177 => 71,  171 => 68,  161 => 60,  152 => 56,  148 => 54,  145 => 53,  141 => 51,  139 => 50,  132 => 46,  129 => 45,  125 => 43,  123 => 42,  119 => 41,  114 => 39,  107 => 35,  103 => 34,  97 => 33,  89 => 30,  81 => 29,  77 => 28,  67 => 25,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{{ include(\"common/ceping_header.html\")}}



{{ include(\"common/ceping_nav.html\")}}
{{ include(\"common/column.html\")}}


<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md8\">
      <div class=\"fly-panel\">
        <div class=\"fly-panel-title fly-filter\">
          <a>置顶</a>
         <!-- <a href=\"#signin\" class=\"layui-hide-sm layui-show-xs-block fly-right\" id=\"LAY_goSignin\" style=\"color: #FF5722;\">去签到</a>-->
        </div>
        <ul class=\"fly-list\">
          {% for data in topPostList %}
          <li>
            <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" class=\"fly-avatar\">
              <!--<a href=\"{{ G.url('app/users/home',{'uid':data.uid})}}\" class=\"fly-avatar\">-->

              <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.avatar}}\" alt=\"{{data.username}}\">
            </a>
            <h2>
              <a class=\"layui-badge\">{{data.cname}}</a>
              <a href=\"{{SUFFIX}}detail-{{data.id}}.html\">{{data.title}}</a>
              <!--<a href=\"{{ G.url('app/detail/index',{'id':data.id})}}\">{{data.title}}</a>-->
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" link>
                <!--<a href=\"{{ G.url('app/users/home',{'uid':data.uid})}}\" link>-->
                <cite>{{data.username}}</cite>
              <!--  <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>-->
              </a>
              <span class=\"time_str\">{{data.change_time}}</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;{{data.visits_count}}</span>
              {% if data.status==1 %}
              <span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>
              {% endif %}
              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i>  {{data.reply_count}}
              </span>
            </div>
            <div class=\"fly-list-badge\">
              {% if data.top==1 %}
              <span class=\"layui-badge layui-bg-black\">置顶</span>
              {% endif %}
              {% if data.status==2 %}
               <span class=\"layui-badge layui-bg-red\">精帖</span>
               {% endif %}

            </div>
          </li>
          {% endfor %}
          
        </ul>
      </div>

      <div class=\"fly-panel\" style=\"margin-bottom: 0;\">
        
        <div class=\"fly-panel-title fly-filter\">
          
          <a href=\"{{SUFFIX}}search-4.html\" class=\"layui-this\" >综合</a>
          <span class=\"fly-mid\"></span>

          <a href=\"{{SUFFIX}}search-0.html\" >未结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"{{SUFFIX}}search-1.html\" >已结</a>
          <span class=\"fly-mid\"></span>
          
          <a href=\"{{SUFFIX}}search-2.html\" >精华</a>
          <span class=\"fly-filter-right layui-hide-xs\">
            

            <a href=\"{{SUFFIX}}search-{{status}}-create_time.html\" {% if orderBy=='create_time' %} class=\"layui-this\" {% endif %}>按最新</a>
            <!--<a href=\"{{ G.url('app/search/search',{'status':status,'orderBy':'create_time'})}}\" {% if orderBy=='create_time' %} class=\"layui-this\" {% endif %}>按最新</a>-->
            <span class=\"fly-mid\"></span>
            <a href=\"{{SUFFIX}}search-{{status}}-reply_count.html\" {% if orderBy=='reply_count' %} class=\"layui-this\" {% endif %}>按热议</a>
            <!--<a href=\"{{ G.url('app/search/search',{'status':status,'orderBy':'reply_count'})}}\" {% if orderBy=='reply_count' %} class=\"layui-this\" {% endif %}>按热议</a>-->
          </span>
        </div>

        <ul class=\"fly-list\"> 
          {% for data in comprehensivePostList %}         
          <li>
            <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" class=\"fly-avatar\">
              <!--<a href=\"{{ G.url('app/users/home',{'uid':data.uid})}}\" class=\"fly-avatar\">-->
              <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.avatar}}\" alt=\"{{data.username}}\">
            </a>
            <h2>
              <a class=\"layui-badge\">{{data.cname}}</a>
              <a href=\"{{SUFFIX}}detail-{{data.id}}.html\">{{data.title}}</a>
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" link>
                <cite>{{data.username}}</cite>
                <!--
                <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>
                -->
              </a>
              <span class=\"time_str\">{{data.change_time}}</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;{{data.visits_count}}</span>
              <!--<span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>-->
              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i> {{data.reply_count}}
              </span>
            </div>
            <div class=\"fly-list-badge\">
              <!--<span class=\"layui-badge layui-bg-red\">精帖</span>-->
            </div>
          </li>
          {% endfor %}
        </ul>
        <div style=\"text-align: center\">
          <div class=\"laypage-main\">
            <a href=\"{{SUFFIX}}search.html\" class=\"laypage-next\">更多求解</a>
          </div>
        </div>

      </div>
    </div>
    <div class=\"layui-col-md4\">


    <dl class=\"fly-panel fly-list-one\">
        <dt class=\"fly-panel-title\">一周热议</dt>
        {% for data in hotPostList %} 
        <dd>
          <a href=\"{{SUFFIX}}detail-{{data.id}}.html\">{{data.title}}</a>
          <span><i class=\"iconfont icon-pinglun1\"></i> {{data.reply_count}}</span>
        </dd>
        {% endfor %}
        

        <!-- 无数据时 -->
        <!--
        <div class=\"fly-none\">没有相关数据</div>
        -->
      </dl>

      <div class=\"fly-panel\">
        <div class=\"fly-panel-title\">
          首页广告
        </div>
        {% for data in firstList %}
          {% if data.type==1 %}
          <div class=\"fly-panel-main\">
            <a href=\"{{SUFFIX}}{{data.url_path}}\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">{{data.name}}</a>
          </div>
          {% else %}
            <div class=\"fly-panel-main\">
              <a href=\"{{data.url_path}}\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
              <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.image}}\" style=\"width:350px;height:60px;\" alt=\"\"/>
              </a>
            </div>
           {% endif %}
        {% endfor %}

      </div>
      
      <div class=\"fly-panel fly-link\">
        <h3 class=\"fly-panel-title\">友情链接</h3>
        <dl class=\"fly-panel-main\">
          {% for data in link %}
          <dd><a href=\"{{data.url_path}}\" target=\"_blank\">{{data.name}}</a><dd>
          {% endfor %}

          <dd><a href=\"{{SUFFIX}}/detail-2.html\" class=\"fly-link\">申请友链</a><dd>
        </dl>
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
{{ include(\"common/footer.html\")}}



", "index/index.html", "/data/test/yunceping/bbs/app/template/index/index.html");
    }
}
