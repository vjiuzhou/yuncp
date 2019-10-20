<?php

/* posts/list.html */
class __TwigTemplate_f1e1ed789905b4d7e369769018dad359d3743d3eb51399aadfe0550a3415a780 extends Twig_Template
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
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\"><a
                href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/postList"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=posts&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加帖子</a></div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/postList"), "method"), "html", null, true);
        echo "\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"posts\"/>
                <input type=\"hidden\" name=\"a\" value=\"postList\"/>
                <input placeholder=\"输入关键字\" name=\"title\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "title", array(), "array"), "html", null, true);
        echo "\"type=\"text\" class=\"layui-input\"
                       style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\"  type=\"submit\">查询</button>
            </form>
        </div>

        <form method=\"post\" class=\"aform cl\" id=\"form\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/delete"), "method"), "html", null, true);
        echo "\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"25%\" align=\"center\">帖子标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"9%\" align=\"center\">发布用户</th>
                    <th width=\"9%\" align=\"center\">所属分类</th>
                    <th width=\"9%\" align=\"center\">状态</th>
                    <th width=\"3%\" align=\"center\">置顶</th>
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"9%\" align=\"center\">操作</th>
                </tr>

                ";
        // line 36
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
            // line 37
            echo "                <tr>
                    <td align=\"center\"><input type=\"checkbox\" class=\"selall\" name=\"deletes[]\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\"/></td>
                    <!--<td align=\"center\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "</td>-->
                    <td align=\"center\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>

                    <td align=\"center\"><a style=\"color:#009688\"href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a></td>
                    <td align=\"center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</span></td>
                    <td align=\"center\">
                        ";
            // line 46
            if (($this->getAttribute($context["data"], "status", array()) == 0)) {
                // line 47
                echo "                        <span style=\"color:#FF5722;\">未解决</span>
                        ";
            } elseif (($this->getAttribute(            // line 48
$context["data"], "status", array()) == 1)) {
                // line 49
                echo "                        <span style=\"color:#0cb204;\">已解决</span>
                        ";
            } elseif (($this->getAttribute(            // line 50
$context["data"], "status", array()) == 2)) {
                // line 51
                echo "                        <span style=\"color:#1E9FFF;\">精华</span>
                        ";
            } else {
                // line 53
                echo "                        <span style=\"color:#1e88e5;\">黑名单</span>
                        ";
            }
            // line 55
            echo "                    </td>
                    <td align=\"center\">
                        ";
            // line 57
            if (($this->getAttribute($context["data"], "top", array()) == 0)) {
                // line 58
                echo "                        <span>否</span>
                        ";
            } else {
                // line 60
                echo "                        <span style=\"color:#1e88e5;\">是</span>
                        ";
            }
            // line 62
            echo "                    </td>
                    <td align=\"center\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">
                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/edit", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\"
                                                                                 style=\"font-size: 20px; color: #009688;\">&#xe642;</i>
                            修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
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
        // line 75
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
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
            limit: \"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/postList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
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
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/delete", 1 => array("id" => "postsid")), "method"), "html", null, true);
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
        return "posts/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 167,  233 => 104,  227 => 101,  223 => 100,  219 => 99,  193 => 75,  172 => 68,  166 => 65,  161 => 63,  158 => 62,  154 => 60,  150 => 58,  148 => 57,  144 => 55,  140 => 53,  136 => 51,  134 => 50,  131 => 49,  129 => 48,  126 => 47,  124 => 46,  119 => 44,  115 => 43,  109 => 42,  104 => 40,  100 => 39,  96 => 38,  93 => 37,  76 => 36,  57 => 20,  48 => 14,  41 => 10,  34 => 7,  28 => 4,  24 => 3,  19 => 1,);
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
        <div class=\"arz\" style=\"float: left;margin: 0px 20px 20px 30px;\"><a
                href=\"{{ G.url('admin/posts/postList')}}{{_G['APP_URL']}}?m=admin&c=posts&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加帖子</a></div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"{{ G.url('admin/posts/postList')}}\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"posts\"/>
                <input type=\"hidden\" name=\"a\" value=\"postList\"/>
                <input placeholder=\"输入关键字\" name=\"title\" value=\"{{_GPC['title']}}\"type=\"text\" class=\"layui-input\"
                       style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\"  type=\"submit\">查询</button>
            </form>
        </div>

        <form method=\"post\" class=\"aform cl\" id=\"form\" action=\"{{ G.url('admin/posts/delete')}}\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"25%\" align=\"center\">帖子标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"9%\" align=\"center\">发布用户</th>
                    <th width=\"9%\" align=\"center\">所属分类</th>
                    <th width=\"9%\" align=\"center\">状态</th>
                    <th width=\"3%\" align=\"center\">置顶</th>
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"9%\" align=\"center\">操作</th>
                </tr>

                {% for data in list %}
                <tr>
                    <td align=\"center\"><input type=\"checkbox\" class=\"selall\" name=\"deletes[]\" value=\"{{data.id}}\"/></td>
                    <!--<td align=\"center\">{{data.id}}</td>-->
                    <td align=\"center\">{{loop.index}}</td>

                    <td align=\"center\"><a style=\"color:#009688\"href=\"{{ G.url('app/detail/index',{id:data.id})}}\" target=\"_blank\">{{data.title}}</a></td>
                    <td align=\"center\">{{data.username}}</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">{{data.name}}</span></td>
                    <td align=\"center\">
                        {% if data.status==0 %}
                        <span style=\"color:#FF5722;\">未解决</span>
                        {% elseif data.status==1 %}
                        <span style=\"color:#0cb204;\">已解决</span>
                        {% elseif data.status==2 %}
                        <span style=\"color:#1E9FFF;\">精华</span>
                        {% else %}
                        <span style=\"color:#1e88e5;\">黑名单</span>
                        {% endif %}
                    </td>
                    <td align=\"center\">
                        {% if data.top == 0%}
                        <span>否</span>
                        {% else %}
                        <span style=\"color:#1e88e5;\">是</span>
                        {% endif %}
                    </td>
                    <td align=\"center\">{{data.create_time|date(\"Y-m-d H:i\")}}</td>
                    <td align=\"center\">
                        <a href=\"{{ G.url('admin/posts/edit',{id:data.id})}}\"><i class=\"layui-icon\"
                                                                                 style=\"font-size: 20px; color: #009688;\">&#xe642;</i>
                            修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('{{ data.id }}');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
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
                var url = \"{{ G.url('admin/posts/postList',{'current_page':'currs','page_size':'limit'})}}\";
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
                    var url = \"{{ G.url('admin/posts/delete',{'id':'postsid'})}}\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }
</script>
</body>
</html>", "posts/list.html", "/data/test/yunceping/bbs/addons/admin/template/posts/list.html");
    }
}
