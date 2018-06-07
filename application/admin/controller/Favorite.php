<?php
namespace app\admin\controller;

use app\admin\Model\Favorite as FavoriteModel;
use think\Loader;
class Favorite extends Lock{

	public function index(){
		$search=input('param.search');
		$data=db('favorite')->alias('f')->join('shop s','s.id=f.shopid')->join('user u','u.id=f.userid')->field('f.*,s.sname,s.simg,u.username')->where('username','like',"%$search%")->paginate(10);
		// echo db('favorite')->getLastSql();
		
     
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
	   $this->assign('data',$data);	

        // 总条数
        
		$tot=db('favorite')->count();
        $this->assign('tot',$tot);
		return view();
	}


		// 添加
	public function add(){
		if(request()->isPost()){
			$favorite=new FavoriteModel;
			
			$arr=input('post.');

			$res=$favorite->save($arr);
			 $files = request()->file('img');
			
			if($res){

				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			
			// 
			$favorite=new FavoriteModel;
			$data=db('favorite')->select();

			$this->assign('data',$data);
			return view();
		}
		
	}
}