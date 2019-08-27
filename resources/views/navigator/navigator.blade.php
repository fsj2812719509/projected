<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加管理员-有点</title>
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
        <!-- 会员注册页面样式 -->
        <div class="banneradd bor">
            <div class="baTopNo">
                <span>导航栏修改</span>
            </div>
            <div class="baBody">
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;导航名：<input type="text" class="input3" id="n_name"/>
                </div>
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;导航路径：<input type="text" class="input3" id="n_url"/>
                </div>
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;权重：<input type="text" class="input3" placeholder="必须为1-100的数字" name="weight" id="weight"/>
                </div>
                <div class="bbD">
                    是否显示：  <label><input type="radio" checked="checked" value="1" name="whether"/>是</label>
                                <label><input type="radio" value="0" name="whether"/>否</label>
                </div>
                <div class="bbD">
                    <p class="bbDP">
                        <button class="btn_ok btn_yes" href="#" id="btn">提交</button>
                        <a class="btn_ok btn_no" href="#">取消</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- 会员注册页面样式end -->
    </div>
</div>
</body>
</html>
<script src="/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $("#btn").click(function () {
            //获取值
            var n_name = $("#n_name").val();
            var weight = $("#weight").val();
            var n_url = $("#n_url").val();
            //通过标签获取  getElementsByTagName
            var whether = $("input[type='radio']:checked").val();

            $.ajax({
                url:"/NavAdd",
                data:{n_name:n_name,weight:weight,is_show:whether,n_url:n_url},
                dataType:"json",
                type:"post",
                success:function (msg) {
                    if(msg==1){
                        alert('导航名不能为空');
                    }else if(msg==2){
                        alert('请设置权重');
                    }else if(msg==3){
                        alert('请设置是否展示');
                    }else if(msg==4){
                        alert('已有此导航栏');
                    }else if(msg==5){
                        alert('添加成功');
                        location.href='/NavSelList';
                    }else if(msg==6){
                        alert('添加失败');
                    }else if(msg==7){
                        alert('链接不能为空');
                    }
                }
            })
        })
    })
</script>