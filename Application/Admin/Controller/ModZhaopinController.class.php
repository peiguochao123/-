<?php
namespace Admin\Controller;
use Think\Controller;
class ModZhaopinController extends Controller
{
	public function index()
	{
		$recruitment = M("recruitment")->select();
		
		$this->assign("recruitment",$recruitment);
		$this->display();
	}
	
	public function del($zp_id)
	{
		//删除一篇文章以及评论
		//调用存储过程
	
		$result=M("recruitment")->delete($zp_id);
	
		if($result>0)
		{
			$this->success("删除文章成功！",null,"{:U('Admin/ModZhaopin/index')}");
		}
		else
		{
			$this->success("删除文章失败！",null,"{:U('Admin/ModZhaopin/index')}");
		}
	}
	
	public function up($zp_id)
	{
		//删除一篇文章以及评论
		//调用存储过程
		
		$result=M('recruitment')->where("zp_id='$zp_id'")->save($_POST);
		
		if($result>0)
		{
			$this->success("修改成功！",null,"{:U('Admin/ModZhaopin/index')}");
		}
		else
		{
			$this->redirect("{:U('Admin/ModZhaopin/index')}");
		}
	}
}