<?php
 namespace app\admin\controller;

 use app\admin\Model\Comment as CommentModel;
 use app\admin\Model\Status as StatusModel;

use think\Loader;
class Status extends Lock{


	public function index(){
	   $search=input('param.search');
		$data=db('status')->where('status','like',"%$search%")->paginate(10);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		$this->assign('data',$data);
        // 总条数
        $tot=db('status')->count();
        $this->assign('tot',$tot);
		
		
		return view();
	}
	// 添加
	public function add(){
		
		if(request()->isPost()){
             $data=input('post.');
             $res=db('status')->insert($data);
             if($res){
				$this->success('添加成功',url('index'));
			}else{
				$this->error('添加失败');
			}    
		}else{
			
          
            	
			return view();
		}
		
	}
	
	// ajax删除
	public function ajax_del(){
		$id=input('post.id');
		

		$status=new StatusModel;
		$res=$status->delM($id);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}
		// 批量删除
	// 批量删除
	public function ajax_delAll(){
		$idx=input('post.str');
		$status=new StatusModel;
		echo $res=$status->delM($idx);
	}
   
	// 修改

	public function update($id){
		$status=new StatusModel;
		if(request()->isPost()){
			$data=input('post.');
			$res=$status->save($data,['id'=>$id]);
			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 所有分类
			
			// 查询当前数据
			$data=db('status')->find($id);
			$this->assign('data',$data);
			return view();
		}
	}
	
}