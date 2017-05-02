<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function header(){
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
      $this->assign('res',$arr1);
      $this->display();
	}


    public function footer(){

      $connect=M('connection');
      $connect1=$connect->select();
      $this->assign('connect',$connect1);
      $this->display();
      
    }
}