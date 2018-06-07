<?php
namespace app\admin\controller;

use app\admin\Model\Colum as ColumModel;
use app\admin\Model\Brand as BrandModel;
use think\Loader;
 class Brand extends Lock{


	public function index(){
		
		

		$search=input('param.search');
		$data=db('brand')->alias('b')->join('colum c','b.columid=c.id')->field('b.*,c.cname')->where('bname','like',"%$search%")->paginate(8);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
	   $this->assign('data',$data);	
        // 总条数
        $tot=db('brand')->count();
        $this->assign('tot',$tot);
		
		return view();
	}
	// 添加
	public function add(){
		if(request()->isPost()){
			$brand=new BrandModel;
			$arr=input('post.');

			$res=$brand->save($arr);
			if($res){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			
			// 栏目
			$colum=new ColumModel;
			$data=$colum->coltree();
			$this->assign('data',$data);
			return view();
		}
		
	}
	
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/brand/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			
			$name=$info->getSaveName();
			$arr=explode('\\', $name);
			$str=implode('/', $arr);
			echo $str;
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}
	// 修改
	public function update($id){
		$brand=new BrandModel;
		if(request()->isPost()){
			$arr=input('post.');
			
			if($arr['bimg']){
				unlink('./static/upload/brand/'.$arr['oldimg']);
			}else{
				$arr['bimg']=$arr['oldimg'];
			}
			unset($arr['oldimg']);
			// 修改
			$res=$brand->save($arr,['id'=>$arr['id']]);

			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			$data=$brand::get($id)->toArray();
			
			// 分类
			$colum=new ColumModel;
			$fdata=$colum->coltree();
			$this->assign('fdata',$fdata);
			// 品牌
			$this->assign('data',$data);
			return view();
		}
		
	}
	// 删除
	
   
	public function del($id){
		$brand=new BrandModel;
		$arr=$brand::get($id)->toArray();
		$res=unlink('./static/upload/brand/'.$arr['bimg']);
		if($res){
			$r=$brand::destroy($id);
			if($r){
				$this->success('删除成功',url('index'));
			}else{
				$this->error('删除失败');
			}
		}
	}
		// 批量删除
	public function ajax_delAll(){
		$idx=input('post.str');
		$arr=db('brand')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/brand/'.$value['bimg']);
		}
		$brand=new BrandModel;
		echo $r=$brand::destroy($idx);
	}
    
   
		// 批量删除


	
	
}