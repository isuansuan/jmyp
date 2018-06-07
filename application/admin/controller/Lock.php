<?php
namespace app\admin\controller;
use think\Controller;
class Lock extends Controller{
	public function _initialize(){
		// 判断session
		if(!session('adminname')){
			$this->error('请登录','Login/index');
		}
	}
}