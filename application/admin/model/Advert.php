<?php
namespace app\admin\model;
use think\Model;
class Advert extends Model{
	// 修改
	public function editS($arr){
		
		$id=$arr['id'];
		unset($arr['id']);
		return $this->save($arr,['id' => $id]);
	}

	
}