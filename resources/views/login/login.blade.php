<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Now UI Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/css/demo.css" rel="stylesheet" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="" />
    <!--  Social tags      -->
    <meta name="keywords" content="">
    <meta name="description" content="">



</head>

<body class="login-page sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-header">Dropdown header</a>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">One more separated link</a>
            </div>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="#" rel="tooltip" data-placement="bottom">
                Now Ui Kit
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" data-nav-image="assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Back to Kit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#/issues">Have an issue?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#CreativeTim" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#CreativeTim" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
                        <i class="fa fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header" filter-color="orange">
    <div class="page-header-image" style="background-image:url('/img/login.jpg')"></div>
    <div class="container">
        <div class="col-md-4 content-center">
            <div class="card card-login card-plain">
                <form class="form" method="" action="">
                    <div class="header header-primary text-center">
                        <div class="logo-container">
                            <img src="/img/now-logo.png" alt="">
                        </div>
                    </div>
                    <a href="/register">没有用户，注册</a>&nbsp;&nbsp;
                    <div class="content">
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            <input type="text" class="form-control" placeholder="用户名" id="username">
                        </div>
                        <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                            <input type="password" placeholder="密码" class="form-control" id="password"/>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <a href="#" class="btn btn-primary btn-round btn-lg btn-block" id="btn">登录</a>
                        <a href="/forget">切换登录方式</a> &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<a href="/ForgetList">忘记密码</a>

                    </div>


                    <div class="pull-left">
                        <h6>
                            <a href="#pablo" class="link">Create Account</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="#pablo" class="link">忘记密码?</a>
                        </h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            MIT License
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, Designed by Invision. Coded by Creative Tim.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
            </div>
        </div>
    </footer>
</div>
</body>
<!--   Core JS Files   -->
<script src="/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="/js/core/popper.min.js" type="text/javascript"></script>
<script src="/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Share Library etc -->
<script src="/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

</html>
<script>
    $(function () {
        $("#btn").click(function () {
            var username = $("#username").val();
            var password = $("#password").val();

            $.ajax({
                url:"loginDo",
                data:{username:username,password:password},
                dataType:"json",
                type:"post",
                success:function (msg) {
                   if(msg==1){
                       alert('登录成功');
                       location.href="/index";
                   }else if(msg==2){
                       alert('用户名或密码输入错误');
                   }else if(msg==3){
                       alert('用户名或密码输入错误');
                   }
                }

            })
        })
    })
</script>