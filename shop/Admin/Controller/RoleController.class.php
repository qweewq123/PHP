<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends CommonController {

	public function index(){
        //实例化角色表
		$role=M('role');
        //查看所有角色
		$data=$role->select();
        //分配变量 在首页全部显示出来
		$this->assign('data',$data);
    	$this->display();    
	}
	
	public function roleAdd(){
		$this->display();
	}
    public function roleSave(){
        //添加角色
        $role=M('role');
        $arr=I('post.');
        $role->create();
        if($role->add($arr)){
            $this->success('角色添加成功',U('Role/index'),1);
        }else{
            $this->error('角色添加失败',U('Role/index'),1);
        }
        
    }


	public function roleEdit(){
        //查询出要修改的角色
        $model=M('role');
        $res=$model->where('rid='.I('get.rid'))->find();
        //分配变量
        $this->assign('res',$res);
		$this->display();
	}

	public function roleUpdate(){
        //修改角色信息
     
         $model=M('role');
         $model->create();
         $result=$model->where("rid=".I('post.rid'))->save($arr);
         if($result){
               $this->success('角色修改成功',U('Role/index'),1);
            }else{
                $this->error('角色修改失败',U('Role/index'),1);
            }

    	}
        public function roledel(){
            //删除角色
            $model=M('role');
            $res=$model->where('rid='.I('get.rid'))->delete();
            if($res){
               $this->success('角色删除成功',U('Role/index'),1);
            }else{
                $this->error('角色删除失败',U('Role/index'),1);
            } 

        }
}