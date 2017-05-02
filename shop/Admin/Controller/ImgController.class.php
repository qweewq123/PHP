<?php
namespace Admin\Controller;
use Think\Controller;
class ImgController extends CommonController {

    //轮播图显示方法
	public function index(){
		$img=M('img');
		$data=$img->select();
		$this->assign('data',$data);
    	$this->display();    
	}
	
    //显示添加轮播图页面方法
	public function imgAdd(){
		$this->display();
	}

    //轮播图添加方法
	public function add(){
		$upload = new \Think\Upload();// 实例化上传类  
        $upload->maxSize   =    3145728 ;// 设置附件上传大小   
        $upload->exts      =    array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath  =	''; 
        $upload->rootPath  =    './Public/Uploads/'; // 设置附件上传目录 // 上传文件   
        $info   =   $upload->upload();

        if(!$info) {
        	// 上传错误提示错误信息     
        	$this->error($upload->getError());    
        }

        //拼装添加的图片
        $param = [];
        $param['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
        $param['img2'] = $info['img2']['savepath'].$info['img2']['savename'];
        $param['img3'] = $info['img3']['savepath'].$info['img3']['savename'];
        $param['img4'] = $info['img4']['savepath'].$info['img4']['savename'];
        $param['img5'] = $info['img5']['savepath'].$info['img5']['savename'];

        //实例化轮播图表
        $imgs=M('img');
        $imgs->create();
        $res= $imgs->add($param);
	  	    if($res){
				$this->success('添加成功',U('Img/index'));
			}else{
				$this->error('添加失败',U('Img/imgAdd'));
			}
	}

    //显示修改轮播图页面
	public function imgEdit(){
		$this->display();
	}

    //轮播图修改方法
	public function imgUpdata(){
		$upload = new \Think\Upload();// 实例化上传类  
        $upload->maxSize   =    3145728 ;// 设置附件上传大小   
        $upload->exts      =    array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型  
        $upload->savePath  =	''; 
        $upload->rootPath  =    './Public/Uploads/'; // 设置附件上传目录 // 上传文件   
        $info   =   $upload->upload();

        if(!$info) {
        	// 上传错误提示错误信息     
        	$this->error($upload->getError());    
        }

        //拼装修改信息
        $param = [];
        $param['img1'] = $info['img1']['savepath'].$info['img1']['savename'];
        $param['img2'] = $info['img2']['savepath'].$info['img2']['savename'];
        $param['img3'] = $info['img3']['savepath'].$info['img3']['savename'];
        $param['img4'] = $info['img4']['savepath'].$info['img4']['savename'];
        $param['img5'] = $info['img5']['savepath'].$info['img5']['savename'];

        //实例化轮播图表
        $imgs=M('img');
        $res=$imgs->where("id=1")->save($param);

            //判断是否修改成功
	  	    if($res){
				$this->success('修改成功',U('Img/index'));
			}else{
				$this->error('修改失败',U('Img/imgEdit'));
			}
	   }
}