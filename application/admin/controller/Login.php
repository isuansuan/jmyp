<?php
 namespace app\admin\controller;
 use think\Controller;
 use app\admin\model\Login as LoginModel;
use think\captcha\Captcha;
class Login extends Controller{
	public function index(){
		if(request()->isPost()){
			$arr=input('post.');
			
            // $data=$this->check_verify($arr['code']);
            
			// 验证码
			if($this->check_verify($arr['code'])){
				$model=new LoginModel;
				$n=$model->login($arr);

				if($n==0){
					// 密码不正确
					$this->error('密码不正确');
					// exit;
				}
				if($n==2){
					// 判断状态
					$this->error('状态不正确');
					// exit;
				}
				if($n==3){
					// 该用户不存在
					$this->error('该用户不存在');
					// exit;
				}
				if($n==4){
					// 成功
					$this->success('登录成功','Index/index');
				}
				
			}else{
				$this->error('验证码不正确','Login/index');
			}
		}else{
			return view();
		}
		
	}
	// 检测验证
	public function check_verify($code, $id = ''){
	    $captcha = new Captcha();
	    return $captcha->check($code, $id);
	}

	// 退出
	public function logout(){
		session('adminname',null);
		session('adminid',null);
		$this->success('退出成功','Login/index');
	}
}