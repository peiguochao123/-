<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>河北敏泽科技有限公司</title>
<meta name="keywords" content="网站建设、网站优化、SEO、网站推广、山东网站建设_山东网站优化_济南网站优化_济南seo" />
<meta name="description" content="济南企业网站建设模板" />
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
	<div class="leftbt">
	  <div class="xwtxt">服务项目</div>
	</div>
	<div class="leftbtnr">
	<li><a href="#">此处放服务项目大类别</a></li>
	<li><a href="#">室内装饰工程</a></li>
	<li><a href="#">家装类</a></li>
	<li><a href="#">工装类</a></li>
	<li><a href="#">此处放服务项目大类别</a></li>
	</div>
	<div class="leftbt"><div class="xwtxt">联系我们</div></div>
	<div class="leftbtnr">
	
	<?php if(is_array($contact)): $i = 0; $__LIST__ = $contact;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="#">联系人：<?php echo ($v["lx_name"]); ?></a></li>
		<li><a href="#">电话：<?php echo ($v["lx_phone"]); ?></a></li>
		<li><a href="#">邮箱：<?php echo ($v["lx_email"]); ?></a></li>
		<li><a href="#">客服QQ：<?php echo ($v["lx_qq"]); ?></a></li>
		<li><a href="#">地址：<?php echo ($v["lx_address"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	
	</div>
	</div><!-- 主体左侧结束 -->
	<div class="mr"><!-- 主体右侧开始 -->
	<div class="mbrbt"><img src="/Test/Public/images/fwxm.gif" /></div>
	<div class="mrbtnr"><!-- 主体右侧内容开始 -->
	<div class="mrnr">
	济南海松科技有限公司是以实现互联网应用价值为使命的网络服务公司。在互联行业飞速发展的时代，济南海松科技有限公司应运而生并于2007年4月正式成立，公司总部坐落在美丽的泉城济南，位于历下区山大路科苑大厦14楼。公司自成立以来得到了飞速发展并且规模不断扩大，现下设潍坊、德州、济宁、临沂等各地分公司。 
	      经过扎实的创业发展，公司拥有成熟完善的管理模式和组织机构，总经理、副总经理以及下设的技术部、运营部、客服部、财务部、行政部、商务部、市场部等部门，公司现有员工50余人，其中技术精英20余人、业务精英30余人，随着公司的不断发展，公司也不断注入新鲜血液，为公司明天更好的发展奠定了良好的基础。公司在发展中塑造出“平等”、“透明”、“自治”的企业文化，增强了企业员工的向心力和凝聚力，促进了公司和员工的共同发展。
	      随着互联网行业的飞速发展，公司高瞻远瞩、审时度势从最初单纯的主营网站建设、seo优化扩展到以网络运营效果为目的的网站整体营销策划与运营服务；并开发了导购泉城和搜罗网，导购泉城是实现产品网络营销，推动中国网上店铺普及的电子商务平台；搜罗网在济南是最值得信赖的分类信息网络平台，包罗万象，网罗泉城；同时拥有阿里巴巴集团旗下，万网、淘宝网合作的淘里淘外项目的济南首席总代理权。
	      公司依托泉城济南优良的网络市场环境，拥有年轻的专业化网络服务团队，分工合作，相互支持，共同打造良好的网络时代，在互联网的发展史上留下我们海松人的足印。海松人坚持以共赢、付出、负责任的心态，以优质的服务为每一个客户负责；竭力打造企业的文化实力和服务实力；为企业提供信息化建设和应用服务，采用国际前沿技术，不断为用户设计和研发多领域的解决方案。海松人站在网络科技发展的最前沿，以“高起点、高技术、高质量”的『三高』战略为我们的客户提供“一对一、一站式、一体化”的24小时『三一』服务工程。并将在电子商务实业领域实现新的飞跃。公司计划将在2018年上市，这是我们持之以恒不变的追求和目标，也是我们海松人用极大的热情、最饱满的精神，最充足的活力和最大的努力去实现我们的计划。
	      海松科技对互联网的发展具有强烈的使命感，我们将不断的追求卓越、发展创新，向互联网行业的更高峰攀登。凭借专业化的高品质服务，让人们随时随地都能轻松享受IT高科的最新成果，都能轻易地开展电子商务，实现信息化，将商机和梦想延伸到世界各地！
	      济南海松科技有限公司与互联网共舞，与企业发展共赢！ </div>
	<div class="fanye"><span class="disabled"> < </span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=4">4</a><a href="#?page=5">5</a><a href="#?page=6">6</a><a href="#?page=7">7</a>...<a href="#?page=199">199</a><a href="#?page=200">200</a><a href="#?page=2"> > </a></div>
	</div><!-- 主体右侧内容结束 -->
	</div><!-- 主体右侧结束 -->
	</div><!-- 主体内容结束 -->

	﻿<link href="/Test/Public/css/fenxiang.css" rel="stylesheet" type="text/css" />
<div class="foot">
	
	版权所有 &copy; 你的网站名称 未经许可 严禁复制 <br />敏泽科技 版权所有<br />
	来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
	
	<div class="bshare-custom icon-medium-plus">
		<a title="分享到QQ空间" class="bshare-qzone"></a>
		<a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
		<a title="分享到人人网" class="bshare-renren"></a>
		<a title="分享到腾讯微博" class="bshare-qqmb"></a>
		<a title="分享到网易微博" class="bshare-neteasemb"></a>
		<a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
		<span class="BSHARE_COUNT bshare-share-count">0</span>
	</div>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简洁常用支持二维码qq浮动在线客服代码</title>
<link href="/Test/Public/css/lanrenzhijia.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 代码部分 begin -->
<div class="main-im">
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=1826022859&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="http://demo.lanrenzhijia.com/2015/service0119/images/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		
		<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=295791463&site=qq&menu=yes">
			<img border="0" src="http://wpa.qq.com/pa?p=2:295791463:51" alt="点击这里给我发消息" title="点击这里给我发消息"/>
		</a>
		
		<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=295791463&site=qq&menu=yes">
			<img border="0" src="http://wpa.qq.com/pa?p=2:295791463:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
		
		<div class="im-tel">
			<div>售前咨询热线</div>
			<div class="tel-num">400-123-45678</div>
			<div>售后咨询热线</div>
			<div class="tel-num">010-12345678</div>
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					<div class="weixing-txt">微信扫一扫<br></div>
					<img class="weixing-ma" src="http://demo.lanrenzhijia.com/2015/service0119/images/weixing-ma.jpg">
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
<script>
$(function(){
	$('#close_im').bind('click',function(){
		$('#main-im').css("height","0");
		$('#im_main').hide();
		$('#open_im').show();
	});
	$('#open_im').bind('click',function(e){
		$('#main-im').css("height","272");
		$('#im_main').show();
		$(this).hide();
	});
	$('.go-top').bind('click',function(){
		$(window).scrollTop(0);
	});
	$(".weixing-container").bind('mouseenter',function(){
		$('.weixing-show').show();
	})
	$(".weixing-container").bind('mouseleave',function(){        
		$('.weixing-show').hide();
	});
});
</script>
<!-- 代码部分 end-->
</body>
</html>
<script src='//kefu.easemob.com/webim/easemob.js?tenantId=26380&hide=false&sat=false' async='async'></script>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>

</body>
</html>