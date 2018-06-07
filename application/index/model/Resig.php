<?php
namespace app\index\model;
use think\Model;
 use app\admin\model\User as UserModel;
use think\Validate;
class Resig extends Model{
    public function resig($arr){
    	// 根据name查询用户
    	
        // $_validate属性，是由多个验证因子组成的数组，支持的验证因子格式：
        // protected $_validate=array(
        // 	 array('username',"require","用户名不能为空"),
        // 	 array('password',"require","密码不能为空"),
        // 	 array('repassword',"require","密码不能为空"),
        // 	 array('password',"repassword","两次密码不一致",0,"confirm"),
        // 	 array('iphone',"require","手机号格式不正确"),
        // 	 array('iphone','/^1[34578]\d{9}$/i',"手机号格式不正确",0,'regex'),



        // 	);
     //    $admin=UserModel::getByusername($arr['username']);
	    // if(!$admin){
             
     //        if($arr['username']|length>5){
     //            if(!$arr['iphone'].match('/^1[34578]\d{9}$/i')){
     //                if(md5($arr['repassword'])==md5($arr['password'])){
     //                     if($arr['password']|length>5){
     //                     	return 4;
     //                     }else{
     //                     	return 6;
     //                     }
	                    
	    //          	}else{
	    //          		// 密码
	    //          		return 0;
	    //          	}
     //            }else{
     //            	return 2;
     //            }
     //        }else{
     //        	return 5;
     //        }  
            
             
	    // }else{
	    // 	// 用户
     //       return 3;
	    // }
    	
    }
    public function addU($data){
        session('username',$data['username']);
       $data['password']=md5($data['password']);
          return $this->save($data);
    }

}