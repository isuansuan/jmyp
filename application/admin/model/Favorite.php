<?php
namespace app\admin\model;
use think\Model;
class Favorite extends Model{

    


  


// 自动加载  /添加之前进行的事件
     protected static function init(){
        Favorite::event('before_insert', function ($favorite) {
            if($_FILES['img']['tmp_name']){

                $files = request()->file('img');
                foreach($files as $key=>$value){
                   
                // 移动到框架应用根目录/public/uploads/ 目录下
                    $info = $value->move('./static/upload/favorite');
                    if($info){
                        // 将数据对象模型添加一个图片字段
                        $favorite['img']=$info->getSaveName();
                    }else{
                        // 上传失败获取错误信息
                        $this->error($file->getError());
                    }
                }
            }else{
                return false;
            }
        });
        
        
    }



    
}