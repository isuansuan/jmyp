<?php
namespace app\admin\model;
use think\Model;
class Userinfo extends Model{
	public function index(){
		
	}
	// 事件就是执行一个动作之前执行什么
	protected static function init(){
		Userinfo::event('before_insert', function ($brand) {
			if($_FILES['img']['tmp_name']){
				$file = request()->file('img');
				// 移动到框架应用根目录/public/uploads/ 目录下
				$info = $file->move('./static/upload/User');
				if($info){
					// 将数据对象模型添加一个图片字段
					$brand['img']=$info->getSaveName();
				}else{
					// 上传失败获取错误信息
					$this->error($file->getError());
				}
			}else{
				return false;
			}
		});
		
		
	}
}