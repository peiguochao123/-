<?php
namespace Admin\Controller;
use Think\Controller;
class AddGsjjController extends Controller 
{
    public function index()
    {
    	$this->display();
    }

  
    public function add()
    {
    	//往新闻表里添加数据
    	
    	$data['content']=I('content');
    	$result=M('gsjj')->add($data);
    	if($result>0)
    	{
    		$this->success("添加简历 成功！",null,"{:U('Admin/Index/index')}");
    	}
    	else
    	{
    		$this->error("添加简历 失败！",null,"{:U('Admin/Index/index')}");
    	}
    }
}
