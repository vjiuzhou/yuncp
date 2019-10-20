<?php

/* article/list.html */
class __TwigTemplate_234e3a6d2dca4d52bdd84665ff5d13993a79a45ada8390125fbf0265b3bea947 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/postList"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP_URL", array(), "array"), "html", null, true);
        echo "?m=admin&c=article&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加测评文章</a></div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/postList"), "method"), "html", null, true);
        echo "\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"article\"/>
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/delete"), "method"), "html", null, true);
        echo "\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"22%\" align=\"center\">文章标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"9%\" align=\"center\">厂商</th>
                    <th width=\"7%\" align=\"center\">国内或国外</th>
                    <th width=\"7%\" align=\"center\">状态</th>
                    <!--<th width=\"3%\" align=\"center\">置顶</th>-->
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"16%\" align=\"center\">操作</th>
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

                    <td align=\"center\"><a style=\"color:#009688\"href=\"overview-";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo ".html\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a></td>
                    <td align=\"center\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">
                         ";
            // line 45
            if (($this->getAttribute($context["data"], "type", array()) == "china")) {
                // line 46
                echo "                        <span style=\"color:#FF5722;\">国内</span>
                        ";
            } else {
                // line 48
                echo "                             <span style=\"color:#0cb204;\">国外</span>
                        ";
            }
            // line 50
            echo "

                    </span></td>
                    <td align=\"center\">
                        ";
            // line 54
            if (($this->getAttribute($context["data"], "status", array()) == 0)) {
                // line 55
                echo "                        <span style=\"color:#FF5722;\">未发布</span>
                        ";
            } elseif (($this->getAttribute(            // line 56
$context["data"], "status", array()) == 1)) {
                // line 57
                echo "                        <span style=\"color:#0cb204;\">已发布</span>
                        ";
            } elseif (($this->getAttribute(            // line 58
$context["data"], "status", array()) == 2)) {
                // line 59
                echo "                        <span style=\"color:#1E9FFF;\">置顶</span>
                        ";
            } else {
                // line 61
                echo "                        <span style=\"color:#1e88e5;\">删除</span>
                        ";
            }
            // line 63
            echo "                    </td>
                    <!--<td align=\"center\">-->
                        <!--";
            // line 65
            if (($this->getAttribute($context["data"], "top", array()) == 0)) {
                echo "-->
                        <!--<span>否</span>-->
                        <!--";
            } else {
                // line 67
                echo "-->
                        <!--<span style=\"color:#1e88e5;\">是</span>-->
                        <!--";
            }
            // line 69
            echo "-->
                    <!--</td>-->
                    <td align=\"center\">";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                    <td align=\"center\">
                        <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/edit", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\"
                                                                                 style=\"font-size: 20px; color: #009688;\">&#xe642;</i>
                            修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"display('";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            发布
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"tasks('";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "host", array()), "html", null, true);
            echo "');\" >
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            任务
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
        // line 91
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
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
            limit: \"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/postList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
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
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/delete", 1 => array("id" => "postsid")), "method"), "html", null, true);
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
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/Articledisplay", 1 => array("id" => "postsid")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }

    function tasks(id,host) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要创建任务吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/article/ArtickeTask", 1 => array("id" => "postsid"), 2 => array("host" => "hosts")), "method"), "html", null, true);
        echo "\";
                    url = url.replace(\"postsid\", id);
                    url = url.replace(\"hosts\", host);
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
        return "article/list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 215,  348 => 199,  329 => 183,  263 => 120,  257 => 117,  253 => 116,  249 => 115,  223 => 91,  200 => 84,  193 => 80,  186 => 76,  180 => 73,  175 => 71,  171 => 69,  166 => 67,  160 => 65,  156 => 63,  152 => 61,  148 => 59,  146 => 58,  143 => 57,  141 => 56,  138 => 55,  136 => 54,  130 => 50,  126 => 48,  122 => 46,  120 => 45,  115 => 43,  109 => 42,  104 => 40,  100 => 39,  96 => 38,  93 => 37,  76 => 36,  57 => 20,  48 => 14,  41 => 10,  34 => 7,  28 => 4,  24 => 3,  19 => 1,);
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
                href=\"{{ G.url('admin/article/postList')}}{{_G['APP_URL']}}?m=admin&c=article&a=add\"><i class=\"layui-icon\">&#xe608;</i>添加测评文章</a></div>

        <div style=\"float: left;\">
            <form class=\"layui-form\" action=\"{{ G.url('admin/article/postList')}}\" method=\"get\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"article\"/>
                <input type=\"hidden\" name=\"a\" value=\"postList\"/>
                <input placeholder=\"输入关键字\" name=\"title\" value=\"{{_GPC['title']}}\"type=\"text\" class=\"layui-input\"
                       style=\"float: left;margin-right: 10px;width: 300px;\">
                <button class=\"layui-btn\" style=\"float: left;\"  type=\"submit\">查询</button>
            </form>
        </div>

        <form method=\"post\" class=\"aform cl\" id=\"form\" action=\"{{ G.url('admin/article/delete')}}\">
            <table width=\"100%\">
                <tr>
                    <th width=\"5%\" align=\"center\"><input type=\"checkbox\" name=\"checkbox\" id=\"selall\"/></th>
                    <th width=\"5%\" align=\"center\">序号</th>
                    <th width=\"22%\" align=\"center\">文章标题</th>
                    <!-- <th width=\"10%\" align=\"center\">缩略图</th>-->
                    <!-- <th width=\"10%\" align=\"center\">是否推荐</th>-->
                    <th width=\"9%\" align=\"center\">厂商</th>
                    <th width=\"7%\" align=\"center\">国内或国外</th>
                    <th width=\"7%\" align=\"center\">状态</th>
                    <!--<th width=\"3%\" align=\"center\">置顶</th>-->
                    <th width=\"9%\" align=\"center\">创建时间</th>
                    <th width=\"16%\" align=\"center\">操作</th>
                </tr>

                {% for data in list %}
                <tr>
                    <td align=\"center\"><input type=\"checkbox\" class=\"selall\" name=\"deletes[]\" value=\"{{data.id}}\"/></td>
                    <!--<td align=\"center\">{{data.id}}</td>-->
                    <td align=\"center\">{{loop.index}}</td>

                    <td align=\"center\"><a style=\"color:#009688\"href=\"overview-{{data.id}}.html\" target=\"_blank\">{{data.title}}</a></td>
                    <td align=\"center\">{{data.name}}</td>
                    <td align=\"center\"><span style=\"color:#FF5722;\">
                         {% if data.type==\"china\" %}
                        <span style=\"color:#FF5722;\">国内</span>
                        {% else %}
                             <span style=\"color:#0cb204;\">国外</span>
                        {% endif %}


                    </span></td>
                    <td align=\"center\">
                        {% if data.status==0 %}
                        <span style=\"color:#FF5722;\">未发布</span>
                        {% elseif data.status==1 %}
                        <span style=\"color:#0cb204;\">已发布</span>
                        {% elseif data.status==2 %}
                        <span style=\"color:#1E9FFF;\">置顶</span>
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
                    <td align=\"center\">{{data.create_time|date(\"Y-m-d H:i\")}}</td>
                    <td align=\"center\">
                        <a href=\"{{ G.url('admin/article/edit',{id:data.id})}}\"><i class=\"layui-icon\"
                                                                                 style=\"font-size: 20px; color: #009688;\">&#xe642;</i>
                            修改</a>
                        <a href=\"javascript:void(0)\" onclick=\"del('{{ data.id }}');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe640;</i>
                            删除
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"display('{{ data.id }}');\">
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            发布
                        </a>
                        <a href=\"javascript:void(0)\" onclick=\"tasks('{{ data.id }}','{{data.host}}');\" >
                            <i class=\"layui-icon\" style=\"font-size: 20px; color: #009688;\">&#xe609;</i>
                            任务
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
                var url = \"{{ G.url('admin/article/postList',{'current_page':'currs','page_size':'limit'})}}\";
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
                    var url = \"{{ G.url('admin/article/delete',{'id':'postsid'})}}\";
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
                    var url = \"{{ G.url('admin/article/Articledisplay',{'id':'postsid'})}}\";
                    url = url.replace(\"postsid\", id);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }

    function tasks(id,host) {
        layui.use('layer', function () {
            var layer = layui.layer;
            //信息框-例2
            layer.msg('您确定要创建任务吗？', {
                time: 0,//不自动关闭
                btn: ['确定', '取消'],
                yes: function (index) {
                    var url = \"{{ G.url('admin/article/ArtickeTask',{'id':'postsid'},{'host':'hosts'})}}\";
                    url = url.replace(\"postsid\", id);
                    url = url.replace(\"hosts\", host);
                    window.location.href = escapeUrl(url);//转义amp字符
                }
            });
        });
    }
</script>
</body>
</html>", "article/list.html", "/data/test/yunceping/bbs/addons/admin/template/article/list.html");
    }
}
