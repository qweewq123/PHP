<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends Controller {


  public function index(){
    //判断用户名是否存在
    if(!session('?username')){
      session('center','33');
      header('location:'.U('Login/index'));
    }

    //查询orders和details表
    $order=M('Orders');
   
    //查询orders
    $result= $order->where('uid='.I('session.userId'))->select();

    //遍历用户详情
    $vip=M('vipdetails');
    $row=$vip->where('uid='.I('session.userId'))->select();
   
  

    //分配变量
    //订单
    $this->assign('result',$result);
    //订单详情
    $this->assign('row',$row);
    $this->display();
	}
     
  //修改订单状态
  public function update(){
    //确认收货
    $order=M('Orders');
    $date['state']='6';
    $res=$order->where('id='.I('get.id'))->save($date);
    //获取商品id
    $details=M('details');
    $res= $details->where('oid='.I('get.id'))->find();
    $proid=$res['proid'];

    //成功去商品详情页评论
    if($res){
      $this->success('收货成功,请评论',U('Center/show/','id='.I('get.id')));
    }
  }

  //修改用户详情
  public function dsave(){
    //实例化用户详情
    $vipp=M('vipdetails');
    //搜索出来要修改的
    $vipps=$vipp->where('id='.I('get.id'))->find();
    $this->assign('vipps',$vipps);
    $this->display();
  }

  //修改用户详情
  public function edit(){
    
     $vipp=M('vipdetails');

      $arr=array();
      $arr['getman']=I('post.getman');
      $arr['phonenum']=I('post.phonenum');
      $arr['code']=I('post.code');
      //连接地址
      $area=M('area');
      //找出省市县
      $province=$area->field('name')->where('id='.I('post.province'))->find();
      $city=$area->field('name')->where('id='.I('post.city'))->find();
      $county=$area->field('name')->where('id='.I('post.county'))->find();
      $xiang=$area->field('name')->where('id='.I('post.xiang'))->find();
      $pro=implode(',',$province);
      $ci=implode(',',$city);
      $count=implode(',',$county);
      $xian=implode(',',$xiang);
      $arr['province']= $pro;
      $arr['city']= $ci;
      $arr['county']= $count;
      $arr['xiang']= $xian;

      $arr['address']=I('post.address');;
      $vipp->where('id='.I('post.id'))->save($arr);
      header('location:'.U('Center/index'));

  }

    //删除订单详情
    public function dele(){
      $vipp=M('vipdetails');
      $vipps=$vipp->where('id='.I('get.id'))->delete();
      header('location:'.U('Center/index'));
    }

    //查看详情
    public function show(){
      //查询详情表
      $details=M('details');
      $res= $details->where('oid='.I('get.id'))->select();
      $this->assign('res',$res);
      $this->display();
  }

    //取消订单
    public function del(){
      //details表
      $details=M('details');
      //查询orders和
      $order=M('Orders');
      //删除orders
      $res=$order->where("state<4 AND id=".I('get.id')."")->select();

      if($res){
        $result= $order->where('id='.I('get.id'))->delete();
        //同时删除相对应详情
        $res= $details->where('oid='.I('get.id'))->delete();
        header('location:'.U('Center/index'));
      }else{
        $this->error('您的订单已发货,不能取消',U('Center/index'),1);
    }
    }
    
    //修改密码
	  public function save(){

      $model=M('users');
      $arr=array();
      $arr['password']=md5(I('post.password'));
      $rpass=md5(I('post.rpass'));
      if($arr['password']!=$rpass){
        $this->error('密码不一致,请重新修改','Index/index',1);
      }

      $model->create();
      $res=$model->where('id='.I('session.userId'))->save($arr);
      if($res){

        $this->success('密码修改成功',U('Login/index'),1);
        session(null);
      }else{
       $this->error('密码修改失败','Index/index',1);
      }
    //dump(I('post.'));



    }
	 //四级联动方法
    public function demo4(){
        // 1.实例化Model
        $area = M('area');
        // 2.查询数据（只查询省份）
        $upid = I('get.upid', 0);
        $data = $area->where('upid='.$upid)->select();
        // 3.返回结果
        $this->ajaxReturn($data);
    }
}