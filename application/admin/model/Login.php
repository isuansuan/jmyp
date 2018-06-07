<?php
namespace app\admin\model;
use think\Model;
class Login extends Model{
	public function login($arr){
		$admin=Admin::getByadminname($arr['adminname']);
		
		// 用户名称
		if($admin){
			$id=$admin['id'];
			$user=$admin['adminname'];
			$pass=$admin['password'];
			$status=$admin['status'];
			$num=$admin['num'];
			$img=$admin['img'];

			// 状态
			if($status==1){
				// 密码
				if($pass==md5($arr['password'])){
					// 开启session
					session('adminname',$user);
					session('adminid',$id);
					session('adminimg',$img);

					// 登录次数 登录时间
					$num++;
					$time=time();
					Admin::update(['num'=>$num,'lastlogin'=>$time],['id'=>$id]);
					return 4;
				}else{
					// 判断密码
					return 0;
				}
			}else{
				// 判断状态
				return 2;
			}
			
		}else{
			// 该用户不存在
			return 3;
		}
	}
}