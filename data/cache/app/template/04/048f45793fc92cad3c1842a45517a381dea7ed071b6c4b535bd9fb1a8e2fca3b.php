<?php

/* search/search.html */
class __TwigTemplate_c81e2c6cbf9690b37c662f1b7b4604f25339182056e52f9a2151fd2095820cd5 extends Twig_Template
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
";
        // line 3
        echo twig_include($this->env, $context, "common/column.html");
        echo "

<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md8\">
      <div class=\"fly-panel\" style=\"margin-bottom: 0;\">
        
        <div class=\"fly-panel-title fly-filter\">
          <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "sear-4-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo ".html\" ";
        if ((($context["status"] ?? null) == 4)) {
            echo " class=\"layui-this\" ";
        }
        echo ">综合</a>
          <!--<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("status" => 4, "cid" => ($context["cid"] ?? null))), "method"), "html", null, true);
        echo "\" ";
        if ((($context["status"] ?? null) == 4)) {
            echo " class=\"layui-this\" ";
        }
        echo ">综合</a>-->
          <span class=\"fly-mid\"></span>
          <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "sear-0-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo ".html\" ";
        if ((($context["status"] ?? null) == 0)) {
            echo " class=\"layui-this\" ";
        }
        echo ">未结</a>
          <span class=\"fly-mid\"></span>
          <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "sear-1-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo ".html\" ";
        if ((($context["status"] ?? null) == 1)) {
            echo " class=\"layui-this\" ";
        }
        echo ">已结</a>
          <span class=\"fly-mid\"></span>
          <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "sear-2-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo ".html\" ";
        if ((($context["status"] ?? null) == 2)) {
            echo " class=\"layui-this\" ";
        }
        echo ">精华</a>
          <span class=\"fly-filter-right layui-hide-xs\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "-create_time-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["orderBy"] ?? null) == "create_time")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按最新</a>
            <!--<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("status" => ($context["status"] ?? null), "orderBy" => "create_time", "cid" => ($context["cid"] ?? null))), "method"), "html", null, true);
        echo "\" ";
        if ((($context["orderBy"] ?? null) == "create_time")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按最新</a>-->
            <span class=\"fly-mid\"></span>
            <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "search-";
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "-reply_count-";
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo "\" ";
        if ((($context["orderBy"] ?? null) == "reply_count")) {
            echo " class=\"layui-this\" ";
        }
        echo ">按热议</a>
          </span>
        </div>

        <ul class=\"fly-list\">     
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topPostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo "     
          <li>
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" class=\"fly-avatar\">
              <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "\">
            </a>
            <h2>
              <a class=\"layui-badge\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cname", array()), "html", null, true);
            echo "</a>
              <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
            </h2>
            <div class=\"fly-list-info\">
              <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "user-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo ".html\" link>
                <cite>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite>
                <!--
                <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>
                <i class=\"layui-badge fly-badge-vip\">VIP3</i>
                -->
              </a>
              <span class=\"time_str\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "change_time", array()), "html", null, true);
            echo "</span>

              <span class=\"layui-hide-xs\" title=\"悬赏飞吻\">  <i class=\"iconfont\" title=\"人气\"></i>&nbsp;&nbsp;";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "visits_count", array()), "html", null, true);
            echo "</span>
              <!--<span class=\"layui-badge fly-badge-accept layui-hide-xs\">已结</span>-->
              <span class=\"fly-list-nums\"> 
                <i class=\"iconfont icon-pinglun1\" title=\"回答\"></i> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "
              </span>
            </div>
            <div class=\"fly-list-badge\">              
              ";
            // line 54
            if (($this->getAttribute($context["data"], "top", array()) == "1")) {
                // line 55
                echo "              <span class=\"layui-badge layui-bg-black\">置顶</span>
              ";
            } elseif (($this->getAttribute(            // line 56
$context["data"], "status", array()) == "2")) {
                // line 57
                echo "              <span class=\"layui-badge layui-bg-red\">精帖</span>
              ";
            }
            // line 59
            echo "            </div>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "          
        </ul>
        
        <!-- <div class=\"fly-none\">没有相关数据</div> -->
    
        <!-- <div style=\"text-align: center\">
          <div class=\"laypage-main\"><span class=\"laypage-curr\">1</span><a href=\"/jie/page/2/\">2</a><a href=\"/jie/page/3/\">3</a><a href=\"/jie/page/4/\">4</a><a href=\"/jie/page/5/\">5</a><span>…</span><a href=\"/jie/page/148/\" class=\"laypage-last\" title=\"尾页\">尾页</a><a href=\"/jie/page/2/\" class=\"laypage-next\">下一页</a></div>
        </div> -->
        <div style=\"text-align: center\">
\t\t\t<!-- <div class=\"laypage-main\"> -->
           \t\t<div id=\"pages\"></div>
       \t\t<!-- </div> -->
        </div>

      </div>
    </div>
    <div class=\"layui-col-md4\">
      <dl class=\"fly-panel fly-list-one\">
        <dt class=\"fly-panel-title\">一周热议</dt>
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotPostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            echo " 
        <dd>
          <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
          <span><i class=\"iconfont icon-pinglun1\"></i> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "</span>
        </dd>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        

        <!-- 无数据时 -->
        <!--
        <div class=\"fly-none\">没有相关数据</div>
        -->
      </dl>

      <div class=\"fly-panel\">
        <div class=\"fly-panel-title\">
          这里可作为广告区域
        </div>
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["firstList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 100
            echo "          ";
            if (($this->getAttribute($context["data"], "type", array()) == 1)) {
                // line 101
                echo "          <div class=\"fly-panel-main\">
            <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a>
          </div>

          ";
            } else {
                // line 106
                echo "            <div class=\"fly-panel-main\">
              <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
              <img src=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "image", array()), "html", null, true);
                echo "\" style=\"width:350px;height:60px;\" alt=\"\"/>
              </a>
            </div>
           ";
            }
            // line 112
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        
      </div>
      
      <div class=\"fly-panel fly-link\">
        <h3 class=\"fly-panel-title\">友情链接</h3>
        <dl class=\"fly-panel-main\">
          ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["link"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 120
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
        // line 122
        echo "          
          <dd><a href=\"mailto:xianxin@layui-inc.com?subject=%E7%94%B3%E8%AF%B7Fly%E7%A4%BE%E5%8C%BA%E5%8F%8B%E9%93%BE\" class=\"fly-link\">申请友链</a><dd>
        </dl>
      </div>

    </div>
  </div>
</div>

<script>
    /**
     * 构造分页功能
     */
    var status=";
        // line 135
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "
    var orderBy='";
        // line 136
        echo twig_escape_filter($this->env, ($context["orderBy"] ?? null), "html", null, true);
        echo "'
    var cid=";
        // line 137
        echo twig_escape_filter($this->env, ($context["cid"] ?? null), "html", null, true);
        echo "
    
    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",    \t\t
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
            \t// console.log(obj)
               // var url=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("current_page" => "currs", "page_size" => "limit", "status" => "statuss", "orderBy" => "orderByy", "cid" => "cidd")), "method"), "html", null, true);
        echo "\";
                var url=\"page-currs-limit-statuss-orderByy-cidd.html\";

                /**
                 * 替换处理
                  * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                url = url.replace(\"statuss\", status);
                url = url.replace(\"orderByy\", orderBy);
                url = url.replace(\"cidd\", cid);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });   

    });
</script>
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
        // line 199
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "search/search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 199,  388 => 151,  381 => 147,  377 => 146,  372 => 144,  362 => 137,  358 => 136,  354 => 135,  339 => 122,  328 => 120,  324 => 119,  316 => 113,  310 => 112,  301 => 108,  297 => 107,  294 => 106,  285 => 102,  282 => 101,  279 => 100,  275 => 99,  261 => 87,  252 => 84,  244 => 83,  237 => 81,  216 => 62,  208 => 59,  204 => 57,  202 => 56,  199 => 55,  197 => 54,  190 => 50,  184 => 47,  179 => 45,  170 => 39,  164 => 38,  154 => 35,  150 => 34,  140 => 31,  134 => 30,  127 => 28,  111 => 23,  102 => 21,  90 => 20,  79 => 18,  68 => 16,  57 => 14,  48 => 12,  38 => 11,  27 => 3,  23 => 2,  19 => 1,);
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

<div class=\"layui-container\">
  <div class=\"layui-row layui-col-space15\">
    <div class=\"layui-col-md8\">
      <div class=\"fly-panel\" style=\"margin-bottom: 0;\">
        
        <div class=\"fly-panel-title fly-filter\">
          <a href=\"{{SUFFIX}}sear-4-{{cid}}.html\" {% if status==4 %} class=\"layui-this\" {% endif %}>综合</a>
          <!--<a href=\"{{ G.url('app/search/search',{'status':4,'cid':cid})}}\" {% if status==4 %} class=\"layui-this\" {% endif %}>综合</a>-->
          <span class=\"fly-mid\"></span>
          <a href=\"{{SUFFIX}}sear-0-{{cid}}.html\" {% if status==0 %} class=\"layui-this\" {% endif %}>未结</a>
          <span class=\"fly-mid\"></span>
          <a href=\"{{SUFFIX}}sear-1-{{cid}}.html\" {% if status==1 %} class=\"layui-this\" {% endif %}>已结</a>
          <span class=\"fly-mid\"></span>
          <a href=\"{{SUFFIX}}sear-2-{{cid}}.html\" {% if status==2 %} class=\"layui-this\" {% endif %}>精华</a>
          <span class=\"fly-filter-right layui-hide-xs\">
            <a href=\"{{SUFFIX}}search-{{status}}-create_time-{{cid}}\" {% if orderBy=='create_time' %} class=\"layui-this\" {% endif %}>按最新</a>
            <!--<a href=\"{{ G.url('app/search/search',{'status':status,'orderBy':'create_time','cid':cid})}}\" {% if orderBy=='create_time' %} class=\"layui-this\" {% endif %}>按最新</a>-->
            <span class=\"fly-mid\"></span>
            <a href=\"{{SUFFIX}}search-{{status}}-reply_count-{{cid}}\" {% if orderBy=='reply_count' %} class=\"layui-this\" {% endif %}>按热议</a>
          </span>
        </div>

        <ul class=\"fly-list\">     
          {% for data in topPostList %}     
          <li>
            <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" class=\"fly-avatar\">
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
              {% if data.top=='1' %}
              <span class=\"layui-badge layui-bg-black\">置顶</span>
              {% elseif data.status=='2' %}
              <span class=\"layui-badge layui-bg-red\">精帖</span>
              {% endif %}
            </div>
          </li>
          {% endfor %}
          
        </ul>
        
        <!-- <div class=\"fly-none\">没有相关数据</div> -->
    
        <!-- <div style=\"text-align: center\">
          <div class=\"laypage-main\"><span class=\"laypage-curr\">1</span><a href=\"/jie/page/2/\">2</a><a href=\"/jie/page/3/\">3</a><a href=\"/jie/page/4/\">4</a><a href=\"/jie/page/5/\">5</a><span>…</span><a href=\"/jie/page/148/\" class=\"laypage-last\" title=\"尾页\">尾页</a><a href=\"/jie/page/2/\" class=\"laypage-next\">下一页</a></div>
        </div> -->
        <div style=\"text-align: center\">
\t\t\t<!-- <div class=\"laypage-main\"> -->
           \t\t<div id=\"pages\"></div>
       \t\t<!-- </div> -->
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
          这里可作为广告区域
        </div>
        {% for data in firstList %}
          {% if data.type==1 %}
          <div class=\"fly-panel-main\">
            <a href=\"{{data.url_path}}\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">{{data.name}}</a>
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
          
          <dd><a href=\"mailto:xianxin@layui-inc.com?subject=%E7%94%B3%E8%AF%B7Fly%E7%A4%BE%E5%8C%BA%E5%8F%8B%E9%93%BE\" class=\"fly-link\">申请友链</a><dd>
        </dl>
      </div>

    </div>
  </div>
</div>

<script>
    /**
     * 构造分页功能
     */
    var status={{status}}
    var orderBy='{{orderBy}}'
    var cid={{cid}}
    
    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"{{pagination.page_size}}\",
            curr:\"{{pagination.current_page}}\",    \t\t
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
            \t// console.log(obj)
               // var url=\"{{ G.url('app/search/search',{'current_page':'currs','page_size':'limit','status':'statuss','orderBy':'orderByy','cid':'cidd'})}}\";
                var url=\"page-currs-limit-statuss-orderByy-cidd.html\";

                /**
                 * 替换处理
                  * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                url = url.replace(\"statuss\", status);
                url = url.replace(\"orderByy\", orderBy);
                url = url.replace(\"cidd\", cid);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });   

    });
</script>
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
{{ include(\"common/footer.html\")}}", "search/search.html", "/data/test/yunceping/bbs/app/template/search/search.html");
    }
}
