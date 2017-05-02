<?php
namespace Home\Controller;
use Think\Controller;
class CartController extends CommomController {
    public function index(){
        //实例化购物车表
        $car= M('car');
        //查询出当前用户登录时购物车的商品
        $cart=$car->where('uid='.I('session.userId'))->select();
        //把查出来的商品信息放入session,
        session('cart2',$cart);
        //求购物车中所有商品的和    
        $sums=$car->field('price')->where('uid='.I('session.userId'))->select();
        $arr="";
        foreach ($sums as $key => $value) {
          $arr.=$value['price'].",";
        }
        $arr1=rtrim($arr,',');
        $arr2=explode(',',$arr1);
        $sum=array_sum($arr2);

        //分配变量
        $this->assign('sum',$sum);
        $this->assign('cart1',$cart);
        $this->display();
	  }

	public function insert(){
      //实例化购物车
      $car1= M('car');
      //把详情存在一个数据里面
      $car=array();
      $car['proid']=I('post.id');
	    $car['uid']=I('session.userId');
      $car['proname']=I('post.proname');
      $car['price1']=I('post.price1');
      $car['price']=I('post.price');
      $car['num']=I('post.num');
      $car['color']=I('post.color');
      $car['version']=I('post.version');
      $car['rom']=I('post.rom');
      $car['image1']=I('post.image1');
      $id1= "'".$car['proname']."'";

      //判断用户名是否存在
      $na = $car1->where('proname='.$id1)->find();
      if($na){
        $car1->where('proname='.$id1)->save($car);
        header('location:'.U('Cart/index'));
      }

      //加入购物车表
      $car1->create();
      if($car1->add($car)){
          header('location:'.U('Cart/index'));
      }else{
          $this->error('加入购物车失败',U('Index/index'));
      }
	}

   public function delete(){
    //删除单个
    $del=M('car');
    if(I('get.id')){
      $del->where('proid='.I('get.id'))->delete();
      header('location:'.U('Cart/index'));
      //清空当前用户的购物车
    }else{
      $del->where('uid='.I('session.userId'))->delete();
      header('location:'.U('Cart/index'));}
    }
  }