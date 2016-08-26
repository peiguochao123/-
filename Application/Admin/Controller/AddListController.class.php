<?php
namespace Admin\Controller;
use Think\Controller;
class AddListController extends Controller
{
	public function index()
	{
		$this->display();
	}
	
	public function add()
	{
		$data['xw_title']=I('title');
		$data['xw_writer']=I('writer');
		$data['xw_source']=I('source');
		$data['xw_content']=I('content');
		$username=$_SESSION['userinfo']['username'];
		$data['create_time']=time();
		$result=M('newsarticles')->add($data);
		if($result>0)
		{
			$this->success("添加文章 成功！",null,"{:U('Admin/Index/index')}");
		}else{
			$this->error("添加文章失败！",null,"{:U('Admin/Add/add')}");
		}
	}
}