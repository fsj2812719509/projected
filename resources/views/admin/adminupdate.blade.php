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
                <span>管理员修改</span>
            </div>
            <div class="baBody">
                <div class="bbD">
                    <input type="hidden" value="{{$all['a_id']}}" id="a_id">
                    &nbsp;&nbsp;&nbsp;昵称：<input type="text" class="input3" value="{{$all['a_name']}}" id="a_name"/>
                </div>
                <div class="bbD">
                    <p class="bbDP">
                        <button class="btn_ok btn_yes" href="#" id="btn">修改</button>
                        <a class="btn_ok btn_no" href="/AdminList">取消</a>
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
            var a_id = $("#a_id").val();
            $.ajax({
                url:"/AdminUpdate",
                data:{a_name:a_name,a_id:a_id},
                dataType:"json",
                type:"post",
                success:function (msg) {
                    if(msg==1){
                        alert('修改信息与原信息一致，无需修改');
                    }else if(msg==2){
                        alert('修改成功');
                        location.href="/AdminList";
                    }else if(msg==3){
                        alert('修改失败');
                    }else if(msg==4){
                        alert('不能为空');
                    }
                }
            })
        })
    })
</script>