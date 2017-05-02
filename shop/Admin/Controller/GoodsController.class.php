<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
	//商品
	public function index(){
		 $user = M('products');
         $where = [];
        //用户名条件搜索
        if(!empty($_GET['proname'])){
          $where['proname'] = array('like','%'.$_GET['proname'].'%');
        }
        $total=$user->where($where)->count();
        //实例化分页类
        $page=new \Think\Page($total,5);
        $this->assign('show',$page->show());
        $data=$user->where($where)->page(I('get.p',1),5)->select();
        $this->assign('data',$data);
        $this->display();

    
    }
     
	//输出模板
	public function add(){
		$cats=D('Cats');
		$catsSelect=$cats->formSelect('cateid');
		//分配到模板
		$this->assign('catsSelect',$catsSelect);
		$this->display();
	}

	//添加商品方法
	public function insert(){

        $upload = new \Think\Upload();// 实例化上传类  
        $upload->maxSize   =     3145728 ;// 设置附件上传大小   
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath  =''; 
        $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件   
        $info   =   $upload->upload(); 
          
        if(!$info){// 上传错误提示错误信息     
           $this->error($upload->getError());    
        }

        //拼装添加商品数据
        $param = [];
		$param['proname'] = I('post.proname');
        $param['image1'] = $info['image1']['savepath'].$info['image1']['savename'];
        $param['image2'] = $info['image2']['savepath'].$info['image2']['savename'];
        $param['image3'] = $info['image3']['savepath'].$info['image3']['savename'];
        $param['cateid'] = I('post.cateid'); 
        $param['store'] = I('post.store'); 
        $param['price'] = I('post.price'); 
        $param['version'] = I('post.version');
        $param['version1'] = I('post.version1');
        $param['version2'] = I('post.version2');
        $param['rom'] = I('post.rom'); 
        $param['rom1'] = I('post.rom1');  
        $param['color'] = I('post.color'); 
        $param['color1'] = I('post.color1'); 
        $param['color2'] = I('post.color2'); 
        $param['des'] = I('post.des'); 
        $param['state'] = I('post.state'); 
        $param['xq'] = I('post.xq'); 
        $param['addtime'] = time(); 
        
        //实例化商品表
        $goods=M('products');
        $goods->create();
        $res= $goods->add($param);

	        if($res){
				$this->success('添加成功',U('goods/index'));
			}else{
				$this->error('添加失败',U('goods/add'));
			}
	}

	//商品修改接收信息方法
	public function goodsedit(){
	    $cats=D('Cats');
		$catsSelect=$cats->formSelect('cateid');
		//分配到模板
		$this->assign('catsSelect',$catsSelect);
		//实例化
		$info=M('products');
		//接受get传过来的id
		$id=I('get.id');
		//根据id进行单条数据查询
		$data=$info->find($id);
		//分配变量
		$this->assign('data',$data);
		//输出模板
		$this->display();
	}

	//商品修改方法
	public function goodsupdate(){
		 
        $upload = new \Think\Upload();// 实例化上传类  
        $upload->maxSize   =     3145728 ;// 设置附件上传大小   
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath  =''; 
        $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件   
        $info   =   $upload->upload(); 
          
        $param = [];
        $param['proname'] = I('post.proname');
        $param['image1'] = $info['image1']['savepath'].$info['image1']['savename'];
        $param['image2'] = $info['image2']['savepath'].$info['image2']['savename'];
        $param['image3'] = $info['image3']['savepath'].$info['image3']['savename'];
        $param['cateid'] = I('post.cateid'); 
        $param['store'] = I('post.store'); 
        $param['price'] = I('post.price'); 
        $param['version'] = I('post.version'); 
        $param['rom'] = I('post.rom');
        $param['color'] = I('post.color'); 
        $param['des'] = I('post.des'); 
        $param['state'] = I('post.state'); 
        $param['addtime'] = time(); 
        $param['id'] = I('post.id'); 

		//实例化
		$info=M('products');
		//创建数据对象
		$res=$info->create();
		//判断
		
	    $result=$info->where("id=".$param['id'])->save($param);
			if($result){
				$this->success('修改成功',U('goods/index'));
			}else{
				$this->error('修改失败');
			}
	
	}


	//商品删除方法
	public function goodsdel(){
		//实例化
		$info=M('products');
		//接受传递过来的id值
		$id=I('get.id');
		$res=$info->delete($id);
		if($res){
			$this->success('删除成功',U('goods/index'));
		}else{
			$this->error('删除失败');
		}
	}
}
?>