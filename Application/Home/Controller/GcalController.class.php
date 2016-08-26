<?php
namespace Home\Controller;
use Think\Controller;

class GcalController extends Controller
{
	public function index()
	{
		$contact = M("contact")->select();
		$gcal = M("gcal")->select();

		$this->assign("gcal",$gcal);
		$this->assign("contact",$contact);
		$this->display();
	}

}