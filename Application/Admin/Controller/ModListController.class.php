<?php
namespace Admin\Controller;
use Think\Controller;
class ModListController extends Controller
{
	public function index()
	{
		$newsarticles = M("newsarticles")->select();

		$this->assign("newsarticles",$newsarticles);
		$this->display();
	}
	
	public function del($xw_id)
	{
		//删除一篇文章以及评论
		//调用存储过程
		
		$result=M("newsarticles")->delete($xw_id);
	
		if($result>0)
		{
			$this->success("删除文章成功！",null,"{:U('Admin/ModGsjj/index')}");
		}
		else
		{
			$this->success("删除文章失败！",null,"{:U('Admin/ModGsjj/index')}");
		}
	}
}