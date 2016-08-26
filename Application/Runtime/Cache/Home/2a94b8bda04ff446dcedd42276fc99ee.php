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
	<div class="main"><!-- 主体内容开始 -->
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
	<div class="main_r"><!-- 主体右侧开始 -->
	<div class="mbrbt"><a href="<?php echo U('Gsjj/index');?>"><img src="/Test/Public/images/rbt.gif" border="0" /></a></div>
	<div class="mbrbtnr"><!-- 主体右侧内容一开始 -->
	
	<div class="mbrnr">
	<?php if(is_array($gsjj)): $i = 0; $__LIST__ = $gsjj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dt><img src="/Test/Public/images/gsjjtu.gif"  width="196" height="154" /></dt><dd><a href="<?php echo U('Gsjj/index');?>"><?php echo ($v["jj_content"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	
	</div><!-- 主体右侧内容一结束 -->
	<div class="mbrbt"><a href="<?php echo U('Gcal/index');?>"><img src="/Test/Public/images/rbt2.gif" border="0" /></a></div>
	<div class="mbrbtnr"><!-- 主体右侧内容二开始 -->
	<div class="mbrnr">
	
	<div class="mbgcal">
	<iframe   border=0   vspace=0   hspace=0   align=center   marginwidth=0   marginheight=0   framespacing=0   frameborder=0   scrolling=no   width="600"   height="118"   src="">
		<div id="demo" style="overflow:hidden;height:118px;width:600px;background:#351904;color:#ffffff">
<table align=left cellpadding=0 cellspace=0 border=0>
<tr><td id=demo1 valign=top>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="156" align="center" style="width:156px;"> <a href="pro.html"><img src="images/gcpic.gif" width="156" height="118" border="0" style="margin-right:10px;" /></a> </td>
<td width="156" align="center" style="width:156px;"> <a href="pro.html"><img src="images/gcpic1.gif" width="156" height="118" border="0" style="margin-right:10px;" /></a></td>
<td width="156" align="center" style="width:156px;"> <a href="pro.html"><img src="images/gcpic2.gif" width="156" height="118" border="0" style="margin-right:10px;" /></a> </td>
<td width="156" align="center" style="width:156px;"> <a href="pro.html"><img src="images/gcpic1.gif" width="156" height="118" border="0" style="margin-right:10px;" /></a> </td>
<td width="156" align="center" style="width:156px;"> <a href="pro.html"><img src="images/gcpic2.gif" width="156" height="118" border="0" style="margin-right:10px;" /></a> </td>

  </tr>
</table>
</td>
<td id=demo2 valign=top></td></tr>
</table>
</div>
  <script>
  var speed=30
  demo2.innerHTML=demo1.innerHTML
  function Marquee(){
  if(demo2.offsetWidth-demo.scrollLeft<=0)
  demo.scrollLeft-=demo1.offsetWidth
  else{
  demo.scrollLeft++
  }
  }
  var MyMar=setInterval(Marquee,speed)
  demo.onmouseover=function() {clearInterval(MyMar)}
  demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
  </script>

	</iframe>
	</div>
	
	</div>
	
	
	
	</div><!-- 主体右侧内容二结束 -->
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