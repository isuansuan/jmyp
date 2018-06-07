<?php
namespace app\admin\controller;

use app\admin\Model\Lunbo as LunboModel;
use think\Loader;
class Lunbo extends Lock{


	public function index(){
		$search=input('param.search');
		$data = db('lunbo')->where('href','like',"%$search%")->order('sort desc')->paginate(5);
		// echo db('manger')->getLastSql();
		// 分页
		$page=$data->render();
		$this->assign('page',$page);
		$this->assign('data',$data);
		// 总条数
		$tot=db('lunbo')->count();
		$this->assign('tot',$tot);
		return view();
	}

	// 添加
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			$res=db('lunbo')->insert($data);
			if($res){
				$this->success('添加成功',url('index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			return view();
		}
		
	}
	// 图片上传
	public function ajax_upload(){
		// 获取表单上传文件 例如上传了001.jpg
		$file = request()->file('file');
		// 移动到框架应用根目录/public/uploads/ 目录下
		$info = $file->move('./static/upload/lunbo/');
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
	// 删除
	public function del($id){
		$lunbo=new LunboModel;
		$arr=$lunbo::get($id)->toArray();
		$res=unlink('./static/upload/lunbo/'.$arr['img']);
		if($res){
			$r=$lunbo::destroy($id);
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
		$arr=db('lunbo')->where('id','in',$idx)->select();
		foreach ($arr as $key => $value) {
			unlink('./static/upload/lunbo/'.$value['img']);
		}
		$lunbo=new LunboModel;
		echo $r=$lunbo::destroy($idx);
	}

	// 排序
	public function ajax_sort(){
		$data=input('post.');

		$lunbo=new LunboModel;
		echo $r=$lunbo->save(['sort'=>$data['sort']],['id'=>$data['id']]);
	}
   // 修改
	public function update($id){
		$lunbo=new LunboModel;
		if(request()->isPost()){
            $arr=input('post.');
            if($arr['img']){
                  unlink('./static/upload/lunbo/'.$arr['oldimg']);	
               
            }else{
            	$arr['img']=$arr['oldimg'];
            }
		    // 修改
		    $res=$lunbo->allowField(['img','href'])->save($arr,['id'=>$arr['id']]);
		    if($res){
				$this->success('修改成功',url('index'));
			}else{
				$this->error('修改失败');
			}
		}else{
			// 查询数据
			
			$data=$lunbo::get($id)->toArray();
			$this->assign("dat",$data);
			return view();
		}
		
	}

}