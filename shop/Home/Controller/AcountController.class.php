<?php 
namespace Home\Controller;
use Think\Controller;
class AcountController extends Controller{


    public function index(){
        //判断是否从购物车进入确认订单页
        $type=I('get.type');
        //判断用户是否登录
        if(!session('?username')){
          header('location:'.U('Index/index'));
        }

        //判断不能通过URL直接进入提交页面
        if($type!='car'){
          header('location:'.U('Index/index'));
        }

        //引入底部
        $connect=M('connection');
        $connect1=$connect->select();
        $this->assign('connect',$connect1);

        //遍历购物车
        //计算价格总和
        $car= M('car');
        $sums=$car->field('price')->where('uid='.I('session.userId'))->select();
        $arr="";
        foreach ($sums as $key => $value) {
          $arr.=$value['price'].",";
        }
        $arr1=rtrim($arr,',');
        $arr2=explode(',',$arr1);
        $sum=array_sum($arr2);

        //遍历用户详情
        $vip=M('vipdetails');
        $vipdetails=$vip->where('uid='.I('session.userId'))->find();
        //分配用户地址
        $this->assign('vip',$vipdetails);
        //分配变量总价
        $this->assign('sum',$sum);
        //分配购物车信息
        $this->assign('sess',I('session.cart2'));
        $this->display();   
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



   




