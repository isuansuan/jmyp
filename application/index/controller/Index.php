<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\Index as IndexModel;

class Index extends Controller{
	public function index(){
		// 分类
        // $search=input('param.search');

		$colum=db('colum')->where('pid','eq','56')->select();
        // echo db('colum')->getLastSql();

		$this->assign('colum',$colum);
  
        // 更多分类
        $data=db('colum')->where('pid','eq','0')->limit(6)->select();
        
        foreach($data as $key=>$value){
              $arr[$value['id']]=$value;
              // $value['id']是顶级分类里边的东西
              $data2=db('colum')->where('pid',$value['id'])->select();
        
              foreach($data2 as $key=>$value1){
                    $arr[$value['id']]['child'][$value1['id']]=$value1;
                    // 顶级分类里边的孩子的孩子
                    
                   
                     
                    
                }

        } 
        $this->assign('arr',$arr);
          
                      
                   
        
    
        
        
        


       // 轮播图
        $fdata=db('lunbo')->select();
		$this->assign('fdata',$fdata);
       // 广告1
        $adata=db('advert')->where('type','eq','0')->select();
		$this->assign('adata',$adata);
  
       // 广告2
		$advert=db('advert')->where('type','eq','1')->select();
		$this->assign('advert',$advert);

       //准备和随机几个商品根据分类
		// $shop=Shop::query("select *  from shop order by rand() limit20");
        $shop=db('shop')->alias('s')->join('colum c','s.columid=c.id')->field('s.*,c.cname')->where('cname','eq','猜你喜欢')->limit(20)->order('rand()')->select();
        // $shop=db('shop')->order('rand()')->limit('6,12')->select();
        // echo db('shop')->getLastSql();
        	
        $this->assign('shop',$shop);

        // 上新单品
        $rhop=db('shop')->alias('s')->join('colum c','s.columid=c.id')->field('s.*,c.cname')->where('cname','eq','其他')->where('s.shelf','1')->limit(20)->order('rand()')->select();
        $this->assign('rhop',$rhop);
        // 口碑热议
        $hop=db('shop')->alias('s')->join('colum c','s.columid=c.id')->field('s.*,c.cname')->where('cname','eq','口碑热议')->where('s.shelf','1')->order('rand()')->select();
        $this->assign('hop',$hop);
        session('username');
            $id=session('userid');
            
        $udata=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
      // echo db('userinfo')->getLastSql();

      // echo db('userinfo')->getLastSql();
     
      $this->assign('udata',$udata);
		return view();
	}

  public function ajax_carts(){
    
      $str=input('post.str');

      parse_str($str,$arr);
      session('shop.'.$arr['id'],$arr); 
      echo 1;
  }

      //  $arr['num']=$num;
      // if($id){
      //   $data=db('shop')->find($id);
      //   $data['num']=$num;
      //   $res=session('shop.'.$id);
              
      //   if(!$res){
      //       session('shop.'.$id,$data);
      //     echo $this->fetch();
      //     }
      // }else{
      //   session('shop.'.$id,$data);
      // }
    public function ajax_cart(){


     $data[]='';
            // 遍历session里的shop
        // 往session里存东西
         
            if(session('shop')){
                foreach (session('shop') as $key => $value) {
                    
                    $datas=db('shop')->where('shop.id',$key)->field('shop.*')->select();
                      
                    foreach ($datas as $key => &$value) {
                        
                        $value['num']=session('shop.'.$value['id'])['num'];
                        
                        
                        
                    }
                    // $sum=0;
                    // foreach($datas as $key=>&$value){
                    //   $tot=session('shop.'.$value['id'])['num']*$value['price'];
                    //     $sum+=$tot;
                        $data[]=$value;
                    // }
                    // foreach($datas as $key=>&$value){
                    //    $value['sum']=$sum;
                    //     $data[]=$value;
                    // }
                }
                unset($data[0]);
            }
              
            $this->assign('data',$data);
        
          echo $this->fetch();
         
    }      
         
      
      
     


    
    
}
 