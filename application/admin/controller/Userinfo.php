<?php
namespace app\admin\controller;

use app\admin\Model\User as UserModel;
use app\admin\Model\Userinfo as UserinfoModel;
use think\Loader;
 class Userinfo extends Lock{


	public function index(){
		
		

		$search=input('param.search');
		$data=db('userinfo')->alias('ui')->join('user u','ui.userid=u.id')->field('ui.*,u.username')->where('username','like',"%$search%")->paginate(8);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
	   $this->assign('data',$data);	
        // 总条数
        $tot=db('userinfo')->count();
        $this->assign('tot',$tot);
		
		return view();
	}
	// 添加
	public function add(){
		if(request()->isPost()){
			$userinfo=new UserinfoModel;
			$arr=input('post.');

			$res=$userinfo->save($arr);
			if($res){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			
			// 栏目
			$user=new UserModel;
			$user=db('user')->select();

			$this->assign('user',$user);
			return view();
		}
		
	}
	
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/user/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			echo $info->getSaveName();
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
	// 修改
	public function update($id){
		$userinfo=new UserinfoModel;
		if(request()->isPost()){
			$arr=input('post.');
			
			if($arr['img']){
				unlink('./static/upload/user/'.$arr['oldimg']);
			}else{
				$arr['img']=$arr['oldimg'];
			}
			unset($arr['oldimg']);
			// 修改
			$res=$userinfo->save($arr,['id'=>$arr['id']]);

			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			$data=$userinfo::get($id)->toArray();
			
			// 
			$user=new UserModel;
			$fdata=db('user')->select();
			$this->assign('fdata',$fdata);
			
			// 品牌
			$this->assign('data',$data);
			return view();
		}
		
	}
	// 删除
	

	public function del($id){
        	$user=new UserModel;
           $userinfo=new UserinfoModel;
           
           $arr=$userinfo::get($id)->toArray();
		   $res=unlink('./static/upload/user/'.$arr['img']);
           if($res){
           	    $r=$userinfo::destroy($id);
				if($r){
				$this->success('删除成功',url('index'));
			    }else{
				$this->error('删除失败');
			    }
			}
	}
    
   
	
	// 批量删除
	public function ajax_delAll(){
		$idx=input('post.str');
		$arr=db('userinfo')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/user/'.$value['img']);
		}
		$userinfo=new UserinfoModel;
		echo $r=$userinfo::destroy($idx);
	}

		
	
	
}