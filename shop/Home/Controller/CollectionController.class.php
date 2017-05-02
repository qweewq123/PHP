<?php
namespace Home\Controller;
use Think\Controller;
class CollectionController extends Controller {

    public function index(){
        //判断用户名是否存在
        if(!session('?username')){
            session('collection','334');
            header('location:'.U('Login/index'));
        }
        //遍历收藏
        $collection=M('collection');
        $coll=$collection->where('uid='.I('session.userId'))->select();
        $this->assign('res',$coll);
        $this->display();
    }

     //删除收藏方法
    public function del(){
    //取消收藏
    $collection=M('collection');
    
    $collection->where('id='.I('get.id'))->delete();
    header('location:'.U('Collection/index'));

  }
}