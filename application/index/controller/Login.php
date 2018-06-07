<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\Login as LoginModel;
 use app\admin\model\User as UserModel;
use app\admin\Model\Userinfo as UserinfoModel;
class Login extends Controller{
	public function index(){
		if(request()->isPost()){
            $arr=input('post.');
            // 用户名
            $model=new LoginModel;
            $n=$model->login($arr);
            if($n==0){
            	// 密码
                $this->error('密码不正确');
            }
            
            if($n==2){
                $this->error('状态不正确');
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
			return view();
		}
		
		
	}

	public function logout(){
		session('username',null);
		session('userid',null);
		session('shop',null);

		$this->success('退出成功','Index/index');

	}
}