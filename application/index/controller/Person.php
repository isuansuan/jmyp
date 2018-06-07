<?php
 namespace app\index\controller;

 use app\index\model\Person as PersonModel;
use app\admin\Model\Userinfo as UserinfoModel;
use app\admin\Model\User as UserModel;
use app\admin\Model\Orders as OrdersModel;
use app\admin\Model\Comment as CommentModel;
 class Person extends Lock{


	public function index(){
	
		$arr=input('post.');
		// $arr用户信息的ID
		$id1=input('param.id');
			
		$search=input('param.search');
        


		// 数组改造吧相同订单好的商品查找出来
        $fdata=db('orders')->alias('o')->join('status s','s.id=o.sid')->join('user u','u.id=o.uid')->field('o.*,s.status')->group('o.ordernum')->where('ordernum','like',"%$search%")->select();
        
        foreach($fdata as &$fdata1){
            $shop=db('shop')->alias('s')->join('orders o','s.id=o.shopid')->join('brand b','b.id=s.brandid')->join('userinfo u','u.id=o.infoid')->join(
			'user i','i.id=u.userid')->field('s.id,s.contact,s.price,b.store,s.simg,i.username,u.tel,u.addr,o.ordernum,o.num')->where('ordernum','eq',$fdata1['ordernum'])->select();
            $this->assign('shop',$shop);
            		
            
            $fdata1['shops']=$shop;
        }
        $this->assign('fdata',$fdata);
       // 数组改造吧相同订单好的商品查找出来店铺
   //      $brand=db('brand')->alias('b')->join('orders o','o.brandid=b.id')->join('userinfo u','u.id=o.infoid')->join(
			// 'user i','i.id=u.userid')->join('status s','s.id=o.sid')->field('o.*,b.store,i.username,u.tel,u.addr,s.status')->group('b.store')->where('ordernum','like',"%$search%")->select();
        
        session('username');
	    $id=session('userid');  	
       $brand=db('orders')->alias('o')->join('status s','s.id=o.sid')->join('brand b','b.id=o.brandid')->field('o.*,s.status,b.store')->group('o.ordernum')->where('ordernum','like',"%$search%")->where('o.uid',$id)->order('o.time desc')->select();

        foreach($brand as &$brand1){
        	 $sum='0';
             // $shop=db('shop')->alias('s')->join('orders o','s.id=o.shopid')->join('brand t','t.id=o.brandid')->field('s.contact,s.price,s.simg,t.store,o.ordernum,o.num')->where('store','eq',$brand1['store'])->select();
             $shop=db('shop')->alias('s')->join('orders o','s.id=o.shopid')->join('brand t','t.id=o.brandid')->field('s.id,s.contact,s.price,s.simg,t.store,o.ordernum,o.num')->where('ordernum','eq',$brand1['ordernum'])->select();

             $this->assign('shop',$shop);
            	
             $brand1['shops']=$shop;
          
               foreach($shop as $key=>$shop1){

                   $tot=$shop1['num']*$shop1['price'];
                   $brand1['shops'][$key]['tot']=$tot;
                   $sum+=$tot;
                   
               }
               $brand1['sum']=$sum;
               // foreach($shop as $key=>$value){
               // 		$tot=$shop['0']['num']*$shop['0']['price'];
               // 		$brand1['key']['tot']=$tot;
                    	
               // }	
        }
        // $array=1;
        // $brand['shops']['tot']=	$array;
        
        $this->assign('brand',$brand);
		// 分页
		
        $data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			// echo db('userinfo')->getLastSql();

			// echo db('userinfo')->getLastSql();
			
			$this->assign('data',$data);     
	
		
		$stats=db('status')->select();	
		$this->assign('stats',$stats);
		
       
        return view();
		
	}
	public function ajax_getCity(){
		 if(request()->isPost()){
	         $pid=input('post.pid');
	         $arr=db('s_city')->where('ProvinceID','eq',$pid)->select();
	         $this->assign('arr',$arr);  
	            echo $this->fetch();
  //        $str='';
	 //     $str.="<option value=>--选择市--</option>";
  //        foreach ($arr as $key => $value) {
		// 	$str.="<option value=$value[CityID]>$value[CityName]</option>";
		// }
		// echo $str;
	        }else{
	        	return view();
	        }
        
	}
	public function ajax_getDistrict(){
         $cid=input('post.cid');
         $datq=db('s_district')->where('CityID','eq',$cid)->select();
         $this->assign('dacqu',$datq);  
            echo $this->fetch();
  //        $str='';
	 //     $str.="<option value=>--选择区--</option>";
  //        foreach ($arr as $key => $value) {
		// 	$str.="<option value=$value[DistrictID]>$value[DistrictName]</option>";
		// }
		// echo $str;
	}
	
	public function add(){
    	if(request()->isPost()){
			$arr=input('post.');

    



	        $city=db('s_province')->alias('p')->where('p.ProvinceID',$arr['pid'])->join('s_city c','p.ProvinceID=c.ProvinceID')->where('c.CityID',$arr['cid'])->join('s_district d','d.CityID=c.CityID')->where('d.DistrictID',$arr['qid'])->field('p.*,c.CityName,d.DistrictName')->select();

			// echo db('s_province')->getLastSql();exit; 
			 foreach($arr as $key=>$value){
                 
                 
                
		       $this->assign('city',$city);
		       	
		       $arr['pro']=$city;
			}
		    $this->assign('arr',$arr);
           	
            $userinfo['name']=$arr['name'];
            $userinfo['addr']=$arr['addx'];
            $userinfo['tel']=$arr['tel'];
            $userinfo['addr']=$arr['pro']['0']['CityName'];
            $userinfo['addr']=$arr['pro']['0']['ProvinceName'];
            $userinfo['addr']=$arr['pro']['0']['DistrictName'];

            $userinfo['addr']=$arr['pro']['0']['ProvinceName'].$arr['pro']['0']['CityName'].$arr['pro']['0']['DistrictName'].$arr['addx'];
            session('username');
            $id=session('userid');
            $user=db('userinfo')->where('userinfo.userid',$id)->group('userinfo.userid')->select();
            // $rres=db('user')->insert($data);
            // $userid=db('user')->getLastInsID();
		    $this->assign('user',$user);
	
            $userinfo['img']=$user['0']['img'];
            $userinfo['petname']=$user['0']['petname'];
            $userinfo['gender']=$user['0']['gender'];
            
            $userinfo['userid']=$id;
            
            $res=db('userinfo')->insert($userinfo);

         
             if($res){
                 $this->success('添加成功',url('Person/add'));
             }else{
             	$this->error('添加失败');
             }
            

		    
		}else{

		    // $this->assign('arr',$arr);
			$sdata=db('s_province')->select();
		    $this->assign('sdata',$sdata);

		    // 用户
			// $id=session('adminid');

			// $data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->field('u.*,s.username')->select();
			session('username');
            $id=session('userid');
          	
            // 头像
            $data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			// echo db('userinfo')->getLastSql();
           $this->assign('data',$data);
			// echo db('userinfo')->getLastSql();
			// 收货地址 
			$adata=db('userinfo')->alias('u')->where('u.userid',$id)->field('u.*')->select();
			 // echo db('userinfo')->getLastSql();
            $this->assign('adata',$adata);
		 
		    return view();
		}
		


		
	}
	
	
	// find查找
	public function ajax_find(){
		$id=input('post.id');
		
        // 用户信息表ID
		
		$arr=db('userinfo')->alias('u')->where('u.id',$id)->select();

		$this->assign('arr',$arr);
		
			$sdata=db('s_province')->select();
		    $this->assign('sdata',$sdata);
		
		echo $this->fetch();
	}
	// 修改
	public  function ajax_edit(){

		if(request()->isPost()){
			$data=input('post.str');
		
		// 将字符串转为数组
           parse_str($data,$arr);
			
	
				// 将字符串转为数组
			
			$city=db('s_province')->alias('p')->where('p.ProvinceID',$arr['pid'])->join('s_city c','p.ProvinceID=c.ProvinceID')->where('c.CityID',$arr['cid'])->join('s_district d','d.CityID=c.CityID')->where('d.DistrictID',$arr['qid'])->field('p.*,c.CityName,d.DistrictName')->select();

			// echo db('s_province')->getLastSql();exit; 
			 foreach($arr as $key=>$value){
                 
		       $this->assign('city',$city);
		       	
		       $arr['pro']=$city;
			}
		    $this->assign('arr',$arr);
		   	
		    unset($arr['pid']);
			unset($arr['cid']);

			unset($arr['qid']);
            
		    $arr['addr']=$arr['pro']['0']['CityName'];
            $arr['addr']=$arr['pro']['0']['ProvinceName'];
            $arr['addr']=$arr['pro']['0']['DistrictName'];

            $arr['addr']=$arr['pro']['0']['ProvinceName'].$arr['pro']['0']['CityName'].$arr['pro']['0']['DistrictName'].$arr['addx'];			
			unset($arr['addx']);
			unset($arr['pro']);
			
			$arr['name']=$arr['name'];
			$arr['tel']=$arr['tel'];
			$arr['userid']=$arr['userid'];
		    
			$res=db('userinfo')->where('id',$arr['id'])->update($arr);
			
			if($res){
				echo 1;
			    }else{
				echo 0;
			    }
		}else{
			$sdata=db('s_province')->select();
		    $this->assign('sdata',$sdata);

		    // 用户
			// $id=session('adminid');

			$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->field('u.*,s.username')->group('s.id')->select();
			

			$this->assign('data',$data);
		    return view();
		}
	}


	public function del($id){
          
           $userinfo=new UserinfoModel;
           // $arr=$userinfo::get($id)->toArray();
		     $r=$userinfo::destroy($id);
           	  

				if($r){
				$this->success('删除成功',url('Person/add'));
			    }else{
				$this->error('删除失败');
			    }
			
	}
	public function mydel($id){
	

		
		$arr=db('comment')->where('id',$id)->select();
		
		foreach($arr as $arr1){
			$cimg=$arr1['cimg'];
             
		}	
		
		if($cimg){
			
           $res=unlink('./static/upload/comment/'.$cimg);
			
		}
		
		
		$res=db('comment')->where('id',$id)->delete();  
	
		if($res){
			$this->success('删除成功',url('Person/mycomm'));
		}else{
			$this->error('删除失败');
		}
		
	
		
	}
    public function delete($ordernum){
            $arr=db('orders')->where('ordernum',$ordernum)->select();
           
             foreach($arr as &$arr1){
               $sid=$arr1['sid'];
             }
            
            if($sid==8){
               $res=db('orders')->where('ordernum',$ordernum)->delete();  
           	
				if($res){
				$this->success('删除成功',url('Person/index'));
			    }else{
				$this->error('删除失败');
			    } 
            }else{
            	// echo "还未签收，无法删除"
            	$this->error('快件还未签收，无法删除',url('Person/index'));
            }
		     	
    }
// 用户
	
		// 添加

	public function mess(){
		$userinfo=new UserinfoModel;

		if(request()->isPost()){
			$data=input('post.');
			
			if($data['img']){
				if(!$data['oldimg']){

				}else{
					unlink('./static/upload/user/'.$data['oldimg']);

				}
                  
               
            }else{
            	$data['img']=$data['oldimg'];
            }
		   session('username');
            $id=session('userid');
			// $dataa=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*')->select();
		 
			// $arr=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->field('u.*,s.username')->select();
           
			// unset($data['username']);
			// 修改
		    // $res=$userinfo->allowField(['img','petname','gender'])->save($data,['id'=>$data['id']]);

		    $res=$userinfo->allowField(['img','petname','gender'])->save($data,['userid'=>$id]);
	
			if($res){
				$this->success('修改成功',url('mess'));
			}else{
				$this->error('修改失败');
			}
		}else{
			session('username');
            $id=session('userid');
			$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			// echo db('userinfo')->getLastSql();

			// echo db('userinfo')->getLastSql();
			
			$this->assign('data',$data);
			return view();
		}
		
	}
	
	
	

	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/user/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			// echo $info->getSaveName();

			$name=$info->getSaveName();
			$arr=explode('\\', $name);
			$str=implode('/', $arr);
			echo $str;
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
	public function uppass(){
		if(request()->isPost()){
            $arr=input('post.');
            
            session('username');
	        $id=session('userid');
	        $arr['password']=md5($arr['password']);
	        unset($arr['repassword']);
	        $res=db('user')->where('id',$id)->update($arr);
	        

           
            if($res){
				$this->success('修改成功',url('Person/uppass'));
			}else{
				$this->error('修改失败');
			}

		}else{
			session('username');
	        $id=session('userid');
			$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
				// echo db('userinfo')->getLastSql();

				// echo db('userinfo')->getLastSql();
				
			$this->assign('data',$data);
			return view();
		}
		
	}
    public function collect(){
    	session('username');
	    $id=session('userid');
    	$data1=db('favorite')->alias('f')->join('user u','u.id=f.userid')->join('shop s','f.shopid=s.id')->where('u.id',$id)->field('s.*,f.userid')->select();
    	$this->assign('data1',$data1);

    	$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
				// echo db('userinfo')->getLastSql();

				// echo db('userinfo')->getLastSql();
				
		$this->assign('data',$data);
    	return view();
    }	
    // 状态
  	
	public function ajax_status(){
		

		$ordernum=input('ordernum');
	    
        $stau['sid']=8;
		$stau['affrim']=1;
	    $shopid=input('shopid');
			// $orders=new OrdersModel;
		    
		 //    $status= $orders->save($stau,['ordernum'=>$ordernum]);	
		$res=db('orders')->where('ordernum',$ordernum)->update($stau);
		// $res=db('orders')->alias('o')->join('shop p','o.shopid=p.id')->where('p.id',$shopid)->update($stau);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
		
		// $str['sid']=8;
		
		// $data=db('orders')->where('ordernum',$ordernum)->find();
		

		// $str['affrim']=$data['affrim'];
		// if($str['affrim']){
		// 	echo 5;
		// }else{
		// 	$str['affrim']=1;
		// 	$orders=new OrdersModel;
		    
		//     echo $orders->save($str,['ordernum'=>$ordernum]);
		// }
		
	
			
		
	}
	public function comment(){
		// 添加
	
		if(request()->isPost()){
			
			$id=input('param.id');
	
			$data=input('post.');
	
			$arr['cimg']=$data['cimg'];
			$arr['content']=$data['content'];
            $arr['sid']=$data['sid'];
            $time=time();
            $arr['time']=$time;
            
            session('username');
            $userid=session('userid');
            $arr['userid']=$userid;

            $shopid=$data['sid'];

			$res=db('comment')->insert($arr);

			if($res){
				// $this->success('评论成功',url('Shop/index',array('id'=> $shopid)));
				$this->success('评论成功',url('Person/mycomm'));
			    
			}else{
				$this->error('评论失败');
			}
			
		}else{
			session('username');
            $id=session('userid');
			$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			$this->assign('data',$data);


			$arr=input('param.');
			
			$ordernum=$arr['ordernum'];
			$shopid=$arr['shopid'];
			$brand=db('shop')->where('id',$shopid)->select();
					
            // $brand=db('orders')->alias('o')->join('status s','s.id=o.sid')->join('brand b','b.id=o.brandid')->field('o.*,s.status,b.store')->group('o.ordernum')->where('o.ordernum',$ordernum)->select();
            // 两个商品一起评论
          //   foreach($brand as &$brand1){
        	 // $sum='0';
          //    // $shop=db('shop')->alias('s')->join('orders o','s.id=o.shopid')->join('brand t','t.id=o.brandid')->field('s.contact,s.price,s.simg,t.store,o.ordernum,o.num')->where('store','eq',$brand1['store'])->select();
          //    $shop=db('shop')->alias('s')->join('orders o','s.id=o.shopid')->join('brand t','t.id=o.brandid')->field('s.id,s.contact,s.price,s.simg,t.store,o.ordernum,o.num')->where('ordernum','eq',$ordernum)->select();

          //    $this->assign('shop',$shop);
            
          //    $brand1['shops']=$shop;
         	
          //      foreach($shop as $key=>$shop1){

          //          $tot=$shop1['num']*$shop1['price'];
          //          $brand1['shops'][$key]['tot']=$tot;
          //          $sum+=$tot;
                   
          //      }
          //      $brand1['sum']=$sum;
          //   }
            // $brand=db('orders')->alias('o')->join('status s','s.id=o.sid')->join('brand b','b.id=o.brandid')->field('o.*,s.status,b.store')->where('o.ordernum',$ordernum)->select();

            
            $this->assign('brand',$brand);

			return view();
		}
		
	
	}

	// 图片上传
	public function ajax_upload1(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/comment/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			// echo $info->getSaveName();

			$name=$info->getSaveName();
			

			$arr=explode('\\', $name);
			$str=implode('/', $arr);
			echo $str;
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
	public function order(){
		session('username');
            $id=session('userid');
           // 用户表ID
		$userid=input('param.id');
		// 用户信息的ID
       $fdata=db('userinfo')->where('userinfo.id',$userid)->select();
			$this->assign('fdata',$fdata);

        $data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			// echo db('userinfo')->getLastSql();

			// echo db('userinfo')->getLastSql();
			
			$this->assign('data',$data);
			
		return view();
	}
	public function mycomm(){
		session('username');
        $id=session('userid');
		$data=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*,s.username')->group('s.id')->select();
			
			
	    $this->assign('data',$data);

	    // 评论
	    $comment=db('comment')->alias('u')->join('user s','u.userid=s.id')->join('shop p','p.id=u.sid')->where('s.id',$id)->field('u.*,p.sname,p.simg')->order('u.time desc')->select();

	    $this->assign('comment',$comment);
			return view();
	}
}