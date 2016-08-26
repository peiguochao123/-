<?php
namespace Home\Controller;
use Think\Controller;

class ListxqController extends Controller
{
	public function index($xw_id)
	{
		$contact = M("contact")->select();
		$newsarticles =M('newsarticles')->select();
		$news = M('newsarticles')->where("xw_id=$xw_id")->find();
		
		$this->assign("news",$news);
		$this->assign("contact",$contact);
		$this->assign("newsarticles",$newsarticles);
		$this->display();
	}

}