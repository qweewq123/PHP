<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0047)http://store.meizu.com/topic/list.html?active=0 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>SS商城-提供魅族 PRO 5、魅族MX系列、魅蓝note系列、魅蓝metal系列产品的预约和购买</title>
    <meta name="description" content="SS商城是魅族面向全国服务的官方电子商务平台,提供魅族 PRO 5、魅族MX系列、魅蓝note系列和魅蓝metal系列等产品的预约和购买.官方正品，全国联保。">
    <meta name="Keywords" content="魅族官方在线商店、魅族在线商城、魅族官网在线商店、SS商城">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="/Public/home/Commodity/css/site-base.css">
    <link rel="stylesheet" href="/Public/home/Commodity/css/main.css">
    <script charset="utf-8" src="/Public/home/Commodity/js/jquery-1.7.2.js"></script>
    <style>
      .wrapper{width: 1240px;margin: 0 auto;}
      .crumbs {margin: 10px 0 24px;width: 100%;}
      .crumbs .active {color: #00c3f5;}
      .nav{border:1px solid #efefef;}
      .nav li{border-left:1px solid #efefef;}
      .goods-list{border:1px solid #efefef;}
      .gl-item{border-bottom:1px solid #efefef;height:380px;}
      .vm-price,.gl-item .mod-price em{display: inline-block;font-size: 12px;}
      .vm-price span,.mod-price i{font-size: 16px;}
      .vm-price-oldprice{display: inline-block;font-size: 12px;color: #b2b2b2;text-decoration: line-through;padding-right: 2px;}
      .recommend-slider{border: 1px solid #efefef;margin-right: 0px;}
      .recommend-hd .mod-control a{border: 1px solid #efefef;}
    </style>
<style type="text/css">.site-gotop{position:fixed;width:44px;bottom:50px;left:50%;margin-left:640px;display:none}.gotop-suggest,.gotop-arrow{display:inline-block;width:44px;height:44px;background:#b4b4b4 no-repeat 50%50%;cursor:pointer}.gotop-suggest{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/suggest.png)}.gotop-arrow{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/gotop-arrow.png);margin-top:5px}</style></head>

<body>

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

<!-- 公共页头 End -->

    <!-- 内容主体区域 Start -->
    <div class="wrapper" id="main">
        <div class="crumbs" >
           <a href="/index.php/home/index/index" style="font-size:25px;color:#35C6F2"><b>首页</b></a>&nbsp;|&nbsp;
            <a href="/index.php/home/commodity/index" style="font-size:20px;color:#35C6F2"><b>全部商品</b></a>
        </div>
        <div class="container">

            <!-- 导航栏 Start -->
            <div class="nav clearfix" id="nav">
                <ul class="clearfix">
                  <?php if(is_array($res)): foreach($res as $key=>$vo): ?><li class="current"><a href="/index.php/home/commodity/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; ?>
                </ul>
            </div>
            <!-- 头部导航 End -->
            <?php if(empty($_GET['id'])): ?><div>排序&nbsp;|&nbsp;<a href="/index.php/home/commodity/order/val/1"><span >价格从低到高</span></a>&nbsp;|&nbsp;<a href="/index.php/home/commodity/order/val/2"><span>价格从高到低</span></a>&nbsp;|&nbsp;<a href="/index.php/home/commodity/order/val/3"><span>按产品更新时间</span></a></div>
             <?php else: ?>
              <span></span><?php endif; ?>
   
            <!-- 商品列表 Start -->
            <div class="goods-list" id="goodsList">

                <!-- 手机列表 Start -->
                <div class="current" style="display: block;">
                    <ul class="goods-list-wrap clearfix">

                        <!-- 列表item Start -->
                        <?php if(is_array($res1)): foreach($res1 as $key=>$vo): ?><li class="gl-item">
                            <dl class="gl-item-wrap">
                                <dd class="mod-pic">
                                    <a target="_self" href="/index.php/home/Details/index/id/<?php echo ($vo["id"]); ?>/cateid/<?php echo ($vo["cateid"]); ?>">
                                        <img width="220" height="220" class="err-product" src="/Public/Uploads/<?php echo ($vo["image1"]); ?>">
                                    </a>
                                </dd>
                                <dd class="mod-name">
                                    <a target="_blank" href="#">
                                         <?php echo ($vo["proname"]); ?>
                                    </a>
                                </dd>
                                <dd class="mod-price">
                                    <p class="vm-price-oldprice"><?php echo ($vo["price"]); ?></p>
                                    <p class="vm-price">
                                        ¥&nbsp;<span><?php echo ($vo["price"]); ?></span>
                                    </p>
                                </dd>
                            </dl>
                        </li><?php endforeach; endif; ?>
                        <!-- 列表item End -->

                    </ul>
                </div>
               

            
            <!-- 商品列表 End -->

            <!-- 推荐 Start -->
            
            </div>
            <!-- 推荐 End -->

        </div>
    </div>
    <!-- 内容主体区域 End -->



    <!-- 静态引入公共底部 Start -->
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
    <!-- 静态引入公共底部 End -->


<script charset="utf-8" src="/Public/home/Commodity/js/v.js"></script>
<script src="/Public/home/Commodity/js/hm.js"></script>
<script src="/Public/home/Commodity/js/flow.js"></script>
<script src="/Public/home/Commodity/js/analytics-min.js"></script>
<script charset="utf-8" src="/Public/home/Commodity/js/site-lib.js"></script>
<script type="text/javascript" src="/Public/home/Commodity/js/site-base.js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>

<script type="text/javascript" src="/Public/home/Commodity/js/pkg-listcopy.js"></script>

<!-- 统计代码 Start -->
<script>
  var __mzt = __mzt || [];
  (function() {
  var hm = document.createElement("script");
  hm.src = "http://sccom.res.meizu.com/js/analytics-min.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
  })();
</script>

<script type="text/javascript" charset="utf-8">
  var _hmt = _hmt || [];
  (function() {
  var hm = document.createElement("script");
  hm.src = "//common.res.meizu.com/resources/tongji/flow.js";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
  })();
</script>

<script type="text/javascript">
  var _hmt = _hmt || [];
  (function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
  })();
</script>

<!-- 统计代码 End -->



<div class="site-gotop" id="siteGotop" style="opacity: 0; display: block;"><a class="gotop-suggest" title="建议反馈" href="http://store.meizu.com/member/suggest/index" target="_blank"></a><div class="gotop-arrow" title="回到顶部"></div></div></body></html>