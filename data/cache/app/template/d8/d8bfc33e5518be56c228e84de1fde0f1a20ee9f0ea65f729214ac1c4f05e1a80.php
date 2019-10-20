<?php

/* users/set.html */
class __TwigTemplate_3cab4c8ddfc3d6fe449a0c20b70b9f3d9e3583aa61525a53eb13d9f9c1513ab2 extends Twig_Template
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
        // line 5
        echo twig_include($this->env, $context, "users/usernav.html");
        echo "
  
  <div class=\"fly-panel fly-panel-user\" pad20>
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
      <ul class=\"layui-tab-title\" id=\"LAY_mine\">
        <li class=\"layui-this\" lay-id=\"info\">我的资料</li>
        <li lay-id=\"avatar\">头像</li>
        <!--<li lay-id=\"pass\">密码</li>-->
        <!--<li lay-id=\"bind\">帐号绑定</li>-->
      </ul>
      <div class=\"layui-tab-content\" style=\"padding: 20px 0;\">
        <div class=\"layui-form layui-form-pane layui-tab-item layui-show\">

          \t<form method=\"post\">
\t            <input  class=\"layui-input\" type=\"hidden\" name=\"uid\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\"/>
\t            <!--<div class=\"layui-form-item\">-->
\t              <!--<label for=\"L_email\" class=\"layui-form-label\">邮箱</label>-->
\t              <!--<div class=\"layui-input-inline\">-->

\t                <!--<input type=\"text\" id=\"L_email\" name=\"email\" ";
        // line 24
        if (($this->getAttribute(($context["user"] ?? null), "email", array()) != "")) {
            echo " disabled ";
        }
        echo " required lay-verify=\"email\" autocomplete=\"off\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\" class=\"layui-input\">-->
\t              <!--</div>-->
\t              <!--&lt;!&ndash;<div class=\"layui-form-mid layui-word-aux\">如果您在邮箱已激活的情况下，变更了邮箱，需<a href=\"./index.php?m=app&c=users&a=activate\" style=\"font-size: 12px; color: #4f99cf;\">重新验证邮箱</a>。</div>&ndash;&gt;-->
\t            <!--</div>-->
\t            <!--<div class=\"layui-form-item\">-->
\t              <!--<label for=\"L_username\" class=\"layui-form-label\">昵称</label>-->
\t              <!--<div class=\"layui-input-inline\">-->
\t                <!--<input type=\"text\" id=\"L_username\" name=\"username\" ";
        // line 31
        if (($this->getAttribute(($context["user"] ?? null), "change_username", array()) == 0)) {
            echo " disabled ";
        }
        echo " required lay-verify=\"required\" autocomplete=\"off\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", array()), "html", null, true);
        echo "\" class=\"layui-input\">-->
\t              <!--</div>-->

\t            <!--</div>-->


\t            <div class=\"layui-form-item layui-form-text\">
\t              <label for=\"L_sign\" class=\"layui-form-label\">签名</label>
\t              <div class=\"layui-input-block\">
\t                <textarea placeholder=\"随便写些什么刷下存在感\" id=\"L_sign\"  name=\"signature\" autocomplete=\"off\" class=\"layui-textarea\" style=\"height: 80px;\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "signature", array()), "html", null, true);
        echo "</textarea>
\t              </div>
\t            </div>
\t            <div class=\"layui-form-item\">
\t              <button class=\"layui-btn\" key=\"set-mine\" lay-filter=\"base\" lay-submit>确认修改</button>
\t            </div>
\t        </form>
        </div>


          <div class=\"layui-form layui-form-pane layui-tab-item\">
            <div class=\"layui-form-item\">
              <div class=\"avatar-add\">
                <p>建议尺寸168*168，支持jpg、png、gif，最大不能超过50KB</p>
                <button type=\"button\" class=\"layui-btn upload-img\"  id=\"upload\">
                  <i class=\"layui-icon\">&#xe67c;</i>上传头像
                </button>
                <img id=\"image\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "avatar", array()), "html", null, true);
        echo "\">
                <span class=\"loading\"></span>
              </div>
            </div>
          </div>


          
          <div class=\"layui-form layui-form-pane layui-tab-item\">
            <form method=\"post\">
              <input  class=\"layui-input\" type=\"hidden\" name=\"uid\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "html", null, true);
        echo "\"/>
              <div class=\"layui-form-item\">
                <label for=\"L_nowpass\" class=\"layui-form-label\">原密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_nowpass\" name=\"old_password\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label for=\"L_pass\" class=\"layui-form-label\">新密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_pass\" name=\"password\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
                <div class=\"layui-form-mid layui-word-aux\">6到16个字符</div>
              </div>
              <div class=\"layui-form-item\">
                <label for=\"L_repass\" class=\"layui-form-label\">确认密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_repass\" name=\"repass\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <button class=\"layui-btn\" key=\"set-mine\" lay-filter=\"password\" lay-submit>确认修改</button>
              </div>
            </form>
          </div>
          

         <div class=\"layui-form layui-form-pane layui-tab-item\">
            <ul class=\"app-bind\">
              ";
        // line 96
        if (($this->getAttribute(($context["registerinfo"] ?? null), "qq_openid", array()) != "")) {
            // line 97
            echo "              <li class=\"fly-msg app-havebind\">

                <i class=\"iconfont icon-qq\"></i>                
                <span>已成功绑定，您可以使用QQ帐号直接登录社区，当然，您也可以</span>
                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/registers/unbind", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "type" => "qq")), "method"), "html", null, true);
            echo "\" class=\"acc-unbind\" type=\"qq_id\">解除绑定</a>
             </li>
             ";
        } else {
            // line 104
            echo "             <li class=\"fly-msg\">
                <i class=\"iconfont icon-qq\"></i>                
                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/registers/bind", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "type" => "qq")), "method"), "html", null, true);
            echo "\" onclick=\"layer.msg('正在绑定QQ', {icon:16, shade: 0.1, time:0})\" class=\"acc-bind\" type=\"qq_id\">立即绑定</a>

                <span>，即可使用QQ帐号登录社区</span>
             </li>
             ";
        }
        // line 111
        echo "             ";
        if (($this->getAttribute(($context["registerinfo"] ?? null), "weixin_openid", array()) != "")) {
            // line 112
            echo "              <li class=\"fly-msg app-havebind\">                
                <i class=\"mine-icon\" style=\"font-size: 30px;\">&#xe628;</i>
                <!-- <i class=\"iconfont icon-weibo\"></i> -->                

                <span>已成功绑定，您可以使用微信直接登录社区，当然，您也可以</span>
                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/registers/unbind", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "type" => "weixin")), "method"), "html", null, true);
            echo "\" class=\"acc-unbind\" type=\"weibo_id\">解除绑定</a>                
              </li>
              ";
        } else {
            // line 120
            echo "              <li class=\"fly-msg\">                
                <i class=\"mine-icon\" style=\"font-size: 30px;\">&#xe628;</i>
                <!-- <i class=\"iconfont icon-weibo\"></i> -->                
               <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/registers/bind", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()), "type" => "weixin")), "method"), "html", null, true);
            echo "\" class=\"acc-weibo\" type=\"weibo_id\"  onclick=\"layer.msg('正在绑定微信', {icon:16, shade: 0.1, time:0})\" >立即绑定</a>
                <span>，即可使用微信帐号登录社区</span>

              </li>
              ";
        }
        // line 128
        echo "            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
    //Demo
    layui.use(['form','upload'], function(){
        var form = layui.form;
        /**
         * 监听基础信息提交
         */
        //监听提交
        form.on('submit(base)', function(data){
            //layer.msg(JSON.stringify(data.field));return false;
            \$.ajax({
                  url:\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/saveUserBase"), "method"), "html", null, true);
        echo "\",//当前ajax请求的地址
                  type:'post',//请求的方式
                  async:true,//是否异步  默认为异步
                  data:data.field,//当前ajax请求的参数  

                  success: function(data){//发送成功时的代码执行

                      if(data.code ==1001 && data.data==true){
                          layer.msg('更新资料成功');
                      }else{
                          //layer.msg('更新资料失败,请输入修改参数');
                          \$.each(data.data,function(k,v){
                            layer.msg(k+v);
                          })
                          
                      }

                  },
                  error:function(){//失败时的代码执行

                  }


              })


            return false;
        });

        /**
         * 监听密码提交
         */
        //监听提交
        form.on('submit(password)', function(data){

            // layer.msg(JSON.stringify(data.field));return false;
            \$.ajax({
                url:\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/users/saveUserPassword"), "method"), "html", null, true);
        echo "\",//当前ajax请求的地址
                type:'post',//请求的方式
                async:true,//是否异步  默认为异步
                data:data.field,//当前ajax请求的参数  

                success: function(data){//发送成功时的代码执行

                    if(data.code ==1001 && data.data){
                        layer.msg('更新密码成功');
                    }else{
                        if(data.data.password){
                            layer.msg(JSON.stringify(\"更新密码失败:\"+data.data.password));
                        }else{
                            layer.msg(JSON.stringify(\"更新密码失败:\"+data.data));
                        }

                    }

                },
                error:function(){//失败时的代码执行

                }


            })


            return false;
        });

        /**
         * 监听头像提交
         */

        var upload = layui.upload;
        /**
         * 图片上传
         */
        var uploadInst = upload.render({
            elem: '#upload' //绑定元素
            ,url: \"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute(($context["G"] ?? null), "url", array(0 => "app/Users/doUploadPic", 1 => array("uid" => $this->getAttribute(($context["userinfo"] ?? null), "uid", array()))), "method"), "html", null, true);
        echo "\" //上传接口
            ,method:\"post\"
            ,data:{width:350}
            ,done: function(res){
                if(res.code==1001 && res.data){
                    layer.msg('更新头像成功');
                    \$('#image').attr('src',\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/\"+res.data);
                }else{
                    layer.msg(JSON.stringify(\"更新头像失败:\"+data.data));
                }
            }
            ,error: function(res){

            }
        });
    });
</script>

";
        // line 243
        echo twig_include($this->env, $context, "common/footer.html");
        echo "
";
    }

    public function getTemplateName()
    {
        return "users/set.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 243,  320 => 231,  311 => 225,  268 => 185,  228 => 148,  206 => 128,  198 => 123,  193 => 120,  187 => 117,  180 => 112,  177 => 111,  169 => 106,  165 => 104,  159 => 101,  153 => 97,  151 => 96,  119 => 67,  104 => 57,  84 => 40,  68 => 31,  54 => 24,  46 => 19,  29 => 5,  23 => 2,  19 => 1,);
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
    <div class=\"layui-tab layui-tab-brief\" lay-filter=\"user\">
      <ul class=\"layui-tab-title\" id=\"LAY_mine\">
        <li class=\"layui-this\" lay-id=\"info\">我的资料</li>
        <li lay-id=\"avatar\">头像</li>
        <!--<li lay-id=\"pass\">密码</li>-->
        <!--<li lay-id=\"bind\">帐号绑定</li>-->
      </ul>
      <div class=\"layui-tab-content\" style=\"padding: 20px 0;\">
        <div class=\"layui-form layui-form-pane layui-tab-item layui-show\">

          \t<form method=\"post\">
\t            <input  class=\"layui-input\" type=\"hidden\" name=\"uid\" value=\"{{userinfo.uid}}\"/>
\t            <!--<div class=\"layui-form-item\">-->
\t              <!--<label for=\"L_email\" class=\"layui-form-label\">邮箱</label>-->
\t              <!--<div class=\"layui-input-inline\">-->

\t                <!--<input type=\"text\" id=\"L_email\" name=\"email\" {% if user.email != \"\" %} disabled {% endif %} required lay-verify=\"email\" autocomplete=\"off\" value=\"{{user.email}}\" class=\"layui-input\">-->
\t              <!--</div>-->
\t              <!--&lt;!&ndash;<div class=\"layui-form-mid layui-word-aux\">如果您在邮箱已激活的情况下，变更了邮箱，需<a href=\"./index.php?m=app&c=users&a=activate\" style=\"font-size: 12px; color: #4f99cf;\">重新验证邮箱</a>。</div>&ndash;&gt;-->
\t            <!--</div>-->
\t            <!--<div class=\"layui-form-item\">-->
\t              <!--<label for=\"L_username\" class=\"layui-form-label\">昵称</label>-->
\t              <!--<div class=\"layui-input-inline\">-->
\t                <!--<input type=\"text\" id=\"L_username\" name=\"username\" {% if user.change_username ==0 %} disabled {% endif %} required lay-verify=\"required\" autocomplete=\"off\" value=\"{{user.username}}\" class=\"layui-input\">-->
\t              <!--</div>-->

\t            <!--</div>-->


\t            <div class=\"layui-form-item layui-form-text\">
\t              <label for=\"L_sign\" class=\"layui-form-label\">签名</label>
\t              <div class=\"layui-input-block\">
\t                <textarea placeholder=\"随便写些什么刷下存在感\" id=\"L_sign\"  name=\"signature\" autocomplete=\"off\" class=\"layui-textarea\" style=\"height: 80px;\">{{userinfo.signature}}</textarea>
\t              </div>
\t            </div>
\t            <div class=\"layui-form-item\">
\t              <button class=\"layui-btn\" key=\"set-mine\" lay-filter=\"base\" lay-submit>确认修改</button>
\t            </div>
\t        </form>
        </div>


          <div class=\"layui-form layui-form-pane layui-tab-item\">
            <div class=\"layui-form-item\">
              <div class=\"avatar-add\">
                <p>建议尺寸168*168，支持jpg、png、gif，最大不能超过50KB</p>
                <button type=\"button\" class=\"layui-btn upload-img\"  id=\"upload\">
                  <i class=\"layui-icon\">&#xe67c;</i>上传头像
                </button>
                <img id=\"image\" src=\"{{_G['ATTACHMENT_ROOT']}}/{{userinfo.avatar}}\">
                <span class=\"loading\"></span>
              </div>
            </div>
          </div>


          
          <div class=\"layui-form layui-form-pane layui-tab-item\">
            <form method=\"post\">
              <input  class=\"layui-input\" type=\"hidden\" name=\"uid\" value=\"{{userinfo.uid}}\"/>
              <div class=\"layui-form-item\">
                <label for=\"L_nowpass\" class=\"layui-form-label\">原密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_nowpass\" name=\"old_password\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <label for=\"L_pass\" class=\"layui-form-label\">新密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_pass\" name=\"password\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
                <div class=\"layui-form-mid layui-word-aux\">6到16个字符</div>
              </div>
              <div class=\"layui-form-item\">
                <label for=\"L_repass\" class=\"layui-form-label\">确认密码</label>
                <div class=\"layui-input-inline\">
                  <input type=\"password\" id=\"L_repass\" name=\"repass\" required lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                </div>
              </div>
              <div class=\"layui-form-item\">
                <button class=\"layui-btn\" key=\"set-mine\" lay-filter=\"password\" lay-submit>确认修改</button>
              </div>
            </form>
          </div>
          

         <div class=\"layui-form layui-form-pane layui-tab-item\">
            <ul class=\"app-bind\">
              {% if registerinfo.qq_openid !=\"\" %}
              <li class=\"fly-msg app-havebind\">

                <i class=\"iconfont icon-qq\"></i>                
                <span>已成功绑定，您可以使用QQ帐号直接登录社区，当然，您也可以</span>
                <a href=\"{{G.url('app/registers/unbind',{'uid':userinfo.uid,'type':'qq'})}}\" class=\"acc-unbind\" type=\"qq_id\">解除绑定</a>
             </li>
             {% else %}
             <li class=\"fly-msg\">
                <i class=\"iconfont icon-qq\"></i>                
                <a href=\"{{G.url('app/registers/bind',{'uid':userinfo.uid,'type':'qq'})}}\" onclick=\"layer.msg('正在绑定QQ', {icon:16, shade: 0.1, time:0})\" class=\"acc-bind\" type=\"qq_id\">立即绑定</a>

                <span>，即可使用QQ帐号登录社区</span>
             </li>
             {% endif %}
             {% if registerinfo.weixin_openid !=\"\" %}
              <li class=\"fly-msg app-havebind\">                
                <i class=\"mine-icon\" style=\"font-size: 30px;\">&#xe628;</i>
                <!-- <i class=\"iconfont icon-weibo\"></i> -->                

                <span>已成功绑定，您可以使用微信直接登录社区，当然，您也可以</span>
                <a href=\"{{G.url('app/registers/unbind',{'uid':userinfo.uid,'type':'weixin'})}}\" class=\"acc-unbind\" type=\"weibo_id\">解除绑定</a>                
              </li>
              {% else %}
              <li class=\"fly-msg\">                
                <i class=\"mine-icon\" style=\"font-size: 30px;\">&#xe628;</i>
                <!-- <i class=\"iconfont icon-weibo\"></i> -->                
               <a href=\"{{G.url('app/registers/bind',{'uid':userinfo.uid,'type':'weixin'})}}\" class=\"acc-weibo\" type=\"weibo_id\"  onclick=\"layer.msg('正在绑定微信', {icon:16, shade: 0.1, time:0})\" >立即绑定</a>
                <span>，即可使用微信帐号登录社区</span>

              </li>
              {% endif %}
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
    //Demo
    layui.use(['form','upload'], function(){
        var form = layui.form;
        /**
         * 监听基础信息提交
         */
        //监听提交
        form.on('submit(base)', function(data){
            //layer.msg(JSON.stringify(data.field));return false;
            \$.ajax({
                  url:\"{{ G.url('app/users/saveUserBase')}}\",//当前ajax请求的地址
                  type:'post',//请求的方式
                  async:true,//是否异步  默认为异步
                  data:data.field,//当前ajax请求的参数  

                  success: function(data){//发送成功时的代码执行

                      if(data.code ==1001 && data.data==true){
                          layer.msg('更新资料成功');
                      }else{
                          //layer.msg('更新资料失败,请输入修改参数');
                          \$.each(data.data,function(k,v){
                            layer.msg(k+v);
                          })
                          
                      }

                  },
                  error:function(){//失败时的代码执行

                  }


              })


            return false;
        });

        /**
         * 监听密码提交
         */
        //监听提交
        form.on('submit(password)', function(data){

            // layer.msg(JSON.stringify(data.field));return false;
            \$.ajax({
                url:\"{{ G.url('app/users/saveUserPassword')}}\",//当前ajax请求的地址
                type:'post',//请求的方式
                async:true,//是否异步  默认为异步
                data:data.field,//当前ajax请求的参数  

                success: function(data){//发送成功时的代码执行

                    if(data.code ==1001 && data.data){
                        layer.msg('更新密码成功');
                    }else{
                        if(data.data.password){
                            layer.msg(JSON.stringify(\"更新密码失败:\"+data.data.password));
                        }else{
                            layer.msg(JSON.stringify(\"更新密码失败:\"+data.data));
                        }

                    }

                },
                error:function(){//失败时的代码执行

                }


            })


            return false;
        });

        /**
         * 监听头像提交
         */

        var upload = layui.upload;
        /**
         * 图片上传
         */
        var uploadInst = upload.render({
            elem: '#upload' //绑定元素
            ,url: \"{{ G.url('app/Users/doUploadPic',{'uid':userinfo.uid})}}\" //上传接口
            ,method:\"post\"
            ,data:{width:350}
            ,done: function(res){
                if(res.code==1001 && res.data){
                    layer.msg('更新头像成功');
                    \$('#image').attr('src',\"{{_G['ATTACHMENT_ROOT']}}/\"+res.data);
                }else{
                    layer.msg(JSON.stringify(\"更新头像失败:\"+data.data));
                }
            }
            ,error: function(res){

            }
        });
    });
</script>

{{ include(\"common/footer.html\")}}
", "users/set.html", "/data/test/yunceping/bbs/app/template/users/set.html");
    }
}
