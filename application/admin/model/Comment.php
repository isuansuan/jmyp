<?php
namespace app\admin\model;
use think\Model;
class Comment extends Model{
	public function index(){
		
	}
	// 删除
	public function delM($arr){
		return $this::destroy($arr);
	}
}