<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equtv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理</title>
<link href="__PUBLIC__/Admin/images/Admin_css.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="__PUBLIC__/Admin/images/myfav.ico" type="image/x-icon" />
<script type="text/javascript" src="/waiku/Public/Admin/js/admin.js"></script><script type="text/javascript" src="/waiku/Public/Admin/js/Jquery.js"></script>
<script charset="utf-8" src="__PUBLIC__/Editor/kindeditor-min.js"></script>
<script> 
        KE.show({
                id : 'Content',
				autoSetDataMode: false,
				afterCreate : function(id) {
					KE.event.add(KE.$('myform'), 'submit', function() {
						KE.sync(id);
					});
				},
				minWidth : 500,minHeight:300,allowUpload:false,
				items:[ 'title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold',
'italic', 'underline', 'strikethrough', 'removeformat','|','justifyleft', 'justifycenter', 'justifyright',
'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
'superscript', '|', 'selectall', '-','undo', 'redo', 'cut', 'copy', 'paste',
'plainpaste', 'wordpaste', '|','image','flash', 'media', 'advtable', 'hr', 'emoticons', 'specialchar', 'link', 'unlink', '|','source', 'fullscreen', 'about', 'preview']
        });
		function round(){
	document.myform.Hits.value=Math.ceil(Math.random()*(1000-1)+1);
	}
	function CheckForm()
{ 
  if (document.myform.Title.value==""){
	alert("请填写标题！");
	document.myform.Title.focus();
	return false;
  }
  if (document.myform.Title.value.length>50){
	alert("标题不能超过50个字符");
	document.myform.Title.focus();
	return false;
  }
  if (document.myform.Typeid.value==""){
	alert("请选择分类！");
	document.myform.Typeid.focus();
	return false;
  }
  if (document.myform.Hits.value==""){
	alert("请填写浏览次数！");
	document.myform.Hits.focus();
	return false;
  }
  var filter=/^\s*[0-9]{1,6}\s*$/;
  if (!filter.test(document.myform.Hits.value)) { 
	alert("浏览次数填写不正确,请重新填写！"); 
	document.myform.Hits.focus();
	return false; 
  }
  function ResumeError()
			{return true;}
			window.onerror = ResumeError;
}
function showhelp(){
	var str='点击 随机,获取随机点击数,关键字和描述是用于被搜索引擎收录的内容,不在网页里显示,文章摘要是在文章页上方的一段内容提示,文章摘要不填,系统将截取正文内容前130字作为文章摘要';
	alert(str);
	}
</script>
</head>
<body>
<table width="95%" border="0" cellspacing="2" cellpadding="3"  align=center class="admintable" style="margin-bottom:5px;">
    <tr>
      <td height="25" bgcolor="f7f7f7">快速查找：
        <SELECT onChange="javascript:window.open(this.options[this.selectedIndex].value,'main')"  size="1" name="s">
        <OPTION value="" selected>-=请选择=-</OPTION>
        <OPTION value="__URL__/index">所有文章</OPTION>
        <OPTION value="__URL__/index/status/1">已审的文章</OPTION>
        <OPTION value="__URL__/index/status/0">未审的文章</OPTION>
        <OPTION value="__URL__/index/istop/1">固顶文章</OPTION>
        <OPTION value="__URL__/index/ishot/1">推荐文章</OPTION>
		<OPTION value="__URL__/index/isimg/1">图片文章</OPTION>
        <OPTION value="__URL__/index/islink/1">转向链接文章</OPTION>
        <OPTION value="__URL__/index/hits/0">按浏览次数排序</OPTION>
      </SELECT>      </td>
      <td align="center" bgcolor="f7f7f7">
	  <form name="form1" method="get" action="__URL__/index/">
        <input name="ss" type="text" id="keyword" value="" class="s26">
        <input type="submit" name="Submit2" class="bnt" value="搜索">
      </form></td>
      <td align="right" bgcolor="f7f7f7">跳转到：
        <select name="ClassID" id="ClassID" onChange="javascript:window.open(this.options[this.selectedIndex].value,'main')">
<option value="">请选择分类</option><?php echo ($op); ?></select></td>
    </tr>
</table>

<table width="95%" border="0"  align=center cellpadding="3" cellspacing="2" bgcolor="#FFFFFF" class="admintable">
<form action="__URL__/doedit" onsubmit="return CheckForm();" name="myform" method=post>
<tr> 
    <td colspan="2" align=left class="admintitle">修改文章[<a onclick="showhelp();">操作提示</a>]</td></tr>
<tr> 
<td width="20%" class="b1_1">标题</td>
<td class="b1_1"><input name="title" value="<?php echo ($list["title"]); ?>" type="text" id="Title" size="40" maxlength="50"><span class="note">注：最多50个字符</span></td>
</tr>
<tr>
  <td class="b1_1">关键字</td>

  <td class="b1_1"><input name="keywords" value="<?php echo ($list["keywords"]); ?>" type="text" id="KeyWord" size="40" maxlength="50">&nbsp;<span class="note">多个关键字用|隔开</span></td>
</tr>
<tr>
  <td class="b1_1">描述</td>
  <td class="b1_1"><input name="description"  value="<?php echo ($list["description"]); ?>"  type="text" size="40" maxlength="50">&nbsp;<span class="note">用于搜索引擎抓取</span></td>
</tr>
<tr>
  <td class="b1_1">作者</td>
  <td class="b1_1">
    <input name="author" value="<?php echo ($list["author"]); ?>" type="text" id="Author" value="不详" size="40" maxlength="200"></td>
</tr>
<tr>
  <td class="b1_1">来源</td>
  <td class="b1_1"><span class="td">
    <input name="copyfrom" value="<?php echo ($list["copyfrom"]); ?>" type="text" id="CopyFrom" value="网络" size="40" maxlength="200">
  </span></td>
</tr>
<tr>
  <td class="b1_1">浏览次数</td>
  <td class="b1_1"><input name="hits" value="<?php echo ($list["hits"]); ?>" type="text" id="Hits" size="6" maxlength="10">&nbsp;&nbsp;<input name="get" type="button" class="bnt" onclick="round();" value="随 机"></td>
</tr>
<tr>
  <td class="b1_1">分类</td>
  <td class="b1_1"><select ID="Typeid" name="typeid"><?php echo ($option); ?></select></td>
</tr>
<tr>
  <td class="b1_1">转向链接</td>
  <td class="b1_1"><input name="linkurl"  type="text" size="50" value="<?php echo ($list["linkurl"]); ?>">
		  <input name="islink" type="checkbox" class="noborder" id="UseLinkUrl" value="1" <?php if(($list["islink"])  ==  "1"): ?>checked<?php endif; ?>>
      使用转向链接		</td>
</tr>
<tr>
  <td rowspan="2" class="b1_1">缩略图</td>
  <td class="b1_1"><input name="imgurl" type="text" id="Images" size="50" maxlength="200" value="<?php echo ($list["imgurl"]); ?>">
  <input name="isimg" type="checkbox" class="noborder" id="Useimg" value="1" <?php if(($list["isimg"])  ==  "1"): ?>checked<?php endif; ?>>
      使用缩略图</td>
</tr>
<tr>
  <td class="b1_1"><iframe src="__APP__/File/thumb/" width="400" height="25" frameborder="0" scrolling="no"></iframe></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF" class="b1_1">文章摘要[为空自动截取文章前130字]</td>
  <td colspan=4 class=b1_1><textarea name="note" id="Note" cols="60" rows="6"><?php echo ($list["note"]); ?></textarea></td></tr>
 <tr>
 <tr>
  <td class="b1_1">附件上传</td>
  <td class="b1_1"><iframe src="__APP__/File/attach/" width="400" height="25" frameborder="0" scrolling="no"></iframe></td>
</tr>
<tr>
  <td valign="top" class="b1_1"><p>内容</p>
    <p>发布时间<br>
      <input name="addtime" type="text" id="DateAndTime" value="<?php echo ($list["addtime"]); ?>">
    </p>
  <td class="b1_1"><textarea id="Content" name="content" style="width:700px;height:300px;"><?php echo ($list["content"]); ?>
</textarea>
</td>
</tr>
<tr>
  <td class="b1_1">附加选项</td>
  <td class="b1_1">固顶
    <input name="istop" type="checkbox" class="noborder" id="IsTop" value="1" <?php if(($list["istop"])  ==  "1"): ?>checked<?php endif; ?>>
    推荐
    <input name="ishot" type="checkbox" class="noborder" id="IsHot" value="1" <?php if(($list["ishot"])  ==  "1"): ?>checked<?php endif; ?>>
	<INPUT type=button class="bnt" onClick="javascript:KE.insertHtml('Content', '[wk_page]');" value="插入分页符">
</td>
</tr>
<tr>
  <td class="b1_1">自动分页<strong>字数</strong></td>
  <td class="b1_1"><input name="pagenum" type="text" id="PageNum" value="<?php echo ($list["pagenum"]); ?>" size="6" maxlength="4">
    <span class="note">　注:如果在内容中加入了手动分页符,请填写0</span></td>
</tr>
<tr>
  <td bgcolor="#FFFFFF" class="b1_1">本文显示投票</td>
  <td colspan=4 class=b1_1><select name="voteid" size=4 id="Vote">
	<?php echo ($votehtml); ?>
 </select>
    <span class="note">取消投票请选择不投票</span></td>
</tr>
<tr> 
<td width="20%" class="b1_1"></td>
<td class="b1_1"><input name="submit" type="submit" class="bnt" value="修改">&nbsp;&nbsp;<input type="button" onclick="history.go(-1);" class="bnt" value="返 回"></td>
<input type="hidden" name="aid" value="<?php echo ($list["aid"]); ?>"/>
</tr>
</form>
</table>
<div style="text-align:center;margin:10px;">
<hr>
<a href="http://www.waikucms.com" target="_blank">北京九州颐和文化中心网站管理系统</a> Version <font color="red"><?php echo C("version");?></font> &copy; <?php echo date("Y");;?> 版权所有 
</div>
</body>
</html>