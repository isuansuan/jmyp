<?php
namespace app\admin\model;
use think\Model;
class Brand extends Model{
	public function index(){
		
	}
	// 删除
	public function delU($id){
		return $this::destroy($id);
	}


	// 事件就是执行一个动作之前执行什么
	protected static function init(){
		Brand::event('before_insert', function ($brand) {
			if($_FILES['bimg']['tmp_name']){
				$file = request()->file('bimg');
				// 移动到框架应用根目录/public/uploads/ 目录下
				$info = $file->move('./static/upload/Brand');
				if($info){
					// 将数据对象模型添加一个图片字段
					$name=$info->getSaveName();
					$arr=explode('\\', $name);
					$str=implode('/', $arr);
					$brand['bimg']=$str;
					
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