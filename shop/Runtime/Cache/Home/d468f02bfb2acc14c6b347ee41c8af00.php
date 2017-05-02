<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0040)http://store.meizu.com/item/meilan2.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>魅蓝2-SS商城</title>
    <meta name="description" content="魅蓝2，2GB大运存 双卡双待双4G，正品行货，另有魅蓝2详细介绍、图片、价格、参数、售前咨询等，购买魅蓝2上SS商城，全场包邮，7天无理由退货，15天换货保障。">
    <meta name="keywords" content="魅蓝2，魅族，SS商城">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://store.res.meizu.com/resources/php/store/favicon.ico" rel="icon" type="image/x-icon">
    <!-- common css -->
    <link rel="stylesheet" href="/Public/home/details/css/site-base.css">

    <!--[if lt IE 9]>
    <script>
        var c = ["log","debug","info","warn","exception","assert","dir","dirxml","trace","group","groupCollapsed","groupEnd","profile","profileEnd","count","clear","time","timeEnd","timeStamp","table","error"];
        window.console = {};
        for(var i = 0; i < c.length; i++){
            window.console[c[i]] = function(){

            }
        }
    </script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://store.res.meizu.com/resources/php/store/static/common/lib/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Public/home/details/css/main.css">
<style type="text/css">.site-gotop{position:fixed;width:44px;bottom:50px;left:50%;margin-left:640px;display:none}.gotop-suggest,.gotop-arrow{display:inline-block;width:44px;height:44px;background:#b4b4b4 no-repeat 50%50%;cursor:pointer}.gotop-suggest{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/suggest.png)}.gotop-arrow{background-image:url(http://store.res.meizu.com/resources/php/store/static/detail/assets/img/gotop-arrow.png);margin-top:5px}
</style>
        <style> 
            *{
                padding:0;
                margin:0;
                list-style:none;
            }
            .page{
                text-align:center;
            }
            
            .login{
                text-align:right;
            }
            .login li{
                line-height:30px;
                background:pink;
                float:right;
                padding:0 20px;
            }
            
            
            #zhezhao{
                width:100%;
                height:100%;
                background:black;


                /*div透明度  */
                opacity:0.5;  

                z-index:100;
                position:absolute;
                left:0;
                top:0;
                display:block;
            }
            
            #myform{
                background:#FFF;
                z-index:100;
                position:absolute;
                top:130px;
                padding:10px 30px;
                display:block;
            
            }
            
            #closePage{
                text-align:right;
            }
        </style>
</head>
<body>
    <?php if(empty($_GET['type'])): ?><!--遮罩层区域-->
    <div id="zhezhao" style="display:none;"></div>
    <!--表单区域-->
        <div id="myform" style="display:none;">
            <div id="closePage"><button>X</button></div>
            <form action="/index.php/home/Comments/insert" method="post">
                <input style="border:0px" type="hidden" name="proname" value="<?php echo ($pros["proname"]); ?>">
                <input style="border:0px" type="hidden" name="proid" value="<?php echo ($pros["id"]); ?>">
            <table width="300" height="150">
                <tr>
                    <td>
                        <textarea style="width:200px;height:100px;" name="des"></textarea>
                    </td>
                    <td><input type="submit" value="提交评论" id="tj" ></td>
                </tr>
            </table>
            </form>
        </div>
<script>
        
            (function(){
            
                //将表单设置在正中间位置
                //页面宽度
                var pageW=window.innerWidth||document.documentElement.clinentWidth;
                //元素宽度 请自行获取getStyle方法
                var myformW=360;
                
                //将表单定位在中间
                var myformX=(pageW-myformW)/2;
                
                //获取表单元素
                var myform = document.getElementById('myform');
                myform.style.left=myformX+'px';
                
                //获取遮罩层元素
                var zhezhao=document.getElementById('zhezhao');
                
                //获取登录元素
                // var log=document.getElementById('log');
                //添加事件  点击登录显示
                
                    //显示遮罩曾
                    // zhezhao.style.display='block';
                    //显示表单层
                    // myform.style.display='block';
                    //超过页面部分隐藏
                    // document.body.style.overflow='hidden';
                
                
                
                //添加时间 点击X 关闭显示
                var closePage=document.getElementById('closePage');
                var btn=closePage.firstChild;
                btn.onclick=function(){
                    //显示遮罩曾
                   zhezhao.style.display='none';
                    //显示表单层
                   myform.style.display='none';
                    //超过页面部分隐藏
                   document.body.style.overflow='auto';
                }
            
            
            })()
        </script>
<?php else: ?> 
    <!--遮罩层区域-->
    <div id="zhezhao" style="display:block;"></div>
    <!--表单区域-->
        <div id="myform">
            <div id="closePage"><button>X</button></div>
            <form action="/index.php/home/Comments/insert" method="post">
                <input style="border:0px" type="hidden" name="proname" value="<?php echo ($pros["proname"]); ?>">
                <input style="border:0px" type="hidden" name="proid" value="<?php echo ($pros["id"]); ?>">
            <table width="300" height="150">
                <tr>
                    <td>
                        <textarea style="width:200px;height:100px;" name="des"></textarea>
                    </td>
                    <td><input type="submit" value="提交评论" id="tj" ></td>
                </tr>
            </table>
            </form>
        </div>
<script>
        
            (function(){
            
                //将表单设置在正中间位置
                //页面宽度
                var pageW=window.innerWidth||document.documentElement.clinentWidth;
                //元素宽度 请自行获取getStyle方法
                var myformW=360;
                
                //将表单定位在中间
                var myformX=(pageW-myformW)/2;
                
                //获取表单元素
                var myform = document.getElementById('myform');
                myform.style.left=myformX+'px';
                
                //获取遮罩层元素
                var zhezhao=document.getElementById('zhezhao');
                
                //获取登录元素
                // var log=document.getElementById('log');
                //添加事件  点击登录显示
                
                    //显示遮罩曾
                    // zhezhao.style.display='block';
                    //显示表单层
                    // myform.style.display='block';
                    //超过页面部分隐藏
                    document.body.style.overflow='hidden';
                
                
                
                //添加时间 点击X 关闭显示
                var closePage=document.getElementById('closePage');
                var btn=closePage.firstChild;
                btn.onclick=function(){
                    //显示遮罩曾
                   zhezhao.style.display='none';
                    //显示表单层
                   myform.style.display='none';
                    //超过页面部分隐藏
                   document.body.style.overflow='auto';
                }
            
            
            })()
        </script><?php endif; ?> 


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

    <!--下面是模板标签，不可删除-->
    <main class="wrapper">
        <div class="container">
            <section class="crumbs clearfix">
                        <a href="/index.php/home/Collection/index">首页</a>&nbsp;&gt;&nbsp;
                        <a class="ellipsis crumbs-title"><?php echo ($pros["proname"]); ?></a>
            </section>
            <section class="row">
<div class="preview" id="preview">
                    <div class="preview-booth" id="dd1" style="display:block">
                        <a href="javascript:;" id="J_imgBooth">
                            <img src="/Public/Uploads/<?php echo ($pros["image1"]); ?>" height="660" width="660">
                        </a>
                    </div>
                    <div class="preview-booth" id="dd2" style="display:none">
                        <a href="javascript:;" id="J_imgBooth">
                            <img src="/Public/Uploads/<?php echo ($pros["image2"]); ?>" height="660" width="660">
                        </a>
                    </div>
                    <div class="preview-booth" id="dd3" style="display:none">
                        <a href="javascript:;" id="J_imgBooth">
                            <img src="/Public/Uploads/<?php echo ($pros["image3"]); ?>" height="660" width="660">
                        </a>
                    </div>
                    <ul class="preview-thumb clearfix" id="J_previewThumb">
                        <li class="current" onclick="fun(1)">
                            
                                <img src="/Public/Uploads/<?php echo ($pros["image1"]); ?>" width="110" height="110">
                           
                        </li>
                        <li class=""onclick="fun(2)">
                          
                                <img src="/Public/Uploads/<?php echo ($pros["image2"]); ?>" width="110" height="110">
                         
                        </li>
                        <li class=""onclick="fun(3)">
                          
                                <img src="/Public/Uploads/<?php echo ($pros["image3"]); ?>" width="110" height="110">
                         
                        </li>
                    </ul>
                        <!-- 商品阅览图选项卡 -->
                        <script type="text/javascript">
                                function fun(a){
                                    for(var i=1;i<=3;i++){
                                        //获取div
                                        var did = document.getElementById("dd"+i);
                                        //三元运算符
                                        did.style.display=(i==a)?"block":"none";
                                    }
                                }
                        </script>
                </div>
                <form action="/index.php/home/Cart/insert" method="post">
                <?php if($pros["cateid"] == 16): ?><div class="property" id="property">
                        <div class="property-hd">
                            <h1><input style="border:0px" type="text" name="proname" value="<?php echo ($pros["proname"]); ?>"></h1>
                            <p class="mod-info"><input style="border:0px" type="text" name="des" value="<?php echo ($pros["des"]); ?>"></p>
                            <p class="mod-price">
                                <em class="vm-yen">¥</em>
                                <span class="vm-price" id="J_price"><input style="border:0px;color:red;" type="text" name="price1" value="<?php echo ($pros["price"]); ?>"></span>
                            </p>
                        </div>
                            <dl class="property-sale">
                                <dt class="vm-metatit">网络类型:</dt>
                                <dd style="float:left">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                    <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["version"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd >&nbsp;
                                   <dd style="float:left;margin-left:3px">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                   <a href="javascript:viod(0)">
                                                         <span><?php switch($pros["version1"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>&nbsp;
                                     <dd style="float:left;margin-left:3px">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                   <a href="javascript:viod(0)">
                                                       <span><?php switch($pros["version2"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="property-sale" style="clear:left">
                                <dt class="vm-metatit">颜色分类:</dt>
                                <dd style="float:left;">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                   <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>&nbsp;
                                   <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color1"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                               <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color2"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="property-sale" style="clear:left">
                                <dt class="vm-metatit">机身内存:</dt>
                                <dd style="float:left;">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                     <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="111"><label for="111">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="222"><label for="222">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                                <input type="hidden" name="id" value='<?php echo ($pros["id"]); ?>'>
                                <input type="hidden" name="image1" value='<?php echo ($pros["image1"]); ?>'>
                                       <dd style="float:left;margin-left:3px">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                    <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom1"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="111"><label for="111">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="222"><label for="222">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                        <dl class="property-quantity" style="clear:both">
                            <dt class="vm-metatit">数量:</dt>
                            <dd class="clearfix">
                                <div class="property-quantity-control">
                                    <a title="减少" href="javascript:void(0);" onclick="funcc()" class="vm-minus" id="a1">-</a>

                                    <input type="text" name="num" value="1" id="input1">

                                    <a title="增加" href="javascript:void(0);" onclick="func()" class="vm-plus" id="a2">+</a>
                                    <!-- 购买数量 -->

                                </div>

                                <span id="J_Stock" class="vm-count">（限购5件）</span>
                            </dd>
                        </dl>
                        <dl class="property-info" id="propertyInfo">
                         
                            <dd class="mod-summary">
                               
                                <p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
                            </dd>
                            <dd class="mod-total">
                                总计:<em class="vm-price" id="J_totalPrice"><input style="border:0px;color:red;" type="text" name="price" id="input2" value="<?php echo ($pros["price"]); ?>"></em>
                            </dd>
                                <script type="text/javascript">
                                        var a1=document.getElementById('a1');
                                        var a2=document.getElementById('a2');
                                        var input=document.getElementById('input1');
                                        var input1=document.getElementById('input2');
                                        // var sum1=parseInt(1);
                                        function funcc(){
                                        if(input.value<=1){
                                       return false;
                                        } 
                                        parseInt(input.value=parseInt(input.value)-1);
                            parseInt(input1.value=parseInt(input1.value)-<?php echo ($pros["price"]); ?>+'.00'); 
                                        }
                                        function func(){  
                                         if(input.value>=5){
                                       return false;
                                        } 
                                         
                                       parseInt(input.value=parseInt(input.value)+1);
                                          parseInt(input1.value=parseInt(input1.value)+<?php echo ($pros["price"]); ?>+'.00');   
                                        }    
                                    </script>
                        </dl>
                        <dl class="property-buy" id="J_BuyOrDiy">
                            <dt class="vm-message" id="J_message"></dt>
                            <dd>
                                <input  type="image" src="/Public/home/details/img/gouwuche.jpg" value="加入购物车">      
                                <a href="/index.php/home/details/collection/id/<?php echo ($pros["id"]); ?>"><input type="button" value="★收藏" style="background:#3EADFC;border:0px;margin-left:30px;color:#fff;width:50px"></a>
       
                                                  </dd>
                        </dl>
                </div>

            </section>
        </div>
        <?php elseif($pros["cateid"] == 17): ?>
        
                <div class="property" id="property">
                        <div class="property-hd">
                            <h1><input style="border:0px" type="text" name="proname" value="<?php echo ($pros["proname"]); ?>"></h1>
                            <p class="mod-info"><input style="border:0px" type="text" name="des" value="<?php echo ($pros["des"]); ?>"></p>
                            <p class="mod-price">
                                <em class="vm-yen">¥</em>
                                <span class="vm-price" id="J_price"><input style="border:0px;color:red;" type="text" name="price1" value="<?php echo ($pros["price"]); ?>"></span>
                            </p>
                        </div>
                            <dl class="property-sale">
                                <dt class="vm-metatit">网络类型:</dt>
                                <dd style="float:left">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                    <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["version"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd >&nbsp;
                                   <dd style="float:left;margin-left:3px">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                   <a href="javascript:viod(0)">
                                                         <span><?php switch($pros["version1"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>&nbsp;
                                     <dd style="float:left;margin-left:3px">
                                    <ul data-property="网络类型" class="clearfix">
                                            <li data-value="14:43" title="公开版" class="selected">
                                                   <a href="javascript:viod(0)">
                                                       <span><?php switch($pros["version2"]): case "1": ?><input style="border:0px" type="radio" name="version" value="1" id="1"><label for="1">网通版</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="version" value="2" id="2"><label for="2">电信版</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="version" value="3" id="3"><label for="3">公开版</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="property-sale" style="clear:left">
                                <dt class="vm-metatit">颜色分类:</dt>
                                <dd style="float:left;">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                   <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>&nbsp;
                                   <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color1"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                               <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color2"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="11"> <label for="11">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="22"><label for="22">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="33"><label for="33">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl class="property-sale" style="clear:left">
                                <dt class="vm-metatit">机身内存:</dt>
                                <dd style="float:left;">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                     <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="111"><label for="111">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="222"><label for="222">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                                <input type="hidden" name="id" value='<?php echo ($pros["id"]); ?>'>
                                <input type="hidden" name="image1" value='<?php echo ($pros["image1"]); ?>'>
                                       <dd style="float:left;margin-left:3px">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                    <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom1"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="111"><label for="111">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="222"><label for="222">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                        <dl class="property-quantity" style="clear:both">
                            <dt class="vm-metatit">数量:</dt>
                            <dd class="clearfix">
                                <div class="property-quantity-control">
                                    <a title="减少" href="javascript:void(0);" onclick="funcc()" class="vm-minus" id="a1">-</a>

                                    <input type="text" name="num" value="1" id="input1">

                                    <a title="增加" href="javascript:void(0);" onclick="func()" class="vm-plus" id="a2">+</a>
                                    <!-- 购买数量 -->

                                </div>

                                <span id="J_Stock" class="vm-count">（限购5件）</span>
                            </dd>
                        </dl>
                        <dl class="property-info" id="propertyInfo">
                         
                            <dd class="mod-summary">
                               
                                <p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
                            </dd>
                            <dd class="mod-total">
                                总计:<em class="vm-price" id="J_totalPrice"><input style="border:0px;color:red;" type="text" name="price" id="input2" value="<?php echo ($pros["price"]); ?>"></em>
                            </dd>
                                <script type="text/javascript">
                                        var a1=document.getElementById('a1');
                                        var a2=document.getElementById('a2');
                                        var input=document.getElementById('input1');
                                        var input1=document.getElementById('input2');
                                        // var sum1=parseInt(1);
                                        function funcc(){
                                        if(input.value<=1){
                                       return false;
                                        } 
                                        parseInt(input.value=parseInt(input.value)-1);
                            parseInt(input1.value=parseInt(input1.value)-<?php echo ($pros["price"]); ?>+'.00'); 
                                        }
                                        function func(){  
                                         if(input.value>=5){
                                       return false;
                                        } 
                                         
                                       parseInt(input.value=parseInt(input.value)+1);
                                          parseInt(input1.value=parseInt(input1.value)+<?php echo ($pros["price"]); ?>+'.00');   
                                        }    
                                    </script>
                        </dl>
                        <dl class="property-buy" id="J_BuyOrDiy">
                            <dt class="vm-message" id="J_message"></dt>
                            <dd>
                                <input  type="image" src="/Public/home/details/img/gouwuche.jpg" value="加入购物车">      <a href="/index.php/home/details/collection/id/<?php echo ($pros["id"]); ?>"><input type="button" value="★收藏" style="background:#3EADFC;border:0px;margin-left:30px;color:#fff;width:50px"></a>
       
                                                  </dd>
                        </dl>
                </div>

            </section>
        </div>
         
         <?php elseif($pros["cateid"] == 32): ?>
         

                <div class="property" id="property">
                        <div class="property-hd">
                            <h1><input style="border:0px" type="text" name="proname" value="<?php echo ($pros["proname"]); ?>"></h1>
                            <p class="mod-info"><input style="border:0px" type="text" name="des" value="<?php echo ($pros["des"]); ?>"></p>
                            <p class="mod-price">
                                <em class="vm-yen">¥</em>
                                <span class="vm-price" id="J_price"><input style="border:0px;color:red;" type="text" name="price1" value="<?php echo ($pros["price"]); ?>"></span>
                            </p>
                        </div>
                           
                            
                            <dl class="property-sale" style="clear:left;margin-top:50px">
                                <dt class="vm-metatit">机身内存:</dt>
                                <dd style="float:left;">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                     <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="1"><label for="1">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="2"><label for="2">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                                
                                <input type="hidden" name="id" value='<?php echo ($pros["id"]); ?>'>
                                <input type="hidden" name="image1" value='<?php echo ($pros["image1"]); ?>'>
                                       <dd style="float:left;margin-left:3px">
                                    <ul data-property="机身内存" class="clearfix">
                                            <li data-value="13:36" title="16GB" class="selected">
                                                    <a href="javascript:viod(0)">
                                                        <span><?php switch($pros["rom1"]): case "1": ?><input style="border:0px" type="radio" name="rom" value="1" id="1"><label for="1">16G </label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="rom" value="2" id="2"><label for="2">32G </label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                        <dl class="property-quantity" style="clear:both;margin-top:50px">
                            <dt class="vm-metatit">数量:</dt>
                            <dd class="clearfix">
                                <div class="property-quantity-control">
                                    <a title="减少" href="javascript:void(0);" onclick="funcc()" class="vm-minus" id="a1">-</a>

                                    <input type="text" name="num" value="1" id="input1">

                                    <a title="增加" href="javascript:void(0);" onclick="func()" class="vm-plus" id="a2">+</a>
                                    <!-- 购买数量 -->

                                </div>

                                <span id="J_Stock" class="vm-count">（限购5件）</span>
                            </dd>
                        </dl>
                        <dl class="property-info" id="propertyInfo" style="clear:both;margin-top:50px">
                         
                            <dd class="mod-summary">
                               
                                <p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
                            </dd>
                            <dd class="mod-total">
                                总计:<em class="vm-price" id="J_totalPrice"><input style="border:0px;color:red;" type="text" name="price" id="input2" value="<?php echo ($pros["price"]); ?>"></em>
                            </dd>
                                <script type="text/javascript">
                                        var a1=document.getElementById('a1');
                                        var a2=document.getElementById('a2');
                                        var input=document.getElementById('input1');
                                        var input1=document.getElementById('input2');
                                        // var sum1=parseInt(1);
                                        function funcc(){
                                        if(input.value<=1){
                                       return false;
                                        } 
                                        parseInt(input.value=parseInt(input.value)-1);
                            parseInt(input1.value=parseInt(input1.value)-<?php echo ($pros["price"]); ?>+'.00'); 
                                        }
                                        function func(){  
                                         if(input.value>=5){
                                       return false;
                                        } 
                                         
                                       parseInt(input.value=parseInt(input.value)+1);
                                          parseInt(input1.value=parseInt(input1.value)+<?php echo ($pros["price"]); ?>+'.00');   
                                        }    
                                    </script>
                        </dl>
                        <dl class="property-buy" id="J_BuyOrDiy">
                            <dt class="vm-message" id="J_message"></dt>
                            <dd>
                                <input  type="image" src="/Public/home/details/img/gouwuche.jpg" value="加入购物车">     <a href="/index.php/home/details/collection/id/<?php echo ($pros["id"]); ?>"><input type="button" value="★收藏" style="background:#3EADFC;border:0px;margin-left:30px;color:#fff;width:50px"></a>  
      
                                                  </dd>
                        </dl>
                </div>

            </section>
        </div>
          <?php else: ?>
        
                       <input type="hidden" name="id" value='<?php echo ($pros["id"]); ?>'>
                                <input type="hidden" name="image1" value='<?php echo ($pros["image1"]); ?>'>
                <div class="property" id="property">
                        <div class="property-hd">
                            <h1><input style="border:0px" type="text" name="proname" value="<?php echo ($pros["proname"]); ?>"></h1>
                            <p class="mod-info"><input style="border:0px" type="text" name="des" value="<?php echo ($pros["des"]); ?>"></p>
                            <p class="mod-price">
                                <em class="vm-yen">¥</em>
                                <span class="vm-price" id="J_price"><input style="border:0px;color:red;" type="text" name="price1" value="<?php echo ($pros["price"]); ?>"></span>
                            </p>
                        </div>
               
                            <dl class="property-sale" style="clear:left ;margin-top:50px">
                                <dt class="vm-metatit">颜色分类:</dt>
                                <dd style="float:left;">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                   <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="1"> <label for="1">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="2"><label for="2">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="3"><label for="3">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>&nbsp;
                                   <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color1"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="1"> <label for="1">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="2"><label for="2">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="3"><label for="3">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                               <dd style="float:left;margin-left:3px">
                                    <ul data-property="颜色分类" class="clearfix">
                                            <li data-value="3:11" title="白色" class="selected" >
                                                    <a href="javascript:viod(0)">
                                                        
                                                           <span><?php switch($pros["color2"]): case "1": ?><input style="border:0px" type="radio" name="color" value="1" id="1"> <label for="1">白色</label><?php break;?>
                                                                <?php case "2": ?><input style="border:0px" type="radio" name="color" value="2" id="2"><label for="2">蓝色</label><?php break;?>
                                                                <?php case "3": ?><input style="border:0px" type="radio" name="color" value="3" id="3"><label for="3">金色</label><?php break; endswitch;?>
                                                       </span>
                                                    </a>
                                            </li>
                                    </ul>
                                </dd>
                            </dl>
                           
                        <dl class="property-quantity" style="clear:both">
                            <dt class="vm-metatit">数量:</dt>
                            <dd class="clearfix">
                                <div class="property-quantity-control">
                                    <a title="减少" href="javascript:void(0);" onclick="funcc()" class="vm-minus" id="a1">-</a>

                                    <input type="text" name="num" value="1" id="input1">

                                    <a title="增加" href="javascript:void(0);" onclick="func()" class="vm-plus" id="a2">+</a>
                                    <!-- 购买数量 -->

                                </div>

                                <span id="J_Stock" class="vm-count">（限购5件）</span>
                            </dd>
                        </dl>
                        <dl class="property-info" id="propertyInfo">
                         
                            <dd class="mod-summary">
                               
                                <p>本商品由 魅族 负责发货，并由 魅族 提供售后服务</p>
                            </dd>
                            <dd class="mod-total">
                                总计:<em class="vm-price" id="J_totalPrice"><input style="border:0px;color:red;" type="text" name="price" id="input2" value="<?php echo ($pros["price"]); ?>"></em>
                            </dd>
                                <script type="text/javascript">
                                        var a1=document.getElementById('a1');
                                        var a2=document.getElementById('a2');
                                        var input=document.getElementById('input1');
                                        var input1=document.getElementById('input2');
                                        // var sum1=parseInt(1);
                                        function funcc(){
                                        if(input.value<=1){
                                       return false;
                                        } 
                                        parseInt(input.value=parseInt(input.value)-1);
                            parseInt(input1.value=parseInt(input1.value)-<?php echo ($pros["price"]); ?>+'.00'); 
                                        }
                                        function func(){  
                                         if(input.value>=5){
                                       return false;
                                        } 
                                         
                                       parseInt(input.value=parseInt(input.value)+1);
                                          parseInt(input1.value=parseInt(input1.value)+<?php echo ($pros["price"]); ?>+'.00');   
                                        }    
                                    </script>
                        </dl>
                        <dl class="property-buy" id="J_BuyOrDiy">
                            <dt class="vm-message" id="J_message"></dt>
                            <dd>
                                <input  type="image" src="/Public/home/details/img/gouwuche.jpg" value="加入购物车">   <a href="/index.php/home/details/collection/id/<?php echo ($pros["id"]); ?>"><input type="button" value="★收藏" style="background:#3EADFC;border:0px;margin-left:30px;color:#fff;width:50px"></a>      
                                                  </dd>
                        </dl>
                </div>

            </section>
        </div><?php endif; ?>
        </form>
        <section class="row detail" id="detail">
            <div style="height:62px;">
                <div class="detail-tab" id="detailTabFixed">
                    <div class="fixed-container">
                        <ul class="clearfix">
                            <li class="current" id="did">
                                <a href="javascript:void(0)">商品详情</a>
                            </li>
                                <li id="lid">
                                    <a href="javascript:void(0)">商品评论</a>
                                </li>

                                
                        </ul>
                        <div class="shortcut trans">
                            <div class="mod-buy">
                                <a href="javascript:void(0);" id="J_btnBuyShortcut" class="btn btn-primary btn-lg"><i></i>现在购买</a>
                            </div>
                            <div class="mod-total">
                                总计:<em class="vm-price" id="J_totalPriceShortcut">￥599.00</em>
                            </div>
                            <div class="mod-title">
                            魅蓝2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail-content container">
                <div class="introduce current" id="introduce" style="display:none;">
                        <img class="lazy" data-original="/Public/home/details/img/1451371311-22741.jpg" width="1240" alt="" src="/Public/home/details/img/1451371311-22741.jpg" style="display: inline;">
                        <img class="lazy" data-original="/Public/home/details/img/1451371325-70841.jpg" width="1240" alt="" src="/Public/home/details/img/1451371325-70841.jpg" style="display: inline;">
                        <img class="lazy" data-original="/Public/home/details/img/1451371339-99629.jpg" width="1240" alt="" src="/Public/home/details/img/1451371339-99629.jpg" style="display: inline;">
                        <img class="lazy" data-original="/Public/home/details/img/1451371355-50755.jpg" width="1240" alt="" src="/Public/home/details/img/1451371355-50755.jpg" style="display: inline;">
                        <img class="lazy" data-original="/Public/home/details/img/1451371368-29830.jpg" width="1240" alt="" src="/Public/home/details/img/1451371368-29830.jpg" style="display: inline;">
                        
                </div>

                        <div class="question" id="question" style="display: block;">
                        <div class="question-list">
                            <h2>商品评论</h2>
                            <?php if(is_array($data)): foreach($data as $key=>$va): ?><dl class="mod-item">
                                    <dt class="vm-question" style="font-size:12px;">
                                    用户名:&nbsp;&nbsp;&nbsp;<?php echo ($va["username"]); ?>
                                    </dt>
                                    <dd class="vm-answer">
                                    评论:<br /><?php echo ($va["des"]); ?>
                                    </dd>
                                </dl><?php endforeach; endif; ?>
                        </div>
                    </div>
            </div>
            <script type="text/javascript">
                        var lid = document.getElementById("lid");
                        var introduce = document.getElementById("introduce");
                        var question = document.getElementById("question");
                        var did = document.getElementById("did");
                          did.onclick=function(){
                                   introduce.style.display="block";
                                   question.style.display="none";
                            }
                            lid.onclick=function(){
                                   introduce.style.display="none";
                                   question.style.display="block";
                            }
                    </script>
        </section>
    </main>
    <input type="hidden" name="curr_microtime" id="curr_microtime" value="1459049673948">
    <script charset="utf-8" src="/Public/home/details/js/v.js"></script><script src="/Public/home/details/js/hm.js"></script><script type="text/javascript" src="/Public/home/details/js/flow.js"></script><script src="/Public/home/details/js/analytics-min.js"></script><script id="J_packageTmpl" type="text/x-tmpl">
        <ul class="clearfix">
            <% for(var i = 0, length = items.length; i < length; i++) { %>
            <li>
                <p class="vm-pic">
                    <img src="<%= items[i].cells[items[i].recommend].images + '@80x80.jpg' %>" width="80" height="80" alt="<%= items[i].cells[items[i].recommend].names %>">
                </p>
                <p class="vm-tit">
                    <%= items[i].name %>
                </p>
                <div class="vm-prop">
                    <% if (items[i].saleAttrs ) { %>
                        <% for (var p in items[i].saleAttrs) { %>
                            <p>
                                <% for (var j = 0, length2 = items[i].saleAttrs[p].length; j < length2; j++) { %>
                                    <% if (!items[i].saleAttrs[p][j].imageColor || length2 === 1) { %>
                                        <a class="vm-prop-text <% if (items[i].recommend === p + ':' + items[i].saleAttrs[p][j].id) { %>selected<% } %>" href="javascript:;" data-sku="<%= items[i].cells[p + ':' + items[i].saleAttrs[p][j].id].skuId %>" data-sid="<%= items[i].id %>" data-key="<%= p + ':' + items[i].saleAttrs[p][j].id %>" title="<%= items[i].saleAttrs[p][j].name %>">
                                            <span><%= items[i].saleAttrs[p][j].name %></span>
                                        </a>
                                    <% } else { %>
                                        <a class="vm-prop-img <% if (items[i].recommend === p + ':' + items[i].saleAttrs[p][j].id) { %>selected<% } %>" href="javascript:;" data-sku="<%= items[i].cells[p + ':' + items[i].saleAttrs[p][j].id].skuId %>" data-sid="<%= items[i].id %>" data-key="<%= p + ':' + items[i].saleAttrs[p][j].id %>" title="<%= items[i].saleAttrs[p][j].name %>">
                                            <img class="vm-prop-sale" src="<%= items[i].saleAttrs[p][j].imageColor %>" width="16" height="16" >
                                       </a>
                                    <% } %>
                                <% } %>
                            </p>
                        <% } %>
                    <% } %>
                </div>
            </li>
            <% } %>
        </ul>
    </script>

    <script type="text/javascript">
        //商品源数据
        var MZ = {};
        MZ.modelData = {"recommend":"14:43;3:11;13:36","shelveMethod":1,"shelveTime":null,"cspuMap":{"14:43;3:11;13:36":{"cspuId":73,"skuId":329,"price":599.00,"names":"魅蓝2 公开版 白色 16GB","images":["/Public/home/details/img/1453884271-20264.png","/Public/home/details/img/1450332831-67349.png","/Public/home/details/img/1450332904-16654.png","/Public/home/details/img/1450332877-94122.png"],"stock":0,"packageIds":[],"buyButton":"售罄","priceCent":59900}},"packageMap":{},"packageStockMap":{"14:43;3:11;13:36+0":{"skuId":329,"stock":0,"buyButton":"售罄"}},"packageItems":{},"skuMap":{"329":"14:43;3:11;13:36+0"}}
    </script>

<!-- common footer -->

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
<script charset="utf-8" src="/Public/home/details/js/site-lib.js"></script>
<script type="text/javascript" src="/Public/home/details/js/site-base.js"></script>
<script>var $=require("common:lib/jquery/jquery-1.11.3");require("common:lib/jquery/jquery-migrate-1.2.1"),window.$=$,window.jQuery=$,window.jquery=$,$(function(){require("common:widgets/site-topbar/topbar"),require("common:widgets/site-header/header")});</script>

<script>
    var __mzt = __mzt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "http://sccom.res.meizu.com/js/analytics-min.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<script type="text/javascript">
    (function() {
        var ga = document.createElement('script'), s;
        ga.type = 'text/javascript';
        ga.src = ('https:' == document.location.protocol ? 'https://tongji-res.meizu.com' : 'http://tongji-res1.meizu.com') + '/resources/tongji/flow.js';
        s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?2a0c04774115b182994cfcacf4c122e9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


<div class="site-gotop" id="siteGotop" style="opacity: 0; display: block;">
    <a class="gotop-suggest" title="建议反馈" href="http://store.meizu.com/member/suggest/index" target="_blank"></a>
    <div class="gotop-arrow" title="回到顶部">
    </div>
</div>
</body>
</html>