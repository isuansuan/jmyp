<?php
namespace app\index\model;
use think\Model;
 use app\admin\model\User as UserModel;
 use app\admin\Model\Userinfo as UserinfoModel;
class Login extends Model{
     public function login($arr){
          $admin=UserModel::getByusername($arr['username']);
          // 查询字段
          if($admin){
               $id=$admin['id'];
               $data=db('user')->alias('u')->join('userinfo s','u.id=s.userid')->where('u.id',$id)->field('u.*,s.img')->select();
     	       
			$user=$admin['username'];
			$pass=$admin['password'];
			$status=$admin['status'];
			$num=$admin['num'];
               foreach($data as $key=>$value){
                     $img=$value['img'];
               }
               
			if($status==1){
               if($pass==md5($arr['password'])){
               	// 开启
               	session('username',$user);
               	session('userid',$id);
                    
               	$num++;
               	$time=time();
               	UserModel::update(['num'=>$num,'lastlogin'=>$time],['id'=>$id]);
               	return 4;

               }else{
               	// 判断密码
               	return 0;
               }
			}else{
				return 2;
				// 判断状态
			}


          }else{
          	return 3;
          	// 判断用户
          }
     }
}


