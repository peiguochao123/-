<?php
namespace Home\Controller;
use Think\Controller;

class ListController extends Controller
{
	public function index()
	{
		$newsarticles =M('newsarticles')->select();
		$contact = M("contact")->select();
		 
		$this->assign("contact",$contact);
		$this->assign("newsarticles",$newsarticles);
		$this->display();
	}

}