<?php
 namespace app\index\controller;
 use think\Controller;
 use app\index\model\More as MoreModel;

class More extends Controller{
	public function index(){
		 $datad=db('colum')->where('pid','eq','56')->limit(10)->select();
		$this->assign('datad',$datad);	
		// 主页搜索
		$search=input('param.search');
        $shop=db('shop')->where('shop.shelf','1')->where('shop.sname','like',"%$search%")->select();
		$this->assign('shop',$shop);
		
		return view();	
	}
}