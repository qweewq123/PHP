<?php
namespace Home\Controller;
use Think\Controller;
class CommomController extends Controller {
	
	//Commom类中自动执行的方法
	public function _initialize(){
	
            
      //判断是否登录
      if(!session('?username')){
            //接受详情传到购物车的信息
	      $car=array();
            $car['id']=I('post.id');
	      $car['uid']=I('session.userId');
            $car['proname']=I('post.proname');
            $car['price1']=I('post.price1');
            $car['price']=I('post.price');
            $car['num']=I('post.num');
            $car['image1']=I('post.image1');
            //把商品id存在session里面
            $id=$car['id'];
            session('cart2',$id);
            session('cart2');
            //设置一个sessioncar 便于登录判断 
            session('car','2');
            session('car');
            
            
	      $this->error('请登录',U('Login/index'));
			
	}

      

		
}}