<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {


		//  主页
	    public function index(){

    		$this->display('dashboard');    
		}
	
}