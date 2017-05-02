<?php
namespace Home\Controller;
use Think\Controller;
class DetailsController extends Controller {

    public function index(){
        //遍历商品
        $pro=M('products');
        $id=I('get.id');
        $pros=$pro->where('id='.$id)->find();
        $this->assign('pros',$pros);
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
    

    //引入友情链接
    $connect=M('connection');
    $connect1=$connect->select();
    //查询商品评论
    $comments=M('comments');
    $data=$comments->where('proid='.$pros['id'])->select();
    $this->assign('data',$data);
    $this->assign('connect',$connect1);
    $this->assign('toubu',$arr1);
    $this->display();
	}

  
  public function collection(){
        //查询要收藏的商品的信息
        $pro=M('products');
        $id=I('get.id');
        $pros=$pro->where('id='.$id)->find();
        //dump($pros);
        $arr=array();
        $arr['proid']=$pros['id'];
        $arr['uid']=I('session.userId');
        $arr['proname']=$pros['proname'];
        $arr['image1']=$pros['image1'];
        //dump($arr);
         //收藏
        $collection=M('collection');
        $collection->create();
        $collection->add($arr);
        header('location:'.U('Details/index/',array('id'=>$arr['proid'],'type1'=>1)));
  

  }
  
 

}
?>