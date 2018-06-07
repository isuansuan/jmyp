<?php
namespace app\index\model;
use think\Model;
class Index extends Model{
   public function getChildId(){
   	  $data=$this->select();
   	  return $this->_getChildId($data);
   }
   public function _getChildId($data){
   	  static $arr=array();

   }
}
