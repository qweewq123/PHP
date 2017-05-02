<?php
namespace Home\Model;
use Think\Model\RelationModel;
class CategorysModel extends RelationModel{
   
	protected $_link=array(
		//关联用户信息表
		'products'=>array(
			//设置关系
			'mapping_type' =>self::HAS_MANY ,
			//设置关联外键
			'foreign_key'  =>'cateid',
			//将附加表直接添加到原模型中显示而不是作为二维数组
			// 'as_fields'  =>'phone,postcodes,name',
		),
		
		
	
	);
   
   
   
   
}