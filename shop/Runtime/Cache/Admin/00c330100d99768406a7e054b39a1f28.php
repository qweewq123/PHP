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
             <a href="/index.php/admin/Index/dashboard"><i class="icon-home"></i> 首页</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="widget wred">
                <div class="widget-head">
                    <div class="pull-left">用户信息新增</div>
                        <div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="icon-chevron-up"></i></a>
                        </div>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                    <div class="padd">
                        <div class="form profile">
       <script type="text/javascript" charset="utf-8" src="/Public/admin/xxoo/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/admin/xxoo/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/admin/xxoo/lang/zh-cn/zh-cn.js"></script>
    
<form  action="<?php echo U('goods/insert');?>"  method="post" enctype="multipart/form-data">

        <table  width="100%">
            
           
            <tr>
                <td>商品名</td>
                <td><input class='txt' type="text" name='proname' value=''></td>
            </tr>
            <tr>
                <td>商品分类</td>
                <td>
                    <?php echo ($catsSelect); ?>
                </td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td><input  class='txt' type="text" name='price' value=''></td>
            </tr>

                <tr>
                <td>商品颜色</td>
                <td><select name="color" id="">
                
                    <option value="1" selected>白色</option>
                    <option value="2">蓝色</option>
                    <option value="3">金色</option>
                </select></td>
            </tr>
                            <tr>
                <td>商品颜色</td>
                <td><select name="color1" id="">
                
                    <option value="1" >白色</option>
                    <option value="2" selected>蓝色</option>
                    <option value="3">金色</option>
                </select></td>
            </tr>
                            <tr>
                <td>商品颜色</td>
                <td><select name="color2" id="">
                
                    <option value="1" >白色</option>
                    <option value="2">蓝色</option>
                    <option value="3" selected>金色</option>
                </select></td>
            </tr>
              <tr>
                <td>商品库存</td>
                <td><input class='txt' type="text" name='store' value=''></td>
            </tr>
            <tr>
                <td>商品版本</td>
                <td><select name="version" id="">
                
                    <option value="1" selected>网通版</option>
                    <option value="2">电信版</option>
                    <option value="3">公开版</option>
                </select></td>
            </tr>
              <tr>
                <td>商品版本</td>
                <td><select name="version1" id="">
                
                    <option value="1" >网通版</option>
                    <option value="2" selected>电信版</option>
                    <option value="3">公开版</option>
                </select></td>
            </tr>
                        <tr>
                <td>商品版本</td>
                <td><select name="version2" id="">
                
                    <option value="1" >网通版</option>
                    <option value="2">电信版</option>
                    <option value="3" selected>公开版</option>
                </select></td>
            </tr>
            <tr>
                <td>商品内存</td>
                <td><select name="rom" id="">
                
                    <option value="1" selected>16GB</option>
                    <option value="2">32GB</option>
                   
                </select></td>
            </tr> 
               <tr>
                <td>商品内存</td>
                <td><select name="rom1" id="">
                
                    <option value="1" >16GB</option>
                    <option value="2" selected>32GB</option>
                   
                </select></td>
            </tr>          
            <tr>
                <td>商品描述</td>
                  <!--这里就是我们放编辑器的地方-->    
                   <td><textarea name="des" id="" cols="30" rows="5"></textarea></td>
            </tr>
          
            <tr>
                <td>商品状态</td>
                <td><select name="state" id="">
                
                    <option value="1" selected>新品</option>
                    <option value="2">热销</option>
                    <option value="3">促销</option>
                </select></td>

            </tr>
               <tr>
                <td>商品图片</td>
                <td><input type="file" name='image1' value=''></td>
            </tr>
                 <tr>
                <td>商品图片</td>
                <td><input type="file" name='image2' value=''></td>
            </tr>
            
               <tr>
                <td>商品图片</td>
                <td><input type="file" name='image3' value=''></td>
            </tr>
            <div style="float:right">
                <tr>
                <td>商品详情</td>
                  <!--这里就是我们放编辑器的地方-->    
                    <script name="xq" id="editor" type="text/plain" style="width:500px;height:200px;"></script>
            </tr>
            </div>
            <tr>
                <td></td>
                <td align=center><input type="submit" value="提交"></td>
            </tr>

        </table>
    </form>    
     <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


</script>
                            
                        </div>
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

<script>
    $(function() {
        $("input[type=checkbox],input[type=radio]").uniform();
    });
</script>