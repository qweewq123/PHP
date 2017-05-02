<?php
namespace Admin\Controller;
use Think\Controller;
class StateController extends CommonController {

	public function index(){
         $model=M('state');
         $res=$model->find();
         $this->assign('vo',$res);
    	$this->display();    
	}
	public function stateupdate(){
		
       $model=M('state');
       $model->create();
       $res=$model->where('id=1')->save(I('post.'));
       header('location:'.U('index'));
 

	}
	
}