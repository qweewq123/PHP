<?php
namespace Admin\Controller;
use Think\Controller;
class CatesController extends CommonController {
    public function index(){

     $user= M('categorys');
        $where = [];
        //用户名条件搜索
        if(!empty($_GET['catename'])){
          $where['catename'] = array('like','%'.$_GET['catename'].'%');
        }
        $total=$user->where($where)->count();
        //实例化分页类
        $page=new \Think\Page($total,7);
        $this->assign('show',$page->show());
        $data=$user->where($where)->page(I('get.p',1),7)->select();
        $this->assign('data',$data);
        $this->display();
    }

    public function catesAdd(){

      $this->display();
    }    

    public function catesInsert(){
        //实例化类
        $cate=M('categorys');
        $param=[];
        //拼装插入数据
        $param['catename']=I('post.catename');
        $param['pid']=0;
        $param['path']=0;
        $param['addtime'] = time(); 
        $cate->create();
        $res=$cate->add($param);
        
      if($res){
        $this->success('添加成功',U('cates/index'));
      }else{
        $this->error('添加失败',U('cates/add'));
      }

       
    }  


public function catesAdd1(){

  
        $this->display();
    }    

  public function catesInsert1(){
       //dump(I('post.'));
      // 实例化类
        $cate=M('categorys');
        $param=[];
        $param['catename']=I('post.catename');
        $param['pid']=I('post.pid');
        $param['path']=I('post.path')."-".I('post.pid');
         $param['addtime'] = time(); 
         //dump($param);
        $cate->create();
        $res=$cate->add($param);
         if($res){
        $this->success('添加成功',U('cates/index'));
      }else{
        $this->error('添加失败',U('cates/add'));
      }

       
     } 

     public function catesEdit(){
       $id=I('get.id');
      // echo $id;
       //实例化
        $cate=M('categorys');
            //echo $id;
    //根据id进行单条数据查询
    $data=$cate->find($id);
    //分配变量
    $this->assign('data',$data);
    //dump($data);
    //输出模板
    $this->display();
  
        //$this->display();
    }  
         public function catesUpdate(){
    $catename=I('post.catename');
    $id=I('post.id');
     $cate=M('categorys');
     $res=$cate->create();
    //判断
    
      $result=$cate->where("id=".$id)->save($param);
      if($result){
        $this->success('修改成功',U('cates/index'));
      }else{
        $this->error('修改失败');
      }
  
   
       
    }
    public function catesDel(){
      $cate=M('categorys');
      $id=I('get.id');
      //echo $id;
      //判断是不是有子分类，有子分类不允许删除;
       $res=$cate->select();
       foreach ($res as $key => $v) {
         $pid[]=$v['pid'];
       }
       //dump($pid);
       $newpid = array_unique($pid);
      //dump($newpid);
       $result=(in_array($id,$pid));
       //echo $result;
        if(in_array($id,$pid)){
        
        $this->success('此分类下有子分类，不允许删除',U('cates/index'));
        die;
       }
    //判断是不是有子分类，分类下面是否有商品;
       $goods=M('products');
       $sql=$goods->where("cateid=".$id)->select();
       //dump($sql);
       //die;
      if($sql){
        $this->success('此分类下有商品,不允许删除',U('cates/index'));
       die;
      }
      $resu= $cate->delete($id);
      if($resu){
        $this->success('分类删除成功',U('cates/index'));
      }else{
        $this->error('分类删除失败',U('cates/index'));
      }
    }     
  
}