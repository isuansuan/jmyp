<?php
namespace app\index\model;
use think\Model;
class Person extends Model{
     public function index(){
     	$arr=db('s_province')->select();
		 return $this->save($arr);
     }	
}