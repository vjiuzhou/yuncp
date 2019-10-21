<?php

/* search/cepingindex.html */
class __TwigTemplate_e8f575dedc503ce333aa612cb1b0eec28966826ca0ed77c193e8e25cd7b2277c extends Twig_Template
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



<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/css/search.css\">

<div class=\"search-bg pt30\">
  <div class=\"search p-h15\">
    <div class=\"search-top f-cb f-pr\" id=\"search-top\">

      <div class=\"search-value f-cb\">
        <ul class=\"f-cb search-value-default s-value\">
          <!--<li data-dec=\"优惠券\" data-s=\"http://www.baidu.com/s?wd=\" class=\"current\"><span style=\"color:#242ED7\">全部</span></li>-->
          <!--<li data-dec=\"国内服务器测评  \" data-s=\"http://www.google.com.hk/search?q=\">-->
            <!--<span style=\"color:#4285F4\">国</span><span style=\"color:#EA4335\">内</span><span style=\"color:#FBBC05\">测</span><span style=\"color:#4285F4\">评</span>-->
            <!--<span style=\"color:#44A759\">l</span><span style=\"color:#EA4335\">e</span>-->
          <!--</li>-->

          <li data-dec=\"国内服务器测评\"  data-type=\"china\" class=\" click  ";
        // line 20
        if (($this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array") == "china")) {
            echo "current ";
        }
        echo "\" ><span style=\"color:#51C332\">国内服务器测评</span></li>
          <li data-dec=\"国外服务器测评\" data-type=\"abroad\"  class=\" click  ";
        // line 21
        if (($this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array") == "abroad")) {
            echo "current ";
        }
        echo "\" ><span style=\"color:#E60026\">国外服务器测评<span></span></span></li>
          <li data-dec=\"优惠码\"    class=\" click ";
        // line 22
        if (($this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array") == "promotion_code")) {
            echo "current ";
        }
        echo "\" data-type=\"promotion_code\" ><span style=\"color:#00A1D6\">优惠码</span></li>
          <li data-dec=\"新手问答\"  class=\" click ";
        // line 23
        if (($this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array") == "question")) {
            echo "current ";
        }
        echo "\" data-type=\"question\"  ><span style=\"color:#0084FF\">新手问答</span></li>
          <li data-dec=\"建站教程\" class=\" click ";
        // line 24
        if (($this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array") == "document")) {
            echo "current ";
        }
        echo "\"  data-type=\"document\"  ><span style=\"color:#EE4A57\">建站教程</span></li>
        </ul>


        <!--</div>-->
        <div class=\"s-item-cover\"></div>
      </div>
    </div>
    <form method=\"get\" target=\"_blank\" class=\"search-form f-pr\">
      <input type=\"text\" id=\"keywords\" class=\"keywords\" required=\"\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "title", array(), "array"), "html", null, true);
        echo "\" autocomplete=\"off\" placeholder=\"国内测评搜索\" />
      <a class=\"delete\"  ><i class=\"iconfont guanbi\"></i></a>
      <button type=\"submit\" id=\"btn-search\"><span>搜索<span></span></span></button>
      <div id=\"baidumind\"></div>
      <div id=\"history\">
        <a href=\"javascript:;\" class=\"f-db\">清除历史</a>
      </div>
    </form>
  </div>
</div>


<div class=\"news-search\">
  <div class=\"layui-container\">
    <div class=\"layui-row layui-col-space30\">
      <div class=\"layui-col-sm8 layui-col-lg9 searchList\">
        <div class=\"search-list\">
          <ul>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 52
            echo "            <li><a href=\"overview-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\" target=\"_blank\">
              <p class=\"title\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html_attr");
            echo "</p>
              <p class=\"content\">
                ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "describes", array()), "html_attr");
            echo "
              </p>
              <p>
                <span class=\"author\">
                     ";
            // line 59
            if (($this->getAttribute($context["data"], "product_type", array()) == "cloud_server")) {
                // line 60
                echo "                        <span>云服务器</span>
                        ";
            } else {
                // line 62
                echo "                        <span class=\"violet\">VPS服务器</span>
                        ";
            }
            // line 64
            echo "              </span>

                <span class=\"author\">
                   ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "
              </span>
                <span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "created_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</span>
              </p>
            </a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          </ul>
          <div style=\"text-align: center\">
            <!-- <div class=\"laypage-main\"> -->
            <div id=\"pages\"></div>
            <!-- </div> -->
          </div>
        </div>
      </div>
      <div class=\"layui-col-sm4 layui-col-lg3 userList\">
        <dl class=\"search-user\">
          <dt>热门搜索</dt>
          <dd class=\"first-child\">
            <a href=\"\" class=\"img\"><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
          <dd>
            <a href=\"\" class=\"img\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
          <dd>
            <a href=\"\" class=\"img\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>

<script>


  //搜索选择
\$('.click').click(function(){
    \$('.click').each(function(e,data){

        \$(data).attr('class','click');
    })

    var type= \$(this).attr('data-type');
    console.log(type);
    if(type=='china'){
        \$('#keywords').attr('placeholder','国内测评搜索');
    }else if(type=='abroad'){
        \$('#keywords').attr('placeholder','国外测评搜索');
    }else if(type=='promotion_code'){
        \$('#keywords').attr('placeholder','优惠码搜索');
    }else if(type=='question'){
        \$('#keywords').attr('placeholder','问题搜索');
    }else if(type=='document'){
        \$('#keywords').attr('placeholder','教程搜索');
    }
    \$(this).attr('class','click current');
})


  \$('.delete').click(function(){
      \$('#keywords').val('');
  })
    /**
     * 构造分页功能
     */
//    var status=";
        // line 141
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "
    var current_page=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "current_page", array(), "array"), "html", null, true);
        echo "\";
    var page_size=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "page_size", array(), "array"), "html", null, true);
        echo "\";
    var type=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "type", array(), "array"), "html", null, true);
        echo "\";
    var area_id=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "area_id", array(), "array"), "html", null, true);
        echo "\";
    var quota=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "quota", array(), "array"), "html", null, true);
        echo "\";
    var product_type=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "product_type", array(), "array"), "html", null, true);
        echo "\";

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function(obj,first){
                // console.log(obj)
                // var url=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("current_page" => "currs", "page_size" => "limit", "status" => "statuss", "orderBy" => "orderByy", "cid" => "cidd")), "method"), "html", null, true);
        echo "\";
                var url=\"ranking-types-area_ids-quotas-product_types-current_pages-page_sizes.html\";

                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"current_pages\", obj.curr);
                url = url.replace(\"page_sizes\", obj.limit);
                url = url.replace(\"types\", type);
                url = url.replace(\"area_ids\", area_id);
                url = url.replace(\"quotas\", quota);
                url = url.replace(\"product_types\", product_type);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });

    \$('#btn-search').click(function(){
        var keyword=\$(\"#keywords\").val();
        var type=\$(\".current\").attr('data-type');
        var url=\"articlesearch-types-titles-current_pages-page_sizes.html\";
        /**
         * 替换处理
         * @type {string}
         */
        url = url.replace(\"current_pages\", current_page);
        url = url.replace(\"page_sizes\", page_size);
        url = url.replace(\"types\", type);
        url = url.replace(\"titles\", encodeURI(keyword));
       window.location.href=escapeUrl(url);//转义amp字符
        return false;
    })
</script>
";
        // line 200
        echo twig_include($this->env, $context, "common/ceping_footer.html");
    }

    public function getTemplateName()
    {
        return "search/cepingindex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 200,  286 => 161,  279 => 157,  275 => 156,  270 => 154,  260 => 147,  256 => 146,  252 => 145,  248 => 144,  244 => 143,  240 => 142,  236 => 141,  189 => 97,  180 => 91,  171 => 85,  157 => 73,  147 => 69,  142 => 67,  137 => 64,  133 => 62,  129 => 60,  127 => 59,  120 => 55,  115 => 53,  110 => 52,  106 => 51,  85 => 33,  71 => 24,  65 => 23,  59 => 22,  53 => 21,  47 => 20,  30 => 6,  23 => 2,  19 => 1,);
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



<link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/static/css/search.css\">

<div class=\"search-bg pt30\">
  <div class=\"search p-h15\">
    <div class=\"search-top f-cb f-pr\" id=\"search-top\">

      <div class=\"search-value f-cb\">
        <ul class=\"f-cb search-value-default s-value\">
          <!--<li data-dec=\"优惠券\" data-s=\"http://www.baidu.com/s?wd=\" class=\"current\"><span style=\"color:#242ED7\">全部</span></li>-->
          <!--<li data-dec=\"国内服务器测评  \" data-s=\"http://www.google.com.hk/search?q=\">-->
            <!--<span style=\"color:#4285F4\">国</span><span style=\"color:#EA4335\">内</span><span style=\"color:#FBBC05\">测</span><span style=\"color:#4285F4\">评</span>-->
            <!--<span style=\"color:#44A759\">l</span><span style=\"color:#EA4335\">e</span>-->
          <!--</li>-->

          <li data-dec=\"国内服务器测评\"  data-type=\"china\" class=\" click  {% if _GPC['type']=='china' %}current {%endif%}\" ><span style=\"color:#51C332\">国内服务器测评</span></li>
          <li data-dec=\"国外服务器测评\" data-type=\"abroad\"  class=\" click  {% if _GPC['type']=='abroad' %}current {%endif%}\" ><span style=\"color:#E60026\">国外服务器测评<span></span></span></li>
          <li data-dec=\"优惠码\"    class=\" click {% if _GPC['type']=='promotion_code' %}current {%endif%}\" data-type=\"promotion_code\" ><span style=\"color:#00A1D6\">优惠码</span></li>
          <li data-dec=\"新手问答\"  class=\" click {% if _GPC['type']=='question' %}current {%endif%}\" data-type=\"question\"  ><span style=\"color:#0084FF\">新手问答</span></li>
          <li data-dec=\"建站教程\" class=\" click {% if _GPC['type']=='document' %}current {%endif%}\"  data-type=\"document\"  ><span style=\"color:#EE4A57\">建站教程</span></li>
        </ul>


        <!--</div>-->
        <div class=\"s-item-cover\"></div>
      </div>
    </div>
    <form method=\"get\" target=\"_blank\" class=\"search-form f-pr\">
      <input type=\"text\" id=\"keywords\" class=\"keywords\" required=\"\" value=\"{{_GPC['title']}}\" autocomplete=\"off\" placeholder=\"国内测评搜索\" />
      <a class=\"delete\"  ><i class=\"iconfont guanbi\"></i></a>
      <button type=\"submit\" id=\"btn-search\"><span>搜索<span></span></span></button>
      <div id=\"baidumind\"></div>
      <div id=\"history\">
        <a href=\"javascript:;\" class=\"f-db\">清除历史</a>
      </div>
    </form>
  </div>
</div>


<div class=\"news-search\">
  <div class=\"layui-container\">
    <div class=\"layui-row layui-col-space30\">
      <div class=\"layui-col-sm8 layui-col-lg9 searchList\">
        <div class=\"search-list\">
          <ul>
            {% for data in list %}
            <li><a href=\"overview-{{data.id}}.html\" target=\"_blank\">
              <p class=\"title\">{{data.title |e('html_attr') }}</p>
              <p class=\"content\">
                {{ data.describes|e('html_attr') }}
              </p>
              <p>
                <span class=\"author\">
                     {% if data.product_type==\"cloud_server\" %}
                        <span>云服务器</span>
                        {% else %}
                        <span class=\"violet\">VPS服务器</span>
                        {% endif %}
              </span>

                <span class=\"author\">
                   {{data.name}}
              </span>
                <span class=\"\">{{data.created_time | date('Y-m-d H:i')}}</span>
              </p>
            </a></li>
            {% endfor %}
          </ul>
          <div style=\"text-align: center\">
            <!-- <div class=\"laypage-main\"> -->
            <div id=\"pages\"></div>
            <!-- </div> -->
          </div>
        </div>
      </div>
      <div class=\"layui-col-sm4 layui-col-lg3 userList\">
        <dl class=\"search-user\">
          <dt>热门搜索</dt>
          <dd class=\"first-child\">
            <a href=\"\" class=\"img\"><img src=\"{{_G['APP']}}/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
          <dd>
            <a href=\"\" class=\"img\"><img src=\"{{_G['APP']}}/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
          <dd>
            <a href=\"\" class=\"img\"><img src=\"{{_G['APP']}}/resource/static/img/header.jpg\"></a>
            <p class=\"title\">专卖<span class=\"red\">诺基亚</span></p>
            <p><span>102</span>篇文章</p>
            <a class=\"layui-btn layui-btn-news focusOn\">关注</a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>

<script>


  //搜索选择
\$('.click').click(function(){
    \$('.click').each(function(e,data){

        \$(data).attr('class','click');
    })

    var type= \$(this).attr('data-type');
    console.log(type);
    if(type=='china'){
        \$('#keywords').attr('placeholder','国内测评搜索');
    }else if(type=='abroad'){
        \$('#keywords').attr('placeholder','国外测评搜索');
    }else if(type=='promotion_code'){
        \$('#keywords').attr('placeholder','优惠码搜索');
    }else if(type=='question'){
        \$('#keywords').attr('placeholder','问题搜索');
    }else if(type=='document'){
        \$('#keywords').attr('placeholder','教程搜索');
    }
    \$(this).attr('class','click current');
})


  \$('.delete').click(function(){
      \$('#keywords').val('');
  })
    /**
     * 构造分页功能
     */
//    var status={{status}}
    var current_page=\"{{_GPC['current_page']}}\";
    var page_size=\"{{_GPC['page_size']}}\";
    var type=\"{{_GPC['type']}}\";
    var area_id=\"{{_GPC['area_id']}}\";
    var quota=\"{{_GPC['quota']}}\";
    var product_type=\"{{_GPC['product_type']}}\";

    layui.use('laypage', function(){
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"{{pagination.page_size}}\",
            curr:\"{{pagination.current_page}}\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function(obj,first){
                // console.log(obj)
                // var url=\"{{ G.url('app/search/search',{'current_page':'currs','page_size':'limit','status':'statuss','orderBy':'orderByy','cid':'cidd'})}}\";
                var url=\"ranking-types-area_ids-quotas-product_types-current_pages-page_sizes.html\";

                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"current_pages\", obj.curr);
                url = url.replace(\"page_sizes\", obj.limit);
                url = url.replace(\"types\", type);
                url = url.replace(\"area_ids\", area_id);
                url = url.replace(\"quotas\", quota);
                url = url.replace(\"product_types\", product_type);

                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });

    });

    \$('#btn-search').click(function(){
        var keyword=\$(\"#keywords\").val();
        var type=\$(\".current\").attr('data-type');
        var url=\"articlesearch-types-titles-current_pages-page_sizes.html\";
        /**
         * 替换处理
         * @type {string}
         */
        url = url.replace(\"current_pages\", current_page);
        url = url.replace(\"page_sizes\", page_size);
        url = url.replace(\"types\", type);
        url = url.replace(\"titles\", encodeURI(keyword));
       window.location.href=escapeUrl(url);//转义amp字符
        return false;
    })
</script>
{{ include(\"common/ceping_footer.html\")}}", "search/cepingindex.html", "/data/test/yuncp/app/template/search/cepingindex.html");
    }
}
