<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                        href="#">公共管理</a>&nbsp;-</span>&nbsp;会员注册
        </div>
    </div>
    <div class="page ">
        <!-- 会员注册页面样式 -->

        <div class="baBody">
            <div class="banneradd bor">
                <div class="baTopNo">
                    <span>栏目添加</span>
                </div>
                <div class="baBody">
                    <input type="hidden" id="c_id" value="{{$data['c_id']}}">
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;栏目：<input type="text" class="input3" id="c_name" value="{{$data['c_name']}}"/>
                    </div>
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;权重：<input type="text" class="input3" placeholder="必须为1-100的数字" id="c_weight" value="{{$data['c_weight']}}"/>
                    </div>
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;链接：<input type="text" class="input3" placeholder="以http开头" id="link" value="{{$data['link']}}"/>
                    </div>

                    <div class="bbD">
                        所属导航：<select class="input3" id="n_id">
                            @foreach($all as $k=>$v)
                                <option value="{{$v['n_id']}}">{{$v['n_name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="bbD">
                        是否显示：  <label><input type="radio" checked="checked" value="1" name="whether"/>是</label>
                        <label><input type="radio" value="0" name="whether"/>否</label>
                    </div>
                    <div class="bbD">
                        <p class="bbDP">
                            <button class="btn_ok btn_yes" href="#" id="btn">修改</button>
                            <a class="btn_ok btn_no" href="#">取消</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 会员注册页面样式end -->
    </div>
</div>
</body>
</html>
<script src="/js/core/jquery.3.2.1.min.js"></script>
<script>
    $(function () {
        $("#btn").click(function () {
            var c_name = $("#c_name").val();
            var c_weight = $("#c_weight").val();
            var link = $("#link").val();
            var n_id = $("#n_id").val();
            var whether = $("input[type='radio']:checked").val();
            var c_id = $("#c_id").val();

            $.ajax({
                url:"/CloumnUpdate",
                data:{c_name:c_name,c_weight:c_weight,link:link,n_id:n_id,whether:whether,c_id:c_id},
                dataType:"json",
                type:"post",
                success:function (msg) {
                    if(msg=='4'){
                        alert('栏目名不能为空');
                    }else if(msg=='5'){
                        alert('权重不能为空');
                    }else if(msg=='6'){
                        alert('网址不能为空');
                    }else if(msg=='7'){
                        alert('权重不能为空');
                    }else if(msg==1){
                        alert('修改成功');
                        location.href ='/Cloumn';
                    }else if(msg==2){
                        alert('请进行修改');
                    }else if(msg==3){
                        alert('请修改您的导航栏');
                    }
                }
            })

        })
    })
</script>