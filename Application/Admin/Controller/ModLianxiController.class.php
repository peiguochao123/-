<?php
namespace Admin\Controller;
use Think\Controller;
class ModLianxiController extends Controller
{
	public function index()
	{
		$contact = M("contact")->select();

		$this->assign("contact",$contact);
		$this->display();
	}
	
	public function del($lx_Id)
	{
		//删除一篇文章以及评论
		//调用存储过程
		$result=M("contact")->delete($lx_Id);
	
		if($result>0)
		{
			$this->success("删除文章成功！",null,"{:U('Admin/ModLianxi/index')}");
		}
		else
		{
			$this->success("删除文章失败！",null,"{:U('Admin/ModLianxi/index')}");
		}
	}
}