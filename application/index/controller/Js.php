<?php
 namespace app\index\controller;

 use app\index\model\Cart as CartModel;
use app\admin\Model\Js as JsModel;
 use app\admin\Model\Orders as OrdersModel;
 use app\admin\Model\Shop as ShopModel;
 class Js extends Lock{

    public function index(){
         $arr=input('param.');
         // 商品的ID
    if($arr){
        foreach($arr['id'] as $key=>$arrs['id']){
            // $id=$arrs['id'];商品的ID

            $data=db('shop')->find($arrs['id']);
            $aar[$key]=$data;

            }
            foreach($aar as $key=>$aar1){
                // $arr商品内容跟ID 
                $aar[$key]['num']=$arr['num'][$key];
                // 改造数组吧num放一起  
            }
            $sum=0;
            foreach($aar as $key=>$aar1){
                $tot=$aar1['num']*$aar1['price'];

                $sum+=$tot;
            }
            foreach($aar as $key=>$aar1){
                $aar[$key]['sum']=$sum;
                
                // 改造数组吧sum放一起  
            }
            $this->assign('aar',$aar);  
    
         // $id=session('userid');
         // echo '<pre>';   
         // print_r($id);
         // echo '</pre>';  
         // $uid=input('param.');
         // echo '<pre>';   
         // print_r($uid);
         // echo '</pre>';  
         
         // // dump(session('shop'));
        
         // $orders=db('orders')->alias('o')->join('shop s','o.shop.id=s.id')->
         // dump(session('shop'));

        session('username');
        $id=session('userid');
   
        $hdata=db('userinfo')->alias('u')->join('user s','u.userid=s.id')->where('s.id',$id)->field('u.*')->select();
        

      
                
            $this->assign('hdata',$hdata);
              
            $sdata=db('s_province')->select();
            $this->assign('sdata',$sdata); 
             
            return view();
       
        
            

        
       
        

         
    }else{
        $this->success('未选择商品',url('Cart/index')); 
    }
        // $arr['num']数量$arr['id']商品ID
        

        
    }
    public function order(){
        $shop=new ShopModel;
        if(request()->isPost()){

            $arr=input('post.');
           
            if($arr['aid']){
                   // 用户的ID
                
                $infoid=$arr['aid'];
                unset($arr['id']);
                
                // 第一种方法
                foreach($arr['sid'] as $key=>$arrs['sid']){
                // $id=$arrs['id'];商品的ID

                    $data=db('shop')->find($arrs['sid']);
                    $aar[$key]=$data;

                }
                foreach($aar as $key=>$aar1){
                            
                        // $arr商品内容跟ID 
                        $aar[$key]['num']=$arr['num'][$key];
                        // 改造数组吧num放一起  
                }
                $this->assign('aar',$aar);  
                  
               // 第二种方法
               // foreach ($arr['sid'] as $key => $value) {
               //     $shop[]=db('shop')->find($value);
                   
                     
               // }
               //  foreach($arr['num'] as $key=>$value1){
                         
               //         foreach($shop as $key=>$value2){
                    
               //             $shop[$key]['num']=$arr['num'][$key];
               //         }   
               //  } 
                       
                foreach($aar as $key=>$arr){
                     
                    session('username');
                    $id=session('userid');
                    
                    $arrs['uid']=$id;
                    $arrs['infoid']=$infoid;
                   $arrs['ordernum']='S'.time().mt_rand(); 
                    $time=time();
                    $arrs['sid']=2;
                    $arrs['time']=$time;
                    $arrs['shopid']=$aar[$key]['id'];
                    $arrs['brandid']=$aar[$key]['brandid'];
                    $arrs['num']=$aar[$key]['num'];
                    
                    $res=db('orders')->group('o.brandid',$aar[$key]['brandid'])->insert($arrs);
                     
                    $shops=db('shop')->find($arrs['shopid']);
                    $shops['stock']=$shops['stock']-$arrs['num'];
                    $res=db('shop')->where('id',$shops['id'])->update($shops);
                    session('shop.'.$shops['id'],null); 
               
                } 
                
                 // 如果店铺相同就是一个订单号，如果不相同，分开下单不同的订单号
                
                
                 if($res){
                     $this->success('下单成功',url('Person/index'));
                 }else{
                    $this->error('下单失败');
                 }
                  return view();
           
            
        
               }else{
                  $this->success('未选择地址',url('Cart/index')); 
               }
                
        }
    }
    public function insert(){
        if(request()->isPost()){
            $id=input('post.');
            echo '<pre>';    
            print_r($id);
            echo '</pre>'; 
              
        }
    }
    public function ajax_getCity(){
         if(request()->isPost()){
             $pid=input('post.pid');
             $arr=db('s_city')->where('ProvinceID','eq',$pid)->select();
             $this->assign('arr',$arr);  
                echo $this->fetch();
  
            }else{
                return view();
            }
        
    }
    public function ajax_getDistrict(){
         $cid=input('post.cid');
         $datq=db('s_district')->where('CityID','eq',$cid)->select();
         $this->assign('dacqu',$datq);  
            echo $this->fetch();
  
    }
    public function ajax_add(){
        $add=input('post.str');

        parse_str($add,$arr);
        
        $sdata=db('s_province')->select();
        $this->assign('sdata',$sdata);
              

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

            // $user=db('userinfo')->where('userinfo.userid',$id)->group('userinfo.userid')->select();
            // $rres=db('user')->insert($data);
            // $userid=db('user')->getLastInsID();
            // $this->assign('user',$user);
    
            // $userinfo['img']=$user['0']['img'];
            // $userinfo['petname']=$user['0']['petname'];
            // $userinfo['gender']=$user['0']['gender'];
            
            $userinfo['userid']=$id;
            
            $res=db('userinfo')->insert($userinfo);

         
            if($res){
                $this->assign('userinfo',$userinfo);
                // 错误码and错误信息
                $rea=['code'=>1,'info'=>$this->fetch()];
                echo json_encode($rea);
            }else{
                // 错误码and错误信息
                $rea=['code'=>2,'info'=>'插入失败'];
                echo json_encode($rea);
            }
            

            
       
        


        
    }

}