<?php

/* modules/uninstallLists.html */
class __TwigTemplate_2599527ec8a6285cb114a0420c3a63d43a17ee2b28ba2a470408a8334fb50157 extends Twig_Template
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
                <div class=\"fly-main\" style=\"overflow: hidden;\">

                    <ul class=\"fly-case-list\">

                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 14
            echo "                        <li data-id=\"586\">
                            <a class=\"fly-case-img\"  rel=\"nofollow\">
                                <img src=\"/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["route"] ?? null), "DEFAULT_ADDONS", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "dir_name", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "\" />
                                <!--<cite  dir-name=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "MODULESDIRNAME", array()), "html", null, true);
            echo "\" class=\"layui-btn layui-btn-primary layui-btn-small click\">进入</cite>-->
                            </a>
                            <h2>
                                <a rel=\"nofollow\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a>
                            </h2>
                            <p class=\"fly-case-desc\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "desc", array()), "html", null, true);
            echo "
                            </p>
                            <div class=\"fly-case-info\">

                                <p>作者：";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "author", array()), "html", null, true);
            echo "</p>
                                <p>版本：";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "version", array()), "html", null, true);
            echo "</p>
                                <P>提示：请进行  <a style=\"color:#01AAED;\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/modules/checkModules", 1 => array("dir_name" => $this->getAttribute($context["data"], "dir_name", array()))), "method"), "html", null, true);
            echo "\">安装</a></P>
                            </div>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "


                    </ul>
                </div>



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
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
            limit: \"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr: \"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
            jump: function (obj, first) {
                var url = \"";
        // line 61
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
        // line 80
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
        // line 96
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "modules/uninstallLists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 96,  159 => 80,  137 => 61,  131 => 58,  127 => 57,  123 => 56,  98 => 33,  88 => 29,  84 => 28,  80 => 27,  73 => 23,  67 => 20,  61 => 17,  51 => 16,  47 => 14,  43 => 13,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
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
                <div class=\"fly-main\" style=\"overflow: hidden;\">

                    <ul class=\"fly-case-list\">

                        {% for data in list %}
                        <li data-id=\"586\">
                            <a class=\"fly-case-img\"  rel=\"nofollow\">
                                <img src=\"/{{route.DEFAULT_ADDONS}}/{{data.dir_name}}/{{data.logo}}\" alt=\"{{data.name}}\" />
                                <!--<cite  dir-name=\"{{data.MODULESDIRNAME}}\" class=\"layui-btn layui-btn-primary layui-btn-small click\">进入</cite>-->
                            </a>
                            <h2>
                                <a rel=\"nofollow\">{{data.name}}</a>
                            </h2>
                            <p class=\"fly-case-desc\">
                                {{data.desc}}
                            </p>
                            <div class=\"fly-case-info\">

                                <p>作者：{{data.author}}</p>
                                <p>版本：{{data.version}}</p>
                                <P>提示：请进行  <a style=\"color:#01AAED;\" href=\"{{ G.url('admin/modules/checkModules', {dir_name:data.dir_name, })}}\">安装</a></P>
                            </div>
                        </li>
                        {% endfor %}



                    </ul>
                </div>



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
{{ include(\"common/footer.html\")}}", "modules/uninstallLists.html", "/data/test/yunceping/bbs/addons/admin/template/modules/uninstallLists.html");
    }
}
