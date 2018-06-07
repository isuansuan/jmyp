<?php
namespace app\admin\model;
use think\Model;
class Shop extends Model{
	public function index(){
		
	}
	// 事件
	protected static function init(){
		Shop::event('before_insert', function ($shop) {
			if($_FILES['simg']['tmp_name']){
				$file = request()->file('simg');
				
				// 移动到目录/public/upload/ 目录下
				$info = $file->move('./static/upload/shop');
				if($info){
					// 将数据对象模型添加一个图片字段
					
					$name=$info->getSaveName();
					$arr=explode('\\', $name);
					$str=implode('/', $arr);
					$shop['simg']=$str;
					
					// $shop['simg']=$info->getFilename();
				}else{
					// 上传失败获取错误信息
					$this->error($file->getError());
				}
			}else{
				return false;
			}
		});
	}

	// 修改
	public function editS($arr){
		
		$id=$arr['id'];
		unset($arr['id']);
		return $this->save($arr,['id' => $id]);
	}
}