<?php $this->beginPage() ?>
<?php $url = sprintf('%s%s/aceadmin/',Yii::$app->request->hostInfo,Yii::$app->request->baseUrl); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>登录页面－极客导航</title>
    <meta name="description" content="极客导航登录页面" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?=$url;?>css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$url;?>font-awesome/4.2.0/css/font-awesome.min.css" />


    <!-- ace styles -->
    <link rel="stylesheet" href="<?=$url;?>css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?=$url;?>css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?=$url;?>css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?=$url;?>css/ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="<?=$url;?>js/html5shiv.min.js"></script>
    <script src="<?=$url;?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout light-login">
<?php $this->beginBody() ?>
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">极客导航</span>
                            <span class="grey" id="id-text2">后台</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; it2048</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        请输入你的账号信息
                                    </h4>

                                    <div class="space-6"></div>
                                    <form >
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" placeholder="账号" />
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="密码" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" name="rememberMe" class="ace" />
                                                    <span class="lbl"> 记住我 </span>
                                                </label>

                                                <button type="button" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110" id="login">登录</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->

                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                    <div class="navbar-fixed-top align-right">
                        <br />
                        &nbsp;
                        <a id="btn-login-dark" href="#">极客导航</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-blur" href="#">极客密码</a>
                        &nbsp;
                        <span class="blue">/</span>
                        &nbsp;
                        <a id="btn-login-light" href="#">极客新闻</a>
                        &nbsp; &nbsp; &nbsp;
                    </div>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?=$url;?>js/jquery.2.1.1.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?=$url;?>js/jquery.1.11.1.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?=$url;?>js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?=$url;?>js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?=$url;?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $("#login").click(function(){
            var _usname = $("input[name='username']").val();
            var _pass = $("input[name='password']").val();
            var _rem = $("input[name='rememberMe']").is(":checked")?1:0;
            $.ajax({
                url: '<?= Yii::$app->getUrlManager()->createUrl('login/login') ?>',
                type: 'POST',
                data: {'username':_usname,password:_pass,rememberMe:_rem},
                dataType: "json",
                success: function(data) {
                    console.log(data);
                }
            });
        });
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
