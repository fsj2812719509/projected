<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>添加用户-有点</title>
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
                <span>管理员添加</span>
            </div>
            <div class="baBody">
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;用户名：<input type="text" class="input3" id="a_name"/>
                </div>
                <div class="bbD">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：<input type="password" class="input3" id="a_password" />
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
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="js/jquery-1.7.2.min.js"></script>
<script>
    $(function () {
        $("#btn").click(function () {
            var a_name = $("#a_name").val();
            var a_password = $("#a_name").val();

            $.ajax({
                url:'/AdminAdd',
                data:{a_name:a_name,a_password:a_password},
                dataType:"json",
                type:"post",
                success:function (msg) {
                   if(msg==1){
                       alert('用户名不能为空');
                   }else if(msg==2){
                       alert('密码不能为空');
                   }else if(msg==3){
                       alert('添加成功');
                       location.href='/AdminList';
                   }else if(msg==4){
                       alert('添加失败');
                   }else if(msg==5){
                       alert('已有此管理员，请更换用户名');
                   }
                }

            })
        })
    })
</script>
