<?php

/* common/ceping_footer.html */
class __TwigTemplate_d8718021ee46b5d00aec29980bdc5ae19dfd6e43bf02695cecf8a9cb563c41ba extends Twig_Template
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
        echo "<div class=\"news-footer\">
    <div class=\"layui-container\">
    <span class=\"layui-breadcrumb\" lay-separator=\" \">
      <a>关于我们</a>
      <a>合作伙伴</a>
      <a>广告服务</a>
      <a>常见问题</a>
    </span>
        <p class=\"copyright\">Copyright &copy; 新闻网 赣ICP备12345678号</p>
        <a id=\"wechat\" href=\"\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a>
        <a id=\"weibo\" href=\"\"><i class=\"layui-icon layui-icon-news-weibo\"></i></a>
        <img id=\"code\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/code.png\">
    </div>
</div>


<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
<script src=\"https://cdn.staticfile.org/html5shiv/r29/html5.min.js\"></script>
<script src=\"https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
<script>
    layui.config({
        base: \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/js/\"
    }).use('news');
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/ceping_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  32 => 12,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"news-footer\">
    <div class=\"layui-container\">
    <span class=\"layui-breadcrumb\" lay-separator=\" \">
      <a>关于我们</a>
      <a>合作伙伴</a>
      <a>广告服务</a>
      <a>常见问题</a>
    </span>
        <p class=\"copyright\">Copyright &copy; 新闻网 赣ICP备12345678号</p>
        <a id=\"wechat\" href=\"\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a>
        <a id=\"weibo\" href=\"\"><i class=\"layui-icon layui-icon-news-weibo\"></i></a>
        <img id=\"code\" src=\"{{_G['APP']}}/resource/static/img/code.png\">
    </div>
</div>


<!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
<!--[if lt IE 9]>
<script src=\"https://cdn.staticfile.org/html5shiv/r29/html5.min.js\"></script>
<script src=\"https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->
<script>
    layui.config({
        base: \"{{_G['APP']}}/resource/static/js/\"
    }).use('news');
</script>

</body>
</html>", "common/ceping_footer.html", "/data/test/yunceping/bbs/app/template/common/ceping_footer.html");
    }
}
