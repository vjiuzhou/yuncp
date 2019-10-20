<?php

/* detail/index.html */
class __TwigTemplate_57469ebbcd64095c6f33e031221feae32e9d4ef88bb8bed10fec1c4c1c0a947f extends Twig_Template
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
        // line 2
        echo twig_include($this->env, $context, "common/ceping_nav.html");
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "common/column.html");
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
        echo "/resource/plugin/node_modules/xss/dist/xss.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/js/wangEditor.min.js\"></script>
<div class=\"layui-container\">
    <div class=\"layui-row layui-col-space15\">
        <div class=\"layui-col-md8 content detail\">
            <div class=\"fly-panel detail-box\">
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "title", array(), "array"), "html", null, true);
        echo "</h1>
                <div class=\"fly-detail-info\">
                    <!-- <span class=\"layui-badge\">审核中</span> -->

                    ";
        // line 16
        if (($this->getAttribute(($context["posts"] ?? null), "status", array(), "array") == 3)) {
            // line 17
            echo "                    <span class=\"layui-badge\" style=\"background-color: #999;\">删除</span>
                    ";
        } elseif (($this->getAttribute(        // line 18
($context["data"] ?? null), "status", array(), "array") == 2)) {
            // line 19
            echo "                    <span class=\"layui-badge layui-bg-red\">精华</span>
                    ";
        } elseif (($this->getAttribute(        // line 20
($context["data"] ?? null), "status", array(), "array") == 1)) {
            // line 21
            echo "                    <!-- <span class=\"layui-badge\" style=\"background-color: #5FB878;\">已结</span> -->

                    <span class=\"layui-badge layui-bg-black\">已解决</span>
                    ";
        } elseif (($this->getAttribute(        // line 24
($context["data"] ?? null), "status", array(), "array") == 0)) {
            // line 25
            echo "                    <span class=\"layui-badge layui-bg-green fly-detail-column\">未解决</span>
                    ";
        }
        // line 27
        echo "
                    <div class=\"fly-admin-box\" data-id=\"123\">

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"del\">删除</span> -->

                        <!--  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"stick\" rank=\"1\">精华</span> -->
                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"stick\" rank=\"0\" style=\"background-color:#ccc;\">取消置顶</span> -->

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"status\" rank=\"1\">已解决</span> -->

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"status\" rank=\"0\" style=\"background-color:#ccc;\">未解决</span>  -->

                    </div>
                    <span class=\"fly-list-nums\">
                    <a href=\"#comment\"><i class=\"iconfont\" title=\"回帖数量\">&#xe60c;</i>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "reply_count", array(), "array"), "html", null, true);
        echo "</a>
                    <i class=\"iconfont\" title=\"访问量\">&#xe60b;</i>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "visits_count", array(), "array"), "html", null, true);
        echo "
                    </span>
                </div>
                <div class=\"detail-about\">
                    <a class=\"fly-avatar\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-home-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "uid", array(), "array"), "html", null, true);
        echo ".html\">
                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "avatar", array(), "array"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "username", array(), "array"), "html", null, true);
        echo "\">
                    </a>
                    <div class=\"fly-detail-user\">
                        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
        echo "user-home-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "uid", array(), "array"), "html", null, true);
        echo ".html\" class=\"fly-link\">
                            <!--<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute(($context["userInfo"] ?? null), "uid", array(), "array"))), "method"), "html", null, true);
        echo "\" class=\"fly-link\">-->
                            <cite>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "username", array(), "array"), "html", null, true);
        echo "</cite>
                            ";
        // line 53
        if (($this->getAttribute(($context["userInfo"] ?? null), "membership_grade", array(), "array") == "vip")) {
            // line 54
            echo "                            <!--<i class=\"iconfont icon-renzheng layui-hide-xs\" title=\"认证信息：layui 作者\"></i>-->
                            <i class=\"layui-badge fly-badge-vip layui-hide-xs\">VIP</i>
                            ";
        }
        // line 57
        echo "                        </a>
                        <span>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "change_time", array(), "array"), "Y-m-d"), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"detail-hits\" id=\"LAY_jieAdmin\" data-id=\"123\">
                        <!--<span style=\"padding-right: 10px; color: #FF7200\">悬赏：60飞吻</span>-->

                        ";
        // line 63
        if (($this->getAttribute(($context["userInfo"] ?? null), "uid", array(), "array") == $this->getAttribute(($context["loginUserinfo"] ?? null), "uid", array(), "array"))) {
            // line 64
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "post-edit-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "id", array()), "html", null, true);
            echo ".html\">  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"edit\">
                        <!--<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/post/edit", 1 => array("id" => $this->getAttribute(($context["posts"] ?? null), "id", array()))), "method"), "html", null, true);
            echo "\">  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"edit\">-->
                        编辑此贴

                        </span></a>  ";
        }
        // line 69
        echo "                    </div>
                </div>
                <div class=\"detail-body photos\">


                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "text", array(), "array"), "html_attr");
        echo "

                </div>
            </div>

            <div class=\"fly-panel detail-box\" id=\"flyReply\">
                <fieldset class=\"layui-elem-field layui-field-title\" style=\"text-align: center;\">
                    <legend>回帖</legend>
                </fieldset>

                <ul class=\"jieda\" id=\"jieda\">
                    <!--回复开始-->
                    ";
        // line 86
        if ($this->getAttribute(($context["replieList"] ?? null), "list", array())) {
            // line 87
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["replieList"] ?? null), "list", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 88
                echo "                    <li  class=\"jieda-daan del";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "\">
                        <a name=\"item-1111111111\"></a>
                        <div class=\"detail-about detail-about-reply\">
                            <a class=\"fly-avatar\" href=\"";
                // line 91
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo "user-home-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
                echo ".html\">
                                <!--<a class=\"fly-avatar\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "uid", array()))), "method"), "html", null, true);
                echo "\">-->
                                <img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "avatar", array()), "html", null, true);
                echo "\" alt=\" \">
                            </a>
                            <div class=\"fly-detail-user\">
                                <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                echo "user-home-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
                echo ".html\" class=\"fly-link\">
                                    <cite>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
                echo "</cite>

                                    ";
                // line 99
                if (($this->getAttribute($context["data"], "membership_grade", array()) == "vip")) {
                    // line 100
                    echo "                                    <!-- <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>-->
                                      <i class=\"layui-badge fly-badge-vip\">VIP</i>
                                    ";
                }
                // line 103
                echo "                                </a>
                                ";
                // line 104
                if (($this->getAttribute($context["data"], "uid", array()) == $this->getAttribute(($context["userInfo"] ?? null), "uid", array(), "array"))) {
                    // line 105
                    echo "                                <span>(楼主)</span>
                                ";
                }
                // line 107
                echo "
                                ";
                // line 108
                if (($this->getAttribute($context["data"], "status", array()) == 2)) {
                    // line 109
                    echo "                                <span style=\"color:#5FB878\">(管理员)</span>
                                ";
                }
                // line 111
                echo "                                ";
                if (($this->getAttribute($context["data"], "status", array()) == 3)) {
                    // line 112
                    echo "                                <span style=\"color:#999\">（该号已被封）</span>
                                ";
                }
                // line 114
                echo "                                <!--<span style=\"color:#FF9E3F\">（社区之光）</span>-->


                            </div>

                            <div class=\"detail-hits\">
                                <span>";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "create_time", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span>
                            </div>

                            <!--   <i class=\"iconfont icon-caina\" title=\"最佳答案\"></i>-->
                        </div>
                        <div class=\"detail-body jieda-body photos\">
                            <p>
                                ";
                // line 127
                if ((($this->getAttribute($context["data"], "pusername", array()) != "") && (($context["puid"] ?? null) !=  -1))) {
                    // line 128
                    echo "                                @<a href=\"";
                    echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
                    echo "user-home-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "puid", array()), "html", null, true);
                    echo ".html\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "pusername", array()), "html", null, true);
                    echo "</a>
                                <!--@<a href=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute($context["data"], "puid", array()))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "pusername", array()), "html", null, true);
                    echo "</a>-->
                                ";
                }
                // line 130
                echo "</p>
                            <div id=\"edit";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_text", array()), "html_attr");
                echo "</div>
                        </div>
                        <div class=\"jieda-reply\">
              <span class=\"jieda-zan  data-\" type=\"zan\" status=\"0\" id=\"data-id-";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "\" onclick=\"thumbClick(this,'";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "')\">
                <i class=\"iconfont icon-zan\"></i>
                <em id=\"em-data-";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "thumb_cnt", array()), "html", null, true);
                echo "</em>
              </span>
                            <span type=\"reply\" onclick=\"commitClick('";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
                echo "')\">
                <i class=\"iconfont icon-svgmoban53\"></i>
                回复
              </span>
                            ";
                // line 142
                if ((($this->getAttribute($context["data"], "uid", array()) == $this->getAttribute(($context["userinfo"] ?? null), "uid", array())) || ($this->getAttribute(($context["userinfo"] ?? null), "statu", array()) == 2))) {
                    // line 143
                    echo "                            <div class=\"jieda-admin\">
                                <!--  <span type=\"edit\" onclick=\"editClick('";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                    echo "')\">编辑</span>-->
                                <span type=\"del\" onclick=\"deleteClick('";
                    // line 145
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
                    echo "')\">删除</span>
                                <!--  <span class=\"jieda-accept\" type=\"accept\">采纳</span>-->
                            </div>
                            ";
                }
                // line 149
                echo "                        </div>
                    </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                    ";
        } else {
            // line 154
            echo "                    <!-- 无数据时 -->
                    <li class=\"fly-none\">消灭零评论</li>
                    ";
        }
        // line 157
        echo "                    <!--回复结束-->



                </ul>
                <div style=\"text-align: center\">
                    <!-- <div class=\"laypage-main\"> -->
                    <div id=\"pages\"></div>
                    <!-- </div> -->
                </div>

                <div class=\"layui-form layui-form-pane\">
                    <a id=\"#Location\" name=\"Location\">
                        <form  method=\"post\">
                            <input type=\"hidden\" name=\"reid\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" name=\"uid\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loginUserinfo"] ?? null), "uid", array(), "array"), "html", null, true);
        echo "\"/>
                            <input type=\"hidden\" name=\"puid\" value=\"\"/>
                            <input type=\"hidden\" name=\"text\" value=\"评论\"/>
                            <div class=\"layui-form-item layui-form-text\">
                                <a name=\"comment\"></a>
                                <div class=\"layui-input-block \" id=\"base\">
                                <textarea id=\"textarea\"  name=\"reply_text\" onclick=\"getContent()\" required lay-verify=\"required\" placeholder=\"请输入评论内容\"  class=\"layui-textarea fly-editor \" style=\"height:300px;\">

                                </textarea>
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <button class=\"layui-btn\"id=\"replies\" lay-filter=\"replies\" lay-submit>提交评论</button>
                                <div class=\"layui-btn   layui-btn-primary\" id=\"noreplies\"  onclick=\"noCommitClick()\" lay-filter=\"noreplies\" >取消评论</div>
                            </div>
                        </form>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"layui-col-md4\">
            <dl class=\"fly-panel fly-list-one\">
                <dt class=\"fly-panel-title\">一周热议</dt>
                ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hotPostList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 196
            echo "                <dd>
                    <a href=\"";
            // line 197
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>
                    <!--<a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
            echo "</a>-->
                    <span><i class=\"iconfont icon-pinglun1\"></i> ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "reply_count", array()), "html", null, true);
            echo "</span>
                </dd>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "

                <!-- 无数据时 -->
                <!--
                <div class=\"fly-none\">没有相关数据</div>
                -->
            </dl>

            <div class=\"fly-panel\">
                <div class=\"fly-panel-title\">
                    详情页广告
                </div>
                ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["advertisementlList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 215
            echo "                ";
            if (($this->getAttribute($context["data"], "type", array()) == 1)) {
                // line 216
                echo "                <div class=\"fly-panel-main\">
                    <a href=\"";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a>
                </div>




                ";
            } else {
                // line 224
                echo "                <div class=\"fly-panel-main\">
                    <a href=\"";
                // line 225
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "url_path", array()), "html", null, true);
                echo "\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
                        <img src=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "image", array()), "html", null, true);
                echo "\" style=\"width:350px;height:60px;\" alt=\"\"/>
                    </a>
                </div>
                ";
            }
            // line 230
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "
            </div>

            <!--<div class=\"fly-panel\" style=\"padding: 20px 0; text-align: center;\">-->
            <!--<img src=\"app/resource/images/weixin.jpg\" style=\"max-width: 100%;\" alt=\"layui\">-->
            <!--<p style=\"position: relative; color: #666;\">微信扫码关注 layui 公众号</p>-->
            <!--</div>-->

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
        // line 311
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

        \$(\".fly-column\").attr(\"style\",\"display:none;\")

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
    function getContent() {
        var text = ed.txt.html();

    }



</script>



<script>
    var ed;

    /**
     * 构造分页功能
     */


    layui.use(['layer', 'form','laypage'], function(){
        var laypage = layui.laypage;
        var form =layui.form;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"";
        // line 392
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["replieList"] ?? null), "pagination", array()), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"";
        // line 394
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["replieList"] ?? null), "pagination", array()), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["replieList"] ?? null), "pagination", array()), "current_page", array()), "html", null, true);
        echo "\",
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
                var url=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "id", array(), "array"), "current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                console.log(url);
                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });


        pl = '';
        var checkSubmitFlg = false;//提交评论开关,防止重复评论
        //监听评论回复提交
        form.on('submit(replies)', function(data){


            var text=\$('input[name=text]').val();
            var field=data.field;
            if(field.uid==\"\"){
                layer.msg(\"您当前未登陆，请登陆后再进行\"+text);
                return false;
            }

            if(field.puid==\"\"){
                field.puid=-1;
            }

            if(pl != \"\") {

                var str = field.reply_text;
                var pattern = pl;
                //str = str.replace(new RegExp(pattern), \"\");
                field.reply_text = str;
            }else{
              var str = field.reply_text;
              str = filterXSS(str)
              field.reply_text = str;
            }

            if(checkSubmitFlg==true){
                return false;
            }


            checkSubmitFlg=true;

            \$.ajax({
                url:\"";
        // line 451
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/commit"), "method"), "html", null, true);
        echo "\",//当前ajax请求的地址
                type:'post',//请求的方式
                async:true,//是否异步  默认为异步
                data:field,//当前ajax请求的参数  
                dataType:\"json\",
                success: function(data){//发送成功时的代码执行


                    if(data.code==1001 &&  data.data){
                        layer.msg(text+\"成功\"+\"  正在刷新页面....\");
                        setTimeout(function(){
                            window.location.href=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/index", 1 => array("id" => $this->getAttribute($this->getAttribute(($context["G"] ?? null), "GPC", array()), "id", array(), "array"))), "method"), "html", null, true);
        echo "\";
                        }, 2000);

                    }else{
                        layer.msg(text+\"失败\");
                    }
                    subm=false;
                },
                error:function(){//失败时的代码执行
                    layer.msg(text+\"失败，请重新尝试\"+text);
                    subm=false;
                }

            })
            return false;
        });

    });



    /**
     * 回复赋值puid
     */
    function commitClick(uid,username){
        pl = '回复@'+username+\"的评论：\";

//        editor.txt.html('回复@'+username+\"的评论\")<input value=\"不可修改\" disabled=\"disabled\"  type=\"text\"/>
        \$('.wangEditor-txt').html('回复@'+username+\"的评论：\");
//        \$('.wangEditor-txt').html('<input value=回复@+username+\"的评论\" disabled=\"disabled\"  type=\"text\"/>');
        \$('input[name=puid]').val(uid);
        \$('input[name=text]').val('回复');
        \$('#replies').text('提交回复');
        \$('#noreplies').text('取消回复');
        window.location.hash = \"#Location\";
        window.location = window.location;
    }


    /**
     * 取消回复赋值
     */
    function noCommitClick(){
        var text=\$('input[name=text]').val();
        if(text==\"回复\"){
            \$('input[name=puid]').val('');
            \$('input[name=text]').val('评论');
            \$('#replies').text('提交评论');
            \$('#noreplies').text('取消评论');
        }

//        \$('#textarea').val('');
//        \$('#textarea').attr('placeholder','请输入评论');
        \$('.wangEditor-txt').html(\"\");
    }

    /**
     * 点赞
     */
    function thumbClick(ts,id){
        var uid=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\";
        var url=\"\";
        if(!uid){
            layer.msg(\"您当前未登陆，请登陆后再进行点赞操作\");
            return false;
        }
        var status=\$(ts).attr('status');

        /**
         * 判断是点赞还是取消点赞
         */

        if(status==\"0\"){
            var text=\"点赞\";
            url=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/insThumbRepies"), "method"), "html", null, true);
        echo "\";
            var status=\"1\";
        }else{
            var text=\"取消点赞\";
            url=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/cancelthumbReplies"), "method"), "html", null, true);
        echo "\";
            var status=\"0\";

        }
        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:true,//是否异步  默认为异步
            data:{rid:id,reid:\"";
        // line 548
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\",uid:\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行


                if(data.code==1001 &&  data.data){
                    var count=\$(\"#em-data-\"+id).text();
                    if(status==\"1\"){
                        \$(\"#em-data-\"+id).text(count*1+1);
                        \$(\"#data-id-\"+id).attr('class',\"jieda-zan zanok data-\");
                    }else{
                        \$(\"#em-data-\"+id).text((count-1)*1);
                        \$(\"#data-id-\"+id).attr('class',\"jieda-zan  data-\");

                    }

                    \$(\"#data-id-\"+id).attr('status',status);
                    layer.msg(text+\"成功\");
                }else{
                    layer.msg(text+\"失败\");
                }
            },
            error:function(){//失败时的代码执行
                layer.msg(text+\"失败，请重新尝试\");

            }

        })
    }

    /**
     * 改变点赞状态，使用异步执行，提升网页效率
     */
    \$('.data-').each(function(){
        var url=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/getPraiseRecord"), "method"), "html", null, true);
        echo "\";
        var id=\$(this).attr('data-id');

        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{rid:id,reid:\"";
        // line 589
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\",uid:\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001 &&  data.data.status==\"1\"){
                    \$(\"#data-id-\"+id).attr('class',\"jieda-zan zanok data-\");
                    \$(\"#data-id-\"+id).attr('status',1);
                }
            },
            error:function(){//失败时的代码执行


            }

        })
    })

    /**
     * 更新访问量
     */
    var url=\"";
        // line 608
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/changeVisitRelies"), "method"), "html", null, true);
        echo "\";
    \$.ajax({
        url:url,//当前ajax请求的地址
        type:'get',//请求的方式
        async:false,//是否异步  默认为异步
        data:{id:\"";
        // line 613
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\",type:1},//当前ajax请求的参数  
        dataType:\"json\",
        success: function(data){//发送成功时的代码执行

        },
        error:function(){//失败时的代码执行


        }

    })

    /**
     * 删除回复
     */
    function deleteClick(id){
        var url=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/delReplies"), "method"), "html", null, true);
        echo "\";
        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{id:id,reid:\"";
        // line 634
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001){
                    \$(\".del\"+id).remove();

                    layer.msg(\"删除成功\");
                }else{
                    layer.msg(\"删除失败\");
                }
            },
            error:function(){//失败时的代码执行

                layer.msg(\"删除失败\");
            }

        })
    }



    /**
     * 编辑回复
     */
    function editClick(id){

        \$('#textarea').attr('placeholder','回复@'+username+\"的评论\");
        \$('input[name=puid]').val(uid);
        \$('input[name=text]').val('回复');
        \$('#replies').text('提交回复');
        \$('#noreplies').text('取消回复');
        window.location.hash = \"#Location\";
        window.location = window.location;

        /*
        var url=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/detail/changeReplies"), "method"), "html", null, true);
        echo "\";
        var reply_text=\$('#edit'+id).html();
        console.log(reply_text);

        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{id:id,reid:\"";
        // line 677
        echo twig_escape_filter($this->env, ($context["post_id"] ?? null), "html", null, true);
        echo "\",reply_text:reply_text},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001 && data.data){
                    \$(\".del\"+id).remove();

                    layer.msg(\"删除成功\");
                }else{
                    layer.msg(\"删除失败\");
                }
            },
            error:function(){//失败时的代码执行

                layer.msg(\"删除失败\");
            }

        })*/
    }
</script>



";
        // line 699
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "detail/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 699,  1014 => 677,  1003 => 669,  965 => 634,  957 => 629,  938 => 613,  930 => 608,  906 => 589,  896 => 582,  857 => 548,  846 => 540,  839 => 536,  822 => 522,  759 => 462,  745 => 451,  689 => 398,  683 => 395,  679 => 394,  674 => 392,  590 => 311,  508 => 231,  502 => 230,  493 => 226,  489 => 225,  486 => 224,  474 => 217,  471 => 216,  468 => 215,  464 => 214,  450 => 202,  441 => 199,  435 => 198,  427 => 197,  424 => 196,  420 => 195,  394 => 172,  390 => 171,  374 => 157,  369 => 154,  366 => 153,  357 => 149,  350 => 145,  346 => 144,  343 => 143,  341 => 142,  332 => 138,  325 => 136,  316 => 134,  308 => 131,  305 => 130,  298 => 129,  289 => 128,  287 => 127,  277 => 120,  269 => 114,  265 => 112,  262 => 111,  258 => 109,  256 => 108,  253 => 107,  249 => 105,  247 => 104,  244 => 103,  239 => 100,  237 => 99,  232 => 97,  226 => 96,  218 => 93,  214 => 92,  208 => 91,  201 => 88,  196 => 87,  194 => 86,  179 => 74,  172 => 69,  165 => 65,  158 => 64,  156 => 63,  148 => 58,  145 => 57,  140 => 54,  138 => 53,  134 => 52,  130 => 51,  124 => 50,  114 => 47,  108 => 46,  101 => 42,  97 => 41,  81 => 27,  77 => 25,  75 => 24,  70 => 21,  68 => 20,  65 => 19,  63 => 18,  60 => 17,  58 => 16,  51 => 12,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
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
{{ include(\"common/column.html\")}}
<link rel=\"stylesheet\" href=\"{{_G['APP']}}/resource/wangEditor/css/wangEditor.min.css\">
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/plugin/node_modules/xss/dist/xss.js\"></script>
<script type=\"text/javascript\" src=\"{{_G['APP']}}/resource/wangEditor/js/wangEditor.min.js\"></script>
<div class=\"layui-container\">
    <div class=\"layui-row layui-col-space15\">
        <div class=\"layui-col-md8 content detail\">
            <div class=\"fly-panel detail-box\">
                <h1>{{posts['title']}}</h1>
                <div class=\"fly-detail-info\">
                    <!-- <span class=\"layui-badge\">审核中</span> -->

                    {% if posts['status'] == 3 %}
                    <span class=\"layui-badge\" style=\"background-color: #999;\">删除</span>
                    {% elseif data['status'] == 2 %}
                    <span class=\"layui-badge layui-bg-red\">精华</span>
                    {% elseif data['status'] == 1 %}
                    <!-- <span class=\"layui-badge\" style=\"background-color: #5FB878;\">已结</span> -->

                    <span class=\"layui-badge layui-bg-black\">已解决</span>
                    {% elseif data['status'] == 0 %}
                    <span class=\"layui-badge layui-bg-green fly-detail-column\">未解决</span>
                    {% endif %}

                    <div class=\"fly-admin-box\" data-id=\"123\">

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"del\">删除</span> -->

                        <!--  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"stick\" rank=\"1\">精华</span> -->
                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"stick\" rank=\"0\" style=\"background-color:#ccc;\">取消置顶</span> -->

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"status\" rank=\"1\">已解决</span> -->

                        <!-- <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"set\" field=\"status\" rank=\"0\" style=\"background-color:#ccc;\">未解决</span>  -->

                    </div>
                    <span class=\"fly-list-nums\">
                    <a href=\"#comment\"><i class=\"iconfont\" title=\"回帖数量\">&#xe60c;</i>{{posts['reply_count']}}</a>
                    <i class=\"iconfont\" title=\"访问量\">&#xe60b;</i>{{posts['visits_count']}}
                    </span>
                </div>
                <div class=\"detail-about\">
                    <a class=\"fly-avatar\" href=\"{{SUFFIX}}user-home-{{userInfo['uid']}}.html\">
                        <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{userInfo['avatar']}}\" alt=\"{{ userInfo['username']}}\">
                    </a>
                    <div class=\"fly-detail-user\">
                        <a href=\"{{SUFFIX}}user-home-{{userInfo['uid']}}.html\" class=\"fly-link\">
                            <!--<a href=\"{{ G.url('app/users/home',{'uid':userInfo['uid']})}}\" class=\"fly-link\">-->
                            <cite>{{ userInfo['username'] }}</cite>
                            {% if userInfo['membership_grade'] ==\"vip\" %}
                            <!--<i class=\"iconfont icon-renzheng layui-hide-xs\" title=\"认证信息：layui 作者\"></i>-->
                            <i class=\"layui-badge fly-badge-vip layui-hide-xs\">VIP</i>
                            {% endif %}
                        </a>
                        <span>{{posts['change_time'] | date('Y-m-d')}}</span>
                    </div>
                    <div class=\"detail-hits\" id=\"LAY_jieAdmin\" data-id=\"123\">
                        <!--<span style=\"padding-right: 10px; color: #FF7200\">悬赏：60飞吻</span>-->

                        {% if userInfo['uid'] == loginUserinfo['uid'] %}
                        <a href=\"{{SUFFIX}}post-edit-{{posts.id}}.html\">  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"edit\">
                        <!--<a href=\"{{ G.url('app/post/edit',{id:posts.id})}}\">  <span class=\"layui-btn layui-btn-xs jie-admin\" type=\"edit\">-->
                        编辑此贴

                        </span></a>  {% endif %}
                    </div>
                </div>
                <div class=\"detail-body photos\">


                    {{ posts['text']|e('html_attr') }}

                </div>
            </div>

            <div class=\"fly-panel detail-box\" id=\"flyReply\">
                <fieldset class=\"layui-elem-field layui-field-title\" style=\"text-align: center;\">
                    <legend>回帖</legend>
                </fieldset>

                <ul class=\"jieda\" id=\"jieda\">
                    <!--回复开始-->
                    {% if replieList.list%}
                    {% for data in replieList.list %}
                    <li  class=\"jieda-daan del{{data.id}}\">
                        <a name=\"item-1111111111\"></a>
                        <div class=\"detail-about detail-about-reply\">
                            <a class=\"fly-avatar\" href=\"{{SUFFIX}}user-home-{{data.uid}}.html\">
                                <!--<a class=\"fly-avatar\" href=\"{{ G.url('app/users/home',{'uid':data.uid})}}\">-->
                                <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.avatar}}\" alt=\" \">
                            </a>
                            <div class=\"fly-detail-user\">
                                <a href=\"{{SUFFIX}}user-home-{{data.uid}}.html\" class=\"fly-link\">
                                    <cite>{{data.username}}</cite>

                                    {% if data.membership_grade ==\"vip\" %}
                                    <!-- <i class=\"iconfont icon-renzheng\" title=\"认证信息：XXX\"></i>-->
                                      <i class=\"layui-badge fly-badge-vip\">VIP</i>
                                    {% endif %}
                                </a>
                                {% if data.uid==userInfo['uid'] %}
                                <span>(楼主)</span>
                                {%endif%}

                                {% if data.status==2 %}
                                <span style=\"color:#5FB878\">(管理员)</span>
                                {%endif%}
                                {% if data.status==3 %}
                                <span style=\"color:#999\">（该号已被封）</span>
                                {%endif%}
                                <!--<span style=\"color:#FF9E3F\">（社区之光）</span>-->


                            </div>

                            <div class=\"detail-hits\">
                                <span>{{data.create_time|date('Y-m-d H:i:s')}}</span>
                            </div>

                            <!--   <i class=\"iconfont icon-caina\" title=\"最佳答案\"></i>-->
                        </div>
                        <div class=\"detail-body jieda-body photos\">
                            <p>
                                {% if data.pusername !=\"\" and puid !=-1%}
                                @<a href=\"{{SUFFIX}}user-home-{{data.puid}}.html\">{{data.pusername}}</a>
                                <!--@<a href=\"{{G.url('app/users/home',{'uid':data.puid})}}\">{{data.pusername}}</a>-->
                                {%endif%}</p>
                            <div id=\"edit{{data.id}}\">{{data.reply_text|e('html_attr')}}</div>
                        </div>
                        <div class=\"jieda-reply\">
              <span class=\"jieda-zan  data-\" type=\"zan\" status=\"0\" id=\"data-id-{{data.id}}\" data-id=\"{{data.id}}\" onclick=\"thumbClick(this,'{{data.id}}')\">
                <i class=\"iconfont icon-zan\"></i>
                <em id=\"em-data-{{data.id}}\">{{data.thumb_cnt}}</em>
              </span>
                            <span type=\"reply\" onclick=\"commitClick('{{data.uid}}','{{data.username}}')\">
                <i class=\"iconfont icon-svgmoban53\"></i>
                回复
              </span>
                            {% if data.uid==userinfo.uid or userinfo.statu==2 %}
                            <div class=\"jieda-admin\">
                                <!--  <span type=\"edit\" onclick=\"editClick('{{data.id}}')\">编辑</span>-->
                                <span type=\"del\" onclick=\"deleteClick('{{data.id}}')\">删除</span>
                                <!--  <span class=\"jieda-accept\" type=\"accept\">采纳</span>-->
                            </div>
                            {% endif %}
                        </div>
                    </li>

                    {% endfor %}
                    {%else%}
                    <!-- 无数据时 -->
                    <li class=\"fly-none\">消灭零评论</li>
                    {%endif%}
                    <!--回复结束-->



                </ul>
                <div style=\"text-align: center\">
                    <!-- <div class=\"laypage-main\"> -->
                    <div id=\"pages\"></div>
                    <!-- </div> -->
                </div>

                <div class=\"layui-form layui-form-pane\">
                    <a id=\"#Location\" name=\"Location\">
                        <form  method=\"post\">
                            <input type=\"hidden\" name=\"reid\" value=\"{{post_id}}\"/>
                            <input type=\"hidden\" name=\"uid\" value=\"{{loginUserinfo['uid']}}\"/>
                            <input type=\"hidden\" name=\"puid\" value=\"\"/>
                            <input type=\"hidden\" name=\"text\" value=\"评论\"/>
                            <div class=\"layui-form-item layui-form-text\">
                                <a name=\"comment\"></a>
                                <div class=\"layui-input-block \" id=\"base\">
                                <textarea id=\"textarea\"  name=\"reply_text\" onclick=\"getContent()\" required lay-verify=\"required\" placeholder=\"请输入评论内容\"  class=\"layui-textarea fly-editor \" style=\"height:300px;\">

                                </textarea>
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <button class=\"layui-btn\"id=\"replies\" lay-filter=\"replies\" lay-submit>提交评论</button>
                                <div class=\"layui-btn   layui-btn-primary\" id=\"noreplies\"  onclick=\"noCommitClick()\" lay-filter=\"noreplies\" >取消评论</div>
                            </div>
                        </form>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"layui-col-md4\">
            <dl class=\"fly-panel fly-list-one\">
                <dt class=\"fly-panel-title\">一周热议</dt>
                {% for data in hotPostList %}
                <dd>
                    <a href=\"{{SUFFIX}}detail-{{data.id}}\">{{data.title}}</a>
                    <!--<a href=\"{{ G.url('app/detail/index',{'id':data.id})}}\">{{data.title}}</a>-->
                    <span><i class=\"iconfont icon-pinglun1\"></i> {{data.reply_count}}</span>
                </dd>
                {% endfor %}


                <!-- 无数据时 -->
                <!--
                <div class=\"fly-none\">没有相关数据</div>
                -->
            </dl>

            <div class=\"fly-panel\">
                <div class=\"fly-panel-title\">
                    详情页广告
                </div>
                {% for data in advertisementlList %}
                {% if data.type==1 %}
                <div class=\"fly-panel-main\">
                    <a href=\"{{data.url_path}}\" target=\"_blank\" class=\"fly-zanzhu\" time-limit=\"2017.09.25-2099.01.01\" style=\"background-color: #5FB878;\">{{data.name}}</a>
                </div>




                {% else %}
                <div class=\"fly-panel-main\">
                    <a href=\"{{data.url_path}}\" target=\"_blank\" time-limit=\"2017.09.25-2099.01.01\" >
                        <img src=\"{{_G['ATTACHMENT_ROOT']}}/{{data.image}}\" style=\"width:350px;height:60px;\" alt=\"\"/>
                    </a>
                </div>
                {% endif %}
                {% endfor %}

            </div>

            <!--<div class=\"fly-panel\" style=\"padding: 20px 0; text-align: center;\">-->
            <!--<img src=\"app/resource/images/weixin.jpg\" style=\"max-width: 100%;\" alt=\"layui\">-->
            <!--<p style=\"position: relative; color: #666;\">微信扫码关注 layui 公众号</p>-->
            <!--</div>-->

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

        \$(\".fly-column\").attr(\"style\",\"display:none;\")

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
    function getContent() {
        var text = ed.txt.html();

    }



</script>



<script>
    var ed;

    /**
     * 构造分页功能
     */


    layui.use(['layer', 'form','laypage'], function(){
        var laypage = layui.laypage;
        var form =layui.form;
        //完整功能
        laypage.render({
            elem: 'pages',
            count: \"{{replieList.pagination.total}}\", //数据总数，从服务端得到
            last:'尾页',
            limit:\"{{replieList.pagination.page_size}}\",
            curr:\"{{replieList.pagination.current_page}}\",
            // layout: ['prev', 'page', 'next'],
            jump: function(obj,first){
                var url=\"{{ G.url('app/detail/index',{'id':G.GPC['id'],'current_page':'currs','page_size':'limit'})}}\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                console.log(url);
                //首次不执行
                if(!first){
                    window.location.href=escapeUrl(url);//转义amp字符
                }
            }
        });


        pl = '';
        var checkSubmitFlg = false;//提交评论开关,防止重复评论
        //监听评论回复提交
        form.on('submit(replies)', function(data){


            var text=\$('input[name=text]').val();
            var field=data.field;
            if(field.uid==\"\"){
                layer.msg(\"您当前未登陆，请登陆后再进行\"+text);
                return false;
            }

            if(field.puid==\"\"){
                field.puid=-1;
            }

            if(pl != \"\") {

                var str = field.reply_text;
                var pattern = pl;
                //str = str.replace(new RegExp(pattern), \"\");
                field.reply_text = str;
            }else{
              var str = field.reply_text;
              str = filterXSS(str)
              field.reply_text = str;
            }

            if(checkSubmitFlg==true){
                return false;
            }


            checkSubmitFlg=true;

            \$.ajax({
                url:\"{{G.url('app/detail/commit')}}\",//当前ajax请求的地址
                type:'post',//请求的方式
                async:true,//是否异步  默认为异步
                data:field,//当前ajax请求的参数  
                dataType:\"json\",
                success: function(data){//发送成功时的代码执行


                    if(data.code==1001 &&  data.data){
                        layer.msg(text+\"成功\"+\"  正在刷新页面....\");
                        setTimeout(function(){
                            window.location.href=\"{{G.url('app/detail/index',{'id':G.GPC['id']})}}\";
                        }, 2000);

                    }else{
                        layer.msg(text+\"失败\");
                    }
                    subm=false;
                },
                error:function(){//失败时的代码执行
                    layer.msg(text+\"失败，请重新尝试\"+text);
                    subm=false;
                }

            })
            return false;
        });

    });



    /**
     * 回复赋值puid
     */
    function commitClick(uid,username){
        pl = '回复@'+username+\"的评论：\";

//        editor.txt.html('回复@'+username+\"的评论\")<input value=\"不可修改\" disabled=\"disabled\"  type=\"text\"/>
        \$('.wangEditor-txt').html('回复@'+username+\"的评论：\");
//        \$('.wangEditor-txt').html('<input value=回复@+username+\"的评论\" disabled=\"disabled\"  type=\"text\"/>');
        \$('input[name=puid]').val(uid);
        \$('input[name=text]').val('回复');
        \$('#replies').text('提交回复');
        \$('#noreplies').text('取消回复');
        window.location.hash = \"#Location\";
        window.location = window.location;
    }


    /**
     * 取消回复赋值
     */
    function noCommitClick(){
        var text=\$('input[name=text]').val();
        if(text==\"回复\"){
            \$('input[name=puid]').val('');
            \$('input[name=text]').val('评论');
            \$('#replies').text('提交评论');
            \$('#noreplies').text('取消评论');
        }

//        \$('#textarea').val('');
//        \$('#textarea').attr('placeholder','请输入评论');
        \$('.wangEditor-txt').html(\"\");
    }

    /**
     * 点赞
     */
    function thumbClick(ts,id){
        var uid=\"{{userinfo.uid}}\";
        var url=\"\";
        if(!uid){
            layer.msg(\"您当前未登陆，请登陆后再进行点赞操作\");
            return false;
        }
        var status=\$(ts).attr('status');

        /**
         * 判断是点赞还是取消点赞
         */

        if(status==\"0\"){
            var text=\"点赞\";
            url=\"{{G.url('app/detail/insThumbRepies')}}\";
            var status=\"1\";
        }else{
            var text=\"取消点赞\";
            url=\"{{G.url('app/detail/cancelthumbReplies')}}\";
            var status=\"0\";

        }
        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:true,//是否异步  默认为异步
            data:{rid:id,reid:\"{{post_id}}\",uid:\"{{userinfo.uid}}\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行


                if(data.code==1001 &&  data.data){
                    var count=\$(\"#em-data-\"+id).text();
                    if(status==\"1\"){
                        \$(\"#em-data-\"+id).text(count*1+1);
                        \$(\"#data-id-\"+id).attr('class',\"jieda-zan zanok data-\");
                    }else{
                        \$(\"#em-data-\"+id).text((count-1)*1);
                        \$(\"#data-id-\"+id).attr('class',\"jieda-zan  data-\");

                    }

                    \$(\"#data-id-\"+id).attr('status',status);
                    layer.msg(text+\"成功\");
                }else{
                    layer.msg(text+\"失败\");
                }
            },
            error:function(){//失败时的代码执行
                layer.msg(text+\"失败，请重新尝试\");

            }

        })
    }

    /**
     * 改变点赞状态，使用异步执行，提升网页效率
     */
    \$('.data-').each(function(){
        var url=\"{{G.url('app/detail/getPraiseRecord')}}\";
        var id=\$(this).attr('data-id');

        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{rid:id,reid:\"{{post_id}}\",uid:\"{{userinfo.uid}}\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001 &&  data.data.status==\"1\"){
                    \$(\"#data-id-\"+id).attr('class',\"jieda-zan zanok data-\");
                    \$(\"#data-id-\"+id).attr('status',1);
                }
            },
            error:function(){//失败时的代码执行


            }

        })
    })

    /**
     * 更新访问量
     */
    var url=\"{{G.url('app/detail/changeVisitRelies')}}\";
    \$.ajax({
        url:url,//当前ajax请求的地址
        type:'get',//请求的方式
        async:false,//是否异步  默认为异步
        data:{id:\"{{post_id}}\",type:1},//当前ajax请求的参数  
        dataType:\"json\",
        success: function(data){//发送成功时的代码执行

        },
        error:function(){//失败时的代码执行


        }

    })

    /**
     * 删除回复
     */
    function deleteClick(id){
        var url=\"{{G.url('app/detail/delReplies')}}\";
        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{id:id,reid:\"{{post_id}}\"},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001){
                    \$(\".del\"+id).remove();

                    layer.msg(\"删除成功\");
                }else{
                    layer.msg(\"删除失败\");
                }
            },
            error:function(){//失败时的代码执行

                layer.msg(\"删除失败\");
            }

        })
    }



    /**
     * 编辑回复
     */
    function editClick(id){

        \$('#textarea').attr('placeholder','回复@'+username+\"的评论\");
        \$('input[name=puid]').val(uid);
        \$('input[name=text]').val('回复');
        \$('#replies').text('提交回复');
        \$('#noreplies').text('取消回复');
        window.location.hash = \"#Location\";
        window.location = window.location;

        /*
        var url=\"{{G.url('app/detail/changeReplies')}}\";
        var reply_text=\$('#edit'+id).html();
        console.log(reply_text);

        \$.ajax({
            url:url,//当前ajax请求的地址
            type:'get',//请求的方式
            async:false,//是否异步  默认为异步
            data:{id:id,reid:\"{{post_id}}\",reply_text:reply_text},//当前ajax请求的参数  
            dataType:\"json\",
            success: function(data){//发送成功时的代码执行
                if(data.code==1001 && data.data){
                    \$(\".del\"+id).remove();

                    layer.msg(\"删除成功\");
                }else{
                    layer.msg(\"删除失败\");
                }
            },
            error:function(){//失败时的代码执行

                layer.msg(\"删除失败\");
            }

        })*/
    }
</script>



{{ include(\"common/footer.html\")}}
", "detail/index.html", "/data/test/yunceping/bbs/app/template/detail/index.html");
    }
}
