<?php

/* detail/overview.html */
class __TwigTemplate_8ff84a30a8f621bf98939797cc8bc168047a58ac9f5c1b99f9049d6c0d3584b8 extends Twig_Template
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
        // line 7
        echo twig_include($this->env, $context, "common/ceping_detail_nav.html");
        echo "

    <div class=\"layui-container news-detail\">
        <div class=\"layui-row layui-col-space40\">
            <div class=\"layui-col-sm8\" style=\"background-color: #fff;margin-top:20px;\">
                <div class=\"detail-main\">
                    <ul id=\"detail-handel\">
                        <li class=\"weibo\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-weibo\"></i></a></li>
                        <li class=\"wechat\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a></li>
                        <li class=\"space\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-space\"></i></a></li>
                        <li class=\"review num\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-review2\"></i><span>1280</span></a></li>
                        <li class=\"collect num\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-collect\"></i><span>1008</span></a></li>
                    </ul>
                    <div class=\"detail-cont\">
                        <h1> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                        <div class=\"newsClass\"><span>财经</span>小明同学 <b>2018-06-07 08:30</b> <i>收藏1289</i> <i>评论500</i></div>
                        <p class=\"title\">文章摘自奇闻趣事每日说</p>
                        <div class=\"layui-col-md12\" >
                            <blockquote class=\"layui-elem-quote\">

                                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "describes", array(), "array"), "html_attr");
        echo "
                            </blockquote>
                        </div>

                            <div class=\"layui-col-md3\" style=\"text-align: center\">阿里云官网
                                <a  href=\" ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "url", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</a></div>
                            <div class=\"layui-col-md9\" style=\"text-align: center\">优惠卷：
                                ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "discount", array()), "html", null, true);
        echo "
                                购买输入此优惠码，可打";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "discount_num", array()), "html", null, true);
        echo "折


                        <button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button></div>

                        <div class=\"layui-table-body layui-table-main\"  style=\"padding:20px 0px;\">
                            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                                <thead>
                                <tr>
                                    <th data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">
                                            <span>排行榜</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>实际测试值</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>全国</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>全球</span></div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-index=\"0\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"1\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">可用率</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"2\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">响应时间速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"3\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">带宽</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"4\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">并发测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"5\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">上传文件速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"6\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">下载文件速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"7\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">磁盘性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"8\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">CPU性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"9\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">内存性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "text", array(), "array"), "html_attr");
        echo "


                    </div>

                    <div class=\"detail-label\">
                        <i class=\"layui-icon layui-icon-news-label\"></i>
                        <span class=\"layui-breadcrumb\">
\t\t\t\t\t  <a href=\"javascript:;\">华为手机</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">华为荣耀</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">CPU</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">GPU</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">三星</a>
\t\t\t\t\t</span>
                    </div>
                    <div class=\"detail-comment\">
                        <p>全部评论 <span>102</span></p>
                        <div class=\"addComment layui-form\">
                            <div class=\"img\"><span><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header2.png\"></span></div><div class=\"content\">
                            <textarea placeholder=\"写下您想说的评论吧...\" class=\"layui-textarea\"></textarea>
                            <div class=\"btn\"><button class=\"layui-btn\">添加评论</button></div>
                        </div>
                        </div>
                        <ul id=\"replyCont\">
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                        </ul>
                        <div id=\"detailPage\"></div>
                    </div>
                </div>
            </div>
            <div class=\"layui-col-sm4\">
                <div class=\"detail-side\">
                    <div class=\"layui-table-body layui-table-main\" >
                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                            <thead>
                            <tr>
                                <th data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">
                                        <span>测评参数</span></div>
                                </th>
                                <th data-field=\"value\">
                                    <div class=\"layui-table-cell \">
                                        <span>官网展示测评值</span></div>
                                </th>

                            </tr>
                            </thead>
                           <tbody>
                            <tr data-index=\"0\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell\">内存</div>
                                    </td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "memory", array()), "html", null, true);
        echo "</div>
                                    </td>
                            </tr>
                            <tr data-index=\"1\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">CPU</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "cpu", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"2\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">硬盘</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "ssd", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"3\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">流量限制</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "outflow", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"4\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">带宽</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "bandwidth", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"5\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">IPv4</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "ipv4", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"6\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell\">IPv6</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "ipv6", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"7\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">每月价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "month_price", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"8\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">每半年价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "half_year_price", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                            <tr data-index=\"9\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">一年价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "year_price", array()), "html", null, true);
        echo "</div></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>

                    <!--<div class=\"person\">-->
                        <!--<a class=\"img\"><img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/header.jpg\"></a>-->
                        <!--<span class=\"name\">小明同学</span>-->
                        <!--<span class=\"num\">102篇文章</span>-->
                        <!--<a href=\"javascript:;\" class=\"layui-btn layui-btn-sm focusOn\">关注</a>-->
                    <!--</div>-->
                    <div class=\"list\">
                        <p>热门推荐</p>
                        <ul>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>
    </div>

    <!--<div class=\"layui-container\">-->
        <!--<div class=\"layui-row\">-->

            <!--<div class=\"layui-col-md12\">-->
                <!--&lt;!&ndash;<div class=\"layui-col-md5\" style=\"text-align: center\">阿里云官网&ndash;&gt;-->
                    <!--&lt;!&ndash;<a  href=\" ";
        // line 370
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "url", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</a></div>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class=\"layui-col-md7\" style=\"text-align: center\">优惠卷：&ndash;&gt;-->
                    <!--&lt;!&ndash;";
        // line 372
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "discount", array()), "html", null, true);
        echo "&ndash;&gt;-->
                    <!--&lt;!&ndash;购买时输入此优惠码，可打折 ";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute(($context["posts"] ?? null), "discount_num", array()), "html", null, true);
        echo "优惠&ndash;&gt;-->
                    <!--&lt;!&ndash;<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button></div>&ndash;&gt;-->
                <!--<div class=\"layui-row layui-col-space5\">-->
                    <!--<div class=\"layui-col-md8\" >-->
                        <!--<div class=\"layui-form layui-border-box layui-table-view\" lay-filter=\"LAY-table-1\"  >-->
                            <!--<div class=\"layui-table-box\">-->

                                <!--<div class=\"layui-table-body layui-table-main\" >-->
                                    <!--<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">-->
                                        <!--<thead>-->
                                        <!--<tr>-->
                                            <!--<th data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">-->
                                                    <!--<span>排行榜</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>实际测试值</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>全国</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>全球</span></div>-->
                                            <!--</th>-->
                                        <!--</tr>-->
                                        <!--</thead>-->
                                        <!--<tbody>-->
                                        <!--<tr data-index=\"0\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"1\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">可用率</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"2\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">响应时间速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"3\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">带宽</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"4\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">并发测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"5\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">上传文件速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"6\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">下载文件速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"7\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">磁盘性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"8\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">CPU性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"9\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">内存性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--</tbody>-->
                                    <!--</table>-->
                                <!--</div>-->

                            <!--</div>-->
                    <!--</div>-->

                <!--</div>-->

            <!--</div>-->

        <!--</div>-->


    </div>


    <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_G"] ?? null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.all.js\" charset=\"utf-8\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->

";
        // line 526
        echo twig_include($this->env, $context, "common/ceping_footer.html");
    }

    public function getTemplateName()
    {
        return "detail/overview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 526,  673 => 523,  520 => 373,  516 => 372,  511 => 370,  494 => 356,  490 => 355,  486 => 354,  482 => 353,  478 => 352,  474 => 351,  470 => 350,  466 => 349,  462 => 348,  458 => 347,  454 => 346,  450 => 345,  439 => 337,  429 => 330,  420 => 324,  411 => 318,  402 => 312,  393 => 306,  384 => 300,  375 => 294,  366 => 288,  357 => 282,  347 => 275,  310 => 241,  300 => 234,  290 => 227,  280 => 220,  270 => 213,  260 => 206,  250 => 199,  240 => 192,  230 => 185,  209 => 167,  74 => 35,  70 => 34,  65 => 32,  57 => 27,  48 => 21,  31 => 7,  24 => 3,  19 => 1,);
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

    <div class=\"layui-container news-detail\">
        <div class=\"layui-row layui-col-space40\">
            <div class=\"layui-col-sm8\" style=\"background-color: #fff;margin-top:20px;\">
                <div class=\"detail-main\">
                    <ul id=\"detail-handel\">
                        <li class=\"weibo\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-weibo\"></i></a></li>
                        <li class=\"wechat\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-wechat\"></i></a></li>
                        <li class=\"space\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-space\"></i></a></li>
                        <li class=\"review num\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-review2\"></i><span>1280</span></a></li>
                        <li class=\"collect num\"><a href=\"javascript:;\"><i class=\"layui-icon layui-icon-news-collect\"></i><span>1008</span></a></li>
                    </ul>
                    <div class=\"detail-cont\">
                        <h1> {{posts.title}}</h1>
                        <div class=\"newsClass\"><span>财经</span>小明同学 <b>2018-06-07 08:30</b> <i>收藏1289</i> <i>评论500</i></div>
                        <p class=\"title\">文章摘自奇闻趣事每日说</p>
                        <div class=\"layui-col-md12\" >
                            <blockquote class=\"layui-elem-quote\">

                                {{ posts['describes']|e('html_attr') }}
                            </blockquote>
                        </div>

                            <div class=\"layui-col-md3\" style=\"text-align: center\">阿里云官网
                                <a  href=\" {{posts.url}}\" target=\"_blank\" class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</a></div>
                            <div class=\"layui-col-md9\" style=\"text-align: center\">优惠卷：
                                {{posts.discount}}
                                购买输入此优惠码，可打{{posts.discount_num}}折


                        <button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button></div>

                        <div class=\"layui-table-body layui-table-main\"  style=\"padding:20px 0px;\">
                            <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                                <thead>
                                <tr>
                                    <th data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">
                                            <span>排行榜</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>实际测试值</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>全国</span></div>
                                    </th>
                                    <th data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">
                                            <span>全球</span></div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr data-index=\"0\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"1\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">可用率</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"2\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">响应时间速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"3\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">带宽</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"4\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">并发测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"5\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">上传文件速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"6\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">下载文件速度</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"7\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">磁盘性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"8\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">CPU性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                <tr data-index=\"9\" class=\"\">
                                    <td data-field=\"parameter\">
                                        <div class=\"layui-table-cell laytable-cell-2-parameter\">内存性能测试</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                    <td data-field=\"value\">
                                        <div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        {{ posts['text']|e('html_attr') }}


                    </div>

                    <div class=\"detail-label\">
                        <i class=\"layui-icon layui-icon-news-label\"></i>
                        <span class=\"layui-breadcrumb\">
\t\t\t\t\t  <a href=\"javascript:;\">华为手机</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">华为荣耀</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">CPU</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">GPU</a>/
\t\t\t \t\t\t<a href=\"javascript:;\">三星</a>
\t\t\t\t\t</span>
                    </div>
                    <div class=\"detail-comment\">
                        <p>全部评论 <span>102</span></p>
                        <div class=\"addComment layui-form\">
                            <div class=\"img\"><span><img src=\"{{_G['APP']}}/resource/static/img/header2.png\"></span></div><div class=\"content\">
                            <textarea placeholder=\"写下您想说的评论吧...\" class=\"layui-textarea\"></textarea>
                            <div class=\"btn\"><button class=\"layui-btn\">添加评论</button></div>
                        </div>
                        </div>
                        <ul id=\"replyCont\">
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                            <li>
                                <div class=\"img\"><a href=\"\"><img src=\"{{_G['APP']}}/resource/static/img/header3.png\"></a></div><div class=\"readCom\">
                                <p class=\"name\"><a href=\"\">王小笑</a><span>1小时前</span><span class=\"goods\">100<i class=\"layui-icon layui-icon-news-good\"></i></span></p>
                                <p class=\"txt\">这篇新闻写的太棒了！给用户带来可用的信息这篇新闻写的很棒！</p>
                                <a class=\"reply\" href=\"javascript:;\">回复</a>
                            </div>
                            </li>
                        </ul>
                        <div id=\"detailPage\"></div>
                    </div>
                </div>
            </div>
            <div class=\"layui-col-sm4\">
                <div class=\"detail-side\">
                    <div class=\"layui-table-body layui-table-main\" >
                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">
                            <thead>
                            <tr>
                                <th data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">
                                        <span>测评参数</span></div>
                                </th>
                                <th data-field=\"value\">
                                    <div class=\"layui-table-cell \">
                                        <span>官网展示测评值</span></div>
                                </th>

                            </tr>
                            </thead>
                           <tbody>
                            <tr data-index=\"0\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell\">内存</div>
                                    </td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">{{posts.memory}}</div>
                                    </td>
                            </tr>
                            <tr data-index=\"1\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">CPU</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">{{posts.cpu}}</div></td>
                            </tr>
                            <tr data-index=\"2\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">硬盘</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell\">{{posts.ssd}}</div></td>
                            </tr>
                            <tr data-index=\"3\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">流量限制</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.outflow}}</div></td>
                            </tr>
                            <tr data-index=\"4\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">带宽</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.bandwidth}}</div></td>
                            </tr>
                            <tr data-index=\"5\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">IPv4</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.ipv4}}</div></td>
                            </tr>
                            <tr data-index=\"6\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell\">IPv6</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.ipv6}}</div></td>
                            </tr>
                            <tr data-index=\"7\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">每月价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.month_price}}</div></td>
                            </tr>
                            <tr data-index=\"8\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">每半年价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.half_year_price}}</div></td>
                            </tr>
                            <tr data-index=\"9\" class=\"\">
                                <td data-field=\"parameter\">
                                    <div class=\"layui-table-cell \">一年价格</div></td>
                                <td data-field=\"value\">
                                    <div class=\"layui-table-cell \">{{posts.year_price}}</div></td>
                            </tr>
                          </tbody>
                        </table>
                    </div>

                    <!--<div class=\"person\">-->
                        <!--<a class=\"img\"><img src=\"{{_G['APP']}}/resource/static/img/header.jpg\"></a>-->
                        <!--<span class=\"name\">小明同学</span>-->
                        <!--<span class=\"num\">102篇文章</span>-->
                        <!--<a href=\"javascript:;\" class=\"layui-btn layui-btn-sm focusOn\">关注</a>-->
                    <!--</div>-->
                    <div class=\"list\">
                        <p>热门推荐</p>
                        <ul>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img2.jpg\"><span>王者荣耀貂蝉皮肤逐梦之音全服正式上线</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img3.jpg\"><span>第一批机器人创业的老板已经跑路了</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img4.jpg\"><span>快递服务走向智能化</span></a></li>
                            <li><a href=\"javascript:;\"><img src=\"{{_G['APP']}}/resource/static/img/paging_img5.jpg\"><span>生男孩和生女孩分别在孕期有哪些症状</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>
    </div>

    <!--<div class=\"layui-container\">-->
        <!--<div class=\"layui-row\">-->

            <!--<div class=\"layui-col-md12\">-->
                <!--&lt;!&ndash;<div class=\"layui-col-md5\" style=\"text-align: center\">阿里云官网&ndash;&gt;-->
                    <!--&lt;!&ndash;<a  href=\" {{posts.url}}\" target=\"_blank\" class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击传送</a></div>&ndash;&gt;-->
                <!--&lt;!&ndash;<div class=\"layui-col-md7\" style=\"text-align: center\">优惠卷：&ndash;&gt;-->
                    <!--&lt;!&ndash;{{posts.discount}}&ndash;&gt;-->
                    <!--&lt;!&ndash;购买时输入此优惠码，可打折 {{posts.discount_num}}优惠&ndash;&gt;-->
                    <!--&lt;!&ndash;<button class=\"layui-btn layui-btn-sm layui-btn-ceping\" data-type=\"parseTable\">点击复制</button></div>&ndash;&gt;-->
                <!--<div class=\"layui-row layui-col-space5\">-->
                    <!--<div class=\"layui-col-md8\" >-->
                        <!--<div class=\"layui-form layui-border-box layui-table-view\" lay-filter=\"LAY-table-1\"  >-->
                            <!--<div class=\"layui-table-box\">-->

                                <!--<div class=\"layui-table-body layui-table-main\" >-->
                                    <!--<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" class=\"layui-table\" style=\"margin:0 auto;\">-->
                                        <!--<thead>-->
                                        <!--<tr>-->
                                            <!--<th data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">-->
                                                    <!--<span>排行榜</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>实际测试值</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>全国</span></div>-->
                                            <!--</th>-->
                                            <!--<th data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">-->
                                                    <!--<span>全球</span></div>-->
                                            <!--</th>-->
                                        <!--</tr>-->
                                        <!--</thead>-->
                                        <!--<tbody>-->
                                        <!--<tr data-index=\"0\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">价格</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"1\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">可用率</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"2\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">响应时间速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"3\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">带宽</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"4\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">并发测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"5\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">上传文件速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"6\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">下载文件速度</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"7\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">磁盘性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"8\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">CPU性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--<tr data-index=\"9\" class=\"\">-->
                                            <!--<td data-field=\"parameter\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-parameter\">内存性能测试</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                            <!--<td data-field=\"value\">-->
                                                <!--<div class=\"layui-table-cell laytable-cell-2-value\">10名</div></td>-->
                                        <!--</tr>-->
                                        <!--</tbody>-->
                                    <!--</table>-->
                                <!--</div>-->

                            <!--</div>-->
                    <!--</div>-->

                <!--</div>-->

            <!--</div>-->

        <!--</div>-->


    </div>


    <!--<div id=\"silde\"><a id=\"refresh\"><i class=\"layui-icon layui-icon-refresh\"></i></a><a id=\"scroll\"><i class=\"layui-icon layui-icon-up\"></i></a></div>-->
</div>

<script src=\"{{_G['APP']}}/resource/layui/layui.all.js\" charset=\"utf-8\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->

{{ include(\"common/ceping_footer.html\")}}", "detail/overview.html", "/data/test/yunceping/bbs/app/template/detail/overview.html");
    }
}
