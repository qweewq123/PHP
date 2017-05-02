<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://localhost/lamp1311/home/tjcg.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta property="qc:admins" content="56207406376255516375" /> 
  <title>魅族</title> 
  <link rel="stylesheet" href="/Public/home/sts/jumei_static_jumei.css" type="text/css" media="screen" charset="utf-8" /> 
  <link rel="stylesheet" href="/Public/home/sts/jumei_cart_new.css" type="text/css" media="screen" charset="utf-8" /> 
  <link rel="stylesheet" href="/Public/home/sts/jumei_lightbox.css" type="text/css" media="screen" charset="utf-8" /> 
 </head> 
 <body > 
 <script type="text/javascript" src="/Public/home/sts/img/jquery-1.7.2.js"></script>
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon" /> 
  <link rel="stylesheet" href="/Public/home/index/css/site-base.css" /> 
  <link rel="stylesheet" href="/Public/home/index/css/pkg-home.css" /> 
  
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
 
  <div id="container" style="width: auto;height:250px;background:white">
   <link rel="stylesheet" href="/Public/home/sts/paymentstatus.css" /> 
   <link rel="stylesheet" href="/Public/home/sts/jquery-ui-1.css" type="text/css" media="screen" charset="utf-8" /> 
   <script type="text/javascript" charset="utf-8" src="/Public/home/sts/jquery-ui-1.js"></script> 
   <div id="cart"> 
    <div class="cart_left"> 
     <div class="pay_status"> 
      <!-- COD订单  --> 
      <div class="pay_status_img pay_status_success"> 
       <div class="status_text"> 
        <span class="pay_icon pay_success" ></span> 
        <h3 style="margin-left:-40px;color:#35C6F2;font-weight:700;">感谢您！交易单已提交！</h3> 
        <p>  <h4 style="color:#35C6F2">(共计金额<span class="pink" style="color:red">￥<?php echo ($sum); ?></span>）</h4> </p> 
       </div> 
       <div class="clear"></div> 
       <!--  --> 
      </div> 
      <div class="order_status order_status_success list_status"> 
       <h2 class="green" style="color:#333;font-weight: normal;"> <span class="pay_icon"></span> 以下交易单需要货到付款，请在快递上门时支付货款， 交易单需要客服确认后才能发货，发货前您可以在 <a href="/index.php/home/Center/index" style="color:#35C6F2">我的订单</a>中取消。 </h2> 
       <div style="height:40px; padding-top:10px"> 
        <div style="height:20px"> 
         <span class="pink" style="color:#35C6F2">重要提醒：</span>
         <span>聚美不会以订单异常、系统升级等为由，要求您点击任何链接进行退款、重新付款、额外付款操作。请认准聚美唯一官方电话 400-123-8888</span>
         <br /> 
        </div> 
       </div> 
       <table class="cod-order-table"> 
        <colgroup> 
         <col width="250" /> 
         <col width="250" /> 
         <col width="200" /> 
         <col width="150" /> 
        </colgroup> 
        <tbody>
         <tr>
          <td>交易单号： <span class="pink" style="color:#35C6F2">1000000002-<?php echo ($oid); ?></span> </td> 
          <td>由 魅族 发货！</td> 
          <td> <a href="/index.php/home/Center/index" style="color:#35C6F2">查看详情</a> </td> 
         </tr> 
        </tbody>
       </table> 
      </div> 
      <script charset="utf-8" src="/Public/home/index/js/v.js"></script> 
      <script src="/Public/home/index/js/hm.js"></script> 
      <script src="/Public/home/index/js/flow.js"></script> 
      <script src="/Public/home/index/js/analytics-min.js"></script> 
      <script charset="utf-8" src="/Public/home/index/js/site-lib.js"></script> 
      <script type="text/javascript" src="/Public/home/index/js/site-base.js"></script> 
      <script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script> 
      <script type="text/javascript" src="/Public/home/index/js/pkg-home.js"></script> 
      <script charset="utf-8">var $=require("common:lib/jquery/jquery-1.11.3");$(function(){require("home:widgets/settlement-ad/settlement-ad"),require("home:widgets/home-slider/home-slider"),require("home:widgets/home-recommend/home-recommend"),require("home:widgets/home-category/home-category"),require("home:widgets/home-gotop/home-gotop"),require("home:js/jquery.lazyload/jquery.lazyload"),$("img.home-img-lazy").lazyload({});var e=document.createElement("img");e.src="http://log2.air.yoyi.com.cn/air/t?s=2503"});</script>  
     </div>
    </div>
   </div>
  </div>
  
  <div style="border-top:5px #ccc solid ;border-buttom:5px #ccc solid " id="div" >
  
     <a href="/index.php/home/Commodity/INDEX"> <img id="d1" style=" position:absolute;display:block;"src="/Public/home/sts/img/11111/1.jpg" width="1439" height="200"alt="" /></a>
    

  </div>
    <script type="text/javascript">
    var m=1;
  function fun(){
    m++;
    //获取img标签
    document.getElementById("d1").src="/Public/home/sts/img/11111/"+m+".jpg";
    if(m==5){
      m=1;
    }

  }
  setInterval(fun,2000);


    </script>
 </body>
</html>