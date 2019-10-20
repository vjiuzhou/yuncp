<?php

/* tasks/list.html */
class __TwigTemplate_56f33993f8f7262c273abe926ce73fb8189d6224fd5965f11b62ec05aa7797ba extends Twig_Template
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
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\">

            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/postList"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=article&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加文章</a>
        </div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/taskslist"), "method"), "html", null, true);
        echo "\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"tasks\"/>
                <input type=\"hidden\" name=\"a\" value=\"taskslist\"/>
                <input placeholder=\"输入关键字\" name=\"title\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "title", array(), "array"), "html", null, true);
        echo "\"type=\"text\" class=\"layui-input\"
                       style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\"  type=\"submit\">查询</button>
            </form>
        </div>

        <form method=\"post\" class=\"aform cl\" id=\"form\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/delete"), "method"), "html", null, true);
        echo "\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"20%\" align=\"center\">任务关联文章标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"11%\" align=\"center\">当前24小时执行次数</th>
                    <th width=\"7%\" align=\"center\">数据总量</th>
                    <th width=\"4%\" align=\"center\">状态</th>
                    <!--<th width=\"3%\" align=\"center\">置顶</th>-->
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"15%\" align=\"center\">最后一次执行时间</th>
                    <th width=\"13%\" align=\"center\">操作</th>
                </tr>

                ";
        // line 39
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
            // line 40
            echo "                <tr>
                    <td align=\"center\"><input type=\"checkbox\" class=\"selall\" name=\"deletes[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\"/></td>
                    <!--<td align=\"center\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "</td>-->
                    <td align=\"center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>

                    <td align=\"center\"><a style=\"color:#009688\"href=\"overview-";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "article_id", array()), "html", null, true);
            echo ".html\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a></td>
                    <td align=\"center\">  ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "task_num", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">

                            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "task_num", array()), "html", null, true);
            echo "
                    </span></td>
                    <td align=\"center\">
                        ";
            // line 52
            if (($this->getAttribute($context["data"], "status", array()) == 0)) {
                // line 53
                echo "                        <span style=\"color:#FF5722;\">未启动</span>
                        ";
            } elseif (($this->getAttribute(            // line 54
$context["data"], "status", array()) == 1)) {
                // line 55
                echo "                        <span style=\"color:#0cb204;\">启动</span>
                        ";
            } elseif (($this->getAttribute(            // line 56
$context["data"], "status", array()) == 2)) {
                // line 57
                echo "                        <span style=\"color:#1E9FFF;\">完成</span>
                        ";
            } else {
                // line 59
                echo "                        <span style=\"color:#1e88e5;\">删除</span>
                        ";
            }
            // line 61
            echo "                    </td>
                    <!--<td align=\"center\">-->
                        <!--";
            // line 63
            if (($this->getAttribute($context["data"], "top", array()) == 0)) {
                echo "-->
                        <!--<span>否</span>-->
                        <!--";
            } else {
                // line 65
                echo "-->
                        <!--<span style=\"color:#1e88e5;\">是</span>-->
                        <!--";
            }
            // line 67
            echo "-->
                    <!--</td>-->
                    <td align=\"center\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "created_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "updated_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">

                        <a href=\"javascript:void(0)\" onclick=\"del('";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"display('";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            启动
                        </a>
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
        // line 84
        echo "            </table>
            <div class=\"layui-form-item\">
                <div style=\"margin-top: 20px;\">
                    <!--<button class=\"layui-btn\" onclick=\"return confirm('您确定要删除吗？');\" type=\"submit\">删除选中</button>-->
                    <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">删除选中</button>

                </div>
            </div>
        </form>
        <div class=\"pages\">
            <div id=\"pages\"></div>
        </div>
    </div>
</div>
<script>
    /**
     * 构造分页功能
     */
    layui.use('laypage', function () {
        var laypage = layui.laypage;

        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
            limit: \"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/postList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);

                //首次不执行
                if (!first) window.location.href = escapeUrl(url);//转义amp字符

            }
        });

    });

    \$(\"#selall\").click(function () {

        if (\$(this).attr(\"checked\")) {
            \$(\".selall\").attr(\"checked\", \"checked\");
        } else {
            \$(\".selall\").removeAttr(\"checked\");
        }

    });

    layui.use('form', function () {
        var form = layui.form;
        var status = false;

        //监听提交
        form.on('submit(formDemo)', function () {
            console.log(123);

            if(status==false){
                layer.msg('您确定要删除吗？', {
                    time: 0,//不自动关闭
                    btn: ['确定', '取消'],
                    yes: function () {
                      status = true;
                        /**
                         * 再触发一次表单
                         */
                      \$(\"#form\").trigger('submit');

                    }
                });
            }else{
                return true;
            }
            return false;
        });

    });

    function del(id) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/delete", 1 => array("id" => "postsid")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }

    function display(id) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要发布吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/tasks/Articledisplay", 1 => array("id" => "postsid")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
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
        return "tasks/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 192,  313 => 176,  247 => 113,  241 => 110,  237 => 109,  233 => 108,  207 => 84,  186 => 77,  179 => 73,  173 => 70,  169 => 69,  165 => 67,  160 => 65,  154 => 63,  150 => 61,  146 => 59,  142 => 57,  140 => 56,  137 => 55,  135 => 54,  132 => 53,  130 => 52,  124 => 49,  118 => 46,  112 => 45,  107 => 43,  103 => 42,  99 => 41,  96 => 40,  79 => 39,  59 => 22,  50 => 16,  43 => 12,  35 => 8,  28 => 4,  24 => 3,  19 => 1,);
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
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\">

            <a href=\"{{ G.url('admin/tasks/postList')}}{{_G['APP_URL']}}?m=admin&c=article&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加文章</a>
        </div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"{{ G.url('admin/tasks/taskslist')}}\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"tasks\"/>
                <input type=\"hidden\" name=\"a\" value=\"taskslist\"/>
                <input placeholder=\"输入关键字\" name=\"title\" value=\"{{_GPC['title']}}\"type=\"text\" class=\"layui-input\"
                       style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\"  type=\"submit\">查询</button>
            </form>
        </div>

        <form method=\"post\" class=\"aform cl\" id=\"form\" action=\"{{ G.url('admin/tasks/delete')}}\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"20%\" align=\"center\">任务关联文章标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"11%\" align=\"center\">当前24小时执行次数</th>
                    <th width=\"7%\" align=\"center\">数据总量</th>
                    <th width=\"4%\" align=\"center\">状态</th>
                    <!--<th width=\"3%\" align=\"center\">置顶</th>-->
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"15%\" align=\"center\">最后一次执行时间</th>
                    <th width=\"13%\" align=\"center\">操作</th>
                </tr>

                {% for data in list %}
                <tr>
                    <td align=\"center\"><input type=\"checkbox\" class=\"selall\" name=\"deletes[]\" value=\"{{data.id}}\"/></td>
                    <!--<td align=\"center\">{{data.id}}</td>-->
                    <td align=\"center\">{{loop.index}}</td>

                    <td align=\"center\"><a style=\"color:#009688\"href=\"overview-{{data.article_id}}.html\" target=\"_blank\">{{data.title}}</a></td>
                    <td align=\"center\">  {{data.task_num}}</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">

                            {{data.task_num}}
                    </span></td>
                    <td align=\"center\">
                        {% if data.status==0 %}
                        <span style=\"color:#FF5722;\">未启动</span>
                        {% elseif data.status==1 %}
                        <span style=\"color:#0cb204;\">启动</span>
                        {% elseif data.status==2 %}
                        <span style=\"color:#1E9FFF;\">完成</span>
                        {% else %}
                        <span style=\"color:#1e88e5;\">删除</span>
                        {% endif %}
                    </td>
                    <!--<td align=\"center\">-->
                        <!--{% if data.top == 0%}-->
                        <!--<span>否</span>-->
                        <!--{% else %}-->
                        <!--<span style=\"color:#1e88e5;\">是</span>-->
                        <!--{% endif %}-->
                    <!--</td>-->
                    <td align=\"center\">{{data.created_time|date(\"Y-m-d H:i\")}}</td>
                    <td align=\"center\">{{data.updated_time|date(\"Y-m-d H:i\")}}</td>
                    <td align=\"center\">

                        <a href=\"javascript:void(0)\" onclick=\"del('{{ data.id }}');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"display('{{ data.id }}');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            启动
                        </a>
                    </td>
                </tr>
                {% endfor %}
            </table>
            <div class=\"layui-form-item\">
                <div style=\"margin-top: 20px;\">
                    <!--<button class=\"layui-btn\" onclick=\"return confirm('您确定要删除吗？');\" type=\"submit\">删除选中</button>-->
                    <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">删除选中</button>

                </div>
            </div>
        </form>
        <div class=\"pages\">
            <div id=\"pages\"></div>
        </div>
    </div>
</div>
<script>
    /**
     * 构造分页功能
     */
    layui.use('laypage', function () {
        var laypage = layui.laypage;

        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{pagination.total}}\",
            limit: \"{{pagination.page_size}}\",
            curr: \"{{pagination.current_page}}\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"{{ G.url('admin/tasks/postList',{'current_page':'currs','page_size':'limit'})}}\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);

                //首次不执行
                if (!first) window.location.href = escapeUrl(url);//转义amp字符

            }
        });

    });

    \$(\"#selall\").click(function () {

        if (\$(this).attr(\"checked\")) {
            \$(\".selall\").attr(\"checked\", \"checked\");
        } else {
            \$(\".selall\").removeAttr(\"checked\");
        }

    });

    layui.use('form', function () {
        var form = layui.form;
        var status = false;

        //监听提交
        form.on('submit(formDemo)', function () {
            console.log(123);

            if(status==false){
                layer.msg('您确定要删除吗？', {
                    time: 0,//不自动关闭
                    btn: ['确定', '取消'],
                    yes: function () {
                      status = true;
                        /**
                         * 再触发一次表单
                         */
                      \$(\"#form\").trigger('submit');

                    }
                });
            }else{
                return true;
            }
            return false;
        });

    });

    function del(id) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要删除吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"{{ G.url('admin/tasks/delete',{'id':'postsid'})}}\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }

    function display(id) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要发布吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"{{ G.url('admin/tasks/Articledisplay',{'id':'postsid'})}}\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }
</script>
</body>
</html>", "tasks/list.html", "/data/test/yunceping/bbs/addons/admin/template/tasks/list.html");
    }
}
