<?php

/* index/cepingindex.html */
class __TwigTemplate_7fbd74c2c1819a57f9337590f169bb7017d5d43b4e5d789bdb32c61cba1bc6cb extends Twig_Template
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



\t<div class=\"layui-row layui-col-space20 contentBot\">
    <div class=\"layui-col-md8 index-list\">
    \t<h2>最新评测</h2>
    \t<ul class=\"newsList\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 12
            echo "    \t\t<li>
    \t\t\t<a class=\"img\" href=\"overview-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "cover", array()), "html", null, true);
            echo "\"></a><div class=\"txt\">
    \t\t\t\t<a href=\"overview-";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
    \t\t\t\t<div class=\"label\">
\t\t\t\t\t\t";
            // line 16
            if (($this->getAttribute($context["data"], "product_type", array()) == "cloud_server")) {
                // line 17
                echo "\t\t\t\t\t\t<span>云服务器</span>
\t\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t<span class=\"violet\">VPS服务器</span>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "created_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</b> <i class=\"layui-icon layui-icon-news-review1\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "comment_num", array()), "html", null, true);
            echo "</div>
    \t\t\t\t<p class=\"cont\">
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "describes", array()), "html_attr");
            echo "
\t\t\t\t\t</p>
    \t\t\t</div>
    \t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img5.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">杨紫说出了娱乐圈的黑幕，曝光了baby演技这么差为什么还片约不断</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"violet\">娱乐</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">凭借着黄晓明妻子的身份，baby在内地娱乐圈发展得顺风顺水，很多人完全不理解为何就杨颖这样演技并不突出的...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img6.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">这才是柠檬水的正确喝法，原来这么多年都泡错了！</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"orange\">生活</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">千万别去皮。食用前先用面粉搓洗，再用一把盐揉搓表皮，去除残留的农药和蜡，最后用清水冲洗两遍即可。将洗好...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li class=\"newsList2\">-->
    \t\t\t<!--<div class=\"title\"><a href=\"detail.html\">王者荣耀走下坡路，七个原因告诉你为什么，句句在理</a></div>-->
    \t\t\t<!--<a href=\"javascript:;\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img7.jpg\"></a><a href=\"javascript:;\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img8.jpg\"></a><a href=\"javascript:;\" class=\"last\"><img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img9.jpg\"></a>-->
    \t\t\t<!--<div class=\"label\"><span class=\"red\">广告</span>游戏网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img4.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">20万存银行一年利息是多少？</a>-->
    \t\t\t\t<!--<div class=\"label\"><span>财经</span>财经网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">20万存银行一年利息是多少？这是大家常思考的问题，那么利息到底是多少呢？这需要看你是存定期，还是存活期...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img5.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">杨紫说出了娱乐圈的黑幕，曝光了baby演技这么差为什么还片约 不断</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"violet\">娱乐</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">凭借着黄晓明妻子的身份，baby在内地娱乐圈发展得顺风顺水，很多人完全不理解为何就杨颖这样演技并不突出的...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img6.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">这才是柠檬水的正确喝法，原来这么多年都泡错了！</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"orange\">生活</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">千万别去皮。食用前先用面粉搓洗，再用一把盐揉搓表皮，去除残留的农药和蜡，最后用清水冲洗两遍即可。将洗好...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
        <!--<li>-->
          <!--<a class=\"img\" href=\"javascript:;\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img5.jpg\"></a><div class=\"txt\">-->
            <!--<a href=\"detail.html\">这七个坏习惯从小没改过来，警惕娃会越长越丑</a>-->
            <!--<div class=\"label\"><span class=\"green\">育儿</span>生活网 <b>2018-06-06</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
            <!--<p class=\"cont\">不要以为孩子的美丑都只靠基因决定的。其实在养育宝宝的过程中，对宝宝的生活细节细心照顾，也能让宝宝越来越好看！</p>-->
          <!--</div>-->
        <!--</li>-->
    \t</ul>
    \t<div class=\"btn\"><a href=\"ranking.html\" class=\"layui-btn layui-btn-primary\">点击查看更多</a></div>
    </div>
    <div class=\"layui-col-md4 index-side\">
    \t<div class=\"newsSide\">
\t     \t<h2>热门测评</h2>
\t     \t<ul>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交部：施压与讹诈不会起作用</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交 部：施压与讹诈不会起作用</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
\t     \t</ul>
\t    </div>
    </div>
\t</div>
  <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

";
        // line 99
        echo twig_include($this->env, $context, "common/ceping_footer.html");
    }

    public function getTemplateName()
    {
        return "index/cepingindex.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 99,  205 => 91,  201 => 90,  197 => 89,  193 => 88,  189 => 87,  185 => 86,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  153 => 69,  143 => 62,  133 => 55,  123 => 48,  112 => 44,  101 => 36,  91 => 29,  88 => 28,  77 => 23,  67 => 21,  63 => 19,  59 => 17,  57 => 16,  50 => 14,  42 => 13,  39 => 12,  35 => 11,  24 => 3,  19 => 1,);
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



\t<div class=\"layui-row layui-col-space20 contentBot\">
    <div class=\"layui-col-md8 index-list\">
    \t<h2>最新评测</h2>
    \t<ul class=\"newsList\">
\t\t\t{% for data in list %}
    \t\t<li>
    \t\t\t<a class=\"img\" href=\"overview-{{data.id}}.html\"><img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.cover}}\"></a><div class=\"txt\">
    \t\t\t\t<a href=\"overview-{{data.id}}.html\">{{data.title}}</a>
    \t\t\t\t<div class=\"label\">
\t\t\t\t\t\t{% if data.product_type==\"cloud_server\" %}
\t\t\t\t\t\t<span>云服务器</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"violet\">VPS服务器</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{{data.name}} <b>{{data.created_time | date('Y-m-d H:i')}}</b> <i class=\"layui-icon layui-icon-news-review1\"></i>{{data.comment_num}}</div>
    \t\t\t\t<p class=\"cont\">
\t\t\t\t\t\t{{ data.describes|e('html_attr') }}
\t\t\t\t\t</p>
    \t\t\t</div>
    \t\t</li>
\t\t\t{% endfor %}
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img5.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">杨紫说出了娱乐圈的黑幕，曝光了baby演技这么差为什么还片约不断</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"violet\">娱乐</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">凭借着黄晓明妻子的身份，baby在内地娱乐圈发展得顺风顺水，很多人完全不理解为何就杨颖这样演技并不突出的...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img6.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">这才是柠檬水的正确喝法，原来这么多年都泡错了！</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"orange\">生活</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">千万别去皮。食用前先用面粉搓洗，再用一把盐揉搓表皮，去除残留的农药和蜡，最后用清水冲洗两遍即可。将洗好...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li class=\"newsList2\">-->
    \t\t\t<!--<div class=\"title\"><a href=\"detail.html\">王者荣耀走下坡路，七个原因告诉你为什么，句句在理</a></div>-->
    \t\t\t<!--<a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img7.jpg\"></a><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img8.jpg\"></a><a href=\"javascript:;\" class=\"last\"><img src=\"{{_G['APP']}}/resource/static/img/home_img9.jpg\"></a>-->
    \t\t\t<!--<div class=\"label\"><span class=\"red\">广告</span>游戏网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img4.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">20万存银行一年利息是多少？</a>-->
    \t\t\t\t<!--<div class=\"label\"><span>财经</span>财经网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">20万存银行一年利息是多少？这是大家常思考的问题，那么利息到底是多少呢？这需要看你是存定期，还是存活期...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img5.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">杨紫说出了娱乐圈的黑幕，曝光了baby演技这么差为什么还片约 不断</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"violet\">娱乐</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">凭借着黄晓明妻子的身份，baby在内地娱乐圈发展得顺风顺水，很多人完全不理解为何就杨颖这样演技并不突出的...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
    \t\t<!--<li>-->
    \t\t\t<!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/home_img6.jpg\"></a><div class=\"txt\">-->
    \t\t\t\t<!--<a href=\"detail.html\">这才是柠檬水的正确喝法，原来这么多年都泡错了！</a>-->
    \t\t\t\t<!--<div class=\"label\"><span class=\"orange\">生活</span>生活网 <b>2018-06-07</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
    \t\t\t\t<!--<p class=\"cont\">千万别去皮。食用前先用面粉搓洗，再用一把盐揉搓表皮，去除残留的农药和蜡，最后用清水冲洗两遍即可。将洗好...</p>-->
    \t\t\t<!--</div>-->
    \t\t<!--</li>-->
        <!--<li>-->
          <!--<a class=\"img\" href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img5.jpg\"></a><div class=\"txt\">-->
            <!--<a href=\"detail.html\">这七个坏习惯从小没改过来，警惕娃会越长越丑</a>-->
            <!--<div class=\"label\"><span class=\"green\">育儿</span>生活网 <b>2018-06-06</b> <i class=\"layui-icon layui-icon-news-review1\"></i>200</div>-->
            <!--<p class=\"cont\">不要以为孩子的美丑都只靠基因决定的。其实在养育宝宝的过程中，对宝宝的生活细节细心照顾，也能让宝宝越来越好看！</p>-->
          <!--</div>-->
        <!--</li>-->
    \t</ul>
    \t<div class=\"btn\"><a href=\"ranking.html\" class=\"layui-btn layui-btn-primary\">点击查看更多</a></div>
    </div>
    <div class=\"layui-col-md4 index-side\">
    \t<div class=\"newsSide\">
\t     \t<h2>热门测评</h2>
\t     \t<ul>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交部：施压与讹诈不会起作用</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img10.jpg\"></span><p class=\"txt\">今日魔都烟雾缭绕，美似仙境！</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img11.jpg\"></span><p class=\"txt\">美计划调高对华商品征税税率 外交 部：施压与讹诈不会起作用</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img12.jpg\"></span><p class=\"txt\">烟草纳税万亿！一包20元的烟利润 是多少钱？烟民：为了纳税而抽烟</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img13.jpg\"></span><p class=\"txt\">移动端游戏占领大部分市场</p></a></li>
\t     \t\t<li><a href=\"javascript:;\"><span><img src=\"{{_G['APP']}}/resource/static/img/home_img14.jpg\"></span><p class=\"txt\">八一建军节天安门升旗仪式</p></a></li>
\t     \t</ul>
\t    </div>
    </div>
\t</div>
  <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

{{ include(\"common/ceping_footer.html\")}}", "index/cepingindex.html", "/data/test/yuncp/app/template/index/cepingindex.html");
    }
}
