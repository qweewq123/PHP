<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	
	//显示登录页面
    public function index(){
       $this->display();
    }
	
	public function ckLogin(){
		//接收post传来的验证码
		$code=I('post.code');
	
		//验证码的验证
		$verify = new \Think\Verify();  
		$result=$verify->check($code);

			if( !$result){
				$this->error('验证码错误',U('Login/index')); 
		    }

		//实例化用户表
		$model = M('users');
		$param = [];
		$param['username'] = I('post.username'); 
		$param['password'] = md5(I('post.password')); 
		$userInfo = $model->where($param)->find();
		
		if($userInfo){
			//验证通过
			//读取用户的所有权限信息
			$role=M('role');//实例化角色表的Model类
			//读取role表中所有的角色的权限
			$allpower=$role->field('rp')->where('rid in ('.$userInfo['ur'].')')->select();
			//将获取的角色的权限进行合并操作
			foreach($allpower as $value){
				//字符串连接
				$powers.=$value['rp'].',';
			}

			//移除右侧的,
			$powers=rtrim($powers,',');
			
			//将权限字符串变成数组
			$powerArr=explode(',',$powers);


			//将权限ID写入SESSION
			$_SESSION['power']=$powerArr;

			//默认查询启用的用户
			if($userInfo['state'] == 1){
				$this->assign('msg','对不起 ,您不是后台管理员！');
				$this->display('index');
				exit;
			}
			//把用户信息放入session
			session('uname',$userInfo['username']);
			session('uId',$userInfo['id']);
			$_SESSION['sex1']=$userInfo['sex'];
            session('islogin1',true);
			header('location:'.U('Index/dashboard'));
		}else{
			$this->assign('msg','账户名或密码错误,请确认！');
			$this->display('index');
		}
	}

	//生成验证码的方法
	public function createCode(){
		
		$Verify = new \Think\Verify();
		//调整验证码的格式
		$Verify->codeSet = '0123456789'; 
		$Verify->imageW = '150';
		$Verify->imageH = '50';
		$Verify->fontSize = 20;
		$Verify->length = 3;
		$Verify->useImgBg = true; 
		$Verify->entry();
	}
	
	
}