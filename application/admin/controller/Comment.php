<?php
 namespace app\admin\controller;

 use app\admin\Model\Comment as CommentModel;


use think\Loader;
 class Comment extends Lock{


	public function index(){
	     $search=input('param.search');
		

		$data=db('comment')->alias('s')->join('user u','s.userid=u.id')->join('shop b','s.sid=b.id')->field('s.*,u.username,b.sname')->where('sname','like',"%$search%")->paginate(5);
        // echo db('manger')->getLastSql();
 
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		$this->assign('data',$data);
			
        // 总条数
        $tot=db('comment')->count();
        $this->assign('tot',$tot);
		

		return view();
	}
	// 删除
	// 删除 查找
	public function ajax_find1(){
		$id=input('post.id');

		$comment=new CommentModel;
		$data=$comment::get($id)->toArray();
		$this->assign('data',$data);
			
		
		echo $this->fetch();

	}
	// 删除
	public function ajax_del(){
		  $data=input('post.str');
			parse_str($data,$arr);
			$comment=new CommentModel;
			$res=$comment->delM($arr);
			if($res){
				echo 1;
			}else{
				echo 0;
			}
	}
	
		
	// 批量删除
	public function ajax_delAll(){
		$idx=input('post.str');
		$comment=new CommentModel;
		echo $res=$comment->delM($idx);
	}
	
}