<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>河北敏泽科技有限公司</title>
<meta name="description" content="河北敏泽科技有限公司" />
<link href="/Test/Public/images/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

﻿<style>
*{ margin:0; padding:0; list-style:none;}
img{ border:0;}

.jd_ad_slide {width: 990px; height: 250px; margin:0 auto; overflow:hidden;position: relative;} 
.jd_ad_img {position: absolute; left: 0; top: 0;width: 100%; height: 100%;display: none; background:url(http://www.lanrenzhijia.com/demo/images/loading.gif) no-repeat center center;}
.jd_ad_btn {position: absolute; right: 3px; bottom: 8px;}
.jd_ad_btn_a {width: 22px; height: 22px;line-height: 22px;margin-right: 5px;text-align: center;border-radius: 11px;background: #999;color: #fff;float: left; text-decoration:none;}
.jd_ad_btn_a:hover {text-decoration: none;}
.jd_ad_btn .active {background: #E4393C;}
</style>


<div class="headtop"></div>
<div class="headtop2"><!-- 主体顶部开始 -->
<div class="logo"></div>
<div class="headr">
<li><a href="#">设为首页</a> | <a href="#">加入收藏</a></li>
<li class="tel">咨询电话:17073428276</li>
</div>
</div><!-- 主体顶部结束 -->
<div class="menu"><!-- 主体导航开始 -->
	<li><a href="<?php echo U('Index/index');?>" class="a">网站首页</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Gsjj/index');?>" class="a">公司简介</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Fwxm/index');?>">服务项目</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Gcal/index');?>">工程案例</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('List/index');?>">新闻动态</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Khly/index');?>">客户留言</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Zhaopin/index');?>">人才招聘</a></li>
	<li class="line"></li>
	<li><a href="<?php echo U('Lianxi/index');?>">联系我们</a></li>
</div><!-- 主体导航结束 -->

<div id="jdAdSlide" class="jd_ad_slide">
	<img src="/Test/Public/images/banner.jpg" class="jd_ad_img">
	<img data-src="/Test/Public/images/banner2.jpg" class="jd_ad_img">
	<img data-src="/Test/Public/images/banner3.jpg" class="jd_ad_img">
	<div id="jdAdBtn" class="jd_ad_btn"></div>
</div>

<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery-powerSwitch-min.js"></script>
<script>
var htmlAdBtn = '';
$("#jdAdSlide img").each(function(index, image) {
	var id = "adImage" + index;
	htmlAdBtn = htmlAdBtn + '<a href="javascript:" class="jd_ad_btn_a" data-rel="'+ id +'">'+ (index + 1) +'</a>';
	image.id = id;
});
$("#jdAdBtn").html(htmlAdBtn).find("a").powerSwitch({
	eventType: "hover",
	classAdd: "active",
	animation: "fade",
	autoTime: 5000,
	onSwitch: function(image) {
		if (!image.attr("src")) {
			image.attr("src", image.attr("data-src"));	
		}
	}
}).eq(0).trigger("mouseover");
</script>

	<div class="maintop"></div>
	<div class="main1"><!-- 主体内容开始 -->
	<div class="main_l"><!-- 主体左侧开始 -->
	
	<div class="leftbt"><div class="xwtxt">新闻中心</div></div>
	
	<div class="leftbtnr">
	<?php if(is_array($newsarticles)): $i = 0; $__LIST__ = $newsarticles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="/Test/index.php/Home/Listxq/index/xw_id/<?php echo ($v["xw_id"]); ?>.html"><?php echo ($v["xw_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	
	<div class="leftbt"><div class="xwtxt">联系我们</div></div>
	<div class="leftbtnr">
	
	<?php if(is_array($contact)): foreach($contact as $key=>$v): ?><li><a href="#">联系人：<?php echo ($v["lx_name"]); ?></a></li>
	<li><a href="#">电话：<?php echo ($v["lx_phone"]); ?></a></li>
	<li><a href="#">邮箱：<?php echo ($v["lx_email"]); ?></a></li>
	<li><a href="#">客服QQ：<?php echo ($v["lx_qq"]); ?></a></li>
	<li><a href="#">地址：<?php echo ($v["lx_address"]); ?> </a></li><?php endforeach; endif; ?>
	
	</div>
	</div><!-- 主体左侧结束 -->
	<div class="mr"><!-- 主体右侧开始 -->
	<div class="mbrbt"><img src="/Test/Public/images/news.gif" /></div>
	<div class="mrbtnr"><!-- 主体右侧内容开始 -->
	<div class="mrnr1">
		<h1 align="center"><?php echo ($news["xw_title"]); ?></h>
		<h5 align="center"><?php echo ($news["xw_dateandtime"]); ?></h5>
		<p align="center"><?php echo ($news["xw_writer"]); ?></p>
		<p align="center"><?php echo ($news["xw_source"]); ?></p>
		<font size="3"><?php echo ($news["xw_content"]); ?></font>
	</div>
	
	</div>
	</div>
	<!-- 主体右侧内容结束 -->
	</div><!-- 主体右侧结束 -->
	</div><!-- 主体内容结束 -->
<div class="foot">版权所有 &copy; 你的网站名称 未经许可 严禁复制 <br />
敏泽科技 版权所有<br />
来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a> </div>

<script src='//kefu.easemob.com/webim/easemob.js?tenantId=26380&hide=false&sat=false' async='async'></script>

</body>
</html>