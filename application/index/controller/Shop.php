<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\Shop as ShopModel;

class Shop extends Controller{
	public function index(){
		$id=input('param.id');
		// 商品的ID
		// 品牌
		$data=db('brand')->alias('b')->join('shop s','s.brandid=b.id')->field('b.*,s.brandid')->where('s.id','eq',$id)->select();
		// echo db('brand')->getLastSql();
		$this->assign('data',$data);

		$shop=db('shop')->where('id','eq',$id)->where('shelf','1')->select();
		$this->assign('shop',$shop);
	    
	    $colum=db('colum')->alias('c')->join('shop s','s.columid=c.id')->field('c.*,s.columid')->where('s.id','eq',$id)->where('s.shelf','1')->select();
	    $this->assign('colum',$colum);	
	    
	    // $comment=db('comment')->alias('c')->join('user u','u.id=c.userid')->join('userinfo i','i.userid=u.id')->join('shop s','s.id=c.sid')->field('c.*,u.username,i.img')->group('u.id')->where('s.id',$id)->select();
	    $comment=db('comment')->alias('c')->join('user u','u.id=c.userid')->join('userinfo i','i.userid=u.id')->join('shop s','s.id=c.sid')->field('c.*,u.username,i.img')->group('c.content')->where('s.id',$id)->select();

	
	    // echo db('brand')->getLastSql();

	 
	    $this->assign('comment',$comment);	
	   	 
		return view();
	}
	public function ajax_cart($id,$num){
		$arr['id']=$id;
		$arr['num']=$num;
    	if(session('shop')){
	 		$res=session('?shop.'.$id);
	 		if($res){
	 			echo 0;
	 		}else{
	 			session('shop.'.$arr['id'],$arr);
	 			echo 1;
	 		}
		}else{
			session('shop.'.$arr['id'],$arr);
		}	
		
    }
}