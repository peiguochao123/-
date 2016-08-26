<?php
namespace Home\Controller;
use Think\Controller;

class FwxmController extends Controller 
{
    public function index()
    {
    	$contact = M("contact")->select();
    	 
    	$this->assign("contact",$contact);
    	$this->display();
    }
        
}
