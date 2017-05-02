<?php
namespace Admin\Controller;
use Think\Controller;
class VipdetailsController extends CommonController {

    //显示
    public function index(){
        //实例化用户表
        $user=D('users');
        //接收传过来的id
        $id=I('get.id');
        //使用关联查询操作
        $row=$user->relation(true)->where("id=".$id)->FIND();
        $this->assign('row',$row['vipdetails']);
        $this->display();

    }

    //删除用户详情
     public function VipdetailsDel(){
        
        //实例化用户详情表
        $model = M('vipdetails');
        $res = $model->where('id='.I('get.id'))->delete();

        if($res){
            $this->success('用户删除成功',U('User/index'));
        }else{
            $this->error('用户删除失败',U('User/index'));
        }
    }

}