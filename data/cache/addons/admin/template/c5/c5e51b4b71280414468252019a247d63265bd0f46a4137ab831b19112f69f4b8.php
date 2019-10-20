<?php

/* modules/lists.html */
class __TwigTemplate_d61957be51504498fb4fe42ad50bf3bed6abc9b0401648dc86da8395d0f40aef extends Twig_Template
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
        echo twig_include($this->env, $context, "common/moduleNav.html");
        echo "
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery-1.4.2.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/global.css\">

    <div class=\"aright\">
        <div class=\"aright_1\">

            <form class=\"layui-form\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/modulesList"), "method"), "html", null, true);
        echo "\" method=\"get\" lay-filter=\"component-form-group\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"modules\"/>
                <input type=\"hidden\" name=\"a\" value=\"modulesList\"/>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">&nbsp;</label>
                    <div class=\"layui-input-inline\" style=\"width:40%;\">
                        <input type=\"input\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "name", array(), "array"), "html", null, true);
        echo "\" name=\"name\" lay-verify=\"\" placeholder=\"请输入插件名\" class=\"layui-input\">
                    </div>
                    <button class=\"layui-btn\" type=\"submit\"><i class=\"layui-icon\" style=\"font-size: 25px; \">&#xe615;</i>  搜索插件</button> &nbsp;&nbsp;<a href=\"http://s.calfbb.com/\" target=\"_blank\">去官网下载扩展?</a>
                </div>


                <div class=\"fly-main\" style=\"overflow: hidden;\">

                    <ul class=\"fly-case-list\">

                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 28
            echo "                        <li data-id=\"586\">
                            <a class=\"fly-case-img\"  rel=\"nofollow\">
                                <img src=\"/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["route"] ?? null), "DEFAULT_ADDONS", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "dir_name", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "\" />
                                <cite  dir-name=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "dir_name", array()), "html", null, true);
            echo "\" class=\"layui-btn layui-btn-primary layui-btn-small click\">进入</cite>
                            </a>
                            <h2>
                                <a rel=\"nofollow\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a>
                            </h2>
                            <p class=\"fly-case-desc\">
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "descr", array()), "html", null, true);
            echo "
                            </p>
                            <div class=\"fly-case-info\">

                                <p>安装时间：";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "install_time", array()), "Y-m-d H:i"), "html", null, true);
            echo "</p>
                                <p>作者：";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "author", array()), "html", null, true);
            echo "</p>
                                <p>版本：";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "version", array()), "html", null, true);
            echo "</p>
                                <P>操作： <a style=\"color:#01AAED;\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/uninstallModules", 1 => array("dir_name" => $this->getAttribute($context["data"], "dir_name", array()))), "method"), "html", null, true);
            echo "\">卸载</a></P>
                            </div>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "


                    </ul>
                    <div style=\"text-align: center;\">
                        <div id=\"pages\"></div>
                    </div>
                </div>



            </form>
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
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
            limit: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/modulesList", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
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

    \$(\".click\").click(function () {
        var dir_name=\$(this).attr('dir-name');

        var url = \"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "modules/admin/index"), "method"), "html", null, true);
        echo "\";
        /**
         * 替换处理
         * @type {string}
         */
        url = url.replace(\"modules\", dir_name);
        //首次不执行
       window.location.href = escapeUrl(url);//转义amp字符


    });




</script>
";
        // line 115
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "modules/lists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 115,  187 => 99,  165 => 80,  159 => 77,  155 => 76,  151 => 75,  122 => 48,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  93 => 37,  87 => 34,  81 => 31,  71 => 30,  67 => 28,  63 => 27,  50 => 17,  40 => 10,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
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
    {{ include(\"common/moduleNav.html\")}}
    <script src=\"{{_G['APP']}}/resource/js/jquery-1.4.2.min.js\"></script>
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/css/global.css\">

    <div class=\"aright\">
        <div class=\"aright_1\">

            <form class=\"layui-form\" action=\"{{ G.url('admin/modules/modulesList')}}\" method=\"get\" lay-filter=\"component-form-group\">
                <input type=\"hidden\" name=\"m\" value=\"admin\"/>
                <input type=\"hidden\" name=\"c\" value=\"modules\"/>
                <input type=\"hidden\" name=\"a\" value=\"modulesList\"/>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">&nbsp;</label>
                    <div class=\"layui-input-inline\" style=\"width:40%;\">
                        <input type=\"input\" value=\"{{_GPC['name']}}\" name=\"name\" lay-verify=\"\" placeholder=\"请输入插件名\" class=\"layui-input\">
                    </div>
                    <button class=\"layui-btn\" type=\"submit\"><i class=\"layui-icon\" style=\"font-size: 25px; \">&#xe615;</i>  搜索插件</button> &nbsp;&nbsp;<a href=\"http://s.calfbb.com/\" target=\"_blank\">去官网下载扩展?</a>
                </div>


                <div class=\"fly-main\" style=\"overflow: hidden;\">

                    <ul class=\"fly-case-list\">

                        {% for data in list %}
                        <li data-id=\"586\">
                            <a class=\"fly-case-img\"  rel=\"nofollow\">
                                <img src=\"/{{route.DEFAULT_ADDONS}}/{{data.dir_name}}/{{data.logo}}\" alt=\"{{data.name}}\" />
                                <cite  dir-name=\"{{data.dir_name}}\" class=\"layui-btn layui-btn-primary layui-btn-small click\">进入</cite>
                            </a>
                            <h2>
                                <a rel=\"nofollow\">{{data.name}}</a>
                            </h2>
                            <p class=\"fly-case-desc\">
                                {{data.descr}}
                            </p>
                            <div class=\"fly-case-info\">

                                <p>安装时间：{{data.install_time|date(\"Y-m-d H:i\")}}</p>
                                <p>作者：{{data.author}}</p>
                                <p>版本：{{data.version}}</p>
                                <P>操作： <a style=\"color:#01AAED;\" href=\"{{ G.url('admin/modules/uninstallModules', {dir_name:data.dir_name, })}}\">卸载</a></P>
                            </div>
                        </li>
                        {% endfor %}



                    </ul>
                    <div style=\"text-align: center;\">
                        <div id=\"pages\"></div>
                    </div>
                </div>



            </form>
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
                var url = \"{{ G.url('admin/modules/modulesList',{'current_page':'currs','page_size':'limit'})}}\";
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

    \$(\".click\").click(function () {
        var dir_name=\$(this).attr('dir-name');

        var url = \"{{ G.url('modules/admin/index')}}\";
        /**
         * 替换处理
         * @type {string}
         */
        url = url.replace(\"modules\", dir_name);
        //首次不执行
       window.location.href = escapeUrl(url);//转义amp字符


    });




</script>
{{ include(\"common/footer.html\")}}", "modules/lists.html", "/data/test/yunceping/bbs/addons/admin/template/modules/lists.html");
    }
}
