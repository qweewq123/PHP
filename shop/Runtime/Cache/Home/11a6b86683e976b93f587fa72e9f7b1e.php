<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>魅族官网前台登陆系统</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="/Public/home/login/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/Public/home/login/images/login.js"></script>
<link href="/Public/home/login/css/login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
     <div class="img1"><a href="/index.php/home/Index/index"><img src="/Public/home/login/images/myface.jpg"></div></a>
  <h1>账号登陆</h1>
<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height:330px; width:400px">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form" >
				<form action="/index.php/home/login/cklogin" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="id" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label style="font-size:10px" class="input-tips" for="u">用户名：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="u" name="username" class="inputstyle" placeholder="请输入用户名"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label style="font-size:10px" class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" placeholder="请输入密码" id="p" name="password" class="inputstyle"/>
                </div>
                </div>
                <div class="uinArea" id="uinArea">
                <label style="font-size:10px" class="input-tips" for="u">验证码：</label>
                <div class="inputOuter" id="uArea">
                    
                <input type="text" id="u" placeholder="请输入验证码" name="code" class="inputstyle"/>
               
                </div>
                
                  
                </div>
                <div style="width:300px;margin-left:50px">
                 <img style="width:200px" src="/index.php/home/login/createCode"onclick="this.src='/index.php/home/login/createCode/id='+Math.random()" ></div>
                

                <div style="padding-left:50px;margin-top:25px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
   
    <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="/index.php/home/login/zhuce" method="post">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user" style="font-size:10px" class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="user" name="username" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                        <li>
                    
                    <label for="user" style="font-size:10px" class="input-tips2">性别：</label>
                    <div class="inputOuter2">

                        <input type="radio" value="1" name="sex"  />男
                        <input type="radio" value="1" name="sex"  />女
                    </div>
                    
                </li>
                <li>
                <label for="passwd" style="font-size:10px" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd"  name="password" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                <li>
                <label for="passwd" style="font-size:10px" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="repass" maxlength="16" class="inputstyle2" />
                    </div>
                    
                </li>
            
                
                <li>
                    <div class="inputArea">
                        <input type="button" id="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册"/> 
                    </div>
                    
                </li><div class="cl"></div>
            </ul></form>
           
    
    </div>
   
    
    </div>
    <!--注册end-->

</body></html>