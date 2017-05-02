<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {

    //显示用户列表方法
    public function index(){
        $user = M('users');
        $where = [];
        //用户名条件搜索
        if(!empty($_GET['username'])){
          $where['username'] = array('like','%'.$_GET['username'].'%');
        }
        $total=$user->where($where)->count();
        
        //实例化分页类
        $page=new \Think\Page($total,5);
        $this->assign('show',$page->show());
        $data=$user->where($where)->page(I('get.p',1),5)->select();
        $this->assign('data',$data);
        $this->display();
    }

    //添加用户操作方法
	  public function userSave(){
          
      //验证两次密码是否一致
      if(I('post.password')==I('post.reqPwd')){
          //将获取的用户表单中的数据插入数据库
          //实例化Model类

          //拼装用户信息条件
          $param = [];
		      $param['username'] = I('post.username'); 
		      $param['password'] = md5(I('post.password')); 
		      $param['state'] = I('post.state'); 
		      $param['sex'] = I('post.sex'); 
		      $param['addtime'] = time(); 
          $user = M('Users');
          //创建对象
          $user->create();

            //判断用户是否添加成功
            if($user->add($param)){
              //添加成功，跳转到用户列表
              $this->success('添加用户成功！','index');
            }else{
              //添加失败//跳转回注册页面即可 
              $this->error('添加用户失败！','index');
            }

          }else{//判断 如果两次密码输入不一致

            //跳转回注册页面即可 
            $this->error('两次密码不一致，请重新注册','index');
            
          }
    }


	  //用户添加页面
	  public function userAdd(){
    	$this->display();
    }


    // 跳转修改页面
    public function userEdit(){
      $model = M('users');
      $data = $model->where('id='.I('get.id','intval'))->find();
      $this->assign('data',$data);
      $this->display();
    }
    
    //用户修改操作方法
    public function userUpdate(){
        //实例化用户表
        $model = M('users');
        $res = $model->create();

        //拼装用户修改信息
        $param = [];
        $param['username'] = I('post.username'); 
        $param['state'] = I('post.state'); 
        $param['sex'] = I('post.sex'); 
        $param['addtime'] = time(); 

        if($res){
          $result=$model->where("id=".$res['id'])->save($param);

            if($result){//判断用户是否修改成功
              $this->success('修改成功',U('User/index'));
            }else{
              $this->error('修改失败');
            }

        }else{
          $this->error($model->getError());
        }
    }


    //用户删除方法
    public function userDel(){

    	$model = M('users');
      $model1=M('Vipdetails');

    	$res = $model->where('id='.I('get.id'))->delete();
      //同时删除他的用户详情
      $res1=$model1->where('uid='.I('get.id'))->delete();

    	if($res){
    		$this->success('用户删除成功',U('User/index'));
    	}else{
    		$this->error('用户删除失败',U('User/index'));
    	}
    }
    
}