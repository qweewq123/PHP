<?php
namespace Admin\Controller;
use Think\Controller;
class ConnectionController extends CommonController {
    //显示
    public function index(){
          $connect = M('Connection');
          $where = [];
          //用户名条件搜索
          if(!empty($_GET['name'])){
            $where['name'] = array('like','%'.$_GET['name'].'%');
          }
          $total=$connect->where($where)->count();
        
          //实例化分页类
          $page=new \Think\Page($total,5);
          $this->assign('show',$page->show());
          $data=$connect->where($where)->page(I('get.p',1),5)->select();
          $this->assign('data',$data);
          $this->display();
      }


    //添加友情链接方法
	  public function connectionSave(){
 
          $connect = M('Connection');
          $connect->create();
          if($connect->add()){
            //添加成功，跳转到友情连接列表
            $this->success('添加成功！','index');
          }else{
            //添加失败  跳转回添加友情连接页面即可 
            $this->error('添加失败！','index');
          }    
      }
    


	  //友情链接添加页面
	  public function connectionAdd(){
    	$this->display();
    }




    // 跳转修改友情链接页面
    public function connectionEdit(){
      $model = M('Connection');
      $data = $model->where('id='.I('get.id','intval'))->find();
      $this->assign('data',$data);
      $this->display();
    }
    

    // 修改友情链接操作

    public function connectionUpdate(){
      $model = M('Connection');
      $res = $model->create();
      $result=$model->where("id=".I('post.id'))->save();
      if($result){
        $this->success('修改成功',U('Connection/index'));
      }else{
        $this->error('修改失败',U('Connection/index'));
      }

    }


   //删除友情链接方法
     public function connectionDel(){

    	$model = M('Connection');
    	$res = $model->where('id='.I('get.id'))->delete();
    	  if($res){
    		  $this->success('友情链接删除成功',U('Connection/index'));
    	  }else{
    		  $this->error('友情链接删除失败',U('Connection/index'));
    	  }
      }
    
}