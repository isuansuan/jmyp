<?php
namespace app\admin\controller;

use app\admin\Model\Colum as ColumModel;
use think\Loader;
 class Colum extends Lock{



    public function index(){
        

        
        // echo db('manger')->getLastSql();
        // 分页
       

         $colum=new ColumModel;
        $data=$colum->coltree();
        $this->assign('data',$data);
       
        // 总条数
        $tot=db('colum')->count();
        $this->assign('tot',$tot);

    	
    
    	
    	return view();
    }
    public function add(){
    	$colum=new ColumModel;
    	if(request()->isPost()){
    		// post 获取已经获取添加的东西
             $data=input('post.');

            
             // 添加
             $res=$colum->save($data);
             if($res){
                 $this->success('添加成功',url('index'));
             }else{
             	$this->error('添加失败');
             }
             
    	}else{
    		
    		$data=$colum->coltree();
    		$this->assign('data',$data);
    		return view();
    	}
    }

   

    // 删除
    protected $beforeActionList=[
        'delson'=>['only'=>'del'],
    ];
    // 前置操作
    public function delson(){
          $id=input('id');
          $colum=new ColumModel;
          // 获取自ID
          $idx=$colum->getChildId($id);
          // 是否有子类
          if($idx){
              db('colum')->delete($idx);
          }
    }
    public function del($id){
        $colum=new ColumModel;
        $res=$colum->delcol($id);
        if($res){
                  $this->success('删除成功',url('index'));
            }else{
                   $this->success('删除失败');
            }  
    }


    // 修改
    public function update($id){
        $colum=new ColumModel;
        if(request()->isPost()){
            $arr=input('post.');

           
            // 修改
            $res=$colum->save($arr,['id'=>$id]);
           


            
            if($res){
                  $this->success('修改成功',url('index'));
            }else{
                   $this->success('修改失败');
            }
        }else{
            // 所有分类
            $data=$colum->coltree();
            $this->assign('data',$data);
            // 查询当前的数据
            $fdata=db('colum')->find($id);
            $this->assign('fdata',$fdata);

            return view();
        }
        
    }

    // 批量删除
    public function ajax_delAll(){
        $idx=input('post.str');

        $colum=new ColumModel;
        echo $res=$colum->delM($idx);
    }


    // public function ajax_s(){
    //     $id=input('post.id');
    //     $colum=new ColumModel;
    //     $idx=$colum->getChildId($id);
      
    //     return json($idx);
    // }
  public function ajax_s(){
    $id=input('post.id');
    $colum=new ColumModel;
    // 获取该分类所有子ID；
    $idx=$colum->getChildId($id);
    return json($idx);
  }
}