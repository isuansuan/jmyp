<?php
 namespace app\admin\controller;

  class Index extends Lock{

	public function index(){
         

		return view();
		
	}
	// 清除缓存
	public function clear(){
		$dir="../runtime";
		$this->delDir($dir);
		$this->success('清除缓存成功','Index/index');
	}
	public function delDir($dir){
		if(!file_exists($dir)){
			return false;
		}
		$arr=scandir($dir);
		foreach ($arr as $key => $value) {
			if($key>1){
				$path=$dir.'/'.$value;
				if(is_dir($path)){
					$this->delDir($path);
				}
				if(is_file($path)){
					unlink($path);
				}
			}
		}
	}
}