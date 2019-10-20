<?php

/* posts/edit.html */
class __TwigTemplate_79dd52674d0d7757176b39f77aeba0d54c0481d36ca47f9a28afddd5ff6375c2 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/css/wangEditor.min.css\">
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/js/wangEditor.min.js\"></script>
    <style type=\"text/css\">
        .tpt_sels a {
            padding-right: 15px;
            position: relative
        }

        .tpt_sels a {
            padding: 0 20px 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a.selected {
            padding: 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a {
            padding: 0 8px;
            color: #fff;
            background: #5AC7A9;
            border: 1px #5AC7A9 solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_sels a em {
            width: 12px;
            height: 12px;
            font-style: normal;
            display: block;
            position: absolute;
            top: 7px;
            right: 4px;
            z-index: 2;
            background: url(/blog/Public/img/sx.png) no-repeat 0 0;
        }

        .wangEditor-menu-container .menu-item a {
            padding: 12px 0;
        }

        .wangEditor-menu-container .menu-item {
            height: 37px;
            width: 37px;
        }

        .wangEditor-menu-container .menu-group {
            padding: 0;
        }

        .wangEditor-container {
            border: 1px solid #e6e6e6;
        }
    </style>
    <div class=\"aright\">

        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin: 20px 30px 20px 20px;\">
            <legend>修改帖子</legend>
        </fieldset>

        <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/edit"), "method"), "html", null, true);
        echo "\"
              enctype=\"multipart/form-data\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">帖子标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" required lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\"
                           class=\"layui-input\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">所属分类</label>
                <div class=\"layui-input-block\">
                    <select name=\"cid\">

                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clssify"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 107
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["cate"], "id", array()) == $this->getAttribute(($context["data"] ?? null), "cid", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                    </select>
                </div>
            </div>



            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">置顶</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"top\" value=\"0\" title=\"否\" ";
        // line 119
        if (($this->getAttribute(($context["data"] ?? null), "top", array()) == 0)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"top\" value=\"1\" title=\"是\" ";
        // line 120
        if (($this->getAttribute(($context["data"] ?? null), "top", array()) == 1)) {
            echo "checked";
        }
        echo ">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">是否在万能查首页展示</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"wnc_show\" value=\"0\" title=\"否\" ";
        // line 126
        if (($this->getAttribute(($context["data"] ?? null), "wnc_show", array()) == 0)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"wnc_show\" value=\"1\" title=\"是\" ";
        // line 127
        if (($this->getAttribute(($context["data"] ?? null), "wnc_show", array()) == 1)) {
            echo "checked";
        }
        echo ">
                </div>
            </div>

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"status\" value=\"0\" title=\"未解决\" ";
        // line 134
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 0)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"1\" title=\"已解决\" ";
        // line 135
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 1)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"2\" title=\"精华\" ";
        // line 136
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 2)) {
            echo "checked";
        }
        echo ">
                    <input type=\"radio\" name=\"status\" value=\"3\" title=\"黑名单\" ";
        // line 137
        if (($this->getAttribute(($context["data"] ?? null), "status", array()) == 3)) {
            echo "checked";
        }
        echo ">
                </div>
            </div>



            <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<textarea name=\"description\" placeholder=\"用于搜索引擎\"-->
                              <!--class=\"layui-textarea\">";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>-->
                <!--</div>-->
            <!--</div>-->

            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
      <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
      ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "text", array()), "html", null, true);
        echo "
      </textarea>
                </div>
            </div>

            <div class=\"tpt_item\">
                <!--<input type=\"hidden\" name=\"keywords\" value=\"\">-->
                <input type=\"hidden\" name=\"uid\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "uid", array()), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\"/>
                <input type=\"hidden\" name=\"submit\" value=\"1\"/>
                <div id=\"tpt_sel\" class=\"tpt_sels\" style=\"margin-top: 20px;\">
\t\t<span style=\"margin-bottom: 5px;float: left;margin-left: 110px;\">
\t\t\t\t</span>
                    <div class=\"layui-form-item\" style=\"margin-bottom: 10px;\">
                        <!--<label class=\"layui-form-label\">文章标签</label>-->
                        <!--<div class=\"layui-input-block\">-->
                        <!--<input id=\"tpt_input\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 400px;float: left;margin-right: 20px;\">-->
                        <!--<button class=\"layui-btn\" id=\"tpt_btn\" type=\"button\" style=\"background: #FF5722;\">添加标签</button>-->
                        <!--</div>-->
                    </div>
                </div>
                <div id=\"tpt_pre\" class=\"tpt_pres layui-input-block cl\" style=\"margin-bottom: 0px;\">
                    <!--<a href=\"javascript:;\">新媒体</a><a href=\"javascript:;\">iphone8</a><a href=\"javascript:;\">游戏</a><a href=\"javascript:;\">视频</a><a href=\"javascript:;\">淘宝</a><a href=\"javascript:;\">雷军</a><a href=\"javascript:;\">网红</a><a href=\"javascript:;\">人工智能</a><a href=\"javascript:;\">大朋VR</a><a href=\"javascript:;\">机器人</a><a href=\"javascript:;\">小米</a><a href=\"javascript:;\">综艺</a><a href=\"javascript:;\">真人秀</a><a href=\"javascript:;\">自定义</a> -->
                </div>

                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">立即提交</button>
                        <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\" style=\"margin-top: 100px;\">

                    </div>
                </div>

            </div>
        </form>

        <script type=\"text/javascript\">
            \$(function () {
                \$('#tpt_input').keydown(function (e) {
                    if (e.which === 13) {
                        \$(\"#tpt_btn\").click();
                        e.preventDefault();
                        return false;
                    }
                });
                \$(\"#tpt_sel\").on('click', 'a>em', function () {
                    var name = \"keywords\";
                    var tag = \$(this).parent().text();
                    \$(this).parent().remove();
                    var tags = new Array();
                    \$(\"#tpt_sel\").find('a').each(function () {
                        tags.push(\$(this).text());
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_pre a:contains('\" + tag + \"')\").removeClass(\"selected\");
                });
                \$(\"#tpt_btn\").click(function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(\"#tpt_input\").val());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                        \$(\"#tpt_pre a:contains('\" + tag + \"')\").addClass(\"selected\");
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_input\").val('');
                });
                \$(\"#tpt_pre\").on('click', 'a:not(.selected)', function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(this).text());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(this).addClass('selected');
                });
            });
        </script>
        <script>
            layui.use('form', function () {
//                var form = layui.form();
            });
        </script>
        <script type=\"text/javascript\">
            var editor = new wangEditor('textarea');
            editor.config.uploadImgUrl = \"";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "admin/posts/doUploadPic"), "method"), "html", null, true);
        echo "\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor.create();
        </script>
    </div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "posts/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 263,  269 => 163,  265 => 162,  255 => 155,  244 => 147,  229 => 137,  223 => 136,  217 => 135,  211 => 134,  199 => 127,  193 => 126,  182 => 120,  176 => 119,  164 => 109,  149 => 107,  145 => 106,  133 => 97,  123 => 90,  36 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/wangEditor/css/wangEditor.min.css\">
    <script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/wangEditor/js/wangEditor.min.js\"></script>
    <style type=\"text/css\">
        .tpt_sels a {
            padding-right: 15px;
            position: relative
        }

        .tpt_sels a {
            padding: 0 20px 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a.selected {
            padding: 0 8px;
            color: #3B6268;
            background: #FFFFBA;
            border: 1px #F8E06E solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_pres a {
            padding: 0 8px;
            color: #fff;
            background: #5AC7A9;
            border: 1px #5AC7A9 solid;
            margin-right: 5px;
            margin-bottom: 5px;
            font-size: 14px;
            height: 26px;
            line-height: 26px;
            display: block;
            float: left
        }

        .tpt_sels a em {
            width: 12px;
            height: 12px;
            font-style: normal;
            display: block;
            position: absolute;
            top: 7px;
            right: 4px;
            z-index: 2;
            background: url(/blog/Public/img/sx.png) no-repeat 0 0;
        }

        .wangEditor-menu-container .menu-item a {
            padding: 12px 0;
        }

        .wangEditor-menu-container .menu-item {
            height: 37px;
            width: 37px;
        }

        .wangEditor-menu-container .menu-group {
            padding: 0;
        }

        .wangEditor-container {
            border: 1px solid #e6e6e6;
        }
    </style>
    <div class=\"aright\">

        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin: 20px 30px 20px 20px;\">
            <legend>修改帖子</legend>
        </fieldset>

        <form class=\"layui-form bform\" method=\"post\" action=\"{{ G.url('admin/posts/edit')}}\"
              enctype=\"multipart/form-data\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">帖子标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" required lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\"
                           class=\"layui-input\" value=\"{{data.title}}\">
                </div>
            </div>

            <div class=\"layui-form-item\" style=\"width: 300px;\">
                <label class=\"layui-form-label\">所属分类</label>
                <div class=\"layui-input-block\">
                    <select name=\"cid\">

                        {% for cate in clssify %}
                        <option value=\"{{cate.id}}\" {% if cate.id==data.cid %}selected{% endif %}>{{cate.name}}</option>
                        {% endfor %}

                    </select>
                </div>
            </div>



            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">置顶</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"top\" value=\"0\" title=\"否\" {% if data.top==0 %}checked{% endif %}>
                    <input type=\"radio\" name=\"top\" value=\"1\" title=\"是\" {% if data.top==1 %}checked{% endif %}>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">是否在万能查首页展示</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"wnc_show\" value=\"0\" title=\"否\" {% if data.wnc_show==0 %}checked{% endif %}>
                    <input type=\"radio\" name=\"wnc_show\" value=\"1\" title=\"是\" {% if data.wnc_show==1 %}checked{% endif %}>
                </div>
            </div>

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">状态</label>
                <div class=\"layui-input-block\">
                    <input type=\"radio\" name=\"status\" value=\"0\" title=\"未解决\" {% if data.status==0 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"1\" title=\"已解决\" {% if data.status==1 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"2\" title=\"精华\" {% if data.status==2 %}checked{% endif %}>
                    <input type=\"radio\" name=\"status\" value=\"3\" title=\"黑名单\" {% if data.status==3 %}checked{% endif %}>
                </div>
            </div>



            <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                    <!--<textarea name=\"description\" placeholder=\"用于搜索引擎\"-->
                              <!--class=\"layui-textarea\">{{data.description}}</textarea>-->
                <!--</div>-->
            <!--</div>-->

            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
      <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
      {{data.text}}
      </textarea>
                </div>
            </div>

            <div class=\"tpt_item\">
                <!--<input type=\"hidden\" name=\"keywords\" value=\"\">-->
                <input type=\"hidden\" name=\"uid\" value=\"{{data.uid}}\"/>
                <input type=\"hidden\" name=\"id\" value=\"{{data.id}}\"/>
                <input type=\"hidden\" name=\"submit\" value=\"1\"/>
                <div id=\"tpt_sel\" class=\"tpt_sels\" style=\"margin-top: 20px;\">
\t\t<span style=\"margin-bottom: 5px;float: left;margin-left: 110px;\">
\t\t\t\t</span>
                    <div class=\"layui-form-item\" style=\"margin-bottom: 10px;\">
                        <!--<label class=\"layui-form-label\">文章标签</label>-->
                        <!--<div class=\"layui-input-block\">-->
                        <!--<input id=\"tpt_input\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"layui-input\" style=\"width: 400px;float: left;margin-right: 20px;\">-->
                        <!--<button class=\"layui-btn\" id=\"tpt_btn\" type=\"button\" style=\"background: #FF5722;\">添加标签</button>-->
                        <!--</div>-->
                    </div>
                </div>
                <div id=\"tpt_pre\" class=\"tpt_pres layui-input-block cl\" style=\"margin-bottom: 0px;\">
                    <!--<a href=\"javascript:;\">新媒体</a><a href=\"javascript:;\">iphone8</a><a href=\"javascript:;\">游戏</a><a href=\"javascript:;\">视频</a><a href=\"javascript:;\">淘宝</a><a href=\"javascript:;\">雷军</a><a href=\"javascript:;\">网红</a><a href=\"javascript:;\">人工智能</a><a href=\"javascript:;\">大朋VR</a><a href=\"javascript:;\">机器人</a><a href=\"javascript:;\">小米</a><a href=\"javascript:;\">综艺</a><a href=\"javascript:;\">真人秀</a><a href=\"javascript:;\">自定义</a> -->
                </div>

                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit lay-filter=\"formDemo\">立即提交</button>
                        <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\" style=\"margin-top: 100px;\">

                    </div>
                </div>

            </div>
        </form>

        <script type=\"text/javascript\">
            \$(function () {
                \$('#tpt_input').keydown(function (e) {
                    if (e.which === 13) {
                        \$(\"#tpt_btn\").click();
                        e.preventDefault();
                        return false;
                    }
                });
                \$(\"#tpt_sel\").on('click', 'a>em', function () {
                    var name = \"keywords\";
                    var tag = \$(this).parent().text();
                    \$(this).parent().remove();
                    var tags = new Array();
                    \$(\"#tpt_sel\").find('a').each(function () {
                        tags.push(\$(this).text());
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_pre a:contains('\" + tag + \"')\").removeClass(\"selected\");
                });
                \$(\"#tpt_btn\").click(function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(\"#tpt_input\").val());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                        \$(\"#tpt_pre a:contains('\" + tag + \"')\").addClass(\"selected\");
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(\"#tpt_input\").val('');
                });
                \$(\"#tpt_pre\").on('click', 'a:not(.selected)', function () {
                    var name = \"keywords\";
                    var tags = \$.trim(\$(\"input[name=\" + name + \"]\").val());
                    if (tags !== \"\") {
                        tags = tags.split(\",\");
                    } else {
                        tags = new Array();
                    }
                    var tag = \$.trim(\$(this).text());
                    if (tag !== '' && \$.inArray(tag, tags) === -1) {
                        tags.push(tag);
                    }
                    \$(\"#tpt_sel\").children('span').empty();
                    \$.each(tags, function (k, v) {
                        \$(\"#tpt_sel\").children('span').append('<a href=\"javascript:;\">' + v + '<em></em></a>');
                    });
                    \$(\"input[name=\" + name + \"]\").val(tags.join(\",\"));
                    \$(this).addClass('selected');
                });
            });
        </script>
        <script>
            layui.use('form', function () {
//                var form = layui.form();
            });
        </script>
        <script type=\"text/javascript\">
            var editor = new wangEditor('textarea');
            editor.config.uploadImgUrl = \"{{ G.url('admin/posts/doUploadPic') }}\";
            if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
                editor.config.menus = [
                    'source',
                    'bold',
                    'underline',
                    'fontsize',
                    'link',
                    'emotion',
                    //  '|',
                    'img',
                    'undo',
                ];

            }else{
                editor.config.menus = [
                    'source',
                    //   '|',
                    'bold',
                    'underline',
                    //  'italic',
                    // 'strikethrough',
                    // 'eraser',
                    'forecolor',
                    'bgcolor',
                    // '|',
                    'quote',
                    'fontfamily',
                    'fontsize',
                    'head',
                    //   'unorderlist',
                    //   'orderlist',
                    //  'alignleft',
                    //  'aligncenter',
                    //   'alignright',
                    //   '|',
                    'link',
                    // 'unlink',
                    'table',
                    'emotion',
                    //  '|',
                    'img',
                    'video',
                    // 'location',
                    'insertcode',
                    //    '|',
                    'undo',
                    'redo',
                    'fullscreen'
                ];

            }
            editor.create();
        </script>
    </div>
</div>
</body>
</html>", "posts/edit.html", "/data/test/yunceping/bbs/addons/admin/template/posts/edit.html");
    }
}
