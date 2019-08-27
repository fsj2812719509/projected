
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>网站关键词-网站名称</title>
    <meta name="description" content="网站描述，一般显示在搜索引擎搜索结果中的描述文字，用于介绍网站，吸引浏览者点击。" />
    <meta name="keywords" content="网站关键词" />
    <meta name="generator" content="MetInfo 5.1.7" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="images/metinfo.css" />
    <script src="images/jQuery1.7.2.js" type="text/javascript"></script>
    <script src="images/ch.js" type="text/javascript"></script>

</head>
<body>
<header>
    <div class="inner">
        <div class="top-logo">
            <a href="index.html" title="网站名称" id="web_logo"><img src="images/logo.png" alt="网站名称" title="网站名称" style="margin:20px 0px 0px 0px;" /></a>

            <ul class="top-nav list-none">
                <li class="t">
                    <a href='#' onclick='SetHome(this,window.location,"非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='设为首页'  >设为首页</a><span>|</span>
                    <a href='#' onclick='addFavorite("非IE浏览器不支持此功能，请手动设置！");' style='cursor:pointer;' title='收藏本站'  >收藏本站</a><span>|</span><a class="fontswitch" id="StranLink" href="javascript:StranBody()">繁体中文</a><span>|</span>
                    <a href='#' title='WAP'>WAP</a><span>|</span>
                    <a href='#' title='English'  >English</a><span>|</span>
                    <a href='#' title='我的订单' class='shopweba'>我的订单</a></li><li class="b">
                    <a href="/"><strong><span style="color:#ffff00;"><span style="font-size: 14px;">后台演示请点击这里进入</span></span></strong></a></li>
            </ul>
        </div>

        <nav>
            <ul class="list-none">
                @foreach($nav as $k=>$v)
                    <li class="line"></li>
                    <li id='nav_22' style='width:120px;' >
                        <a href='{{$v['n_url']}}.html'  class='hover-none nav'>
                            <span>{{$v['n_name']}}</span>
                        </a>
                    </li>
                @endforeach
            </ul></nav>
    </div>
</header>

<div class="inner met_flash">
    <link href='images/css.css' rel='stylesheet' type='text/css' />
    <script src='images/jquery.bxSlider.min.js'></script>
    <div class='flash flash6' style='width:980px; height:245px;'>
        <ul id='slider6' class='list-none'>
            @foreach($all as $k=>$v)
            <li>
                <a href='#' target='_blank' >
                    <img src="{{$v['s_img']}}" width='980' height='245'>
                </a>
            </li>
            @endforeach

        </ul>
    </div>
    <script type='text/javascript'>$(document).ready(function(){ $('#slider6').bxSlider({ mode:'vertical',autoHover:true,auto:true,pager: true,pause: 5000,controls:false});});</script></div>


<div class="index inner">
    <div class="aboutus style-1">
        <h3 class="title">
            <span class='myCorner' data-corner='top 5px'>{{$matter[0][7]['c_name']}}</span>
            <a href="" class="more" title="链接关键词">更多>></a>
        </h3>
        <div class="active editor clear contour-1"><div>
                <img alt="" src="http://demo.metinfo.cn/upload/images/20120716_094159.jpg" style="margin: 8px; width: 196px; float: left; height: 209px; " /></div>
            <div style="padding-top:10px;">
                <span style="font-size:14px;"><strong>{{$matter[0][7]['m_name']}}</strong></span></div>
            <div>
                {{$matter[0][7]['m_content']}}
            </div>
            <div>&nbsp;</div>
            <div><span style="font-size:14px;"><strong>{{$matter[0][8]['m_name']}}</strong></span></div><div>
                <span style="font-size:12px;">{{$matter[0][8]['m_content']}}</span></div>
            <div class="clear"></div></div></div>

    <div class="case style-2">
        <h3 class='title myCorner' data-corner='top 5px'><a href="" title="链接关键词" class="more">更多>></a>案例</h3>
        <div class="active dl-jqrun contour-1">

            <dl class="ind">
                <dt><a href="#" target='_self'><img src="images/1342431883.jpg" alt="图片关键词" title="图片关键词" style="width:116px; height:80px;" /></a></dt>
                <dd>
                    <h4><a href="#" target='_self' title="示例案例六">示例案例六</a></h4>
                    <p class="desc" title="相关描述文字，相关描述文字，相关描述文字，相关描述文字，相关描述文字。">相关描述文字，相关描述文字，相关描述文字，相关描述文字，相关..</p>
                </dd>
            </dl>

            <dl class="ind">
                <dt><a href="#" target='_self'><img src="images/1342428068.jpg" alt="图片关键词" title="图片关键词" style="width:116px; height:80px;" /></a></dt>
                <dd>
                    <h4><a href="#" target='_self' title="示例案例五">示例案例五</a></h4>
                    <p class="desc" title="相关描述文字，相关描述文字，相关描述文字，相关描述文字，相关描述文字。">相关描述文字，相关描述文字，相关描述文字，相关描述文字，相关..</p>
                </dd>
            </dl>

            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="index-news style-1">
        <h3 class="title">
            <span class='myCorner' data-corner='top 5px'>{{$matter[1][4]['c_name']}}</span>
            <a href="" class="more" title="链接关键词">更多>></a>
        </h3>
        <div class="active clear listel contour-2">
            <ol class='list-none metlist'>
                <li class='list top'><span class='time'>2012-07-17</span><a href='/matters?id={{$matter[1][4]['m_id']}}' >{{$matter[1][4]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][5]['m_id']}}' ></a>{{$matter[1][5]['m_name']}}</li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][6]['m_id']}}' >{{$matter[1][6]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][10]['m_id']}}' >{{$matter[1][10]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][11]['m_id']}}' >{{$matter[1][11]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][12]['m_id']}}' >{{$matter[1][12]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][13]['m_id']}}' >{{$matter[1][13]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][14]['m_id']}}' >{{$matter[1][14]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][15]['m_id']}}' >{{$matter[1][15]['m_name']}}</a></li>
            </ol>

        </div>
    </div>

    <div class="index-news style-1">
        <h3 class="title"><span class='myCorner' data-corner='top 5px'>{{$matter[0][17]['c_name']}}</span><a href="" class="more" title="链接关键词">更多>></a></h3>
        <div class="active clear listel contour-2">
            <ol class='list-none metlist'>
                <li class='list top'><span class='time'>2012-07-17</span><a href='/matters?id={{$matter[0][17]['m_id']}}' >{{$matter[0][17]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[0][18]['m_id']}}' >{{$matter[0][18]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[0][19]['m_id']}}' >{{$matter[0][19]['m_name']}}</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='/matters?id={{$matter[1][9]['m_id']}}' >{{$matter[1][9]['m_name']}}</a></li>
            </ol>
        </div>
    </div>
    <div class="index-conts style-2">
        <h3 class='title myCorner' data-corner='top 5px'>

            <a href="" title="链接关键词" class="more">更多>></a>招聘
        </h3>
        <div class="active clear listel contour-2"><ol class='list-none metlist'>
                <li class='list top'><span class='time'>2012-07-16</span><a href='#' >PHP技术支持</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='#' >网络销售</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='#' >网页UI设计师</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='#' >Web前端开发人员</a></li>
                <li class='list '><span class='time'>2012-07-16</span><a href='#'>电子商务专员</a></li></ol></div>
    </div>
    <div class="clear p-line"></div>

    <div class="index-product style-2">
        <h3 class='title myCorner' data-corner='top 5px'>
            <span></span>
            <div class="flip"><p id="trigger"></p> <a class="prev" id="car_prev" href="javascript:void(0);"></a> <a class="next" id="car_next" href="javascript:void(0);"></a></div>
            <a href=""  class="more">更多>></a>
        </h3>
        <div class="active clear">
            <div class="profld" id="indexcar" data-listnum="5">
                <ol class='list-none metlist'>
                    @foreach($all as $k=>$v)
                        <li class='list'><a href='#'  class='img'>
                                <img src='{{$v['s_img']}}' alt='示例产品一' title='示例产品一' width='160' height='130' />
                            </a><h3 style='width:160px;'><a href='#'>示例产品一</a></h3></li>
                    @endforeach
                </ol>
            </div>

        </div>
    </div>

    <div class="clear"></div>
    <div class="index-links">
        <h3 class="title">

            <a href="" title="链接关键词" class="more">更多>></a>
        </h3>
        <div class="active clear">
            <div class="img"><ul class='list-none'>
                </ul>
            </div>
            <div class="txt"><ul class='list-none'>
                    <li><a href='#' target='_blank' title='企业网站管理系统'>MetInfo</a></li>
                    <li><a href='#' target='_blank' title='企业网站管理系统'>米拓信息</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</div>

<footer data-module="10001" data-classnow="10001">
    <div class="inner">
        <div class="foot-nav"><a href='news/news.php?lang=cn&class2=4'  title='公司动态'>公司动态</a><span>|</span><a href='message/'  title='在线留言'>在线留言</a><span>|</span><a href='feedback/'  title='在线反馈'>在线反馈</a><span>|</span><a href='link/'  title='友情链接'>友情链接</a><span>|</span><a href='member/'  title='会员中心'>会员中心</a><span>|</span><a href='search/'  title='站内搜索'>站内搜索</a><span>|</span><a href='sitemap/'  title='网站地图'>网站地图</a><span>|</span><a href='http://gc04430.d215.51kweb.com/admin/'  title='网站管理'>网站管理</a></div>
        <div class="foot-text">
            <p>我的网站 版权所有 2008-2012 湘ICP备88888</p>
            <p>电话：0731-12345678 12345678  QQ:88888888 999999  Email:metinfo@metinfo.cn</p>


        </div>
    </div>
</footer>
<script src="images/fun.inc.js" type="text/javascript"></script>
<div style="text-align:center;">
    <p>来源：More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
</div>
</body>
</html>
<?php
$file_name = './proscenium_index.html';

if(file_exists($file_name)){
    $counts = file_get_contents($file_name);
}
$content = ob_get_contents();
file_put_contents($file_name,$content);
?>