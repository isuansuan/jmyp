<?php
namespace app\admin\validate;
use think\Validate;
class User extends Validate{
	// 验证规则
	protected $rule=[
          'username'=>'require|unique:user|min:5',
          'password'=>'require|length:5,8'

	];
	// 提示信息
	protected $message=[
	     'username.require'=>'用户名称不能为空',
	     'username.unique'=>'用户名称不能重复',
	     'username.min'=>'用户名称长度最小为5',
	     'password.require'=>'用户名密码不能为空',
	     'password.length'=>'用户名密码长度大于5小于8',
           

	];
	// 场景
	protected $scene=[
	    'edit'=>['username','password'],
	    'add'=>['username','password'],
	];
}