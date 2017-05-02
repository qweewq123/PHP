<?php
namespace Admin\Controller;
use Think\Controller;
class PowerController extends CommonController {

    public function index(){
        //实例化角色表
        $power=M('power');
        //查看所有角色
        $data=$power->select();
        //分配变量 在首页全部显示出来
        $this->assign('data',$data);
        $this->display();    
    }
    
    //权限添加页面
    public function powerAdd(){
        $this->display();
    }

    //添加角色方法
    public function powerSave(){
        //添加角色
        $power=M('power');
        $arr=I('post.');
        $power->create();
        if($power->add($arr)){
            $this->success('角色添加成功',U('power/index'),1);
        }else{
            $this->error('角色添加失败',U('power/index'),1);
        }
        
    }

    //显示修改角色页面
    public function powerEdit(){
        //查询出要修改的角色
        $model=M('power');
        $res=$model->where('pid='.I('get.pid'))->find();
        //分配变量
        $this->assign('res',$res);
        $this->display();
    }

    //修改角色信息方法
    public function powerUpdate(){
        //修改角色信息
        $model=M('power');
        $model->create();
        $result=$model->where("pid=".I('post.pid'))->save($arr);

            if($result){
               $this->success('角色修改成功',U('power/index'),1);
            }else{
                $this->error('角色修改失败',U('power/index'),1);
            }

    }

    //删除角色方法
    public function powerdel(){
        //删除角色
        $model=M('power');
        $res=$model->where('pid='.I('get.pid'))->delete();

            if($res){
               $this->success('角色删除成功',U('power/index'),1);
            }else{
                $this->error('角色删除失败',U('power/index'),1);
            } 
    }
}