<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>后台管理系统--用户登录</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/home/img/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets -->
    <link href="/Public/admin/resouce/style/bootstrap.css" rel="stylesheet">
    <link rel="resouce/stylesheet" href="/Public/admin/style/font-awesome.css">
    <link href="/Public/admin/resouce/style/style.css" rel="stylesheet">


</head>

<body style="background:url(/Public/admin/img/123.jpg) no-repeat">
<div class="admin-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
                <div class="widget worange">
                    <div class="widget-head" style="text-align:center;font-size:30px;color:blue;background:#ccc">
                        <i class="icon-lock" ></i>后台管理系统--用户登录
                    </div>
                    <div class="widget-content" style="background:url(/Public/admin/img/123.jpg) no-repeat">
                            <div class="padd">
                                <?php if(!empty($msg)): ?><div class="alert  alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong><i class="icon-info-sign "></i><?php echo ($msg); ?></strong>
                                    </div><?php endif; ?>
                                <form class="form-horizontal"action="/index.php/admin/login/cklogin" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="userName">用户名:</label>
                                    <div class="col-lg-9">
                                        <input type="text" value="ss" class="form-control" name="username" id="username" placeholder="请输入用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-3" for="pwd">密码:</label>
                                    <div class="col-lg-9">
                                        <input type="password" value="1234567" class="form-control" id="password" name="password" placeholder="请输入密码">
                                    </div>
                                </div>
								  <div class="form-group">
                                    <label class="control-label col-lg-3" for="pwd1">验证码:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control"id="na" name="code" placeholder="请输入验证码">
										<div style="margin-top:8px">
										<img src="/index.php/admin/login/createCode"onclick="this.src='/index.php/admin/login/createCode/id='+Math.random()" ></div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">登录</button>
                                </div>
                                <br />
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JS -->
<script src="/Public/admin/resouce/js/jquery.js"></script>
<script src="/Public/admin/resouce/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="/Public/admin/resouce/js/jquery.validate.min.js"></script> <!-- JQuery验证 -->
<script src="/Public/admin/resouce/js/jquery.validate.messages_zh.js"></script> <!-- JQuery验证中文支持 -->
</body>
</html>
<script>
    $(function(){
        setTimeout(function(){
            $(".alert").slideUp('slow');
        },2000);
    })
    

        /**
         * 表单验证
         */
        $('.form-horizontal').validate({
            errorElement : 'span',
            errorClass : 'help-block',
            focusInvalid : true,
            highlight : function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            rules : {
                username : {
                    required : true,
                    maxlength:11
                },
                password : {
                    required : true,
                    rangelength:[6,16]
                }
            },
            success : function(label) {
                label.closest('.form-group').removeClass('has-error').addClass('has-success');
                label.remove();
            }
        })
</script>