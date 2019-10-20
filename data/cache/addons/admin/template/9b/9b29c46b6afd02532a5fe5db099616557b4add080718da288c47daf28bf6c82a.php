<?php

/* nav/list.html */
class __TwigTemplate_24a0ee3db3a6b54c94a3cf6933fdbc2e3bfac25ddbb2120fa283118d7b3b6b07 extends Twig_Template
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
        echo "?m=admin&c=nav&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加导航</a></div>

       <!-- <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"/admin.php/article/index.html\" method=\"get\">
                <input placeholder=\"输入关键字\" name=\"kw\" value=\"\" type=\"text\" class=\"layui-input\" style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\" value=\"查询\" type=\"submit\">查询</button>
            </form>
        </div>-->

        <form method=\"post\" class=\"aform cl\">
            <table width=\"100%\">
                <tbody><tr>
                    <th width=\"10%\" align=\"center\">权重</th>
                    <th width=\"20%\" align=\"center\">导航名称</th>
                    <th width=\"30%\" align=\"center\">导航跳转路径</th>
                    <!--<th width=\"20%\" align=\"center\">栏目图片</th>-->

                    <th width=\"20%\" align=\"center\">基本操作</th>
                </tr>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 26
            echo "                <tr>
                    <td align=\"center\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sort", array()), "html", null, true);
            echo "</td>
                    <td style=\"padding-left: 20px;\"><a target=\"_blank\" href=\"javascript:void(0)\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a></td>
                    <td align=\"center\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "path", array()), "html", null, true);
            echo "</td>
                    <!--<td align=\"center\">暂无图片</td>-->

                    <td align=\"center\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/Nav/edit", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe642;</i> 修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i> 删除</a>

                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "             </tbody>

            </table>
        </form>
        <div class=\"pages\">
            <div id=\"pages\">

            </div>
        </div>
    </div>
</div>
<script>
    var testid=1;
    var url=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/index/index", 1 => array("id" => "testid")), "method"), "html", null, true);
        echo "\";
    url = url.replace(\"testid\", testid);//使用js自带函数进行变量替换

    /**
     * 构造分页功能
     */
    layui.use('laypage', function(){
        var laypage = layui.laypage;

        //完整功能
        laypage.render({
            elem: 'pages'
            ,count: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            limit:\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                var url=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/Nav/navList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
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

<script>
    function del(id){
        layui.use('layer', function(){
            var layer = layui.layer;

            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    var url=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/Nav/delete", 1 => array("id" => "navid")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"navid\", id);
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
        return "nav/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 102,  137 => 70,  131 => 67,  127 => 66,  123 => 65,  108 => 53,  93 => 40,  82 => 35,  78 => 34,  71 => 30,  66 => 28,  62 => 27,  59 => 26,  55 => 25,  33 => 6,  28 => 4,  24 => 3,  19 => 1,);
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
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\"><a href=\"{{_G['APP_URL']}}?m=admin&c=nav&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加导航</a></div>

       <!-- <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"/admin.php/article/index.html\" method=\"get\">
                <input placeholder=\"输入关键字\" name=\"kw\" value=\"\" type=\"text\" class=\"layui-input\" style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\" value=\"查询\" type=\"submit\">查询</button>
            </form>
        </div>-->

        <form method=\"post\" class=\"aform cl\">
            <table width=\"100%\">
                <tbody><tr>
                    <th width=\"10%\" align=\"center\">权重</th>
                    <th width=\"20%\" align=\"center\">导航名称</th>
                    <th width=\"30%\" align=\"center\">导航跳转路径</th>
                    <!--<th width=\"20%\" align=\"center\">栏目图片</th>-->

                    <th width=\"20%\" align=\"center\">基本操作</th>
                </tr>
                {% for data in list %}
                <tr>
                    <td align=\"center\">{{data.sort}}</td>
                    <td style=\"padding-left: 20px;\"><a target=\"_blank\" href=\"javascript:void(0)\">{{data.name}}</a></td>
                    <td align=\"center\">
                        {{data.path}}</td>
                    <!--<td align=\"center\">暂无图片</td>-->

                    <td align=\"center\">
                        <a href=\"{{ G.url('admin/Nav/edit',{id:data.id})}}\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe642;</i> 修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('{{ data.id }}');\"><i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i> 删除</a>

                    </td>
                </tr>
                {% endfor %}
             </tbody>

            </table>
        </form>
        <div class=\"pages\">
            <div id=\"pages\">

            </div>
        </div>
    </div>
</div>
<script>
    var testid=1;
    var url=\"{{ G.url('app/index/index',{'id':'testid'})}}\";
    url = url.replace(\"testid\", testid);//使用js自带函数进行变量替换

    /**
     * 构造分页功能
     */
    layui.use('laypage', function(){
        var laypage = layui.laypage;

        //完整功能
        laypage.render({
            elem: 'pages'
            ,count: \"{{pagination.total}}\", //数据总数，从服务端得到
            limit:\"{{pagination.page_size}}\",
            curr:\"{{pagination.current_page}}\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                var url=\"{{ G.url('admin/Nav/navList',{'current_page':'currs','page_size':'limit'})}}\";
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

<script>
    function del(id){
        layui.use('layer', function(){
            var layer = layui.layer;

            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0 //不自动关闭
                ,btn: ['确定', '取消']
                ,yes: function(index){
                    var url=\"{{ G.url('admin/Nav/delete',{'id':'navid'})}}\";
                    url = url.replace(\"navid\", id);
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            });


        });


    }
</script>
</body>
</html>", "nav/list.html", "/data/test/yunceping/bbs/addons/admin/template/nav/list.html");
    }
}
