<?php
namespace Admin\Controller;
use Think\Controller;
class AddLianxiController extends Controller
{
	public function index()
	{
		$this->display();
	}
	
	public function add()
	{
		$data['lx_name']=I('lx_name');
		$data['lx_phone']=I('lx_phone');
		$data['lx_email']=I('lx_email');
		$data['lx_qq']=I('lx_qq');
		$data['lx_address']=I('lx_address');
		
		$result=M('contact')->add($data);
		if($result>0)
		{
			$this->success("添加文章 成功！",null,"{:U('Admin/Index/index')}");
		}else{
			$this->error("添加文章失败！",null,"{:U('Admin/Add/add')}");
		}
	}
}