<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td{font-size:12px;}
a{ text-decoration:none;color:#006600;font-weight:bold;background:url('__PUBLIC__/Admin/images/menubg.gif') no-repeat;padding:1px 4px 3px 4px;margin-right:10px;}
.STYLE1 {
	color: #43860c;
	font-size: 12px;
}
.link {padding:10px 0 0 20px;}
-->
</style>
</head>

<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="185" background="__PUBLIC__/Admin/images/main_r1_c1.jpg"><table width="100" border="0" cellspacing="0" cellpadding="0" style="margin:35px 0 0 40px;color:#5C990D;">
      <tr>
        <td><?php echo $_SESSION["username"];?></td>
      </tr>
    </table></td>
    <td width="52"><img name="main_r1_c2" src="__PUBLIC__/Admin/images/main_r1_c2.jpg" width="52" height="61" border="0" id="main_r1_c2" alt="" /></td>
    <td width="51"><img name="main_r1_c3" src="__PUBLIC__/Admin/images/main_r1_c3.jpg" width="51" height="61" border="0" id="main_r1_c3" alt="" /></td>
    <td width="64"><img name="main_r1_c4" src="__PUBLIC__/Admin/images/main_r1_c4.jpg" width="64" height="61" border="0" id="main_r1_c4" alt="" /></td>
    <td width="33"><img name="main_r1_c5" src="__PUBLIC__/Admin/images/main_r1_c5.jpg" width="33" height="61" border="0" id="main_r1_c5" alt="" /></td>
    <td background="__PUBLIC__/Admin/images/main_r1_c6.jpg" class="link">
    	<a href="__APP__/Article/add" target="main">发表文章</a>
    	<a href="__APP__/Type" target="main">栏目管理</a>
    	<a href="__APP__/Clear/clearcache" target="main">清理缓存</a>
    	<a href="__ROOT__/index.php" target="_blank">网站首页</a>
    </td>
  </tr>
</table>
</body>
</html>