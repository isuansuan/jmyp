<?php
namespace app\admin\controller;


use app\admin\Model\Admin as AdminModel;
use think\Loader;
 class Admin extends Lock{

	public function index(){
		
		

		$search=input('param.search');
		$data=db('admin')->where('adminname','like',"%$search%")->paginate(7);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
	   $this->assign('data',$data);	
        // 总条数
        $tot=db('admin')->count();
        $this->assign('tot',$tot);
		
		return view();
	}
	// 添加
	public function add(){
		if(request()->isPost()){
			$admin=new adminModel;
			$arr=input('post.');

			$res=$admin->save($arr);
			if($res){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			
			// 栏目
			$admin=new AdminModel;
			$data=db('admin')->select();

			$this->assign('data',$data);
			return view();
		}
		
	}
	
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/admin/');
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
		$admin=new AdminModel;
		if(request()->isPost()){
			$arr=input('post.');
			
			if($arr['img']){
				unlink('./static/upload/admin/'.$arr['oldimg']);
			}else{
				$arr['img']=$arr['oldimg'];
			}
			unset($arr['oldimg']);
			// 修改
			$res=$admin->save($arr,['id'=>$arr['id']]);

			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			$data=$admin::get($id)->toArray();

			// 
		
			
			$admin=new AdminModel;
		    $res=$admin->editU($data);
			
			$this->assign('data',$data);
			return view();
		}
		
	}
	// 删除
	

	public function del($id){
        	$admin=new AdminModel;
         
           
           $arr=$admin::get($id)->toArray();
		   $res=unlink('./static/upload/admin/'.$arr['img']);
           if($res){
           	    $r=$admin::destroy($id);
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
		$arr=db('admin')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/admin/'.$value['img']);
		}
		$admin=new AdminModel;
		echo $r=$admin::destroy($idx);
	}
    

    // 状态
	public function ajax_status(){
		$str=input('post.');
		
		$admin=new AdminModel;
		echo $res=$admin->editU($str);	
	}
		
	
	
}