<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="__PUBLIC__/Admin/images/Admin_css.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="__PUBLIC__/Admin/images/myfav.ico" type="image/x-icon" />
</head>
 
<body>
 <script>
 function chk(){
 if (document.myform.Typename.value==""){
	alert("请填写分类名称！");
	document.myform.Typename.focus();
	return false;
  }
 }
</script>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" class="admintable">
<tr> 
  <td colspan="5" class="admintitle">添加分类</th></tr>
<form action="__URL__/doadd_t" method="post" name="myform" onsubmit="return chk();">
<tr>
<td width="20%" class=b1_1>分类名称</td>
<td colspan=4 class=b1_1><input type="text" name="typename" size="30" id="Typename"></td>
</tr>
<tr> 
<td width="20%" class=b1_1>排　　序</td>
<td colspan=4 class=b1_1><input name="rank" type="text" value="10" size="4" maxlength="3"></td>
</tr>
<tr> 
<td width="20%" class=b1_1></td>
<td class=b1_1 colspan=4><input name="Submit" type="submit" class="bnt" value="添 加">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="bnt" value="返 回"></td>
</tr></form>
</table>
<div style="text-align:center;margin:10px;">
<hr>
<a href="http://www.waikucms.com" target="_blank">北京九州颐和文化中心网站管理系统</a> Version <font color="red"><?php echo C("version");?></font> &copy; <?php echo date("Y");;?> 版权所有 
</div>
</body>
</html>