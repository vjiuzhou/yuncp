<?php

/* common/footer.html */
class __TwigTemplate_3a4d15a36503adec2a50ef8faf3e84a4e5d7b1712bd253c96c1ce4bf78649ffb extends Twig_Template
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
        echo "<div class=\"fly-footer\">

  <p><!--作者耗费一年心血所做匠心产品,请手下留情，保留作者名称及官网链接,感谢!。-->
    <a href=\"http://www.calfbbs.cn/\" target=\"_blank\">Powered by Calfbbs</a>  <a href=\"http://www.calfbbs.cn/\" target=\"_blank\">2018-2028 &copy;</a></p>
  <p>

    <a href=\"#\" >版权所有:";
        // line 7
        echo twig_escape_filter($this->env, ($context["copyright"] ?? null), "html", null, true);
        echo "</a>
    <a href=\"http://www.miitbeian.gov.cn\"  >备案/许可证号:";
        // line 8
        echo twig_escape_filter($this->env, ($context["icp"] ?? null), "html", null, true);
        echo "</a>

  </p>
</div>

<!--<form action=\"http://cn.bing.com/search\" class=\"fly-search\">-->
  <!--<i class=\"iconfont icon-sousuo\"></i>-->
  <!--<input class=\"layui-input\" autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">-->
<!--</form>-->
<script>

//注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use(['element','layer'], function(){
        var element = layui.element;
        var layer=layui.layer;
//搜索
        \$('.fly-search').click(function(){
            layer.open({
                type: 1
                ,title: false
                ,closeBtn: false
                //,shade: [0.1, '#fff']
                ,shadeClose: true
                ,maxWidth: 10000
                ,skin: 'fly-layer-search'
                ,content: ['<form action=\"keyword-text.html\">'
                    ,'<input autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">'
                    ,'</form>'].join('')
                ,success: function(layero){
                    var input = layero.find('input');
                    input.focus();

                    layero.find('form').submit(function(){
                        var val = input.val();
                        if(val.replace(/\\s/g, '') === ''){
                            return false;
                        }
                        var text=input.val();
                        input.val('搜索帖子: '+ text);
                        var url=\"keyword-text.html\";

                        url = url.replace(\"text\", text);
                        url = url.replace(/&amp;/g, \"&\");

                        window.location.href=url;
                        return false;

                    });
                }
            })
        });
    });
</script>

<script>
    //百度链接自动推送
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName(\"script\")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

<script>
    //360链接自动推送
    (function(){
    var src = (document.location.protocol == \"http:\") ? \"http://js.passport.qihucdn.com/11.0.1.js?de33333e66005d09997bb3a62d5fd165\":\"https://jspassport.ssl.qhimg.com/11.0.1.js?de33333e66005d09997bb3a62d5fd165\";
    document.write('<script src=\"' + src + '\" id=\"sozz\"><\\/script>');
})();
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fly-footer\">

  <p><!--作者耗费一年心血所做匠心产品,请手下留情，保留作者名称及官网链接,感谢!。-->
    <a href=\"http://www.calfbbs.cn/\" target=\"_blank\">Powered by Calfbbs</a>  <a href=\"http://www.calfbbs.cn/\" target=\"_blank\">2018-2028 &copy;</a></p>
  <p>

    <a href=\"#\" >版权所有:{{copyright}}</a>
    <a href=\"http://www.miitbeian.gov.cn\"  >备案/许可证号:{{icp}}</a>

  </p>
</div>

<!--<form action=\"http://cn.bing.com/search\" class=\"fly-search\">-->
  <!--<i class=\"iconfont icon-sousuo\"></i>-->
  <!--<input class=\"layui-input\" autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">-->
<!--</form>-->
<script>

//注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use(['element','layer'], function(){
        var element = layui.element;
        var layer=layui.layer;
//搜索
        \$('.fly-search').click(function(){
            layer.open({
                type: 1
                ,title: false
                ,closeBtn: false
                //,shade: [0.1, '#fff']
                ,shadeClose: true
                ,maxWidth: 10000
                ,skin: 'fly-layer-search'
                ,content: ['<form action=\"keyword-text.html\">'
                    ,'<input autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">'
                    ,'</form>'].join('')
                ,success: function(layero){
                    var input = layero.find('input');
                    input.focus();

                    layero.find('form').submit(function(){
                        var val = input.val();
                        if(val.replace(/\\s/g, '') === ''){
                            return false;
                        }
                        var text=input.val();
                        input.val('搜索帖子: '+ text);
                        var url=\"keyword-text.html\";

                        url = url.replace(\"text\", text);
                        url = url.replace(/&amp;/g, \"&\");

                        window.location.href=url;
                        return false;

                    });
                }
            })
        });
    });
</script>

<script>
    //百度链接自动推送
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName(\"script\")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>

<script>
    //360链接自动推送
    (function(){
    var src = (document.location.protocol == \"http:\") ? \"http://js.passport.qihucdn.com/11.0.1.js?de33333e66005d09997bb3a62d5fd165\":\"https://jspassport.ssl.qhimg.com/11.0.1.js?de33333e66005d09997bb3a62d5fd165\";
    document.write('<script src=\"' + src + '\" id=\"sozz\"><\\/script>');
})();
</script>

</body>
</html>", "common/footer.html", "/data/test/yunceping/bbs/app/template/common/footer.html");
    }
}
