<?php
namespace Home\Controller;
use Think\Controller;

class GsjjController extends Controller 
{
    public function index()
    {
    	$gsjj =M()->query("select * from gsjj where jj_id=1");
    	//$gsjj =M('gsjj')->select();
    	$newsarticles =M('newsarticles')->select();
    	$contact = M("contact")->select();
    	 
    	$this->assign("contact",$contact);
    	$this->assign("newsarticles",$newsarticles);
    	$this->assign("gsjj",$gsjj);
    	$this->display();
    }
        
}