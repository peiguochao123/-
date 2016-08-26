<?php
namespace Admin\Controller;
use Think\Controller;
class AddZhaopinController extends Controller
{
	public function index()
	{
		$this->display();
	}
	
	public function add()
	{
		$data['zp_position']=I('zp_position');
		$data['zp_experience']=I('zp_experience');
		$data['zp_schooling']=I('zp_schooling');
		$data['zp_wage']=I('zp_wage');
		$data['create_time']=time();
		$result=M('recruitment')->add($data);
		if($result>0)
		{
			$this->success("添加文章 成功！",null,"{:U('Admin/Index/index')}");
		}else{
			$this->error("添加文章失败！",null,"{:U('Admin/Add/add')}");
		}
	}
}