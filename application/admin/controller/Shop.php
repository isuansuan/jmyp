<?php
 namespace app\admin\controller;

use app\admin\Model\Colum as ColumModel;
use app\admin\Model\Shop as ShopModel;
use think\Loader;
class Shop extends Lock{


	public function index(){
		// 多表查询filed需要的字段
		
		$search=input('param.search');
		$data=db('shop')->alias('s')->join('colum c','s.columid=c.id')->join('brand b','s.brandid=b.id')->field('s.*,c.cname,b.bname')->where('sname','like',"%$search%")->paginate(10);
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
	   $this->assign('data',$data);	
        // 总条数
        $tot=db('shop')->count();
        $this->assign('tot',$tot);
		
		return view();
	}
	// 添加
	public function add(){
		if(request()->isPost()){

			$shop=new ShopModel;
			$arr=input('post.');
					
			// unset($arr['cname']);
			// 删除字段
			$res=$shop->save($arr);
			
			if($res){
				$this->success('添加成功','index');
			}else{
				$this->error('添加失败');
			}
		}else{
			// 
			$shop=db('shop')->select();
			$this->assign('shop',$shop);
			// 品牌
			$brand=db('brand')->select();
			$this->assign('brand',$brand);

			// 分类
			$colum=new ColumModel;
			$data=$colum->coltree();
			$this->assign('data',$data);
			return view();
		}
		
	}
	// 状态
	public function ajax_shelf(){
		$str=input('post.');
		$shop=new shopModel;
		echo $res=$shop->editS($str);
	}
	// 详情
	public function detail($id){
		$data=db('shop')->find($id);
		$this->assign('data',$data);
		return view();
	}
	// 修改
	// 修改
	public function update($id){
		$shop=new ShopModel;
		if(request()->isPost()){
			$arr=input('post.');
			
			if($arr['simg']){
				unlink('./static/upload/shop/'.$arr['oldimg']);
			}else{
				$arr['simg']=$arr['oldimg'];
			}
			unset($arr['oldimg']);
			// 修改
			$res=$shop->save($arr,['id'=>$arr['id']]);

			if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			$data=$shop::get($id)->toArray();
			// 品牌
			$brand=db('brand')->select();
			$this->assign('brand',$brand);
			// fenlei分类
			$colum=new ColumModel;
			$fdata=$colum->coltree();
			$this->assign('fdata',$fdata);
			// 文章
			$this->assign('data',$data);
			return view();
		}
		
	}
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/shop/');
		if($info){
			// 成功上传后 获取上传信息
			// 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
			echo $info->getSaveName();
		}else{
			// 上传失败获取错误信息
			echo $file->getError();
		}
	}

	// 删除
	public function del($id){
		$shop=new ShopModel;
		$arr=$shop::get($id)->toArray();
		$res=unlink('./static/upload/shop/'.$arr['simg']);
		if($res){
			$r=$shop::destroy($id);
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
		$arr=db('shop')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/shop/'.$value['simg']);
		}
		$shop=new ShopModel;
		echo $r=$shop::destroy($idx);
	}
}