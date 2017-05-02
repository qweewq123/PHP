<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0051)http://store.meizu.com/member/myorder/index?type=99 -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="Access">
    <meta charset="utf-8">
    <meta name="viewport" content="width=1080">
    <title>会员中心-我的订单 SS商城</title>
    <meta name="keywords" content="魅族SS商城">
    <meta name="description" content="会员中心，我的订单">
    <!--<base href="http://store.meizu.com">--><base href=".">
    <link rel="stylesheet" href="/Public/home/Center/css/site-base.css">
    <link rel="stylesheet" href="/Public/home/Center/css/aio.css">
    <script charset="utf-8" src="/Public/home/Acount/js/jquery-1.8.3.min.js"></script>
    </head>
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

  
<div class="store-wrap" style="clear:both">
    <div class="crumbs">
        
    </div>
    <div class="main clearfix">
        <div class="left-nav f-fl">
    <span class="title "><a href="/index.php/home/Index/index">我的商城</a></span>
    <div class="nav-main">
        <a href="javascript:void(0);" class="type-title"><i class="iconfont icon-orderCenter" ></i>订单中心</a>
        <a href="javascript:void(0);" class="ml active" id="myorder">我的订单</a>
        <!-- <a href="http://store.meizu.com/member/repurchase_receipt/index" class="ml ">我的回购单</a> -->
        <a href="javascript:void(0);" class="type-title"><i class="iconfont icon-selfCenter"></i>个人中心</a>
        <a href="javascript:void(0);" class="ml " id="address" style="color:#0CBBEF">用户详情</a>
        <!-- <a href="http://store.meizu.com/member/message/index" class="ml ">消息提醒</a>
        <a href="http://store.meizu.com/member/suggest/index" class="ml ">建议反馈</a> -->
        <a href="javascript:;" class="type-title"><i class="iconfont icon-moneyCenter"></i>我的收藏</a>
        <!--<a href="http://store.meizu.com/member/coupons/index" class="ml ">我的优惠券</a>-->
        <a href="/index.php/home/Collection/index" class="ml "style="color:#0CBBEF">收藏夹</a>
       
    </div>

</div>  
     <div class="right-content f-fr" style="display:block" id="user">
            <div class="index-main">
                <div class="top clearfix">
                    <div class="information clearfix f-fl">
                        <div class="pic f-fl">
                         <img src="/Public/home/center/img/touxiang.png" alt="<?php echo (session('username')); ?>">
                                                    </div>
                        <div class="name f-fl">
                            <span><?php echo (session('username')); ?></span>
                            <span>欢迎您回来！</span>
                        </div>
                        <div class="info f-fl">
                            <ul>
                                <li>会员名<span><?php echo (session('username')); ?></span></li>
                                <li>绑定手机号：<span>未绑定</span></li>
                                <li class="emailText">绑定邮箱：<span>未绑定</span></li>
                            </ul>
                            <div class="edit"   id="edit" style="cursor:pointer;color:#A8C5FF">修改密码 &gt;</div>
                        </div>
                    </div>
                    
                </div>
				
  
            </div>
        </div>
		

		 <div class="right-content f-fr" style="display:none" id="pass">
            <div class="index-main">
                <div class="top clearfix">
                    <div class="information clearfix f-fl">
                        <div class="pic f-fl">
                         <img src="/Public/home/center/img/touxiang.png" alt="<?php echo (session('username')); ?>">
                                                    </div>
                        <div class="name f-fl">
                            <span><?php echo (session('username')); ?></span>
                            <span>欢迎您回来！</span>
                        </div>
                        <form action="/index.php/home/center/save" method="post">
                        <div class="info f-fl">
                            <ul>
                               
                                <li style="">新密码：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input placeholder="请输入6-16位" type="password" name="password"  ></span></li>
                                <li class="emailText">确认密码：<span><input type="password" name="rpass"  ></span></li>
                            </ul>
                            <div style="margin-top:20px" id="tj"><input  style="background:#0CBBEF;width:80px;height:30px;border:0px;color:#fff"type="submit" value="提交" ></div>
                        </div>
                        </form>
                    </div>
                    
                </div>
				
  
            </div>
        </div>
        <script type="text/javascript">
          var edit=document.getElementById('edit');
          var pass=document.getElementById('pass');
          var user=document.getElementById('user');
           edit.onclick=function(){
          pass.style.display="block";
          user.style.display="none";


           }

     tj.onclick=function(){
     	
     	

          pass.style.display="none";
          user.style.display="block";
         

           }

        </script>
		
		
<!-- 右边 -->
<div class="right-content f-fr" id="order" style="display:block;">
            <div class="order-main">
                <div class="title"></div>
                
                <div class="type-tab-btn">
                    <a href="javascript:viod(0);"  data-type="-1">全部订单</a> 
                     </div>
                <div class="list-head" style="background:#ccc">
                    <ul class="clearfix">
                        <li class="w501" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;收货人</li>
                        <li class="w125" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话</li>
                        
                        
                        <li class="w125" style="color:#fff;margin-left:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;状态</li>
                        <li class="w125" style="color:#fff;width:200px;margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;操作</li>
                        <li class="w125" style="color:#fff;margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;详情</li>
                        <li class="w125" style="color:#fff;margin-left:40px">取消订单</li>
                    </ul>
                </div>
                <?php if(is_array($result)): foreach($result as $key=>$vo): ?><div class="list-head" >
                 <ul class="clearfix">
                        <li class="w501" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["getman"]); ?></li>
                        <li class="w125" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["phonenum"]); ?></li>
                       
                       
                        <?php if($vo["state"] == 1): ?><li class="w125" style="margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;未付款</li>
                           <?php elseif($vo["state"] == 2): ?>
                             <li class="w125" style="margin-left:40px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已付款</li>
                            <?php elseif($vo["state"] == 3): ?>
                             <li class="w125" style="margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;未发货</li>
                             <?php elseif($vo["state"] == 4): ?>
                             <li class="w125" style="margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已发货</li>
                             <?php elseif($vo["state"] == 5): ?>
                             <li class="w125" style="margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;未收货</li>
                            <?php elseif($vo["state"] == 6): ?>
                             <li class="w125" style="margin-left:40px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已收货</li>
                            <?php else: ?>
                            <td>未付款</td><?php endif; ?>
                        
                        <li class="w125" style="width:200px;margin-left:40px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index.php/home/center/update/id/<?php echo ($vo["id"]); ?>" style="color:#0CBBEF;">确认收货</a></li>

                         <li class="w125" style="margin-left:40px" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  style="color:#0CBBEF;" href="/index.php/home/center/show/id/<?php echo ($vo["id"]); ?>">查看详情</a></li>
                         <li class="w125" style="color:#fff;margin-left:40px"><a  style="color:#0CBBEF;" href="/index.php/home/center/del/id/<?php echo ($vo["id"]); ?>">取消订单</a></li>
                    </ul>
                   <!--  <ul class="clearfix">
                        <li class="w501"><?php echo ($vo["getman"]); ?></li>
                        <li class="w125"><?php echo ($vo["phonenum"]); ?></li>
                        <li class="w125">详情</li>
                        <li class="w125"><?php echo ($vo["state"]); ?></li>
                        <li class="w125"><a href="/index.php/home/center/update/id/<?php echo ($vo["id"]); ?>">确认收货</a></li>
                    </ul> -->
                </div><?php endforeach; endif; ?>
                <!-- <div id="tableList" class="type-contain ui-load-container"><div class="ui-load-content J_no_data"><p class="J_no_data_des">您暂无此类订单，赶快去下单吧！</p></div></div> -->
                <input type="hidden" id="pageId" value="0">
            </div>
        </div>
        <!-- 用户详情 -->
     <div class="right-content f-fr" style="display:none" id="details">
            <div class="address-main">
                
                <div class="main">
                    <div class="row">
                        <span class="title rollit">收货地址管理</span>
                    </div>
                   
          
                    <div class="list">
                        <div class="row">
                            <div class="title">
                                <div>已有地址</div>
                                <div class="upload hide">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="listHead">
                            <span class="center w15">收货人姓名</span><span class="center w35">收货人地址</span><span class="center w25">收货人手机号</span><span class="center w10">操作</span>
                        </div>
                        <?php if(is_array($row)): foreach($row as $key=>$vv): ?><div class="listHead">
                            <span class="center w15"><?php echo ($vv["getman"]); ?></span><span class="center w35"><?php echo ($vv["province"]); echo ($vv["city"]); echo ($vv["county"]); echo ($vv["xiang"]); echo ($vv["address"]); ?></span><span class="center w25"><?php echo ($vv["phonenum"]); ?></span><span class="center w10"><a style="color:#0CBBEF;" href="/index.php/home/center/dsave/id/<?php echo ($vv["id"]); ?>" >修改</a>&nbsp;|&nbsp;<a style="color:#0CBBEF;" href="/index.php/home/center/dele/id/<?php echo ($vv["id"]); ?>">删除</a></span>
                        </div><?php endforeach; endif; ?>
                        <!-- <ul id="tableList" class=""></ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
  <script type="text/javascript">
  var myorder=document.getElementById('myorder');
  var order=document.getElementById('order');

  myorder.onclick=function(){
    order.style.display="block";
    details.style.display="none";
  }
  var address=document.getElementById('address');
  var details=document.getElementById('details');
  address.onclick=function(){
    details.style.display="block";
    order.style.display="none";
  }

</script> 
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
      <script>
        $('.xg').click(function(){
          $('.dizhi').css('display','block');
        })
      
      </script>
<!-- common footer -->

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
        <h4 class="footer-nav-title">帮助说明</h4>
        <ul>
          <li><a href="http://store.meizu.com/explain/payment_help.html" target="_blank">支付方式</a></li>
          <li><a href="http://store.meizu.com/explain/deliverynote.html" target="_blank">配送说明</a></li>
          <li><a href="http://store.meizu.com/explain/warranty_services.html" target="_blank">售后服务</a></li>
          <li><a href="http://store.meizu.com/explain/payment_helps.html" target="_blank">付款帮助</a></li>
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
              <img src="/Public/home/Center/img/weixin.png" alt="微信二维码">
            </a>
          </li>
        </ul>
      </div>
      <div class="footer-nav-custom">
        <h4 class="nav-custom-title">24小时全国服务热线</h4>
        <a href="tel:400-788-3333"><h3 class="nav-custom-number">400-788-3333</h3></a>
        <a class="nav-custom-btn" href="javascript:void(0);" onclick="window.open(&#39;http://live-i.meizu.com/live800/chatClient/chatbox.jsp?companyID=8957&amp;configID=4&amp;enterurl=&#39;+ encodeURIComponent(document.URL) + &#39;&amp;pagereferrer=&#39; + encodeURIComponent(document.referrer) + &#39;&amp;info=&amp;k=1&#39;, &#39;_blank&#39;,&#39;height=775,width=1200,fullscreen=3,top=100,left=100,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no,fullscreen=no&#39;);">
          <img src="/Public/home/Center/img/20x21xiaoshi.png" width="20" height="21">
          24小时在线客服
        </a>
      </div>
    </div>
    <div class="site-footer-end">
      <p>
        ©2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.
        <a target="_blank" href="http://www.miitbeian.gov.cn/" hidefocus="true">备案号：粤ICP备13003602号-2</a>
        <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/icp2.jpg" hidefocus="true">经营许可证编号：粤B2-20130198</a>
        <a target="_blank" href="http://www2.res.meizu.com/zh_cn/images/common/com_licence.jpg" hidefocus="true">营业执照</a>
        <a target="_blank" rel="nofollow" href="http://210.76.65.188/" hidefocus="true">
          <img src="/Public/home/Center/img/footer-copy-1.png">
        </a>
        <a target="_blank" rel="nofollow" href="http://210.76.65.188/webrecord/innernet/Welcome.jsp?bano=4404013010531" hidefocus="true">
          <img src="/Public/home/Center/img/footer-copy-2.png">
        </a>
        <a target="_blank" rel="nofollow" href="https://credit.szfw.org/CX20151204012550820380.html" hidefocus="true">
          <img src="/Public/home/Center/img/trust-icon.png">
        </a>
      </p>
    </div>
  </div>
</div>

<!-- common js -->

<script charset="utf-8" src="/Public/home/Center/js/v.js"></script>
<script src="/Public/home/Center/js/hm.js"></script>
<script src="/Public/home/Center/js/flow.js"></script>
<script src="/Public/home/Center/js/analytics-min.js"></script>
<script charset="utf-8" src="/Public/home/Center/js/site-lib.js"></script>
<script type="text/javascript" src="/Public/home/Center/img/site-base.js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>


<script type="text/javascript" src="/Public/home/Center/js/memberCommon.js"></script>
<script type="text/javascript" src="/Public/home/Center/js/order.js"></script>
<script>
    require('member:app/script/page/order');
</script>

<!-- common tongji code -->
<script>
  var __mzt = __mzt || [];
  (function() {
	var hm = document.createElement("script");
	hm.src = "http://sccom.res.meizu.co/Public/home/Center/js/analytics-min.js";
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(hm, s);
  })();
</script>

<script type="text/javascript" charset="utf-8">
	var _hmt = _hmt || [];
	(function() {
	var hm = document.createElement("script");
	hm.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
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

</body></html>