<?php
namespace app\admin\model;
use think\Model;
class Status extends Model{
	public function index(){
		
	}
	// 删除
	public function delM($id){
		return $this::destroy($id);
	}
}