<?php

/* post/edit.html */
class __TwigTemplate_8dcdd19959a3f5c97c9525a4b30ad3c51e33492c7fbaa2c9e31dfcb682685671 extends Twig_Template
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
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "common/ceping_header.html");
        echo "



";
        // line 6
        echo twig_include($this->env, $context, "common/ceping_nav.html");
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/css/wangEditor.min.css\">
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/plugin/node_modules/xss/dist/xss.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/js/wangEditor.min.js\"></script>
<div class=\"layui-container fly-marginTop\">
  <div class=\"fly-panel\" pad20 style=\"padding-top: 5px;\">
    <!--<div class=\"fly-none\">没有权限</div>-->
    <div class=\"layui-form layui-form-pane\">
      <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
        <ul class=\"layui-tab-title\">
          <li class=\"layui-this\">发表新帖<!-- 编辑帖子 --></li>
        </ul>
        <div class=\"layui-form layui-tab-content\"  id=\"LAY_ucm\" style=\"padding: 20px 0;\">
          <div class=\"layui-tab-item layui-show\">
            <!--<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/index/add"), "method"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">-->
              <div class=\"layui-row layui-col-space15 layui-form-item\">
                <div class=\"layui-col-md3\">
                  <label class=\"layui-form-label\">所在分类</label>
                  <div class=\"layui-input-block\">
                    <select name=\"cid\" style=\"display:none;\">
                      <option value=\"\">选择</option>
                      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clssify"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 29
            echo "                      <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["cate"], "id", array()) == $this->getAttribute(($context["post"] ?? null), "cid", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
                  </div>
                </div>

                <div class=\"layui-col-md9\">
                  <label for=\"L_title\" class=\"layui-form-label\">帖子标题</label>
                  <div class=\"layui-input-block\">
                    <input type=\"text\" id=\"L_title\" name=\"title\" placeholder=\"请输入帖子标题\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "title", array()), "html", null, true);
        echo "\">
                    <!-- <input type=\"hidden\" name=\"id\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["d"] ?? null), "edit", array()), "id", array()), "html", null, true);
        echo "\"> -->
                  </div>
                </div>
              </div>
              <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                  <!--<textarea id=\"desc\"   name=\"description\" placeholder=\"用于搜索引擎\" class=\"layui-textarea\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>-->
                <!--</div>-->
              <!--</div>-->
              <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
                <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
               ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "text", array()), "html", null, true);
        echo "
                </textarea>
                </div>
              </div>
              <!--<div class=\"layui-form-item\">-->
                <!--<div class=\"layui-inline\">-->
                  <!--<label class=\"layui-form-label\">悬赏飞吻</label>-->
                  <!--<div class=\"layui-input-inline\" style=\"width: 190px;\">-->
                    <!--<select name=\"experience\">-->
                      <!--<option value=\"20\">20</option>-->
                      <!--<option value=\"30\">30</option>-->
                      <!--<option value=\"50\">50</option>-->
                      <!--<option value=\"60\">60</option>-->
                      <!--<option value=\"80\">80</option>-->
                    <!--</select>-->
                  <!--</div>-->
                  <!--<div class=\"layui-form-mid layui-word-aux\">发表后无法更改飞吻</div>-->
                <!--</div>-->
              <!--</div>-->

              <div class=\"layui-form-item\">
                <label for=\"L_vercode\" class=\"layui-form-label\">验证码验证</label>
                <div class=\"layui-input-inline\">
                  <input type=\"text\" id=\"L_vercode\" name=\"vercode\" required lay-verify=\"required\" placeholder=\"验证码\" autocomplete=\"off\" class=\"layui-input\">
                </div>
                <div class=\"layui-form-mid\" style=\"padding:2px 0!important;margin-top:-2px;\">
                    <img  onclick=\"javascript:re_captcha();\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/index/captcha"), "method"), "html", null, true);
        echo "\"  alt=\"验证码\" title=\"刷新图片\" width=\"100\" height=\"38\" id=\"c2c98f0de5a04167a9e427d883690ff6\" border=\"0\">
                </div>
              </div>
              <input type=\"hidden\" name=\"submit\" value=\"1\">
               <input type=\"hidden\" name=\"id\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\"/>
              <div class=\"layui-form-item\">
                <div class=\"layui-btn\" onClick=\"add()\">保存编辑</div>
              </div>
            <!--</form>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
    layui.use('form', function () {
        var form = layui.form;


    });
 /**编辑框**/
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
<script type=\"text/javascript\">
    var editor = new wangEditor('textarea');
    editor.config.uploadImgUrl = \"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/index/doUploadPic"), "method"), "html", null, true);
        echo "\";
    if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
        editor.config.menus = [
            // 'source',
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
            // 'source',
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
<script>
    /**
     * 刷新验证码
     */
    function re_captcha() {
        var url = \"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/index/captcha", 1 => array("captcha" => "random")), "method"), "html", null, true);
        echo "\";
        var random = Math.random();
        url = url.replace(\"random\", random);//使用js自带函数进行变量替换
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=url;
    }

    function add() {

        layui.use('layer', function() {


            var id=\$('input[name=id]').val();
            var cid = \$('select[name=cid]').val();
            var title = \$('input[name=title]').val();
           // var description = \$('#desc').val();
            var text = \$('#textarea').val();
            text = filterXSS(text)
            var vercode = \$('input[name=vercode]').val();
            var submit = \$('input[name=submit]').val();;

            if (!title) {
                layer.msg('帖子标题不能为空');
                return false;
            }

//            if (!description) {
//                layer.msg('描述不能为空');
//                return false;
//            }

            if (!vercode) {
                layer.msg('验证码不能为空');
                return false;
            }

            \$.ajax({
                url: \"";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/post/edit"), "method"), "html", null, true);
        echo "\",//当前ajax请求的地址
                type: 'post',//请求的方式
                async: true,//是否异步  默认为异步
                data: {
                    id: id,
                    cid: cid,
                    title: title,
                    text: text,
                    submit: submit,
                    vercode: vercode,
                    edit_uid: \"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\",//当前ajax请求的参数  
                    dataType: \"json\"},

                    success: function (data) {//发送成功时的代码执行

                        if (data.code == 1001) {
                            layer.msg(\"编辑帖子成功,正在跳转........\");

                            setTimeout(function () {
                                window.location.href = \"";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "id", array(), "array"))), "method"), "html", null, true);
        echo "\";
                            }, 2000);

                        }else if(data.code == 2001){

                            if(data.data.description){
                                layer.msg(\"编辑帖子失败:\" + data.data.description);
                            }else if(data.data.text){
                                layer.msg(\"编辑帖子失败:\" + data.data.text);
                            }else if(data.data.title){
                                layer.msg(\"编辑帖子失败:\" + data.data.title);
                            }else if(data.data.cid){
                                layer.msg(\"编辑帖子失败:: 未选择分类\");
                            }else{
                                layer.msg(\"编辑帖子失败:\" + JSON.stringify(data.data));
                            }

                            return false;
                        }else {

                            layer.msg(\"编辑帖子失败，请重新发帖\");

                        }

                        re_captcha();

                    },
                    error: function () {//失败时的代码执行
                        layer.msg(\"编辑帖子失败，请重新编辑\");
                        re_captcha();
                    }

            });
        });
    }
</script>
";
        // line 313
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "post/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 313,  366 => 277,  354 => 268,  341 => 258,  302 => 222,  240 => 163,  157 => 83,  150 => 79,  121 => 53,  111 => 46,  101 => 39,  97 => 38,  88 => 31,  73 => 29,  69 => 28,  59 => 21,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ include(\"common/ceping_header.html\")}}



{{ include(\"common/ceping_nav.html\")}}
<link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/wangEditor/css/wangEditor.min.css\">
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/plugin/node_modules/xss/dist/xss.js\"></script>
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/wangEditor/js/wangEditor.min.js\"></script>
<div class=\"layui-container fly-marginTop\">
  <div class=\"fly-panel\" pad20 style=\"padding-top: 5px;\">
    <!--<div class=\"fly-none\">没有权限</div>-->
    <div class=\"layui-form layui-form-pane\">
      <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
        <ul class=\"layui-tab-title\">
          <li class=\"layui-this\">发表新帖<!-- 编辑帖子 --></li>
        </ul>
        <div class=\"layui-form layui-tab-content\"  id=\"LAY_ucm\" style=\"padding: 20px 0;\">
          <div class=\"layui-tab-item layui-show\">
            <!--<form action=\"{{ G.url('app/index/add')}}\" method=\"post\" enctype=\"multipart/form-data\">-->
              <div class=\"layui-row layui-col-space15 layui-form-item\">
                <div class=\"layui-col-md3\">
                  <label class=\"layui-form-label\">所在分类</label>
                  <div class=\"layui-input-block\">
                    <select name=\"cid\" style=\"display:none;\">
                      <option value=\"\">选择</option>
                      {% for cate in clssify %}
                      <option value=\"{{cate.id}}\" {% if cate.id==post.cid %} selected {%endif%}>{{cate.name}}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"layui-col-md9\">
                  <label for=\"L_title\" class=\"layui-form-label\">帖子标题</label>
                  <div class=\"layui-input-block\">
                    <input type=\"text\" id=\"L_title\" name=\"title\" placeholder=\"请输入帖子标题\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"{{post.title}}\">
                    <!-- <input type=\"hidden\" name=\"id\" value=\"{{d.edit.id}}\"> -->
                  </div>
                </div>
              </div>
              <!--<div class=\"layui-form-item layui-form-text\">-->
                <!--<label class=\"layui-form-label\">帖子描述</label>-->
                <!--<div class=\"layui-input-block\">-->
                  <!--<textarea id=\"desc\"   name=\"description\" placeholder=\"用于搜索引擎\" class=\"layui-textarea\">{{post.description}}</textarea>-->
                <!--</div>-->
              <!--</div>-->
              <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">帖子内容</label>
                <div class=\"layui-input-block\">
                <textarea id=\"textarea\" name=\"text\" style=\"height:600px;width: 100%;\">
               {{post.text}}
                </textarea>
                </div>
              </div>
              <!--<div class=\"layui-form-item\">-->
                <!--<div class=\"layui-inline\">-->
                  <!--<label class=\"layui-form-label\">悬赏飞吻</label>-->
                  <!--<div class=\"layui-input-inline\" style=\"width: 190px;\">-->
                    <!--<select name=\"experience\">-->
                      <!--<option value=\"20\">20</option>-->
                      <!--<option value=\"30\">30</option>-->
                      <!--<option value=\"50\">50</option>-->
                      <!--<option value=\"60\">60</option>-->
                      <!--<option value=\"80\">80</option>-->
                    <!--</select>-->
                  <!--</div>-->
                  <!--<div class=\"layui-form-mid layui-word-aux\">发表后无法更改飞吻</div>-->
                <!--</div>-->
              <!--</div>-->

              <div class=\"layui-form-item\">
                <label for=\"L_vercode\" class=\"layui-form-label\">验证码验证</label>
                <div class=\"layui-input-inline\">
                  <input type=\"text\" id=\"L_vercode\" name=\"vercode\" required lay-verify=\"required\" placeholder=\"验证码\" autocomplete=\"off\" class=\"layui-input\">
                </div>
                <div class=\"layui-form-mid\" style=\"padding:2px 0!important;margin-top:-2px;\">
                    <img  onclick=\"javascript:re_captcha();\" src=\"{{ G.url('app/index/captcha') }}\"  alt=\"验证码\" title=\"刷新图片\" width=\"100\" height=\"38\" id=\"c2c98f0de5a04167a9e427d883690ff6\" border=\"0\">
                </div>
              </div>
              <input type=\"hidden\" name=\"submit\" value=\"1\">
               <input type=\"hidden\" name=\"id\" value=\"{{post.id}}\"/>
              <div class=\"layui-form-item\">
                <div class=\"layui-btn\" onClick=\"add()\">保存编辑</div>
              </div>
            <!--</form>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
    layui.use('form', function () {
        var form = layui.form;


    });
 /**编辑框**/
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
<script type=\"text/javascript\">
    var editor = new wangEditor('textarea');
    editor.config.uploadImgUrl = \"{{ G.url('app/index/doUploadPic') }}\";
    if(navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i)){
        editor.config.menus = [
            // 'source',
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
            // 'source',
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
<script>
    /**
     * 刷新验证码
     */
    function re_captcha() {
        var url = \"{{ G.url('app/index/captcha',{'captcha':'random'}) }}\";
        var random = Math.random();
        url = url.replace(\"random\", random);//使用js自带函数进行变量替换
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=url;
    }

    function add() {

        layui.use('layer', function() {


            var id=\$('input[name=id]').val();
            var cid = \$('select[name=cid]').val();
            var title = \$('input[name=title]').val();
           // var description = \$('#desc').val();
            var text = \$('#textarea').val();
            text = filterXSS(text)
            var vercode = \$('input[name=vercode]').val();
            var submit = \$('input[name=submit]').val();;

            if (!title) {
                layer.msg('帖子标题不能为空');
                return false;
            }

//            if (!description) {
//                layer.msg('描述不能为空');
//                return false;
//            }

            if (!vercode) {
                layer.msg('验证码不能为空');
                return false;
            }

            \$.ajax({
                url: \"{{G.url('app/post/edit')}}\",//当前ajax请求的地址
                type: 'post',//请求的方式
                async: true,//是否异步  默认为异步
                data: {
                    id: id,
                    cid: cid,
                    title: title,
                    text: text,
                    submit: submit,
                    vercode: vercode,
                    edit_uid: \"{{userinfo.uid}}\",//当前ajax请求的参数  
                    dataType: \"json\"},

                    success: function (data) {//发送成功时的代码执行

                        if (data.code == 1001) {
                            layer.msg(\"编辑帖子成功,正在跳转........\");

                            setTimeout(function () {
                                window.location.href = \"{{G.url('app/detail/index',{'id':G.GPC['id']})}}\";
                            }, 2000);

                        }else if(data.code == 2001){

                            if(data.data.description){
                                layer.msg(\"编辑帖子失败:\" + data.data.description);
                            }else if(data.data.text){
                                layer.msg(\"编辑帖子失败:\" + data.data.text);
                            }else if(data.data.title){
                                layer.msg(\"编辑帖子失败:\" + data.data.title);
                            }else if(data.data.cid){
                                layer.msg(\"编辑帖子失败:: 未选择分类\");
                            }else{
                                layer.msg(\"编辑帖子失败:\" + JSON.stringify(data.data));
                            }

                            return false;
                        }else {

                            layer.msg(\"编辑帖子失败，请重新发帖\");

                        }

                        re_captcha();

                    },
                    error: function () {//失败时的代码执行
                        layer.msg(\"编辑帖子失败，请重新编辑\");
                        re_captcha();
                    }

            });
        });
    }
</script>
{{ include(\"common/footer.html\")}}
", "post/edit.html", "/data/test/yunceping/bbs/app/template/post/edit.html");
    }
}
