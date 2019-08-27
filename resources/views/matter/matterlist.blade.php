<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理员管理-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;-</span>&nbsp;管理员管理
        </div>
    </div>

    <div class="page">
        <!-- user页面样式 -->
        <div class="connoisseur">

            <!-- user 表格 显示 -->
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="435px" class="tdColor">标题</td>
                        <td width="435px" class="tdColor">作者</td>
                        <td width="400px" class="tdColor">内容</td>
                        <td width="630px" class="tdColor">是否展示</td>
                        <td width="630px" class="tdColor">所属栏目</td>
                        <td width="630px" class="tdColor">添加时间</td>
                        <td width="130px" class="tdColor">操作</td>
                    </tr>
                    @foreach($all as $k=>$v)
                        <tr height="40px">
                            <td>{{$v['m_id']}}</td>
                            <td>{{$v['m_name']}}</td>
                            <td>{{$v['author']}}</td>
                            <td>{{$v['m_content']}}</td>
                            <td>{{$v['is_show']}}</td>
                            <td>{{$v['c_name']}}</td>
                            <td>{{$v['m_time']}}</td>
                            <td>
                                <a href="/MatterUpdateList?id={{$v['m_id']}}" >
                                    <img class="operation" src="img/update.png">
                                </a>
                                <a href="/MatterDel?id={{$v['m_id']}}">
                                    <img class="operation delban" src="img/delete.png">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="paging">{{$all->links()}}</div>
            </div>
            <!-- user 表格 显示 end-->
        </div>
        <!-- user页面样式end -->
    </div>

</div>


<!-- 删除弹出框 -->
{{--<div class="banDel">
    <div class="delete">
        <div class="close">
            <a><img src="img/shanchu.png" /></a>
        </div>
        <p class="delP1">你确定要删除此条记录吗？</p>
        <p class="delP2">
            <a href="#" class="ok yes">确定</a><a class="ok no">取消</a>
        </p>
    </div>
</div>--}}
<!-- 删除弹出框  end-->
</body>

<script type="text/javascript">
    // 广告弹出框
    $(".delban").click(function(){
        $(".banDel").show();
    });
    $(".close").click(function(){
        $(".banDel").hide();
    });
    $(".no").click(function(){
        $(".banDel").hide();
    });
    // 广告弹出框 end
</script>
</html>