<?php
 namespace app\admin\controller;

 use app\admin\Model\User as UserModel;
 use think\Loader;
 class User extends Lock{

	public function index(){
		$search=input('param.search');
		$data=db('user')->where('username','like',"%$search%")->paginate(10);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		$this->assign('data',$data);
        // 总条数
        $tot=db('user')->count();
        $this->assign('tot',$tot);
		return view();
	}
	
	
	
// 添加
	public function ajax_add(){
		$data=input('post.str');
		
		// 将字符串转为数组
        parse_str($data,$arr);
        $user=new UserModel;
        // 验证
        $validate=Loader::validate('User');
        if(!$validate->scene('add')->check($arr)){
           $rea=['code'=>0,'info'=>$validate->getError()];
           echo json_encode($rea);
        }else{
        	$res=$user->addU($arr);
      	
	        if($res){

				$arr['id']=$user->id;
				$arr['lastlogin']=0;
				$arr['num']=0;
				$this->assign('dat',$arr);
				// echo $this->fetch();
				$rea=['code'=>1,'info'=>$this->fetch()];
                echo json_encode($rea);
			    
			}else{
				// echo 0;
				$rea=['code'=>2,'info'=>'插入失败'];
                echo json_encode($rea);

			}
        }

        
        
	}
	// 删除 查找
	public function ajax_find1(){
		$id=input('post.id');

		$user=new UserModel;
		$data=$user::get($id)->toArray();
		$this->assign('data',$data);
			
		
		echo $this->fetch();

	}
	// 删除
	public function ajax_del(){
		  $data=input('post.str');
			parse_str($data,$arr);
			$user=new UserModel;
			$res=$user->delU($arr);
			if($res){
				echo 1;
			}else{
				echo 0;
			}
	}
	// ajax删除
	// public function ajax_del(){
	// 	$id=input('post.id');
	// 	$user=new UserModel;
	// 	$res=$user->delU($id);


	// 	if($res){
	// 		echo 1;
	// 	}else{
	// 		echo 0;
	// 	}
	// }
	// find查找
	public function ajax_find(){
		$id=input('post.id');

		$user=new UserModel;
		$data=$user::get($id)->toArray();
		
     
		$this->assign('data',$data);
		echo $this->fetch();
	}
	// 修改
	public  function ajax_edit(){
		

		$data=input('post.str');
		
		// 将字符串转为数组
		parse_str($data,$arr);

		$user=new UserModel;
		$res=$user->editU($arr);
		if($res){
			$arr['lastlogin']=0;
			$arr['num']=0;
			$this->assign('dat',$arr);
			echo $this->fetch();
		}
	}
    
    


		


	
	// 删除
	public function ajax_delAll(){
		$idx=input('post.str');
		$user=new UserModel;
		
		

		echo $res=$user->delU($idx);

	}
	
	// 状态
	public function ajax_status(){
		$str=input('post.');
		
		$user=new UserModel;
		echo $res=$user->editU($str);	
	}

	

}