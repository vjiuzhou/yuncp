<?php

/* classify/list.html */
class __TwigTemplate_77e8dd28c63d2c27a4c2210ce67e9536f80f9003774b1ddc7530ddd80ebb45af extends Twig_Template
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
        echo twig_include($this->env, $context, "common/nav.html");
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery-1.4.2.min.js\"></script>
    <div class=\"aright\">
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\"><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=classify&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加分类</a></div>

       <!-- <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"/admin.php/article/index.html\" method=\"get\">
                <input placeholder=\"输入关键字\" name=\"kw\" value=\"\" type=\"text\" class=\"layui-input\" style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\" value=\"查询\" type=\"submit\">查询</button>
            </form>
        </div>-->

        <form method=\"post\" class=\"aform cl\">
            <table width=\"100%\">
                <tbody><tr>
                    <th width=\"10%\" align=\"center\">编号</th>
                    <th width=\"20%\" align=\"center\">分类名称</th>
                    <th width=\"10%\" align=\"center\">分类等级</th>
                    <!--<th width=\"20%\" align=\"center\">栏目图片</th>-->
                    <th width=\"20%\" align=\"center\">添加时间</th>
                    <th width=\"20%\" align=\"center\">基本操作</th>
                </tr>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "                <tr>
                    <td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td style=\"padding-left: 20px;\"><a target=\"_blank\" href=\"/blog/index.php?m=Home&amp;c=index&amp;a=category&amp;id=1\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a></td>
                    <td align=\"center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "level", array()), "html", null, true);
            echo "</td>
                    <!--<td align=\"center\">暂无图片</td>-->
                    <td align=\"center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/classify/edit", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe642;</i> 修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i> 删除</a>
                    </td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody></table>
        </form>
        <div class=\"pages\">
            <div id=\"pages\"></div>
        </div>
    </div>
</div>
<script>
    \$(\"#selall\").click(function(){
        if(\$(this).attr(\"checked\")){
            \$(\".selall\").attr(\"checked\",\"checked\");
        }else{
            \$(\".selall\").removeAttr(\"checked\");
        }

    })

    /**
     * 构造分页功能
     */
    layui.use('laypage', function() {
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            limit: \"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            , jump: function (obj, first) {
                var url = \"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/classify/classifyList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if (!first) {
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            }
        });
    });

    function del(id){
        layui.use('layer', function(){
            var layer = layui.layer;

            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    var url=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/classify/delete", 1 => array("id" => "classifyid")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"classifyid\", id);
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            });
        });
    }
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "classify/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 92,  156 => 68,  150 => 65,  146 => 64,  142 => 63,  115 => 38,  97 => 34,  93 => 33,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  72 => 26,  55 => 25,  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
    {{ include(\"common/nav.html\")}}
    <script src=\"{{_G['APP']}}/resource/js/jquery-1.4.2.min.js\"></script>
    <div class=\"aright\">
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\"><a href=\"{{_G['APP_URL']}}?m=admin&c=classify&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加分类</a></div>

       <!-- <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"/admin.php/article/index.html\" method=\"get\">
                <input placeholder=\"输入关键字\" name=\"kw\" value=\"\" type=\"text\" class=\"layui-input\" style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\" value=\"查询\" type=\"submit\">查询</button>
            </form>
        </div>-->

        <form method=\"post\" class=\"aform cl\">
            <table width=\"100%\">
                <tbody><tr>
                    <th width=\"10%\" align=\"center\">编号</th>
                    <th width=\"20%\" align=\"center\">分类名称</th>
                    <th width=\"10%\" align=\"center\">分类等级</th>
                    <!--<th width=\"20%\" align=\"center\">栏目图片</th>-->
                    <th width=\"20%\" align=\"center\">添加时间</th>
                    <th width=\"20%\" align=\"center\">基本操作</th>
                </tr>
                {% for data in list %}
                <tr>
                    <td align=\"center\">{{loop.index}}</td>
                    <td style=\"padding-left: 20px;\"><a target=\"_blank\" href=\"/blog/index.php?m=Home&amp;c=index&amp;a=category&amp;id=1\">{{data.name}}</a></td>
                    <td align=\"center\">{{data.level}}</td>
                    <!--<td align=\"center\">暂无图片</td>-->
                    <td align=\"center\">{{data.create_time|date('Y-m-d H:i')}}</td>
                    <td align=\"center\">
                        <a href=\"{{ G.url('admin/classify/edit',{id:data.id})}}\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe642;</i> 修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('{{ data.id }}');\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i> 删除</a>
                    </td>
                </tr>
                {% endfor %}
                </tbody></table>
        </form>
        <div class=\"pages\">
            <div id=\"pages\"></div>
        </div>
    </div>
</div>
<script>
    \$(\"#selall\").click(function(){
        if(\$(this).attr(\"checked\")){
            \$(\".selall\").attr(\"checked\",\"checked\");
        }else{
            \$(\".selall\").removeAttr(\"checked\");
        }

    })

    /**
     * 构造分页功能
     */
    layui.use('laypage', function() {
        var laypage = layui.laypage;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\", //数据总数，从服务端得到
            limit: \"{{pagination.page_size}}\",
            curr: \"{{pagination.current_page}}\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            , jump: function (obj, first) {
                var url = \"{{ G.url('admin/classify/classifyList',{'current_page':'currs','page_size':'limit'})}}\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if (!first) {
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            }
        });
    });

    function del(id){
        layui.use('layer', function(){
            var layer = layui.layer;

            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    var url=\"{{ G.url('admin/classify/delete',{'id':'classifyid'})}}\";
                    url = url.replace(\"classifyid\", id);
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            });
        });
    }
</script>
</body>
</html>", "classify/list.html", "/data/test/yunceping/bbs/addons/admin/template/classify/list.html");
    }
}
