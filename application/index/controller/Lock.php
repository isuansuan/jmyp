<?php
namespace app\index\controller;
use think\Controller;
class Lock extends Controller{
	public function _initialize(){
		// 判断session
		if(!session('username')){
			$this->error('您还未登录','Login/index');
		}
	}
}