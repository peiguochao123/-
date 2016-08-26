<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>后台管理系统</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/Test/Public/images/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/Test/library/jquery/jquery-1.4.js"></script>
     <script type="text/javascript">
     	var oldzp_id;//原来的Id
 		var oldzp_position;//原来的typeName
	  	var oldzp_experience;//原来articleNums
 		var oldzp_schooling;//原来的超链接
 		var oldzp_wage;//原来的超链接
  
  		function showType(zp_id)
		{
  		
	         oldzp_id = zp_id;
	         oldzp_position = $("#td"+zp_id+"1").html();
	         oldzp_experience = $("#td"+zp_id+"2").html();
	         oldschooling = $("#td"+zp_id+"3").html();
	         $("#td"+zp_id+"0").css("background-color","#D3D6FF");
	         $("#td"+zp_id+"1").html("<input type='text' name='zp_position' size='10' value='"+oldzp_positione+"'>");
	         $("#td"+zp_id+"2").html("<input type='text' name='zp_experience' size='10' value='"+oldzp_experience+"'>");
	         $("#td"+zp_id+"3").html("<a href='#' onclick='submitForm()'>更新</a>&nbsp;&nbsp;<a href='#' onclick='hideText()'>取消</a>");
		}
     //点击了取消按扭
     	function hideText()
     	{
		   	 $("#td"+zp_id+"0").css("background-color","#FFFFFF");
		   	 $("#td"+zp_id+"1").html(oldzp_position);
		   	 $("#td"+zp_id+"2").html(oldzp_experience);
		   	 $("#td"+zp_id+"3").html(oldzp_schooling);
     	}
	   //点击了更新按扭
	    function submitForm()
	    {
	         document.frm.action = "/Test/index.php/Admin/ModZhaopin/up/zp_id/"+oldzp_id;
	         document.frm.submit();//提交表单
	    }
	   
	    function del(zp_id)
	    {  
	    	 window.location="/Test/index.php/Admin/ModZhaopin/del/zp_id/"+zp_id;
	    }
	      
	     //
	    
    </script>
  </head>
  <body>
    <!-- 网站的头 -->
    ﻿<script type="text/javascript">
  $(document).ready(function(){
	  $("#menuDiv1,#menuDiv2,#menuDiv3,#menuDiv4,#menuDiv5").hover(function(){
		  $(this).css("background-color","#D4D0C8");
		  $(this).find("div").show();
	  },function(){
		  $(this).css("background-color","#E4E9EC");
		  $(this).find("div").hide();
	  });
  });
  //退出后台
  function logout()
  {
	  if(confirm("是否退出后台管理系统?"))
	  {
		  window.location = "/Test/index.php/Index/index";
	  }
  }
</script>
<div class="headDiv">
  <div class="headDiv1">www.ttnewS.com</div>
  <div class="headDiv2"><img src="/Test/public/images/image6.gif"></div>
</div>
<div class="headDiv3">&nbsp;</div>
<!-- 导航菜单 -->
<div class="menuDiv">
  <div id="menuDiv1"><a href="#" onclick="logout()">重新登陆</a></div>
  <div id="menuDiv2"><a href="#">公司简介</a><br>
    <div>
      <a href="<?php echo U('Admin/AddGsjj/index');?>">添加简介</a><br>
      <a href="<?php echo U('Admin/ModGsjj/index');?>">修改简介</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">服务项目</a><br>
    <div>
      <a href="<?php echo U('Admin/AddFwxm/index');?>">添加项目</a><br>
      <a href="<?php echo U('Admin/ModFwxm/index');?>">修改项目</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">工程案例</a><br>
    <div>
      <a href="<?php echo U('Admin/AddGcal/index');?>">添加案例</a><br>
      <a href="<?php echo U('Admin/ModGcal/index');?>">修改案例</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">新闻动态</a><br>
    <div>
      <a href="<?php echo U('Admin/AddList/index');?>">添加新闻</a><br>
      <a href="<?php echo U('Admin/ModList/index');?>">修改新闻</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">人才招聘</a><br>
    <div>
      <a href="<?php echo U('Admin/AddZhaopin/index');?>">添加招聘</a><br>
      <a href="<?php echo U('Admin/ModZhaopin/index');?>">修改招聘</a>
    </div>
  </div>
  <div id="menuDiv3"><a href="#">联系我们</a><br>
    <div>
      <a href="<?php echo U('Admin/AddLianxi/index');?>">添加联系</a><br>
      <a href="<?php echo U('Admin/ModLianxi/index');?>">修改联系</a>
    </div>
  </div>
  <div id="menuDiv5"><a href="<?php echo U('Admin//Index/index');?>">返回首页</a></div>
</div>   
       <!-- 当前位置 -->
    <div class="locationDiv">&nbsp;: 后台管理 : 修改新闻</div>
    <!-- 正文内容 -->
    <div class="mainDiv clear">
      <!-- 左侧树状列表 -->
      <div class="leftDiv">
      ﻿<script type=text/javascript src="/Test/library/dtree/js/dtree.js"></script>
<script  type=text/javascript> 
  function hello()
  {
    d = new dTree('d','/Test/library/dtree/');

    d.add(0,-1,'后台管理','');

    d.add(1,0,'重新登陆','javascript:logout()');

    d.add(2,0,'公司简介','');
    d.add(21,2,'添加简介','/Test/index.php/AddGsjj/index');
    d.add(22,2,'修改简介','/Test/index.php/ModGsjj/index');

    d.add(3,0,'服务项目','');
    d.add(31,3,'添加项目','/Test/index.php/AddType/index');
    d.add(32,3,'修改项目','/Test/index.php/ModType/index');
    
    d.add(4,0,'工程案例','');
    d.add(41,4,'添加案例','/Test/index.php/AddType/index');
    d.add(42,4,'修改案例','/Test/index.php/ModType/index');
    
    d.add(5,0,'新闻动态','');
    d.add(51,5,'添加新闻','/Test/index.php/AddType/index');
    d.add(52,5,'修改新闻','/Test/index.php/ModType/index');
    
    d.add(6,0,'人才招聘','');
    d.add(61,6,'添加招聘','/Test/index.php/AddType/index');
    d.add(62,6,'修改招聘','/Test/index.php/ModType/index');
    
    d.add(7,0,'联系我们','');
    d.add(71,7,'添加联系','/Test/index.php/AddType/index');
    d.add(72,7,'修改联系','/Test/index.php/ModType/index');

    d.add(8,0,'返回首页','/Test/index.php/Index/index');

    document.write(d);
  }

  hello();
</script>
      </div>
      <!-- 右侧页面内容 -->
      <div class="rightDiv">
        <br>
       
        <br>
        <table border="1" align="center" width="700" cellpadding="0" cellspacing="0">
          <tr height="30" style="font-weight:bold;">
            <td>职位</td>
            <td>经验</td>
            <td>学历</td>
            <td>工资</td>
            
            <td>&nbsp;</td>
          </tr>
          <?php if(is_array($recruitment)): $i = 0; $__LIST__ = $recruitment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr height="25">
            <td><?php echo ($v["zp_position"]); ?></td>
            <td><?php echo ($v["zp_experience"]); ?></td>
            <td><?php echo ($v["zp_schooling"]); ?></td>
            <td align="left"><?php echo ($v["zp_wage"]); ?></a></td>
            
            <td>
            	<a href="#" onclick='showType(<?php echo ($v["zp_id"]); ?>)'>编辑</a>
            	<a href="#" onclick='del(<?php echo ($v["zp_id"]); ?>)'>删除</a>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </table>
      </div>
    </div>
  </body>
</html>