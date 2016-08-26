<?php
namespace Home\Controller;
use Think\Controller;

class KhlyController extends Controller
{
	public function index()
	{
		$contact = M("contact")->select();
		 
		$this->assign("contact",$contact);
		$this->display();
	}

	public function add()
	{
		if(!isset($_POST)){
			exit('非法访问');
		}
		$ly_name = $_POST['faq_UserName'];
		$ly_email = $_POST['faq_UserEmail'];
		$ly_phone = $_POST['faq_phone'];
		$ly_body = $_POST['faqtxt'];
		
		
		if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $ly_email)){
			$rtndata['msg'] = iconv('gbk','utf-8','邮箱输入错误！');
			exit;
		}
		
		
		$data['ly_name']=$ly_name;
		$data['ly_email']=$ly_email;
		$data['ly_phone']=$ly_phone;
		$data['ly_body']=$ly_body;
		
		
		
		$result=M('message')->add($data);
		if($result>0)
		{
			$this->success("添加文章 成功！",null,"{:U('Home/Khly/index')}");
		}else{
			$this->success("添加文章失败！",null,"{:U('Home/Khly/index')}");
		}
		//注册信息判断
		 
		
		
	}
}