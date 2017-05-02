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
        

<!--高级查询-->
<div class="modal fade" id="exampleModal" tabindex="10000" role="dialog" aria-labelledby="exampleModalLabel">
  <form class="form-horizontal" action="<?php echo U('orders/index');?>"  method="get" onsubmit="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">高级过滤</h4>
            </div>
            <div class="modal-body">
              
                    <div class="form-group row">
                        <label class="control-label col-lg-3 col-lg-offset-1" for="username">姓名：</label>
                        <div class="col-lg-6">
                            <input type="text"  class="form-control"  maxlength="32" name="getman" id="username" value="<?php echo ($_GET['getman']); ?>"/>
                        </div>
                 </div>
             		
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >查询</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
 </form>
</div>
<div class="mainbar">
	<!-- Page 导航条 -->
	<div class="page-head">

		<div class="bread-crumb pull-left">
			 <a href="/index.php/admin/Index/dashboard"><i class="icon-home"></i> 首页</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-12">
		<div class="container-fluid">
			<div class="widget">
				<div class="widget-head">
					<div class="pull-left col-md-8">
						<form class="form-inline" action="<?php echo U('orders/index');?>" method="get">
							<div class="row">
								<div class="input-group col-lg-10">
									
									 <span class="input-group-btn">
									        
		                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
		                                              <i class="icon-filter"></i>  高级查询
		                                    </button>
		                   
											<button type="button"
												onclick="window.location='<?php echo U('orders/index');?>'"
												class="btn btn-success">
												<i class="icon-refresh"></i>&nbsp;刷新
											</button>
								      </span>

								</div>
							
							</div>
						</form>
					</div>
					<div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>


                  				<div class="widget-content">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>订单号</th>
								<th>会员号</th>
								<th>姓名</th>
								<th>电话号</th>
								<th>邮编</th>
								<!-- <th>商品图片</th> -->
								<th>地址</th>
								<th>数量</th>
								
								<th>状态</th>
								<th>订单时间</th>

								<th><i class="icon-pencil"></i> 操作</th>
							</tr>
						</thead>
						<tbody>
                            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["uid"]); ?></td>
								<td><?php echo ($vo["getman"]); ?></td>
								<td><?php echo ($vo["phonenum"]); ?></td>
								<td><?php echo ($vo["code"]); ?></td>
								<!-- <td><?php echo ($vo["image"]); ?></td> -->
								<td><?php echo ($vo["address"]); ?></td>
								<td><?php echo ($vo["total"]); ?></td>
								<?php if($vo["state"] == 1): ?><td>未付款</td>
								 <?php elseif($vo["state"] == 2): ?>
								  <td>已付款</td>
								  <?php elseif($vo["state"] == 3): ?>
								  <td>未发货</td>
								   <?php elseif($vo["state"] == 4): ?>
								  <td>已发货</td>
								   <?php elseif($vo["state"] == 5): ?>
								  <td>未收货</td>
								  <?php elseif($vo["state"] == 6): ?>
								  <td>已收货</td>
								  <?php else: ?>
								  <td>未付款</td><?php endif; ?>

								<td><?php echo ($vo["addtime"]); ?></td>
								
								<td>
										<a class="btn btn-xs btn-warning" href="/index.php/admin/Details/index/id/<?php echo ($vo['id']); ?>" 
										  title="详情">
												<i class="icon-edit">详情</i>
									    </a>
									        &nbsp 
										<a class="btn btn-xs btn-warning" href="/index.php/admin/orders/ordersedit/id/<?php echo ($vo['id']); ?>" 
										 title="修改">
												<i class="icon-edit">修改</i>
									    </a>
								       &nbsp 
										<a class="btn btn-xs btn-warning" href="/index.php/admin/orders/ordersdel/id/<?php echo ($vo['id']); ?>" 
										onclick="return confirm('你真的要删除吗?')" title="删除">
												<i class="icon-edit">删除</i>
									    </a>
									   
								</td>
							</tr><?php endforeach; endif; ?>

						</tbody>

					</table>
                       <?php echo ($show); ?>
                   
	
					<ul class="pagination pull-right" id="pagination">
					</ul>

					<div class="widget-foot">
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Scroll to top --> <span class="totop"><a href="#"><i
		class="icon-chevron-up"></i></a></span> 
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

<script src="/Public/admin/resouce/js/jqPaginator.js" type="text/javascript"></script><!-- page code-->
	<?php echo ($pageJs); ?>

<script>
    $(function() {
        $("input[type=checkbox],input[type=radio]").uniform();
    });
</script>