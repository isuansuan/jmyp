<?php
namespace app\admin\model;
use think\Model;
class Colum extends Model{

	
	 public function coltree(){
		   $data=$this->select();
			// 查询所有的数据
		   return $this->getClass($data);
	 }
	 // 改造数组，先遍历，
	 public function getClass($data,$pid=0,$level=0){
		// 保存最新的数据
		  static $arr=array();
		  // value所有的值
		  // 二维数组那里边的东西需要遍历
		  foreach($data as $key=>$value){
			// 顶级分类
			   if($value['pid']==$pid){
					 $arr[]=$value;
					 // 顶级分类为0
					  // 增加字段
					 $value['level']=$level;
					 // 增加一个属性---
					 $this->getClass($data,$value['id'],$level+2);  
			   }
			   
		  }
		 return $arr;
	 }

   // 删除
   public function delcol($id){
	   if($this->destroy($id)){

		   return true;
	   }else{
		   return false;
	   }
   }

   // 查子ID
   public function getChildId($id){
   	  // 查询所有的数据
   	  $data=$this->select();
   	  return $this->_getChildId($data,$id);
   }

   public function _getChildId($data,$id){
   	   // 把所有的子ID放一起放到一个数组
   	   static $arr=array();
   	   foreach($data as $key=>$value){
            if($value['pid']==$id){
                  $arr[]=$value['id'];
                  $this->_getChildId($data,$value['id']);
            }
   	   }
   	   return $arr;
   }

   // 删除
	public function delM($idx){
		return $this::destroy($idx);
	}
}