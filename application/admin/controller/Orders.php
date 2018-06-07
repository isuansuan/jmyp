<?php
 namespace app\admin\controller;

 use app\admin\Model\Comment as CommentModel;
 use app\admin\Model\Orders as OrdersModel;
use app\admin\Model\Colum as ColumModel;
use app\admin\Model\Status as StatusModel;
use think\Loader;
class Orders extends Lock{


	public function index(){
		$search=input('param.search');
	 
	    $data=db('orders')->alias('o')->join('user u','o.uid=u.id')->join('shop s','o.shopid=s.id')->join('status st','o.sid=st.id')->join('userinfo us','o.infoid=us.id')->field('o.*,u.username,st.status,us.userid')->group('o.ordernum')->where('ordernum','like',"%$search%")->paginate(10);
		// echo db('orders')->getLastSql();
	
		$this->assign('data',$data);

		// $data=db('orders')->where('ordernum','like',"%$search%")->paginate(5);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		
			
        // 总条数
        $tot=db('orders')->group('orders.ordernum')->count();
        $this->assign('tot',$tot);
		return view();
	}
	// 添加
	public function add(){
		
		if(request()->isPost()){
             $data=input('post.');
             $res=db('orders')->insert($data);
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
	// public function ajax_del(){
	// 	$id=input('post.id');
		
		
	// 	$orders=new OrdersModel;
	// 	$res=$orders->delM($id);
	// 	if($res){
	// 		echo 1;
	// 	}else{
	// 		echo 0;
	// 	}
	// }
	// 删除 查找
	public function ajax_find1(){
		$id=input('post.id');

		$orders=new OrdersModel;
		$data=$orders::get($id)->toArray();
		$this->assign('data',$data);
			
		
		echo $this->fetch();

	}
	// 删除
	public function ajax_del(){
		  $data=input('post.str');
			parse_str($data,$arr);
			$orders=new OrdersModel;
			$res=$orders->delU($arr);
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
		$orders=new OrdersModel;
		echo $res=$orders->delM($idx);
	}

	

	// 下单商品
	


  public function code($code){
  	    $data=db('orders')->alias('o')->join('shop s','s.id=o.shopid')->field('o.ordernum,o.num,s.sname,s.price,s.simg')->where('o.ordernum','eq',$code)->select();

		// echo db('order1')->getLastSql();
		$this->assign('data',$data);
	
		return view();
  }


	public function contact($id){
		

		$udata=db('orders')->alias('o')->join('userinfo u','o.infoid=u.id')->join('user e','o.uid=e.id')->field('u.*,e.username')->where('o.id','eq',$id)->select();

		$this->assign('udata',$udata);
		

       // 用户
		
		return view();

	}
	// 修改
	public function edit($id){
		$orders=new OrdersModel;
		if(request()->isPost()){
			// echo db('orders')->getLastSql();
			// 分类
			$data=input('post.');
			// $id是订单表的ID
			$res=$orders->save($data,['id'=>$data['id']]);
			
			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 所有分类
			// 查询当前数据
			$data=$orders::get($id)->toArray();
			// $data是订单表的所有
			$id=input('param.id');
            // $id是订单表的ID
            $this->assign('data',$data);
            


			$fdata=db('status')->alias('s')->join('orders o','o.sid=s.id')->where('o.id',$id)->field('s.*,o.ordernum')->select();
			$this->assign('fdata',$fdata);


           // 订单
			$status=new StatusModel;
			$sdata=db('status')->select();
			$this->assign('sdata',$sdata);
			
			return view();
		}
	
	

	}
	
}