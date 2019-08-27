<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>头部-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                        href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
        </div>
    </div>
    <div class="page ">
        <!-- 上传广告页面样式 -->
        <form class="form-horizontal" method="POST" action="/SliUpd" enctype="multipart/form-data">
            <input type="hidden" value="{{$all['s_id']}}" name="s_id">
            <div class="banneradd bor">
                <div class="baBody">
                    <div class="bbD">
                        上传图片：
                        <div class="bbDd">
                            <input type="file" name="file">
                            <img src="{{$all['s_img']}}" width="100" height="100" class="a">
                        </div>
                    </div>
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;权重：<input type="text" class="input3" placeholder="必须为1-100的数字" name="weight" value="{{$all['weight']}}"/>
                    </div>
                    <div class="bbD">
                        是否显示：  <label><input type="radio" checked="checked" value="1" name="whether"/>是</label>
                        <label><input type="radio" value="0" name="whether"/>否</label>
                    </div>
                    <div class="bbD">
                        <p class="bbDP">
                            <button class="btn_ok btn_yes" href="#">提交</button>
                            <a class="btn_ok btn_no" href="#">取消</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
        <!-- 上传广告页面样式end -->
    </div>
</div>
</body>
</html>
<script>
    //上传图片
    function preview(){
        "use strict"
//获取img标签
        var a=document.querySelector(".a");
//获取文件内容 .files是获取所找到的标签里的文件里内容下标为0的是对象内容 下标为1的是长度
        var file=document.querySelector("input[name='file']").files[0];
//实例化FileReader()
        var reader = new FileReader();
//这里接收到值后会再把值赋给img标签中
        reader.onload=function(){
//赋过后reader.result就会把读取到的图片的结果显示在img标签中
            a.src=reader.result;
        }
//如果有文件上传的话readAsDataURL会读取文件内容，然后用bas64生成一个URL路径传给reader
        if(file){
//生成之后会把文件赋给reader
            reader.readAsDataURL(file);
        }
    }
</script>