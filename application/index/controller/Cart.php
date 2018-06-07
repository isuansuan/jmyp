<?php
 namespace app\index\controller;

 use app\index\model\Cart as CartModel;
use app\admin\Model\Colum as ColumModel;
class Cart extends Lock{


	public function index(){
		// $arr[]='';
		
		// 遍历session里的shop
		// if(session('shop')){
		// 	foreach (session('shop') as $key => $value) {
		// 		$data=db('shop')->find($id);
				
		// 		foreach ($data as $key => &$value) {
		// 			$value['num1']=session('shop.'.$value['id'])['num1'];
		// 			$arr[]=$value;
		// 		}
		// 		session('shop.'.$id,$data);
	 //    		session('shop.'.$id.'.num',$data);
		// 	}
		// 	unset($arr[0]);
		// }
    	// $data=input('post.');

    	// $id=$data['id'];

    	// $shop=db('shop')->find($id);
		

			
		// session('shop.'.$id,$shop);
	    // session('shop.'.$id.'.num',$shop);
		
			// 定义一个空数组不然会报错
			$data[]='';
			// 遍历session里的shop
			
			if(session('shop')){
				foreach (session('shop') as $key => $value) {
					
					$datas=db('shop')->where('shop.id',$key)->field('shop.*')->select();
					
					foreach ($datas as $key => &$value) {
						$value['num']=session('shop.'.$value['id'])['num'];
						$data[]=$value;
					}
				}
				unset($data[0]);
			}
			
			$this->assign('data',$data);

			
	 
			   // $_SESSION['shop'][$id]['num']=1;
			   // $cart=new CartModel;
			   // $fdata=$cart->coltree();

	      // }
	        // $_SESSION['shop'][$id]=$arr;
			
		        // session(null);
		        // dump(session('shop'));
		        // exit;
		    
		
	     
		// 定义一个空数组不然会报错
		
		
      
	   // 购买的还买了	
		$fdata=db('shop')->where('columid','eq','107')->order('rand()')->select();
		$this->assign('fdata',$fdata);
		
        // 欢迎
		$adata=db('shop')->where('columid','eq','96')->order('rand()')->select();
		$this->assign('adata',$adata);

		return view();
	}
	public function ajax_add(){

		$arr=input('param.');


		session('shop.'.$arr['id'],$arr);

	
	}
    public function insert(){

    	$data=input('post.');
    	echo '<pre>';	
    	print_r($data);
    	echo '</pre>';	

    	$this->assign('data',$data);
    	$id=$data['id'];
    	$num=$data['num'];
    	$shop=db('shop')->find($id);
    	$this->assign('shop',$shop);
         foreach($shop as $val){
         	session('shop');
         	

         	session('shop.'.$id,$val);
         	session('shop.'.$id.'.num',$num);
            $shops=session('shop');

    	    $this->assign('shop',$shop);
    	    
            // $this->redirect('Cart/index');
           //    session('shop.'.$id,$data);
	          // session('shop.'.$id.'.num',$data);
         }
        
    	return view();

    }
    public function ajax_del(){
    	$id=input('post.id');
    	
    	// $id=$arr['id'];
    	
		session('shop.'.$id,null);
		
	}
	// public function del($id){
	// 	// unset($id);
	// 	 $colum=new ColumModel;
 //        $res=$colum->delcol($id);
 //        if($res){
 //                  $this->success('删除成功',url('Index/index'));
 //            }else{
 //                   $this->success('删除失败');
 //            }
	   
	// }
	public function clear(){
		// $_SESSION['shops']=array();
  //       session('shop.'.$id,$data);
        $res=session('shop',null);
      	
          if($res){
          	   $this->success('清除失败');
                
            }else{
                   $this->success('清除成功',url('index'));  
            }
	}
}