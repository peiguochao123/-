<?php
namespace Admin\Controller;
use Think\Controller;
class ModGsjjController extends Controller
{
	public function index()
	{
		$gsjj = M("gsjj")->select();
		
		$this->assign("gsjj",$gsjj);
		$this->display();
	}
	
	public function del($jj_Id)
	{
		//删除一篇文章以及评论
		//调用存储过程
		
		$result=M("gsjj")->delete($jj_Id);
	
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