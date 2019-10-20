<?php

/* users/message.html */
class __TwigTemplate_8e05d997ef3c9a922b8954baae99c9231014bc52305d2fb6260fbfe96c8f752a extends Twig_Template
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

<div class=\"layui-container fly-marginTop fly-user-main\">

  ";
        // line 6
        echo twig_include($this->env, $context, "users/usernav.html");
        echo "



  
  <div class=\"fly-panel fly-panel-user\" pad20>
\t  <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\" id=\"LAY_msg\" style=\"margin-top: 15px;\">
\t    <button class=\"layui-btn \" id=\"LAY_delallmsg\" onclick=\"delAll()\">清空全部消息</button>
        <div id=\"LAY_minemsg\" style=\"margin-top: 10px;\">
          <!--<div class=\"fly-none\">您暂时没有最新消息</div>-->
          <ul class=\"mine-msg\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 18
            echo "            <li id=\"data-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "\">
              <blockquote class=\"layui-elem-quote\">
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "users-home-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "uid", array()), "html", null, true);
            echo "\" target=\"_blank\"><cite>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "username", array()), "html", null, true);
            echo "</cite></a>在<a
                      target=\"_blank\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, ($context["SUFFIX"] ?? null), "html", null, true);
            echo "detail-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "posts_id", array()), "html", null, true);
            echo "\"><cite>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "posts_title", array()), "html", null, true);
            // line 22
            echo "</cite></a>回复了消息
              </blockquote>
              <p>
               <!-- <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "add_time", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>-->
                <span class=\"time_str\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "add_time", array()), "html", null, true);
            echo "</span>
                <a href=\"javascript:;\" style=\"height:32px;line-height: 32px;width: 60px;\" class=\"layui-btn layui-btn-small layui-btn-primary\"
                   onclick=\"del('";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "id", array()), "html", null, true);
            echo "')\" >删除</a>
              </p>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
          </ul>
        </div>
        <div class=\"pages\">
          <div id=\"pages\"></div>
        </div>
\t  </div>
\t</div>

</div>



<script>
    var testid=1;
    var url=\"";
        // line 47
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
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "total", array()), "html", null, true);
        echo "\", //数据总数，从服务端得到
            limit:\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "page_size", array()), "html", null, true);
        echo "\",
            curr:\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? null), "current_page", array()), "html", null, true);
        echo "\",
            layout: ['count', 'prev', 'page', 'next', 'limit', 'skip']
            ,jump: function(obj,first){
                var url=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/message", 1 => array("current_page" => "currs", "page_size" => "limit")), "method"), "html", null, true);
        echo "\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if(!first){
                    window.location.href=url;//转义amp字符
                }

            }
        });

    });

function del(id) {

    layui.use('layer', function(){
        var layer = layui.layer;
        //信息框-例2
        layer.msg('您确定要删除吗？', {
            time: 0 //不自动关闭
            ,btn: ['确定', '取消']
            ,yes: function(index){
                var url=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/delMessage", 1 => array("id" => "massageid", "puid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()))), "method"), "html", null, true);
        echo "\";
                url = url.replace(\"massageid\", id);
                \$.ajax({
                    url : url ,
                    type : \"get\" ,
                    success:function (data) {
                        if(data.code == 1001){

                            layer.msg(\"删除成功\",{icon:6,time:1500},function(){
                                \$(\"#data-\"+id).remove();
                            });

                        }else{
                            layer.msg('删除失败',{icon:5})
                        }
                    },
                    error:function (XmlHttpRequest) {
                        //console.log(XmlHttpRequest);
                    }
                });
            }
        });
    });
}
  function delAll() {
      layui.use('layer', function(){
          var layer = layui.layer;
          //信息框-例2
          layer.msg('您确定要删除吗？', {
              time: 0 //不自动关闭
              ,btn: ['确定', '取消']
              ,yes: function(index){
                  var url=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/emptyMessage", 1 => array("puid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()))), "method"), "html", null, true);
        echo "\";
                  \$.ajax({
                      url : url ,
                      type : \"get\" ,
                      success:function (data) {
                          if(data.code == 1001){
                              layer.msg(\"删除成功\",{icon:6,time:1500},function(){
                                  window.location.reload();
                              });

                          }else{
                              layer.msg(data.message,{icon:5})
                          }
                      },
                      error:function (XmlHttpRequest) {
                       //   console.log(XmlHttpRequest);
                      }
                  });
              }
          });
      });

  }


</script>
<script>
    layui.use(['util','jquery'], function(){
        var util = layui.util;
        var \$ = layui.\$ //由于layer弹层依赖jQuery，所以可以直接得到
        var setTimeAgo = function(y, M, d, H, m, s){
            var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
            return str
        };
        \$(function(){
            \$(\".time_str\").each(function(){
                var timestamp=\$(this).text()
                //console.log(\$(this).text())
                var date = new Date();
                date.setTime(timestamp * 1000);
                var year  = date.getFullYear();
                var month  = date.getMonth();
                var day   = date.getDate();
                var hour  = date.getHours();
                var minute = date.getMinutes();
                var second = date.getSeconds();
                var str=setTimeAgo(year,month,day,hour,minute,second);
                \$(this).html(str)
            });
        })
    });
</script>
";
        // line 172
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "users/message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 172,  202 => 120,  167 => 88,  138 => 62,  132 => 59,  128 => 58,  124 => 57,  111 => 47,  94 => 32,  84 => 28,  79 => 26,  75 => 25,  70 => 22,  64 => 21,  56 => 20,  48 => 18,  44 => 17,  30 => 6,  23 => 2,  19 => 1,);
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

<div class=\"layui-container fly-marginTop fly-user-main\">

  {{ include(\"users/usernav.html\")}}



  
  <div class=\"fly-panel fly-panel-user\" pad20>
\t  <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\" id=\"LAY_msg\" style=\"margin-top: 15px;\">
\t    <button class=\"layui-btn \" id=\"LAY_delallmsg\" onclick=\"delAll()\">清空全部消息</button>
        <div id=\"LAY_minemsg\" style=\"margin-top: 10px;\">
          <!--<div class=\"fly-none\">您暂时没有最新消息</div>-->
          <ul class=\"mine-msg\">
            {% for data in list %}
            <li id=\"data-{{ data.id }}\" data-id=\"{{ data.id }}\">
              <blockquote class=\"layui-elem-quote\">
                <a href=\"{{SUFFIX}}users-home-{{data.uid}}\" target=\"_blank\"><cite>{{ data.username }}</cite></a>在<a
                      target=\"_blank\" href=\"{{SUFFIX}}detail-{{data.posts_id}}\"><cite>{{ data.posts_title
                }}</cite></a>回复了消息
              </blockquote>
              <p>
               <!-- <span>{{ data.add_time|date('Y-m-d H:i:s') }}</span>-->
                <span class=\"time_str\">{{data.add_time}}</span>
                <a href=\"javascript:;\" style=\"height:32px;line-height: 32px;width: 60px;\" class=\"layui-btn layui-btn-small layui-btn-primary\"
                   onclick=\"del('{{ data.id }}')\" >删除</a>
              </p>
            </li>
            {% endfor %}

          </ul>
        </div>
        <div class=\"pages\">
          <div id=\"pages\"></div>
        </div>
\t  </div>
\t</div>

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
                var url=\"{{ G.url('app/users/message',{'current_page':'currs','page_size':'limit'})}}\";
                /**
                 * 替换处理
                 * @type {string}
                 */
                url = url.replace(\"currs\", obj.curr);
                url = url.replace(\"limit\", obj.limit);
                //首次不执行
                if(!first){
                    window.location.href=url;//转义amp字符
                }

            }
        });

    });

function del(id) {

    layui.use('layer', function(){
        var layer = layui.layer;
        //信息框-例2
        layer.msg('您确定要删除吗？', {
            time: 0 //不自动关闭
            ,btn: ['确定', '取消']
            ,yes: function(index){
                var url=\"{{ G.url('app/users/delMessage',{'id':'massageid','puid':userinfo.uid})}}\";
                url = url.replace(\"massageid\", id);
                \$.ajax({
                    url : url ,
                    type : \"get\" ,
                    success:function (data) {
                        if(data.code == 1001){

                            layer.msg(\"删除成功\",{icon:6,time:1500},function(){
                                \$(\"#data-\"+id).remove();
                            });

                        }else{
                            layer.msg('删除失败',{icon:5})
                        }
                    },
                    error:function (XmlHttpRequest) {
                        //console.log(XmlHttpRequest);
                    }
                });
            }
        });
    });
}
  function delAll() {
      layui.use('layer', function(){
          var layer = layui.layer;
          //信息框-例2
          layer.msg('您确定要删除吗？', {
              time: 0 //不自动关闭
              ,btn: ['确定', '取消']
              ,yes: function(index){
                  var url=\"{{ G.url('app/users/emptyMessage',{'puid':userinfo.uid})}}\";
                  \$.ajax({
                      url : url ,
                      type : \"get\" ,
                      success:function (data) {
                          if(data.code == 1001){
                              layer.msg(\"删除成功\",{icon:6,time:1500},function(){
                                  window.location.reload();
                              });

                          }else{
                              layer.msg(data.message,{icon:5})
                          }
                      },
                      error:function (XmlHttpRequest) {
                       //   console.log(XmlHttpRequest);
                      }
                  });
              }
          });
      });

  }


</script>
<script>
    layui.use(['util','jquery'], function(){
        var util = layui.util;
        var \$ = layui.\$ //由于layer弹层依赖jQuery，所以可以直接得到
        var setTimeAgo = function(y, M, d, H, m, s){
            var str = util.timeAgo(new Date(y, M||0, d||1, H||0, m||0, s||0));
            return str
        };
        \$(function(){
            \$(\".time_str\").each(function(){
                var timestamp=\$(this).text()
                //console.log(\$(this).text())
                var date = new Date();
                date.setTime(timestamp * 1000);
                var year  = date.getFullYear();
                var month  = date.getMonth();
                var day   = date.getDate();
                var hour  = date.getHours();
                var minute = date.getMinutes();
                var second = date.getSeconds();
                var str=setTimeAgo(year,month,day,hour,minute,second);
                \$(this).html(str)
            });
        })
    });
</script>
{{ include(\"common/footer.html\")}}", "users/message.html", "/data/test/yunceping/bbs/app/template/users/message.html");
    }
}
