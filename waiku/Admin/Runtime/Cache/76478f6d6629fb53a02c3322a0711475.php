<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理</title>
<link href="__PUBLIC__/Admin/images/Admin_css.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="__PUBLIC__/Admin/images/myfav.ico" type="image/x-icon" />
<script type="text/javascript" src="/waiku/Public/Admin/js/admin.js"></script> 
</head>
<body>
  <table width="95%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#f7f7f7" class="admintable">
  <form name="add" method="post" action="__URL__/doadd">
  <tr>
      <td colspan="2" align="center" class="admintitle">修改投票</td>
    </tr>
    <tr>
      <td width="15%" align="center" bgcolor="#FFFFFF">投票名称：</td>
      <td width="85%" bgcolor="#FFFFFF"><input name="title" type="text" class="input" id="t0" value="" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">投票选项：      </td>
      <td bgcolor="#FFFFFF"><input name='stype' type='radio' class="noborder" value='0' checked/>
      单选 <input  name='stype' type='radio' class="noborder" value='1'/>
      多选</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">项目内容：</td>
      <td bgcolor="#FFFFFF">
      <textarea name="vote" id="votes" cols="50" rows="10">
投票选项1=0
投票选项2=1
投票选项3=6
投票选项4=0
投票选项5=0
投票选项6=1
	  </textarea></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">投票时间：</td>
      <td bgcolor="#FFFFFF"><input name="starttime" type="text" class="input" value="<?php echo date("Y-m-d H:i:s");;?>" size="20">
        -
        <input name="overtime" type="text" class="input" value="" size="20"></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFFFF">排序：</td>
      <td bgcolor="#FFFFFF"><input name="rank" type="text" id="Px" value="1" size="6" maxlength="5">
        <span class="note">数字小的排在前面</span></td>
    </tr>
	 
    <tr>
	  <td bgcolor="#FFFFFF">&nbsp;</td>
	  <input type="hidden" name="status" value="1">
      <td bgcolor="#FFFFFF"><input name="Submit" type="submit" class="bnt" value="保 存">
        <input name="Submit22" type="button" class="bnt" onClick="history.go(-1)" value="返 回"></td>
    </tr>
	</form>
  </table>
<div style="text-align:center;margin:10px;">
<hr>
<a href="http://www.waikucms.com" target="_blank">北京九州颐和文化中心网站管理系统</a> Version <font color="red"><?php echo C("version");?></font> &copy; <?php echo date("Y");;?> 版权所有 
</div>
</body>
</html>