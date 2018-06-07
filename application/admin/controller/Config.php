<?php
namespace app\admin\controller;

class Config extends Lock{

	
	public function index(){
		return view();
	}
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/sys/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			echo $info->getSaveName();
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
	public function setConfig(){
		$sys=include "../application/extra/sys.php";
		// echo '<pre>';
		// print_r($sys);
		// echo '</pre>';
		// echo "<hr>";
		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';
		// echo "<hr>";
		if(!$_POST['logo']){
			$_POST['logo']=$_POST['oldlogo'];
		}else{
			$_POST['oldlogo']=$_POST['logo'];
		}
		$arr=array_merge($sys,$_POST);
		// echo '<pre>';
		// print_r($arr);
		// echo '</pre>';
		// 改造
		$str='';
		foreach ($arr as $key => $value) {
			$str.="'{$key}'".'=>'."'{$value}',\n";
		}

		$st="<?php \n return [ \n $str \n ];";
		file_put_contents('../application/extra/sys.php', $st);
		$this->success('配置更改成功','index');
	}
}