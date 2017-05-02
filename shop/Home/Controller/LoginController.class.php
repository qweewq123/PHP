<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
          $state=M('state');
       $res=$state->find();
       if($res['type']==2){
        header('location:'.U('State/index'));
       }
    	$this->display();
	}

	//生成验证码的方法
	public function createCode(){
		
		$Verify = new \Think\Verify();
		//调整验证码的格式
		$Verify->codeSet = '0123456789'; 
		$Verify->imageW='200';
		$Verify->imageH='50';
		$Verify->fontSize = 30;
		$Verify->length   = 3;
		// $Verify->useImgBg = true; 
		$Verify->entry();
	}


	public function ckLogin(){

		$code=I('post.code');
		//验证码的验证
		$verify = new \Think\Verify();  
		$result=$verify->check($code);
		if( !$result){ 
			$this->error('验证码错误',U('Login/index')); 
		}
		$model = M('users');
		$param = [];
		$param['username'] = I('post.username'); 
		$param['password'] = md5(I('post.password')); 
		//判断用户是否存在
		$userInfo = $model->where($param)->find();
		
		if($userInfo){
			
			//判断是否从购物车的登录
			if(session('?car')){
		    	session('username',$userInfo['username']);
				session('userId',$userInfo['id']);
				session('cart1',session('cart1'));
				$_SESSION['sex']=$userInfo['sex'];
             	session('car1',session('cart2'));
             	$id=session('car1');
            	$_SESSION['login']=2;
            //判断是否从详情提交到购物车的时候
            if(session('?car1')){
              	header('location:'.U('Details/index','id='.$id));
              	die;
              }
            	header('location:'.U('Cart/index'));
             	die;

			}
			//判断是否直接进入收藏中心
			if(session('?collection')){
           		header('location:'.U('Collection/index'));
			}

			//判断是否直接进入中心
			if(session('?center')){
           		header('location:'.U('Center/index'));
			}
		    session('username',$userInfo['username']);
			session('userId',$userInfo['id']);
			$_SESSION['sex']=$userInfo['sex'];
            $_SESSION['login']=2;
			
			$this->success('登陆成功',U('index/index'));
		}else{
			
			$this->error('账户名或密码错误,请确认','index');
		}
	}
	//注册
	public function zhuce(){
    $model=M('users');
    $param=[];
    $param['username']=I('post.username');
    $param['state']=1;
    $param['password']=md5(I('post.password'));
    $param['sex']=(I('post.sex'));
    $param['addtime'] = time(); 
    $id1= "'".$param['username']."'";
    //判断用户名是否存在
    $na = $model->where('username='.$id1)->find();

    if($na){
    	$this->error('用户名已存在,请重新注册','index');
    }
     //添加用户
     $model->create();

    if($model->add($param)){
    	//添加成功，跳转到用户列表
      	$this->success('用户注册成功,请登录！','index');
    }else{
       //添加失败//跳转回注册页面即可 
       $this->error('注册失败！','index');
    }
	}

	//退出
	public function goout(){
		//清空所有session
    	session(null);
    	setCookie('username',null,time(),'/'); //清空用户名
    	setCookie('userId',null,time(),'/');   //清空用户id
    	setCookie('sum',null,time(),'/');	   //清空总金额session
    	setCookie('oid',null,time(),'/');	   //清空点单号
    	header('location:'.U('Index/index')); 
	}
	
}