<?php
namespace Home\Controller;
use Think\Controller;
class CommentsController extends Controller {

  //插入评论方法
  public function insert(){
    //获取数据
    $data=array();
    $data['proid']=I('post.proid');
    $data['proname']=I('post.proname');
    $data['des']=I('post.des');
    $data['username']=session('username');
    $data['uid']=session('userId');
    //实例化评论表
    $comments=M('comments');
    $comments->create();
    //插入评论数据
    $res=$comments->add($data);
    //判断是否插入成功
    if($res){
      $this->success('评论成功',U('Details/index','id='.I('post.proid')));
    }
  }
}