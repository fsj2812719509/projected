
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


    <div class="index-news style-1" style="margin:0 auto;text-align: center">
        <h3 class="title"><span class='myCorner' data-corner='top 5px'>{{$matter['m_name']}}</span><a href="" class="more" title="链接关键词">更多>></a></h3>
        <div class="active clear listel contour-2">
            {!! $matter['m_content'] !!}
        </div>
    </div>