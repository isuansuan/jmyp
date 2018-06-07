<?php
namespace app\admin\controller;
use app\admin\Model\Advert as AdvertModel;
use think\Loader;
 class Advert extends Lock{


	public function index(){
		$search=input('param.search');
		$data = db('advert')->where('href','like',"%$search%")->paginate(8);
		// echo db('manger')->getLastSql();
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		$this->assign('data',$data);
		// 总条数
		$tot=db('advert')->count();
		$this->assign('tot',$tot);
		return view();
	}

	// 添加
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			$res=db('advert')->insert($data);
			if($res){
				$this->success('添加成功',url('index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$data=db('advert')->select();
		    $this->assign('data',$data);

			return view();
		}
		
	}
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/advert/');
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
		$advert=new AdvertModel;
		$arr=$advert::get($id)->toArray();
		$res=unlink('./static/upload/advert/'.$arr['img']);
		if($res){
			$r=$advert::destroy($id);
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
		$arr=db('advert')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/advert/'.$value['img']);
		}
		$advert=new AdvertModel;
		echo $r=$advert::destroy($idx);
	}

	
   // 修改
	public function update($id){
		$advert=new AdvertModel;
		if(request()->isPost()){
            $arr=input('post.');
            if($arr['img']){
                  unlink('./static/upload/advert/'.$arr['oldimg']);	
               
            }else{
            	$arr['img']=$arr['oldimg'];
            }
		    // 修改
		    $res=$advert->allowField(['img','href','type'])->save($arr,['id'=>$arr['id']]);
		    if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			
			$data=$advert::get($id)->toArray();
			$this->assign("dat",$data);
			return view();
		}
		
	}

	// 状态
	public function ajax_type(){

		$str=input('post.');
			
		$advert=new AdvertModel;
		echo $res=$advert->editS($str);
	}


}