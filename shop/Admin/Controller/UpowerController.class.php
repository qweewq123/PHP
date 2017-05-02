<?php
namespace Admin\Controller;
use Think\Controller;
class UpowerController extends CommonController {
public function index(){
        //实例化角色表
        $upower=M('users');
        //查看所有角色
        $data=$upower->where('state=2')->select();
        //分配变量 在首页全部显示出来
        $this->assign('data',$data);
        $this->display();    
    }
    

    public function upowerEdit(){
        //查询出要修改的角色
        $model=M('users');
        $res=$model->where('id='.I('get.id'))->find();
        //分配变量
        $this->assign('res',$res);
        $this->display();
    }

    public function upowerUpdate(){
        //修改角色信息
     
         $model=M('users');
         $model->create();
         $result=$model->where("id=".I('post.id'))->save();
         if($result){
               $this->success('角色修改成功',U('upower/index'),1);
            }else{
                $this->error('角色修改失败',U('upower/index'),1);
            }

        }

}