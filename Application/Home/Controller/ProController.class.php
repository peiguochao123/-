<?php
namespace Home\Controller;
use Think\Controller;

class ProController extends Controller
{
	public function index($al_id)
	{
		$contact = M("contact")->select();
		$pro = M('gcal')->where("al_id=$al_id")->find();
		
		$this->assign("pro",$pro);
		$this->assign("contact",$contact);
		$this->display();
	}

}