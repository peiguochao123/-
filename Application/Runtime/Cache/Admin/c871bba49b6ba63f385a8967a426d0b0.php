<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>系统提示信息</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="/Test/public/css/admin.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/Test/library/jquery/jquery-1.4.js"></script>
    <script type="text/javascript">
    		var index=5;
    	function changeTime(){
    		document.getElementById("timeSpan").innerHTML=index;
    		index--;
    		if(index>0){
    			setTimeout("changeTime()",1000);
    		}else{
    			window.location="<?php echo ($jumpUrl); ?>";
    		}
    	}
    	
    </script>
  </head>
  <body onload="changeTime()">
    <br><br><br><br>
    <table border="1" bgcolor="white" align="center" width="600">
      <tr>
        <td align="left"><b>系统提示信息</b></td>
      </tr>
      <tr>
        <td align="center">
          <br><?php echo ($message); ?>页面将在 <span id="timeSpan">5</span> 秒钟内自动跳转！
          <br><br>如果没有跳转，<a href="<?php echo ($jumpUrl); ?>">请点击这里</a>。<br><br>
        </td>
      </tr>
    </table>
  </body>
</html>