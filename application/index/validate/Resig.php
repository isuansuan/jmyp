<?php
namespace app\index\validate;
use think\Validate;
class Resig extends Validate{
	// 验证规则
	protected $rule=[
		'username'=>'require|min:5',
		'password'=>'require|min:5';
		'iphone'=>'require|length:11'


	];
	// 提示消息
	protected $message=[
		'username.require'=>'用户名称不能为空',
		
		'username.min'=>'用户名称长度大于5',
		'password.require'=>'管理员密码不能为空',
		'password.min'=>'管理员密码长度大于5',
		'iphone.require'=>'手机号不能为空',
		'iphone.length'=>'手机号长度为11位',


	];
	// 场景
	protected $scene=[
		'edit'=>['username','password'],
		'add'=>['username'],
        'resig'=>['username','password','iphone']
	];
}