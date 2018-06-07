<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\Resig as ResigModel;
 use app\admin\model\User as UserModel;
use think\captcha\Captcha;

class Resig extends Controller{
	public function index(){
		
		return view();
		
	}
    
    // 用户
     public function ajax_check(){
     	$idx=input('post.str');
        

        // 字符串转数组
        parse_str($idx,$arr);
        // 取出数组中的值
        $id=$arr['username'];

       
		$arr=db('user')->where('username','eq',$id)->select();
		
		if($arr){
			echo 0;
		}else{
			echo 1;
		}

     }
	// 检测验证
    
	public function ajax_chkcode(){
		// $idx=input('post.str');
  //         parse_str($idx,$arr);
        $code=input('post.code');

        // 字符串转数组
        // 写入的验证码
        if($this->check_verify($code)){
           echo 1;	
        }else{
        	echo 0;
        }
			
		
        //   echo '<pre>';	
        //   print_r($arr);
        //   echo '</pre>';	
        // $data=$this->check_verify($arr['code']);
        //   echo '<pre>';	
        //     print_r($data);
        //     echo '</pre>';	  
        // if($data){
        // 	echo  1;
        // }else{
        //     echo 0;
        // }

		

        
		
       
       
	    
	}
    public function check_verify($code,$id=''){
         $captcha=new Captcha();
		 // 检测输入的验证码是否正确，$code为用户输入的验证码字符串，$id多个验证码标识
        return $captcha->check($code,$id);
    }
   
    // 检测验证
	
    public function ajax_add(){
    	if(request()->isPost()){
			$data=input('post.');
			
			$arr['username']=$data['username'];	
			$arr['password']=md5($data['password']);
            
			
            $res['tel']=$data['tel'];
			// $arr=db('user')->where('id',$userid)->insert($re);
			
            // $res['userid']=$userid;
            $user=db('user')->insert($arr);
            session('username',$arr['username']);

            $userid=db('user')->getLastInsID();

            $res['userid']=$userid;
			// $fdata=db('userinfo')->where('userid',$userid)->insert($res);
		    session('username',$arr['username']);
            session('userid',$userid);	
			if($user){
				$this->success('注册成功',url('Index/index'));
			}else{
				$this->error('注册失败');
			}
		}else{
			return view();
		}
    }
	// 退出
	public function logout(){
		session('adminname',null);
		session('adminid',null);
		$this->success('退出成功','Index/index');
	}
}