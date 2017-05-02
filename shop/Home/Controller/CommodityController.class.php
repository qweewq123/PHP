<?php
namespace Home\Controller;
use Think\Controller;
class CommodityController extends Controller {

    public function index(){
     
        $id=I('get.id');
        //判断id是否为空 通过id来判断显示全部商品
        if(empty($id)){
          //引入头部

        //分类 分类标题
        $com=M('categorys');
        $res=$com->where("id=".$id)->select();
        //分类相对应的产品信息
        $pro=M('products');
        $res1=$pro->where("cateid=".$id)->select();
        $this->assign('res1',$res1);
        $this->assign('res',$res);
        //引入头部
        $type=M('Categorys');
        $types=$type->where('pid=0')->select();
  
        $arr1=array();$i=0;
        //遍历一级分类
        foreach ($types as $k => $v) {
          $arr1[]= '<li class="nav-item">
              <a class="nav-item-link" href="javascrip:" onclick="return false" target="_blank">'.$v['catename'].'</a>';
          $type1=$type->where("pid={$v["id"]}")->select();  
        //遍历二级分类
        foreach ($type1 as $key => $value) {
          $arr1[]=  '<div class="nav-item-children">
            <ul class="menu-product-list">
                 <li class="menu-product-item">
                 <a href="'.__MODULE__.'/commodity/index/id/'.$value['id'].'" >
                        <span class="originPrice">'.$value['catename'].'</span> 
                    </a>
                  </li>
                        <!-- more -->
                                  </ul>
                    </div>';
                     }
            $arr1[]= '</li>';
           
} 
         
     $this->assign('toubu',$arr1);
     //引入底部
     $connect=M('connection');
     $connect1=$connect->select();
     $this->assign('connect',$connect1);
        //遍历全部商品
          $pro=M('products');
          //便利所有商品
          $res1=$pro->select();
          $this->assign('res1',$res1);
          $this->display();
          die;
        }

        //分类 分类标题
        $com=M('categorys');
        $res=$com->where("id=".$id)->select();
        //分类相对应的产品信息
        $pro=M('products');
        $res1=$pro->where("cateid=".$id)->select();
        $this->assign('res1',$res1);
        $this->assign('res',$res);
        //引入头部
        $type=M('Categorys');
        $types=$type->where('pid=0')->select();
  
        $arr1=array();$i=0;
        //遍历一级分类
        foreach ($types as $k => $v) {
          $arr1[]= '<li class="nav-item">
              <a class="nav-item-link" href="javascrip:" onclick="return false" target="_blank">'.$v['catename'].'</a>';
          $type1=$type->where("pid={$v["id"]}")->select();  
        //遍历二级分类
        foreach ($type1 as $key => $value) {
          $arr1[]=  '<div class="nav-item-children">
            <ul class="menu-product-list">
                 <li class="menu-product-item">
                 <a href="'.__MODULE__.'/commodity/index/id/'.$value['id'].'" >
                        <span class="originPrice">'.$value['catename'].'</span> 
                    </a>
                  </li>
                        <!-- more -->
                                  </ul>
                    </div>';
                     }
            $arr1[]= '</li>';
           
}
    //引入底部
     $connect=M('connection');
     $connect1=$connect->select();
     $this->assign('connect',$connect1);
    
      $this->assign('toubu',$arr1);
      $this->display();
       
	}

    //排序
    public function order(){
     $id=I('get.val');
       
        if($id==1){
       
        //遍历全部商品
          $pro=M('products');

           //引入底部
         $connect=M('connection');
         $connect1=$connect->select();
         $this->assign('connect',$connect1);
          //便利所有商品
          $res1=$pro->order('price')->select();
          $this->assign('res1',$res1);
          $this->display('index');
         
          die;
        }
        if($id==2){

        //遍历全部商品
          $pro=M('products');
          //便利所有商品
          $res1=$pro->order('price desc')->select();
           //引入底部
         $connect=M('connection');
         $connect1=$connect->select();
         $this->assign('connect',$connect1);
          $this->assign('res1',$res1);
          $this->display('index');
         
          die;
        }

     if($id==3){

        //遍历全部商品
          $pro=M('products');
          //便利所有商品
          $res1=$pro->order('addtime desc')->select();
          $this->assign('res1',$res1);
                  //引入底部
         $connect=M('connection');
         $connect1=$connect->select();
         $this->assign('connect',$connect1);
          $this->display('index');
      
          die;
        }



    } 
}