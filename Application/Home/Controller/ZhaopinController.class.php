<?php
namespace Home\Controller;
use Think\Controller;

class ZhaopinController extends Controller
{
	public function index()
	{
		$recruitment =M('recruitment')->select();
		$contact = M("contact")->select();
		 
		$this->assign("contact",$contact);
		$this->assign("recruitment",$recruitment);
		$this->display();
	}

}