<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理</title>
<link href="__PUBLIC__/Admin/images/Admin_css.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="__PUBLIC__/Admin/images/myfav.ico" type="image/x-icon" />
<script type="text/javascript" src="/waiku/Public/Admin/setdate/WdatePicker.js"></script><script type="text/javascript" src="/waiku/Public/Admin/js/admin.js"></script> 
</head>
<body>
<script>
 function chk(){
 if (document.myform.Title.value==""){
	alert("请填写标题！");
	document.myform.Title.focus();
	return false;
  }
  if (document.myform.Typeid.value==""){
	alert("请选择类型！");
	document.myform.Typeid.focus();
	return false;
  }
  if (document.myform.AddTime.value==""){
	alert("请选择开始时间！");
	document.myform.AddTime.focus();
	return false;
  }
  if (document.myform.LastTime.value==""){
	alert("请选择到期时间！");
	document.myform.LastTime.focus();
	return false;
  }
 }
</script>
<table width="95%" border="0" cellspacing="2" cellpadding="3"  align=center class="admintable" style="margin-bottom:5px;">
    <tr>
      <td height="25" bgcolor="f7f7f7">快速查找：
        <SELECT onChange="javascript:window.open(this.options[this.selectedIndex].value,'main')"  size="1" name="s">
        <OPTION value="" selected>-=请选择=-</OPTION>
        <OPTION value="__URL__/index">所有链接</OPTION>
        <OPTION value="__URL__/index/status/1">已审的链接</OPTION>
        <OPTION value="__URL__/index/status/0">未审的链接</OPTION>
        <OPTION value="__URL__/index/logo/1">Logo链接</OPTION>
        <OPTION value="__URL__/index/out/0">已经过期的链接</OPTION>
        <OPTION value="__URL__/index/out/1">明天过期的链接</OPTION>
        <OPTION value="__URL__/index/out/2">后天过期的链接</OPTION>
      </SELECT>      </td>
      <td align="center" bgcolor="f7f7f7">
        <form name="form1" method="get" action="__URL__/index/">
        <input name="keyword" type="text" id="keyword" value="">
        <input type="submit" name="Submit2" value="搜索">
      {__NOTOKEN__}
    </form></td>
      <td align="right" bgcolor="f7f7f7">跳转到：
        <select name="ClassID" id="ClassID" onChange="javascript:window.open(this.options[this.selectedIndex].value,'main')">
    <option value="">请选择分类</option><?php echo ($op); ?></select></td>
    </tr>
</table>
 
<table width="95%" border="0"  align=center cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" class="admintable">
<form action="__URL__/doadd" name="myform" method="post" onsubmit="return chk();">
<tr> 
    <td colspan="3" align=left class="admintitle">添加链接 [<a href="__URL__/index">链接列表</a>]</td>
</tr>
<tr> 
<td width="20%" class="b1_1">标题</td>
<td colspan="2" class="b1_1"><input name="title" type="text" id="Title" size="40" maxlength="50"></td>
</tr>
<tr>
  <td class="b1_1">所属分类</td>
  <td colspan="2" class="b1_1"><select ID="Typeid" name="typeid">
    <option value="">请选择分类</option><?php echo ($op2); ?>
  </select></td>
</tr>
<tr>
  <td class="b1_1">链接地址</td>
  <td colspan="2" class="b1_1"><input name="url" type="text" id="LinkUrl" value="http://" size="40" maxlength="50"></td>
</tr>
<tr>
  <td class=b1_1>开启LOGO</td>
  <td colspan=4 class=b1_1>
<input name="islogo" onClick="if(this.checked){
			   IsLogo.style.display = '';
		  }" type="radio" class="noborder" value="1">
是
	<input name="islogo" onClick="if(this.checked){
			   IsLogo.style.display = 'none';
		  }"  type="radio" class="noborder" value="0" checked>
否
</td>
</tr>
<tr id="IsLogo" style="display:none;">
  <td class="b1_1">Logo地址</td>
  <td width="21%" class="b1_1"><input name="logo" type="text" id="LogoUrl" size="40" maxlength="250" value=""></td>
  <td width="59%" class="b1_1"><iframe src="__APP__/File/link/" width="400" height="25" frameborder="0" scrolling="no"></iframe></td>
</tr>
<tr>
  <td class="b1_1">开始时间</td>
  <td colspan="2" class="b1_1"><input name='starttime' type='text' class="borderall" id="AddTime" style="width:140px;" onFocus="WdatePicker({isShowClear:false,readOnly:true,minDate:'%y-%M-#{%d}',skin:'whyGreen'})" value=""/></td>
  </tr>
<tr>
  <td class="b1_1">到期时间</td>
  <td colspan="2" class="b1_1"><input name='overtime' type='text' class="borderall" id="LastTime" style="width:140px;" onFocus="WdatePicker({isShowClear:false,readOnly:true,minDate:'%y-%M-#{%d}',skin:'whyGreen'})" value=""/></td>
</tr>
<tr>
  <td class="b1_1">排序</td>
  <td colspan="2" class="b1_1"><input name="rank" type="text" id="Num" value="1" size="5" maxlength="3"> <span class="note">值越小越靠前</span></td>
</tr>
<tr>
  <td class="b1_1">联系QQ</td>
  <td colspan="2" class="b1_1"><input name="qq" type="text" id="QQ" size="15" maxlength="10"></td>
</tr>
<tr>
  <td class="b1_1">费用</td>
  <td colspan="2" class="b1_1"><input name="money" type="text" id="Moneys" value="0" size="8" maxlength="5"></td>
</tr>
<tr>
  <td valign="top" class="b1_1">备注</td>
  <td colspan="2" class="b1_1"><textarea name="description" cols="50" rows="5" id="Content"></textarea></td>
</tr>
<tr> 
<td width="20%" class="b1_1"></td>
<td colspan="2" class="b1_1"><input name="Submit" type="submit" class="bnt" value="添 加">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="bnt" value="返 回"></td>
</tr>
</form>
</table>
<div style="text-align:center;margin:10px;">
<hr>
<a href="http://www.waikucms.com" target="_blank">北京九州颐和文化中心网站管理系统</a> Version <font color="red"><?php echo C("version");?></font> &copy; <?php echo date("Y");;?> 版权所有  
</div>
</body>
</html>