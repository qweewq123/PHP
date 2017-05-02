<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	
	//Common类中自动执行的哦方法
	public function _initialize(){
		//做登录验证
		if(!session('?uname')){
			header('location:'.U("login/index"));
			
		}

		//用户显示列表方法权限判断
		if(strtolower(CONTROLLER_NAME)=='user' && strtolower(ACTION_NAME) =='index'&& !in_array(1,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='goods' && strtolower(ACTION_NAME) =='index'&& !in_array(2,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
      	if(strtolower(CONTROLLER_NAME)=='cates' && strtolower(ACTION_NAME) =='index'&& !in_array(3,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		 if(strtolower(CONTROLLER_NAME)=='orders' && strtolower(ACTION_NAME) =='index'&& !in_array(4,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='connection' && strtolower(ACTION_NAME) =='index'&& !in_array(5,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='img' && strtolower(ACTION_NAME) =='index'&& !in_array(6,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='role' && strtolower(ACTION_NAME) =='index'&& !in_array(7,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='power' && strtolower(ACTION_NAME) =='index'&& !in_array(8,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='upower' && strtolower(ACTION_NAME) =='index'&& !in_array(9,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}
		if(strtolower(CONTROLLER_NAME)=='state' && strtolower(ACTION_NAME) =='index'&& !in_array(10,I('session.power'))){
			
			$this->error('您没有操作权限',U('Index/index'),1);
		}		
	}

	//退出操作
	public function loginOut() {
		//清空session
        session(null);
		setCookie('uname',null,time(),'/');
        header('location:'.U("login/index"));
    }
}