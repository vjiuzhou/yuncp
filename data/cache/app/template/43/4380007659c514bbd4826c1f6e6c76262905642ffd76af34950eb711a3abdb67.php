<?php

/* detail/snapshot.html */
class __TwigTemplate_e0f676f49c397169bf9232266e1f78054bc207540f6acaf667cbe5f25e32114a extends Twig_Template
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





    ";
        // line 9
        echo twig_include($this->env, $context, "common/ceping_detail_nav.html");
        echo "
    <div class=\"layui-container\">
        <div class=\"layui-row\">


            <div class=\"layui-col-md12\">
                <!--<div class=\"layui-col-md5\" style=\"border:1px solid red;text-align: center\">-->


                    <!--阿里云官网-->
                    <!--<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</button>-->


                <!--</div>-->
                <!--<div class=\"layui-col-md7\" style=\"border:1px solid red;text-align: center\">-->

                    <!--优惠卷：BADASDAS12323-->


                    <!--购买时输入此优惠码，可打5折优惠-->
                    <!--<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button>-->



                <!--</div>-->


                <div class=\"layui-row layui-col-space5\">
                    <div class=\"layui-col-md12\" >


                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                            <thead>
                            <tr>
                                <th lay-data=\"{field:'parameter'}\">监测地点名称</th>
                                <th lay-data=\"{field:'value'}\">IP归宿地</th>
                                <th lay-data=\"{field:'value'}\">响应时间</th>
                                <th lay-data=\"{field:'value'}\">TTL值</th>
                                <th lay-data=\"{field:'value'}\">状态</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["snapshotList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 52
            echo "                            <tr>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "privonce_name", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "city_name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "ip_address", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "response_time", array()), "html", null, true);
            echo " ms(毫秒)</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "ttl", array()), "html", null, true);
            echo " bytes(字节)</td>
                                ";
            // line 57
            if (($this->getAttribute($context["data"], "response_time", array()) >= 200)) {
                // line 58
                echo "                                <td><span class=\"layui-badge layui-bg-orange\">较差</span></td>

                                ";
            } elseif ((($this->getAttribute(            // line 60
$context["data"], "response_time", array()) < 200) && ($this->getAttribute($context["data"], "response_time", array()) >= 100))) {
                // line 61
                echo "                                <td><span class=\"layui-badge layui-bg-blue\">一般</span></td>

                                ";
            } elseif ((($this->getAttribute(            // line 63
$context["data"], "resonse_time", array()) < 100) && ($this->getAttribute($context["data"], "response_time", array()) >= 1))) {
                // line 64
                echo "                                <td><span class=\"layui-badge layui-bg-green\">优秀</span></td>

                                ";
            } else {
                // line 67
                echo "                                <td><span class=\"layui-badge \">不可用</span></td>
                                ";
            }
            // line 69
            echo "
                            </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </tbody>
                        </table>



                    </div>
                </div>



            </div>
            <div id=\"pages\"  class=\"ceping-bottom\" style=\"background-color:#fff;\"></div>


            <!--<div class=\"layui-col-md10\">-->
            <!--<blockquote class=\"layui-elem-quote\">引用区域的文字</blockquote>-->
            <!--<div class=\"layui-row layui-col-space5\">-->
            <!--<div class=\"layui-col-md8\" style=\"border:1px solid red;\">-->

            <!--</div>-->
            <!--<div class=\"layui-col-md4\"  style=\"border:1px solid red;\">-->

            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>


    </div>


    <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.all.js\" charset=\"utf-8\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['table','laypage'], function(){
        var table = layui.table;
        var laypage = layui.laypage;

        layui.use(['table','laypage'], function(){
            var table = layui.table;
            var laypage = layui.laypage;

            var status=\"";
        // line 118
        echo twig_escape_filter($this->env, ($context["status"] ?? null), "html", null, true);
        echo "\";
            var orderBy='";
        // line 119
        echo twig_escape_filter($this->env, ($context["orderBy"] ?? null), "html", null, true);
        echo "';
            var id=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_GPC"] ?? null), "id", array(), "array"), "html", null, true);
        echo "\";
            //完整功能
            laypage.render({
                elem: 'pages',
                count: \"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
                last:'尾页',
                limit:\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
                curr:\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
                layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
                jump: function(obj,first){
                    // console.log(obj)
                    // var url=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/search/search", 1 => array("current_page" => "currs", "page_size" => "limit", "status" => "statuss", "orderBy" => "orderByy", "cid" => "cidd")), "method"), "html", null, true);
        echo "\";
                    var url=\"snapshot-idd-currs-limit-statuss-orderByy.html\";

                    /**
                     * 替换处理
                     * @type {string}
                     */
                    url = url.replace(\"currs\", obj.curr);
                    url = url.replace(\"limit\", obj.limit);
                    url = url.replace(\"statuss\", status);
                    url = url.replace(\"orderByy\", orderBy);
                    url = url.replace(\"idd\", id);

                    //首次不执行
                    if(!first){
                        window.location.href=escapeUrl(url);//转义amp字符
                    }
                }
            });
        });

//        //完整功能
//        laypage.render({
//            elem: 'pages',
//            count: \"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\",
//            limit: \"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
//            curr: \"";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
//            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
//            jump: function (obj, first) {
//                var url = \"";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/CepingDetail/snapshot", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
//                /**
//                 * 替换处理
//                 * @type {string}
//                 */
//                url = url.replace(\"currs\", obj.curr);
//                url = url.replace(\"limit\", obj.limit);
//
//                //首次不执行
//                if (!first) window.location.href = escapeUrl(url);//转义amp字符
//
//            }
//        });

    });



</script>
";
        // line 179
        echo twig_include($this->env, $context, "common/ceping_footer.html");
    }

    public function getTemplateName()
    {
        return "detail/snapshot.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 179,  257 => 160,  251 => 157,  247 => 156,  243 => 155,  216 => 131,  209 => 127,  205 => 126,  200 => 124,  193 => 120,  189 => 119,  185 => 118,  171 => 107,  135 => 73,  126 => 69,  122 => 67,  117 => 64,  115 => 63,  111 => 61,  109 => 60,  105 => 58,  103 => 57,  99 => 56,  95 => 55,  91 => 54,  85 => 53,  82 => 52,  78 => 51,  33 => 9,  24 => 3,  19 => 1,);
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





    {{ include(\"common/ceping_detail_nav.html\")}}
    <div class=\"layui-container\">
        <div class=\"layui-row\">


            <div class=\"layui-col-md12\">
                <!--<div class=\"layui-col-md5\" style=\"border:1px solid red;text-align: center\">-->


                    <!--阿里云官网-->
                    <!--<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</button>-->


                <!--</div>-->
                <!--<div class=\"layui-col-md7\" style=\"border:1px solid red;text-align: center\">-->

                    <!--优惠卷：BADASDAS12323-->


                    <!--购买时输入此优惠码，可打5折优惠-->
                    <!--<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button>-->



                <!--</div>-->


                <div class=\"layui-row layui-col-space5\">
                    <div class=\"layui-col-md12\" >


                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                            <thead>
                            <tr>
                                <th lay-data=\"{field:'parameter'}\">监测地点名称</th>
                                <th lay-data=\"{field:'value'}\">IP归宿地</th>
                                <th lay-data=\"{field:'value'}\">响应时间</th>
                                <th lay-data=\"{field:'value'}\">TTL值</th>
                                <th lay-data=\"{field:'value'}\">状态</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for data in snapshotList %}
                            <tr>
                                <td>{{data.privonce_name}}-{{data.city_name}}</td>
                                <td>{{data.ip_address}}</td>
                                <td>{{data.response_time}} ms(毫秒)</td>
                                <td>{{data.ttl}} bytes(字节)</td>
                                {% if data.response_time>=200 %}
                                <td><span class=\"layui-badge layui-bg-orange\">较差</span></td>

                                {% elseif data.response_time<200 and data.response_time>=100 %}
                                <td><span class=\"layui-badge layui-bg-blue\">一般</span></td>

                                {% elseif data.resonse_time<100 and data.response_time>=1 %}
                                <td><span class=\"layui-badge layui-bg-green\">优秀</span></td>

                                {% else %}
                                <td><span class=\"layui-badge \">不可用</span></td>
                                {% endif %}

                            </tr>

                            {% endfor %}
                            </tbody>
                        </table>



                    </div>
                </div>



            </div>
            <div id=\"pages\"  class=\"ceping-bottom\" style=\"background-color:#fff;\"></div>


            <!--<div class=\"layui-col-md10\">-->
            <!--<blockquote class=\"layui-elem-quote\">引用区域的文字</blockquote>-->
            <!--<div class=\"layui-row layui-col-space5\">-->
            <!--<div class=\"layui-col-md8\" style=\"border:1px solid red;\">-->

            <!--</div>-->
            <!--<div class=\"layui-col-md4\"  style=\"border:1px solid red;\">-->

            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
        </div>


    </div>


    <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

<script src=\"{{_G['APP']}}/resource/layui/layui.all.js\" charset=\"utf-8\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    layui.use(['table','laypage'], function(){
        var table = layui.table;
        var laypage = layui.laypage;

        layui.use(['table','laypage'], function(){
            var table = layui.table;
            var laypage = layui.laypage;

            var status=\"{{status}}\";
            var orderBy='{{orderBy}}';
            var id=\"{{_GPC['id']}}\";
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
                    var url=\"snapshot-idd-currs-limit-statuss-orderByy.html\";

                    /**
                     * 替换处理
                     * @type {string}
                     */
                    url = url.replace(\"currs\", obj.curr);
                    url = url.replace(\"limit\", obj.limit);
                    url = url.replace(\"statuss\", status);
                    url = url.replace(\"orderByy\", orderBy);
                    url = url.replace(\"idd\", id);

                    //首次不执行
                    if(!first){
                        window.location.href=escapeUrl(url);//转义amp字符
                    }
                }
            });
        });

//        //完整功能
//        laypage.render({
//            elem: 'pages',
//            count: \"{{pagination.total}}\",
//            limit: \"{{pagination.page_size}}\",
//            curr: \"{{pagination.current_page}}\",
//            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip'],
//            jump: function (obj, first) {
//                var url = \"{{ G.url('app/CepingDetail/snapshot',{'current_page':'currs','page_size':'limit'})}}\";
//                /**
//                 * 替换处理
//                 * @type {string}
//                 */
//                url = url.replace(\"currs\", obj.curr);
//                url = url.replace(\"limit\", obj.limit);
//
//                //首次不执行
//                if (!first) window.location.href = escapeUrl(url);//转义amp字符
//
//            }
//        });

    });



</script>
{{ include(\"common/ceping_footer.html\")}}", "detail/snapshot.html", "/data/test/yunceping/bbs/app/template/detail/snapshot.html");
    }
}
