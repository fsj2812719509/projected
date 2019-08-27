<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>约见管理-有点</title>
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/app.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
<div id="pageAll">
    <div class="pageTop">
        <div class="page">
            <img src="img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
                        href="#">公共管理</a>&nbsp;-</span>&nbsp;意见管理
        </div>
    </div>

    <div class="page">
        <!-- banner页面样式 -->

            <!-- banner 表格 显示 -->
            <div class="conShow">
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="66px" class="tdColor tdC">序号</td>
                        <td width="355px" class="tdColor">图片</td>
                        <td width="260px" class="tdColor">权重</td>
                        <td width="275px" class="tdColor">是否展示</td>
                        <td width="275px" class="tdColor">操作</td>
                    </tr>
                    @foreach($data as $k=>$v)
                    <tr>
                        <td>{{$v['s_id']}}</td>
                        <td>
                            <div class="onsImg onsInmA">
                                <img src="{{$v['s_img']}}" >
                            </div>
                        </td>
                        <td>{{$v['weight']}}</td>
                        <td>{{$v['is_show']}}</td>
                        <td>
                            <a href="/SliUpdList?id={{$v['s_id']}}">
                                <img class="operation" src="img/update.png">
                            </a>
                            <a href="/SliDel?id={{$v['s_id']}}">
                                <img class="operation delban" src="img/delete.png">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="paging">{{$data->links()}}</div>
            </div>
            <!-- banner 表格 显示 end-->
        </div>
        <!-- banner页面样式end -->
    </div>

</div>


<!-- 删除弹出框 -->
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