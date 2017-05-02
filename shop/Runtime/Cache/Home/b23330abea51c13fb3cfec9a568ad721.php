<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0033)http://store.meizu.com/orders/add -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>确认订单-SS商城</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="/Public/home/Acount/js/jquery-1.7.2.js"></script>
	<link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon">
   
	<meta name="keywords" content="SS商城">
	<meta name="description" content="SS商城">

	<!-- common css -->
	
    <link rel="stylesheet" href="/Public/home/Acount/css/site-base.css">


	<link rel="stylesheet" href="/Public/home/Acount/css/order.css">
	<link type="tex/Public/home/Acount/css" href="/Public/home/Acount/css/dialog.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="/Public/home/Acount/css/citys.css">
	<link rel="stylesheet" href="/Public/home/Acount/css/order_add_new.css">

</head>
<body>
<!-- common header -->

<div class="site-topbar clearfix">
  <div class="mzcontainer">
    <div class="topbar-nav">
     
      <a href="/index.php/home/Index/index">SS商城</a>
     
      <a href="http://bbs.meizu.cn/" target="_blank">社区</a>
    </div>
    <div class="topbar-right">
      <ul class="topbar-info">
        <li class="topbar-info-msg" id="MzTopbarMsg">
          <a class="topbar-link" href="http://store.meizu.com/member/message/index" target="_blank">消息</a>
          <span class="msg-tag" id="MzMsgTag"></span>
        </li>
        <li class="topbar-order-msg"  style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="/index.php/home/Collection/index">我的收藏</a>
          <span class="msg-tag" id="MzOrderMsgTag"></span>
        </li>
        <li class="topbar-order-msg"  style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="/index.php/home/Center/index">我的订单</a>
          <span class="msg-tag" id="MzOrderMsgTag"></span>
        </li>
        <?php if($_SESSION['login'] == 2): ?><li class="mz_login" style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="#">欢迎&nbsp;<?php echo ($_SESSION['username']); ?></a>
        </li>
         <li class="mz_login" style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="/index.php/home/Login/goout">退出</a>
        </li>
        <?php else: ?>
        <li class="mz_login" style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="/index.php/home/Login">登陆</a>
        </li><?php endif; ?>
        <li class="mz_login" style="margin-top:8px;">
          <a style="color:black;font-size:10px" href="/index.php/home/Login">注册</a>
        </li>
        <li class="topbar-info-member" style="display:none;">
          <a class="topbar-link" href="http://store.meizu.com/member/index" target="_blank">
            <span id="MzUserName" class="site-member-name">MEIZU</span>的商城
          </a>

        </li>
      </ul>
    </div>
  </div>
</div>
      
<div class="site-header">
  <div class="mzcontainer">
    <div class="header-logo">
      <a href="/index.php/home/Index/index">
      <img src="/Public/home/index/img/logo-header.png" srcset="http://store.res.meizu.com/resources/php/store/images/logo-header@2x.png 2x" width="115" height="20" alt="魅族科技（中国）有限公司">
      </a>
    </div>
    <div class="header-nav">
      <ul class="nav-list">

             <?php if(is_array($toubu)): foreach($toubu as $key=>$vo21): echo ($vo21); endforeach; endif; ?>
             </ul>
    </div>

    <div class="header-cart" >
      <a href="/index.php/home/Cart/index">
        <div class="header-cart-wrap">
          <span class="header-cart-icon"></span>
            购物车
          <span id="MzHeaderCartNum" class="header-cart-num" data-extcls="existence">0</span>
          <div class="header-cart-spacer"></div>
        </div>
      </a>
      <div class="header-cart-detail"><div class="header-cart-empty" data-load="正在加载购物车信息 ..." data-empty="购物车还没有商品，快购买吧！">购物车还没有商品，快购买吧！</div>
</div>
    </div>
  </div>
  <div id="MzNavMenu" class="header-nav-menu" style="display: none;background:#ddd;width:800px;position:relation;left:370px;opacity:0.7;color:cyan" >
    <div class="mzcontainer"><ul class="menu-product-list">
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/product/huntkey.html?rc=sd" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1458122860@126x126.png" data-src="/Public/home/index/img/1458122860@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">小智插线板</p>
                      <p class="menu-product-price">
                        <span class="originPrice"></span>
                        ¥
                        <span>79</span>
                                              </p>
                    </a>
                  </li>
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/item/meizu_luyouqi.html?rc=sd" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1450937728@126x126.png" data-src="/Public/home/index/img/1450937728@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">魅族智能路由器</p>
                      <p class="menu-product-price">
                        <span class="originPrice"></span>
                        ¥
                        <span>99</span>
                                              </p>
                    </a>
                  </li>
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/product/ryfit_young.html" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1458526079@126x126.png" data-src="/Public/home/index/img/1458526079@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">RyFit 智能体质分析仪 青春版</p>
                      <p class="menu-product-price">
                        <span class="originPrice"></span>
                        ¥
                        <span>99</span>
                                              </p>
                    </a>
                  </li>
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/product/lefan_yundong.html" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1451011733@126x126.png" data-src="/Public/home/index/img/1451011733@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">乐范魔力贴 运动版</p>
                      <p class="menu-product-price">
                        <span class="originPrice">¥119</span>
                        ¥
                        <span>109</span>
                                              </p>
                    </a>
                  </li>
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/product/mi_xingche_gps.html" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1451456316@126x126.png" data-src="/Public/home/index/img/1451456316@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">米家行车记录仪</p>
                      <p class="menu-product-price">
                        <span class="originPrice"></span>
                        ¥
                        <span>559</span>
                                              </p>
                    </a>
                  </li>
                                    <li class="menu-product-item">
                    <a href="http://store.meizu.com/product/abading_KT04.html?rc=sd" target="_blank">
                      <div class="menu-product-figure">
                        <img src="/Public/home/index/img/1455861326@126x126.png" data-src="/Public/home/index/img/1455861326@126x126.png" width="100" height="150">
                      </div>
                      <p class="menu-product-name">阿巴町智能通话手表 小A</p>
                      <p class="menu-product-price">
                        <span class="originPrice"></span>
                        ¥
                        <span>898</span>
                                              </p>
                    </a>
                  </li>
                                    <!-- more -->
                                  </ul></div>
  </div>
</div>


<!--MZstore-->

<div id="storeContainer">
	<div class="mz_content clearfix">
		<div class="order_nav">
			<div class="order_icons n1 active" style="background:#ccc;color:#000">1 我的购物车</div>
			<div class="order_icons n2 active" style="background:#ccc;color:#000">2 填写核对订单信息</div>
			<div class="order_icons n3" style="background:#ccc;color:#000">3 成功提交订单</div>
		</div>
		
    <!-- 默认收货人信息 -->
     <div class="order_title" id="id" style="width:150px; cursor:pointer" >
       <b>默认收货人信息</b>

     
    </div>
     <div class="order_title" id="did" style="cursor:pointer;margin-top:20px;width:150px;">
      <b>添加收货人信息</b>

      
    </div>
 <div id="old" style="display:none">
    <div class="line"></div>
    <form method="post" action="/index.php/home/Sts/insert" id="realFrom">
    
    <div class="user_msg"  >
   
      
      <div class="user_address">
        
        <div class="add_form" id="addFrom" style="margin-top:-20px">
          <div class="tr">
            <div class="th">收件人</div>
            <div class="td"><input type="text" value="<?php echo ($vip["getman"]); ?>" class="order_input" name="getman" maxlength="12" placeholder="长度不超过12个字"><i class="must" data-errname="consName"></i></div>
          </div>
          <div class="tr">
            <div class="th">手机</div>
            <div class="td"><input type="text" value="<?php echo ($vip["phonenum"]); ?>" class="order_input" name="phonenum" maxlength="11" placeholder="请输入11位手机号"><i class="must" data-errname="consPhone"></i></div>
          </div>
           <div class="tr">
            <div class="th">邮编</div>
            <div class="td"><input type="text" value="<?php echo ($vip["code"]); ?>" class="order_input" name="code" maxlength="6" placeholder="请输入邮编"><i class="must" data-errname="consPhone"></i></div>
          </div>
      <div class="xg1" style="font-size:16;color:red;"><div class="add_address" id="addAddress"><span class="err_msg" data-errname="form_validation"></span></div></div>
      
      
      <div class="dizhi" style="margin:15px 0px;display:block;">
        <select id="province1" name="province">
          <option  value=""><?php echo ($vip["province"]); ?></option>
        </select>
        <select id="city1" name="city">
          <option  value=""><?php echo ($vip["city"]); ?></option>
        </select>
        <select id="county1" name="county">
          <option  value=""><?php echo ($vip["county"]); ?></option>
        </select>
        <select id="xiang1" name= "xiang">
          <option  value=""><?php echo ($vip["xiang"]); ?></option>
        </select><br><br>
        
      
        请填写详细地址：<br><br>
        <textarea name="address" id="address" class="adr" value="" style="width:400px;height:50px;" placeholder="请填写详细的地址"><?php echo ($vip["address"]); ?></textarea></div>
        
        </div>
      </div>
    </div>

    <div class="order_title">
      确认订单信息
    </div>

    <table cellpadding="0" cellspacing="0" class="product_table">
      <thead>
        <tr>
          <th width="150">商品</th>
          <th width="500" class="supplier">
            <div class="title">
            <div class="title">
              供应商：魅族                <span class="supplier_tips">
                  <span class="order_icons triangle"></span>
                  <span class="content">由“魅族”负责发货，并提供售后服务</span>
                </span>
            </div>
            </div>
          </th>
          <th width="200">单价</th>
          <th width="200">数量</th>
          <th>小计</th>
        </tr>
      </thead>
        
      <tbody>
      <?php if(is_array($sess)): foreach($sess as $key=>$sess1): ?><tr>
                <td class="img"><img src="/Public/Uploads/<?php echo ($sess1["image1"]); ?>"></td>
                <td class="detial">
                    <p class="title">
                        <a target="_blank" href="http://store.meizu.com/item/meizu_mx5.html">
                            <!--如果是套餐则显示套餐-->
                            <?php echo ($sess1["proname"]); ?>                      </a>
                    </p>
                </td>
                <td class="price">
                  <input style="border:0px" type="text" name="price" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¥&nbsp;<?php echo ($sess1["price1"]); ?>">                                  </td>
                <td><?php echo ($sess1["num"]); ?></td>
                <td class="price">¥&nbsp;<?php echo ($sess1["price"]); ?></td>
            </tr><?php endforeach; endif; ?>
                  </tbody>
                 
    </table>

    <div class="order_total">
      <div class="tr">
        <div class="th">总金额</div>
        <div class="td"><input style="border:0px" type="text" name="price" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¥&nbsp;<?php echo ($sum); ?>.00"></div>
      </div>
    
  
      <div class="tr">
        <div class="th">运费</div>
        <div class="td">&nbsp;¥&nbsp;0.00</div>
      </div>
      <div class="line"></div>
      <div class="tr">
        <div class="th">应付：</div>
        <div class="td total_price">¥&nbsp;<span id="totalPrice"><?php echo ($sum); ?></span></div>
      </div>
  <input type="hidden"  name="sum" value="<?php echo ($sum); ?>"  >
     <input type="hidden"  name="wang" value="zong"  >
      <div class="tr">
        <div class="order_btn primary" id="submitFrom"><input type="submit" style="background:#00C3F5;border:0px;font-size:25px;color:#fff;" value="提交订单"></div>
      </div>
    </div>

</form>
</div>
<!-- 添加收货人信息 -->
 
<div id="new" style="display:block">
		<div class="line"></div>
    <form method="post" action="/index.php/home/Sts/insert" id="realFrom">
    
		<div class="user_msg"  >
   
			
			<div class="user_address">
				
				<div class="add_form" id="addFrom" style="margin-top:-20px">
					<div class="tr">
						<div class="th">收件人</div>
						<div class="td"><input type="text" class="order_input" name="getman" maxlength="12" placeholder="长度不超过12个字"><i class="must" data-errname="consName"></i></div>
					</div>
					<div class="tr">
						<div class="th">手机</div>
						<div class="td"><input type="text" class="order_input" name="phonenum" maxlength="11" placeholder="请输入11位手机号"><i class="must" data-errname="consPhone"></i></div>
					</div>
					 <div class="tr">
            <div class="th">邮编</div>
            <div class="td"><input type="text" class="order_input" name="code" maxlength="6" placeholder="请输入邮编"><i class="must" data-errname="consPhone"></i></div>
          </div>
      <div class="xg" style="font-size:16;color:red;"><div class="add_address" id="addAddress"><div class="add_icon">+</div><span class="str">添加地址</span><span class="err_msg" data-errname="form_validation"></span></div></div>
      
      
      <div class="dizhi" style="margin:15px 0px;display:none;">
        <select id="province" name="province">
          <option  value="">--请选择省--</option>
        </select>
        <select id="city" name="city">
          <option  value="">--请选择市--</option>
        </select>
        <select id="county" name="county">
          <option  value="">--请选择县--</option>
        </select>
        <select id="xiang" name= "xiang">
          <option  value="">--请选择乡镇--</option>
        </select><br><br>
        
      
        请填写详细地址：<br><br>
        <textarea name="address" id="address" class="adr" value="" style="width:400px;height:50px;" placeholder="请填写详细的地址"></textarea></div>
        
				</div>
			</div>
		</div>

		<div class="order_title">
			确认订单信息
		</div>

		<table cellpadding="0" cellspacing="0" class="product_table">
			<thead>
				<tr>
					<th width="150">商品</th>
					<th width="500" class="supplier">
						<div class="title">
						<div class="title">
							供应商：魅族								<span class="supplier_tips">
									<span class="order_icons triangle"></span>
									<span class="content">由“魅族”负责发货，并提供售后服务</span>
								</span>
						</div>
						</div>
					</th>
					<th width="200">单价</th>
					<th width="200">数量</th>
					<th>小计</th>
				</tr>
			</thead>
        
			<tbody>
      <?php if(is_array($sess)): foreach($sess as $key=>$sess1): ?><tr>
                <td class="img"><img src="/Public/Uploads/<?php echo ($sess1["image1"]); ?>"></td>
                <td class="detial">
                    <p class="title">
                        <a target="_blank" href="http://store.meizu.com/item/meizu_mx5.html">
                            <!--如果是套餐则显示套餐-->
                            <?php echo ($sess1["proname"]); ?>                      </a>
                    </p>
                </td>
                <td class="price">
                  <input style="border:0px" type="text" name="price" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¥&nbsp;<?php echo ($sess1["price1"]); ?>">                                  </td>
                <td><?php echo ($sess1["num"]); ?></td>
                <td class="price">¥&nbsp;<?php echo ($sess1["price"]); ?></td>
            </tr><?php endforeach; endif; ?>
            			</tbody>
                 
		</table>

		<div class="order_total">
			<div class="tr">
				<div class="th">总金额</div>
				<div class="td"><input style="border:0px" type="text" name="price" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¥&nbsp;<?php echo ($sum); ?>.00"></div>
			</div>
		
	
			<div class="tr">
				<div class="th">运费</div>
				<div class="td">&nbsp;¥&nbsp;0.00</div>
			</div>
			<div class="line"></div>
			<div class="tr">
				<div class="th">应付：</div>
				<div class="td total_price">¥&nbsp;<span id="totalPrice"><?php echo ($sum); ?></span></div>
			</div>
             <input type="hidden"  name="sum" value="<?php echo ($sum); ?>"  >
		         <input type="hidden"  name="wang" value="zong"  >
			<div class="tr">
				<div class="order_btn primary" id="submitFrom"><input type="submit" style="background:#00C3F5;border:0px;font-size:25px;color:#fff;" value="提交订单"></div>
			</div>
		</div>
</div>
</div>
</form>
</div>
<!-- common js -->

<script charset="utf-8" src="/Public/home/Acount/js/v.js"></script>
<script src="/Public/home/Acount/js/hm.js"></script>
<script src="/Public/home/Acount/js/flow.js"></script>
<script src="/Public/home/Acount/js/analytics-min.js"></script>
<script charset="utf-8" src="/Public/home/Acount/js/site-lib.js"></script>
<script type="text/javascript" src="/Public/home/Acount/js/site-base.js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>
<script type="text/javascript" src="/Public/home/Acount/img/common.js"></script>

<script type="text/javascript" src="/Public/home/Acount/js/citys.js"></script>
<script type="text/javascript" src="/Public/home/Acount/js/order_add_new.js"></script>




<!-- common footer -->

<!--四级联动-->
        <script>
          $(function(){
            function getCity(obj,value)
            {
              $.get('<?php echo U('Acount/demo4');?>',{'upid':value},function(msg){
                // 1.msg是对象，将对象遍历拼接成option格式的HTML标签
                var str = '<option>--请选择--</option>';
                for (var i in msg) {
                  str += '<option value="'+msg[i]['id']+'">'+msg[i]['name']+'</option>';
                }
                // 2.将拼接好的HTML代码放在select内
                if (obj == 'province') {
                  $('#province').html(str);
                } else {
                  obj.next().html(str);
                }
              })
            }
            getCity('province',0);

            // 省份改变事件，市改变
            $('#province,#city,#county').change(function(){
              // 0.初始化
              $(this).nextAll().html('<option>--请选择--</option>');
              //在下面的ajax请求中，$(this)传递不进去，只能定义变量接收$(this),在下面的ajax中使用变量
              var that = $(this);
              // 1.获取值
              var value = $(this).val();

              getCity(that,value);
            })
          })

        </script>
      <script type="text/javascript">
      


      </script>
        <script>
        $('#queren').click(function(){
          var sheng = $('#province').val();
          var shi = $('#city').val();
          var xian = $('#county').val();
          var xiang = $('#xiang').val();
          var adr = $('.adr').attr('value');
          $.post('<?php echo U('Acount/demo6');?>',{sheng:sheng,shi:shi,xian:xian,xiang:xiang,adr:adr},function(msg){
            if(msg == 'ok'){
              location.href="<?php echo U('Acount/index');?>";
            }
          })
        })
      
      </script>
          <script type="text/javascript">
     $(function(){
      $('#did').mousedown(function(){
       //alert('111');
       $('#did').css('color','#0CBBEF');
        $('#new').toggle(500);
          $('#old').css('display','none');
      })
      $('#did').mouseup(function(){
       //alert('111');
       $('#did').css('color','#000');
        

      })
    $('#id').mousedown(function(){
       //alert('111');
       $('#id').css('color','#0CBBEF');
        $('#old').toggle(500);
    $('#new').css('display','none');
      })
      $('#id').mouseup(function(){
       //alert('111');
       $('#id').css('color','#000');
      

      })


     })
  
  
    </script>
      <script>
        $('.xg').click(function(){
          $('.dizhi').toggle(500);
        })
      
      </script>

<br>
 <br>
 <div class="site-footer">
      <div class="mzcontainer">
        <div class="site-footer-service">
          <ul class="clearfix">
            <li class="service-item">
              <span class="service-icon service-icon-seven"></span>
              <p class="service-desc">
                <span class="service-desc-bold">7天</span>
                <span class="service-desc-normal">无理由退货</span>
              </p>
            </li>
            <li class="service-split-line">
              <span></span>
            </li>
            <li class="service-item">
              <span class="service-icon service-icon-fifty"></span>
              <p class="service-desc">
                <span class="service-desc-bold">15天</span>
                <span class="service-desc-normal">换货保障</span>
              </p>
            </li>
            <li class="service-split-line">
              <span></span>
            </li>
            <li class="service-item">
              <span class="service-icon service-icon-one"></span>
              <p class="service-desc">
                <span class="service-desc-bold">1年</span>
                <span class="service-desc-normal">免费保修</span>
              </p>
            </li>
            <li class="service-split-line">
              <span></span>
            </li>
            <li class="service-item">
              <span class="service-icon service-icon-by"></span>
              <p class="service-desc">
                <span class="service-desc-bold">全场</span>
                <span class="service-desc-normal">包邮</span>
              </p>
            </li>
            <li class="service-split-line">
              <span></span>
            </li>
            <li class="service-item">
              <span class="service-icon service-icon-map"></span>
              <p class="service-desc">
                <span class="service-desc-bold">2000多家</span>
                <span class="service-desc-normal">专卖店</span>
              </p>
            </li>
          </ul>
        </div>
        <div class="site-footer-navs clearfix">
          <div class="footer-nav-item">
            <h4 class="footer-nav-title" style="color:red">友情连接</h4>
            <ul>
            <?php if(is_array($connect)): foreach($connect as $key=>$vo): ?><li><a href="http://<?php echo ($vo["www"]); ?>" style="color:cyan"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
          </div>
          <div class="footer-nav-item">
            <h4 class="footer-nav-title">Flyme OS</h4>
            <ul>
              <li><a target="_blank" href="https://cloud.flyme.cn/">云服务</a></li>
              <li><a target="_blank" href="http://www.flyme.cn/firmware.jsp">固件下载</a></li>
              <li><a target="_blank" href="http://app.flyme.cn/">软件商店</a></li>
              <li><a target="_blank" href="http://finder.flyme.cn/">查找手机</a></li>
            </ul>
          </div>
          <div class="footer-nav-item">
            <h4 class="footer-nav-title">关于我们</h4>
            <ul>
              <li><a target="_blank" href="http://www.meizu.com/about.html">关于魅族</a></li>
              <li><a target="_blank" href="http://hr.meizu.com/">加入我们</a></li>
              <li><a target="_blank" href="http://www.meizu.com/contact.html">联系我们</a></li>
              <li><a target="_blank" href="http://www.meizu.com/legalStatement.html">法律声明</a></li>
            </ul>
          </div>
          <div class="footer-nav-item">
            <h4 class="footer-nav-title">关注我们</h4>
            <ul>
              <li><a target="_blank" href="http://weibo.com/meizumobile">新浪微博</a></li>
              <li><a target="_blank" href="http://t.qq.com/meizu_tech">腾讯微博</a></li>
              <li><a target="_blank" href="http://user.qzone.qq.com/2762957059">QQ空间</a></li>
              <li>
                <a class="meizu-footer-wechat">
                  官方微信
                  <img src="/Public/home/Commodity/img/weixin.png" alt="微信二维码">
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-nav-custom">
            <h4 class="nav-custom-title">24小时全国服务热线</h4>
            <a href="tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a>
            <a class="nav-custom-btn" href="javascript:void(0);" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
              <img src="/Public/home/Commodity/img/20x21xiaoshi.png" width="20" height="21">
              24小时在线客服
            </a>
          </div>
        </div>
        <div class="site-footer-end">
          <p>
            ©2015 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <a target="_blank" href="http://www.miitbeian.gov.cn/" hidefocus="true">备案号：粤ICP备13003602号-2</a>
            <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" hidefocus="true">经营许可证编号：粤B2-20130198</a>
            <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true">营业执照</a>
            <a target="_blank" rel="nofollow" href="http://210.76.65.188/" hidefocus="true">
              <img src="/Public/home/Commodity/img/footer-copy-1.png">
            </a>
            <a target="_blank" rel="nofollow" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" hidefocus="true">
              <img src="/Public/home/Commodity/img/footer-copy-2.png">
            </a>
            <a target="_blank" rel="nofollow" href="https://credit.szfw.org/CX20151204012550820380.html" hidefocus="true">
              <img src="/Public/home/Commodity/img/trust-icon.png">
            </a>
          </p>
        </div>
      </div>
    </div>
</body></html>