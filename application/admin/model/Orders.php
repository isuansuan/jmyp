<?php
namespace app\admin\model;
use think\Model;
class Orders extends Model{
	
	public function index(){
		
	}
	// 删除
	public function delM($id){
		return $this::destroy($id);
	}
public function delU($arr){
		return $this::destroy($arr);
	}
}