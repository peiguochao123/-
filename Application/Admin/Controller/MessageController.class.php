<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller
{
	public function index()
	{
		$message = M("message")->select();
		
		$this->assign("message",$message);
		$this->display();
	}
	
	public function del($ly_Id)
	{
		//删除一篇文章以及评论
		//调用存储过程
		$result=M("message")->delete($ly_Id);
	
		if($result>0)
		{
			$this->success("删除文章成功！",null,"{:U('Admin/Message/index')}");
		}
		else
		{
			$this->success("删除文章失败！",null,"{:U('Admin/Message/index')}");
		}
	}
}