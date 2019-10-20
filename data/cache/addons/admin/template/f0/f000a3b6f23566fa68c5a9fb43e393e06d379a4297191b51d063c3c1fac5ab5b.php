<?php

/* common/error.html */
class __TwigTemplate_6c8d8beb54478a5e6ba87e38208b07a8b365117233d184fb3d7eb6102ee3af18 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>calfbbs 经典开源社区系统,bbs论坛</title>
</head>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/sweetalert.min.js\"></script>
<body>

<script>

    swal({
        title: \"";
        // line 16
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "\",
        text: \"点击确认进行跳转\",
        icon: \"error\",
        button: \"确认\",
    }).then((value) => {

        window.location.href=escape2Html(\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\")
    });

   /**
    * 字符转义
    * @param str
    */
   function escape2Html(str) {
       var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'\"'};
       return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
   }
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  39 => 16,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>calfbbs 经典开源社区系统,bbs论坛</title>
</head>
<script src=\"{{_G['APP']}}/resource/js/sweetalert.min.js\"></script>
<body>

<script>

    swal({
        title: \"{{message}}\",
        text: \"点击确认进行跳转\",
        icon: \"error\",
        button: \"确认\",
    }).then((value) => {

        window.location.href=escape2Html(\"{{url}}\")
    });

   /**
    * 字符转义
    * @param str
    */
   function escape2Html(str) {
       var arrEntities={'lt':'<','gt':'>','nbsp':' ','amp':'&','quot':'\"'};
       return str.replace(/&(lt|gt|nbsp|amp|quot);/ig,function(all,t){return arrEntities[t];});
   }
</script>
</body>
</html>", "common/error.html", "/data/test/yunceping/bbs/addons/admin/template/common/error.html");
    }
}
