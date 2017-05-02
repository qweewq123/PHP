<?php
namespace Admin\Controller;
use Think\Controller;
class DetailsController extends CommonController {

    //用户详情
    public function index(){
        //实例化用户详情表
        $user=M('Details');
        $id=I('get.id');
        $row=$user->where("oid=".$id)->select();
        $this->assign('row',$row);
        $this->display();
    }

    //删除用户详情
     public function detailsDel(){
        $model = M('details');
        $res = $model->where('id='.I('get.id'))->delete();
            if($res){
                $this->success('用户删除成功',U('orders/index'));
            }else{
                $this->error('用户删除失败',U('orders/index'));
            }
        }
    }
