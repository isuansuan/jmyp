<?php
namespace app\admin\model;
use think\Model;
class User extends Model{
	// 添加
	public function addU($arr){
		$arr['password']=md5($arr['password']);
		return $this->save($arr);
	}
	// 删除
	// public function delU($id){

	// 	return $this::destroy($id);
	// }
	// 删除
	public function delU($arr){
		return $this::destroy($arr);
	}
	// 修改
	public function editU($arr){
        if(isset($arr['password'])){
			$arr['password']=md5($arr['password']);
		}
		$id=$arr['id'];
		
		unset($arr['id']);

		return $this->save($arr,['id' => $id]);

		
	}
	

}