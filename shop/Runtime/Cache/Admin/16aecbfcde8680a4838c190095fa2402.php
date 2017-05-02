<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <title>后台管理系统--后台首页</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Public/home/img/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets -->
    <link href="/Public/admin/resouce/style/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/admin/resouce/style/font-awesome.css">
    <link href="/Public/admin/resouce/style/style.css" rel="stylesheet">
    <link href="/Public/admin/resouce/style/datepicker.css" rel="stylesheet">
    <link href="/Public/admin/resouce/style/ui-dialog.css" rel="stylesheet">
    <link href="/Public/admin/resouce/uniform/css/uniform.default.css" rel="stylesheet">

    <!-- HTML5 支持 IE -->
    <!--[if lt IE 9]>
    <script src="/Public/admin/resouce/js/html5shim.js"></script>
    <![endif]-->
     
</head>
<body>
    <div class="navbar navbar-fixed-top bs-docs-nav" role="banner">

    <div class="conjtainer">
        <!-- Menu button for smallar screens -->
        <div class="navbar-header">
            <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span>菜单</span>
            </button>
            <!-- Site name for smallar screens -->
            <a href="index.html" class="navbar-brand hidden-lg">首页</a>
        </div>



        <!-- Navigation starts -->
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

            <ul class="nav navbar-nav">

                <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
                <li class="dropdown dropdown-big">
                    <a href="<?php echo U('Home/Index/index');?>" target="_blank" >
                       <!--  <img src="/Public/admin/img/milogo.png"  style="width: 22px"/> -->
                        <span style="font-weight: bold">&nbsp;后台管理系统</span></a>
                </li>
            </ul>

            <!-- Search form
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
             Links -->
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown pull-right">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-user"></i> <?php echo I('session.uname');?> <b class="caret"></b>
                    </a>

                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu">
                     <!--    <li><a href="#"><i class="icon-user"></i> 资料</a></li>
                        <li><a href="#"><i class="icon-cogs"></i> 设置</a></li> -->
                        <li><a href="<?php echo U('User/loginOut');?>"><i class="icon-off"></i> 退出</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</div>

    <div class="content">
        ﻿<!-- Sidebar -->
<div class="sidebar">
	<div class="sidebar-dropdown">
		<a href="#">导航</a>
	</div>
	
	<!--- Sidebar navigation -->
	<!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
	<ul id="nav">
		<!-- Main menu with font awesome icon -->
		<li><a href="<?php echo U('Index/dashboard');?>" class="open">
			<i class="icon-home"></i>首页</a>
		</li>
		<li class="has_sub"><a href="#">
			<i class="icon-user"></i>用户信息管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
				<li><a href="<?php echo U('user/index');?>">用户信息列表</a></li>
				
			</ul>

		</li>
			<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>商品管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('goods/index');?>">商品信息列表</a></li>
	
			</ul>
		</li>
		
			<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>分类管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('Cates/index');?>">分类信息列表</a></li>
	
			</ul>
		</li>
		<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>订单管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('Orders/index');?>">订单信息列表</a></li>
	
			</ul>
		</li>
				<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>角色权限管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('Role/index');?>">角色列表</a></li>
					<li><a href="<?php echo U('Power/index');?>">权限列表</a></li>
					<li><a href="<?php echo U('Upower/index');?>">用户权限列表</a></li>
	
			</ul>
		</li>
		<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>友情链接 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('Connection/index');?>">友情链接列表</a></li>
	
			</ul>
		</li>
				<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>轮播管理 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('Img/index');?>">轮播管理</a></li>
	
			</ul>
		</li>
				<li class="has_sub"><a href="#">
			<i class="icon-leaf"></i>网站开关 <span class="pull-right"><i class="icon-chevron-right"></i></span></a>
			<ul>
					<li><a href="<?php echo U('State/index');?>">开关管理</a></li>
	
			</ul>
		</li>
	</ul>
</div>

<!-- Sidebar ends -->
        
    <div class="mainbar">
        <div class="page-head">
            <div class="bread-crumb pull-left">
                <a href="../include/main.php"><i class="icon-home"></i> 后台</a>
                <span class="divider">/</span>
                <a href="#" class="bread-current">首页</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- 导航条 ends -->
        <div class="col-md-12">
            <!-- Widget -->
            <div class="widget">
                <!-- Widget head -->
                <div class="widget-head">
                    <div class="pull-left">服务器信息</div>
                    <div class="widget-icons pull-right">
                        <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!-- Widget content -->
                <div class="widget-content">
                    <div class="padd">
                        <div id="padd">
                            <ul class="current-status">
                                <li>
                                    <span id="status1"></span> <span class="bold">登录时间 :<?php echo date('Y-m-d H:m:s',time()) ?> </span>
                                </li>
                                <li>
                                    <span id="status1"></span> <span class="bold">服务器系统 :<?php echo ($_SERVER['SERVER_SOFTWARE']); ?> </span>
                                </li>
                                <li>
                                    <span id="status1"></span> <span class="bold">服务器软件 : <?php echo php_uname();?> </span>
                                </li>
                                <li>
                                    <span id="status2"></span> <span class="bold">PHP版本 : 5.4.16</span>
                                </li>
                                <li>
                                    <span id="status3"></span> <span class="bold">MYSQL版本 : 5.6.12</span>
                                </li>
                                <li>
                                    <span id="status4"></span> <span class="bold">主机名 :<?php echo ($_SERVER['HTTP_HOST']); ?> </span>
                                </li>
                                <li>
                                    <span id="status5"></span> <span class="bold">通信协议 : <?php echo ($_SERVER['REQUEST_SCHEME']); ?></span>
                                </li>
                            </ul>
                        </div>
                        <hr />
                        <div id="hoverdata">
                            <div class="alert alert-success" role="alert">
                                <span class="icon-info-sign" aria-hidden="true"></span>
                                <span class="sr-only">错误:</span>
                                系统提示：强烈建议您使用IE9+、新版本的chrome、safari、firfox、opera浏览器
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="totop" title="返回顶部"><a href="#"><i class="icon-chevron-up"></i></a></span>

    </div>
    <footer>
    <div class="container-fulid">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright info -->
                <p class="copy">Copyright &copy; 2015 北京个人信息技术有限公司所有，请勿用于商业运用 | 感谢<a href="http://www.bootcss.com/" target="_blank">bootstrap</a>提供技术支持 </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<!-- JS -->
<script src="/Public/admin/resouce/js/jquery.js"></script> <!-- jQuery -->
<script src="/Public/admin/resouce/js/jquery-migrate-1.2.0.js"></script> <!-- jQuery向下兼容扩展插件 -->
<script src="/Public/admin/resouce/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="/Public/admin/resouce/js/custom.js"></script> <!-- Custom codes -->
<script src="/Public/admin/resouce/js/bootstrap-datepicker.js"></script> <!-- 时间控件 -->
<script src="/Public/admin/resouce/js/jquery.validate.min.js"></script> <!-- JQuery验证 -->
<script src="/Public/admin/resouce/js/jquery.validate.messages_zh.js"></script> <!-- JQuery验证中文支持 -->
<script src="/Public/admin/resouce/js/dialog-min.js"></script> <!-- dialog插件 -->
<script src="/Public/admin/resouce/uniform/jquery.uniform.min.js"></script> <!-- 表单美化js -->
<!--js文件引用继承块(预留)-->

<script>
    $(function() {
        $("input[type=checkbox],input[type=radio]").uniform();
    });
</script>