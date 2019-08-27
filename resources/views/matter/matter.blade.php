<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/app.css" />
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
                    <span>内容</span>
                </div>
                <div class="bbD">
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;作者：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="input3" id="author"/>
                    </div>
                    <div class="bbD">
                        &nbsp;&nbsp;&nbsp;&nbsp;内容标题：<input type="text" class="input3" id="m_name"/>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;内容：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="btext">
                        <script id="container" name="content" type="text/plain">
                        </script>
                    </div>
                    <div class="bbD">
                        所属导航：&nbsp;&nbsp;&nbsp;&nbsp;<select class="input3" id="c_id">
                            @foreach($data as $k=>$v)
                                <option value="{{$v['c_id']}}">{{$v['c_name']}}</option>
                            @endforeach
                        </select>
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


        </div>

        <!-- 会员注册页面样式end -->
    </div>
</div>
</body>
</html>
<script src="/js/core/jquery.3.2.1.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
    ue.ready(function () {
    });
</script>
<script>
    $(function () {
        $("#btn").click(function () {
            var author = $("#author").val();
            var m_name = $("#m_name").val();
            var gcontent = ue.getContent();
            var c_id = $("#c_id").val();
            var whether = $("input[type='radio']:checked").val();

            $.ajax({
                url:"/MatterAdd",
                data:{author:author,m_name:m_name,gcontent:gcontent,c_id:c_id,whether:whether},
                dataType:"json",
                type:"post",
                success:function (msg) {
                    if(msg==1){
                        alert('作者名称不能为空');
                    }else if(msg==2){
                        alert('内容标题不能为空');
                    }else if(msg==3){
                        alert('内容不能为空');
                    }else if(msg==4){
                        alert('添加失败');
                    }else if(msg==5){
                        alert('添加成功');
                        location.href='/MatterList';
                    }else if(msg==6){
                        alert('添加失败');
                    }
                }
            })
        })

    })
</script>
