<?php
namespace Admin\Controller;
use Think\Controller;
class ordersController extends CommonController {

    //显示订单方法
    public function index(){

        $order = M('orders');
        $where = [];
        //用户名条件搜索
        if(!empty($_GET['getman'])){
          $where['getman'] = array('like','%'.$_GET['getman'].'%');
        }
        $total=$order->where($where)->count();
        
        //实例化分页类
        $page=new \Think\Page($total,5);
        $this->assign('show',$page->show());
        $data=$order->where($where)->page(I('get.p',1),5)->select();
        $this->assign('data',$data);
        $this->display();


    }
     
    //显示订单方法
    public function ordersedit(){
 
      //实例化
      $info=M('orders');
      //接受get传过来的id
      $id=I('get.id');
      //根据id进行单条数据查询
      $data=$info->find($id);
      //分配变量
      $this->assign('data',$data);	
      //输出模板
      $this->display();

    }

    //修改订单方法
    public function ordersupdate(){
      //接收修改数据
       $param['phonenum'] = I('post.phonenum');
      $param['getman'] = I('post.getman');
      $param['code'] = I('post.code'); 
      $param['address'] = I('post.address'); 
      $param['state'] = I('post.state'); 
      $param['addtime'] = time(); 
      $param['id'] = I('post.id'); 
    	//实例化
    	$info=M('orders');
    	//创建数据对象
    	$res=$info->create();	
    	$result=$info->where("id=".$param['id'])->save($param);

    			if($result){
    				$this->success('修改成功',U('orders/index'));
    			}else{
    				$this->error('修改失败',U('orders/edit'));
    			}
    	
    	}

    //删除
    public function ordersdel(){
    	//实例化
    	$order=M('orders');
    	//接受传递过来的id值
    	$id=I('get.id');
      $model = M('details');
      //同时删除他的订单
      $res=$order->delete($id);
      $res1 = $model->where('oid='.$id)->delete();
      
    	  if($res){
    			$this->success('删除成功',U('orders/index'));
    		}else{
    			$this->error('删除失败');
    		}
    	}
    }
?>