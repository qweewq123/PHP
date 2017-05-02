<?php
namespace Home\Controller;
use Think\Controller;
class StsController extends Controller {

    public function index(){    
        //判断用户是否登录
        if(!session('?username')){
        header('location:'.U('Index/index'));die;
    }

      //判断是否从确认订单页进来的
      $sum=session('sum');
      //判断是否通过url进入 不让进
      if(!session('?sum')){
        header('location:'.U('Index/index'));
        die;
      }

        $oid=session('oid');
        $this->assign('sum',$sum);
        $this->assign('oid',$oid);
    	  $this->display();	
	}

	public function insert(){
    session('sum',I('post.sum'));
     
		//插入订单
    $order=M('orders');
    $car=M('car');
    //查询数据订单数量
    $total=$car->where('uid='.I('session.userId'))->count();
    $orderss=$order->select();
    
    $arr=array();
    $arr['uid']=I('session.userId');
    $arr['getman']=I('post.getman');
    $arr['phonenum']=I('post.phonenum');
    $arr['code']=I('post.code');
      //连接地址
      //遍历地址表;把地址合并成一个字符串
      $area=M('area');
      $province=$area->field('name')->where('id='.I('post.province'))->find();
      $city=$area->field('name')->where('id='.I('post.city'))->find();
      $county=$area->field('name')->where('id='.I('post.county'))->find();
      $xiang=$area->field('name')->where('id='.I('post.xiang'))->find();
      $pro=implode(',',$province);
      $ci=implode(',',$city);
      $county=implode(',',$county);
      $xian=implode(',',$xiang);
      $addre= $pro.$ci.$county.$xian.I('post.address');
      $arr['address']=$addre;
      $arr['state']=1;
      $arr['total']=$total;
      $arr['addtime']=time();
      $order->create();

      //获取订单id  刚刚插入的id
      $lastInsId=$order->add($arr);
      $oid=array("oid"=>$lastInsId);
      session('oid',$lastInsId);
       
      //插入订单详情
      
      $details=M('details');
      $cart2=I('session.cart2');
      $arr=array();
      //把订单id插入到￥cart2中
      foreach ($cart2 as $key => $value) {
        $arr=(array_merge($value,$oid));
        	$details->create();
            $details->add($arr);   
      }

      //个人中心
      //插入用户详情 插入第一条订单信息
       
      $vipdetails=M('vipdetails');
       
      $vipd=array();
      $vipd['uid']=I('session.userId');
      $vipd['getman']=I('post.getman');
      $vipd['phonenum']=I('post.phonenum');
      $vipd['code']=I('post.code');
      //连接地址
      //遍历地址表;把地址合并成一个字符串
      $area=M('area');
      $province=$area->field('name')->where('id='.I('post.province'))->find();
      $city=$area->field('name')->where('id='.I('post.city'))->find();
      $county=$area->field('name')->where('id='.I('post.county'))->find();
      $xiang=$area->field('name')->where('id='.I('post.xiang'))->find();
      $pro=implode(',',$province);
      $ci=implode(',',$city);
      $count=implode(',',$county);
      $xian=implode(',',$xiang);
      $vipd['province']= $pro;
      $vipd['city']= $ci;
      $vipd['county']= $count;
      $vipd['xiang']= $xian;

      $vipd['address']=I('post.address');;
      //dump($vipd);
      $vipdetails->create();
      $vipdetails->add($vipd);
       
      //删除当前用户的购物车 销毁session('cart2');
      $car->where('uid='.I('session.userId'))->delete();
      
      session('cart2',null);
      header('location:'.U('Sts/index'));
	}
}