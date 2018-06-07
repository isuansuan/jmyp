<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\Classs as ClassModel;

class Classs extends Controller{
	public function index(){
	    $datad=db('colum')->where('pid','eq','56')->limit(10)->select();
		$this->assign('datad',$datad);	

		// $data=input('post.');
		$id=input('param.id');
		
		$colum=db('colum')->where('id','eq',$id)->select();
		$this->assign('colum',$colum);	
        // 条件品牌
        $brandc=db('colum')->where('pid','eq','23')->select();
		$this->assign('brandc',$brandc);
		
           // 商品
		$search1=input('param.search1');
        $shop=db('shop')->alias('s')->join('colum c','c.id=s.columid')->field('s.*')->where('c.id','eq',$id)->where('s.shelf','1')->where('s.sname','like',"%$search1%")->select();
		$this->assign('shop',$shop);	
		// 排序jiangxu
		$dec=db('shop')->alias('s')->join('colum c','c.id=s.columid')->field('s.*')->where('c.id','eq',$id)->where('s.shelf','1')->order('s.price desc')->select();
        $this->assign('dec',$dec);

        $asc=db('shop')->alias('s')->join('colum c','c.id=s.columid')->field('s.*')->where('c.id','eq',$id)->where('s.shelf','1')->order('s.price asc')->select();
        $this->assign('asc',$asc);

        $sales=db('shop')->alias('s')->join('colum c','c.id=s.columid')->field('s.*')->where('c.id','eq',$id)->where('s.shelf','1')->order('s.sales desc')->select();
        $this->assign('sales',$sales);

  //       $search=input('param.search');
		// $data=db('colum')->where('cname','like',"%$search%")->paginate(10);

		
		// $data=db('shop')->alias('s')->join('colum c','c.id=s.columid')->field('s.*')->where('c.id','eq',$id)->where('s.shelf','1')->where('s.sname','like',"%$search1%")->select();
		// 分页
		// $page=$data->render();
		// $this->assign('page',$page);
		// $this->assign('data',$data);
		session('username');
            $id=session('userid');
          	
            // 头像
            $data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			// echo db('userinfo')->getLastSql();
           $this->assign('data',$data);
    
		return view();
	
	}
	public function ajax_cart(){
		session('username');
        $id=session('userid');
       
        $str=input('post.str');
        

    	parse_str($str,$arr);
    	$arr['userid']=$id;
    	$arr['shopid']=$arr['id'];

    	
    	unset($arr['id']);		
    	$res=db('favorite')->insert($arr);
    		
			if($res){
				echo 1;
			}else{
				echo 0;
			}
    	

	}
		
}