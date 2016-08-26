<?php
namespace Admin\Controller;
use Think\Controller;
class AddGcalController extends Controller
{
	public function index()
	{
		$this->display();
	}
	
	public function upload()
	{
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =      'Public/uploads/'; // 设置附件上传根目录
		$upload->savePath  =      ''; // 设置附件上传（子）目录
		$upload->autoSub = false;
		
		//$upload->saveName  = 	 'time'; 
		//$upload->saveName = 'com_create_guid';
		// 上传单个文件
		$info   =   $upload->uploadOne($_FILES['imagepath']);
		if(!$info)
		{
			// 上传错误提示错误信息
			$this->error($upload->getError());
		}
		//$imgData['url'] = $info['savename'];
		//$imgData['create_time']=time();
		$savPath = "{$info['savename']}";// 保存路径
		
		$_POST["imagepath"] = $savPath;
	
		$result = M('gcal')->add($_POST);
		if($result>0)
		{
			$this->success("添加文章 成功！",null,"{:U('Admin/Index/index')}");
		}
		else
		{
			$this->error("添加文章失败！",null,"{:U('Admin/Add/add')}");
		}
		
	}
	
}