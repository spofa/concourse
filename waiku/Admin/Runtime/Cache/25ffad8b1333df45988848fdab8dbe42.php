<?php if (!defined('THINK_PATH')) exit();?> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equtv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理</title>
<link href="__PUBLIC__/Admin/images/Admin_css.css" type=text/css rel=stylesheet>
<style> 
td {font-size:13px;}
</style>
<link rel="shortcut icon" href="__PUBLIC__/Admin/images/myfav.ico" type="image/x-icon" />
<script src="__PUBLIC__/Admin/js/admin.js"></script>
</head>
<body>
<form name='frm' method='post' action='__URL__/update'>
<div class="nTableft admintable">
      	<div class="TabTitleleft">
      		<ul id="myTab1">
					<li class="active" onClick="nTabs(this,0);">网站整体配置</li>
        			<li class="normal" onClick="nTabs(this,1);">首页配置</li>
					<li class="normal" onClick="nTabs(this,2);">列表页配置</li>
                    <li class="normal" onClick="nTabs(this,3);">内容页配置</li>
      		</ul>
    	</div>
        
		<div id="myTab1_Content0"  style="clear:both;">
<table width="100%" border="0"  align=center cellpadding="3" cellspacing="1" style="margin:5px 0;background:#FFF">
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">网站名称：sitetitle
				<div id='hSiteTitle' style="color:#ccc;letter-spacing: 0px;font-size:12px;">你网站的名字</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="sitetitle" type="text" id="oSiteTitle" onFocus="hSiteTitle.style.color='blue';" onBlur="hSiteTitle.style.color='#ccc';" value="<?php echo ($list["sitetitle"]); ?>" style="width:300px;">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">首页副标题：sitetitle2
				<div id='hSiteTitle2' style="color:#ccc;letter-spacing: 0px;font-size:12px;">即显示在首页标题后面的文字,可适合填写一些网站关键字,利于搜索引擎收录</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="sitetitle2" type="text" id="oSiteTitle2" onFocus="hSiteTitle2.style.color='blue';" onBlur="hSiteTitle2.style.color='#ccc';" value="<?php echo ($list["sitetitle2"]); ?>" style="width:300px;">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">网站域名：siteurl
				<div id='hSiteUrl' style="color:#ccc;letter-spacing: 0px;font-size:12px;">当前网站域名:用于前台底部显示</div>
		  	</td>
			<td width="60%" align="left">
				<input name="siteurl" type="text" id="oSiteUrl"  onFocus="hSiteUrl.style.color='blue';" onBlur="hSiteUrl.style.color='#ccc';" value="<?php echo ($list["siteurl"]); ?>" style="width:300px;">
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">Logo图片：sitelogo
				<div id='hSiteLogo' style="color:#ccc;letter-spacing: 0px;font-size:12px;">左上角网站标志图</div>
		  	</td>
			<td width="60%" align="left">
				
                <input name="sitelogo" type="text" id="oSiteLogo" onFocus="hSiteLogo.style.color='blue';" onBlur="hSiteLogo.style.color='#ccc';" value="<?php echo ($list["sitelogo"]); ?>" style="width:300px;"><a href="__APP__/Clear">LOGO附件清理</a><br><iframe src="__APP__/File/logo" width="400" height="25" frameborder="0" scrolling="no"></iframe>
		  </td>
	  </tr>
	
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">关 键 字：sitekeywords
				<div id='hSiteKeywords' style="color:#ccc;letter-spacing: 0px;font-size:12px;">网站针对搜索引擎的关键字，以半角逗号分隔</div>
		  	</td>
			<td width="60%" align="left">
				
<textarea class='css_textarea' name="sitekeywords" type="text" id="oSiteKeywords" onFocus="hSiteKeywords.style.color='blue';" onBlur="hSiteKeywords.style.color='#ccc';" cols="50" rows="5" ><?php echo ($list["sitekeywords"]); ?></textarea>      
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">网站描述：sitedescription
				<div id='hSitedescription' style="color:#ccc;letter-spacing: 0px;font-size:12px;">网站的描述</div>
		  	</td>
			<td width="60%" align="left">
				
<textarea class='css_textarea' name="sitedescription" type="text" id="oSitedescription" onFocus="hSitedescription.style.color='blue';" onBlur="hSitedescription.style.color='#ccc';" cols="50" rows="5" ><?php echo ($list["sitedescription"]); ?></textarea>      
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">底部联系方式：sitelx
				<div id='hSitelx' style="color:#ccc;letter-spacing: 0px;font-size:12px;">支持html</div>
		  	</td>
			<td width="60%" align="left">
				
<textarea class='css_textarea' name="sitelx" type="text" id="oSitelx" onFocus="hSitelx.style.color='blue';" onBlur="hSitelx.style.color='#ccc';" cols="50" rows="5" ><?php echo ($list["sitelx"]); ?></textarea>      
				
		  </td>
	  </tr>
	

	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">备案序号：sitetcp
				<div id='hSiteTcp' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="sitetcp" type="text" id="oSiteTcp" onFocus="hSiteTcp.style.color='blue';" onBlur="hSiteTcp.style.color='#ccc';" value="<?php echo ($list["sitetcp"]); ?>" style="width:300px;">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">留言是否需要审核：bookoff
				<div id='hbookoff' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="bookoff" type="text" id="obookoff" onFocus="hbookoff.style.color='blue';" onBlur="hbookoff.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["bookoff"])  ==  "1"): ?>selected<?php endif; ?>>不审核</option><option value="0" <?php if(($list["bookoff"])  ==  "0"): ?>selected<?php endif; ?>>审核</option>
				</select>
				
		  </td>
	  </tr>
	  
	   <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">评论是否需要审核：pingoff
				<div id='hpingoff' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="pingoff" type="text" id="opingoff" onFocus="hpingoff.style.color='blue';" onBlur="hpingoff.style.color='#ccc';" style="width:150px;">
					<option value="0" <?php if(($list["pingoff"])  ==  "0"): ?>selected<?php endif; ?>>审核</option><option value="1" <?php if(($list["pingoff"])  ==  "1"): ?>selected<?php endif; ?>>不审核</option>
				</select>
				
		  </td>
	  </tr>
	  
	  <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">发表文章，评论等时间间隔(秒)：postovertime 
				<div id='hpostovertime' style="color:#ccc;letter-spacing: 0px;font-size:12px;">评论等时间间隔(秒)</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="postovertime" type="text" id="opostovertime" onFocus="hpostovertime.style.color='blue';" onBlur="hpostovertime.style.color='#ccc';" value="<?php echo ($list["postovertime"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">	
		  </td>
	  </tr>
	  
	  <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">伪静态设置：urlmode
				<div id='hurlmode' style="color:#ccc;letter-spacing: 0px;font-size:12px;">'隐藏:index.php':需服务器支持.htaccess</div>
		  	</td>
			<td width="60%" align="left">
				
<select class='css_select' name="urlmode" type="text" id="ourlmode" onFocus="hurlmode.style.color='blue';" onBlur="hurlmode.style.color='#ccc';" style="width:150px;">
		<option value="0" <?php if(($list["urlmode"])  ==  "0"): ?>selected<?php endif; ?>>显示'index.php'</option><option value="1" <?php if(($list["urlmode"])  ==  "1"): ?>selected<?php endif; ?>>隐藏'index.php'</option>
				</select>
			</td>
	  </tr>
	  
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">伪静态后缀：suffix
				<div id='hsuffix' style="color:#ccc;letter-spacing: 0px;font-size:12px;">伪静态网页后缀</div>
		  	</td>
			<td width="60%" align="left">
				<select class='css_select' name="suffix" type="text" id="osuffix" onFocus="hsuffix.style.color='blue';" onBlur="hsuffix.style.color='#ccc';" style="width:150px;">
			<option value="0" <?php if(($list["suffix"])  ==  "0"): ?>selected<?php endif; ?>>.html</option>
			<option value="1" <?php if(($list["suffix"])  ==  "1"): ?>selected<?php endif; ?>>.htm</option>
			<option value="2" <?php if(($list["suffix"])  ==  "2"): ?>selected<?php endif; ?>>.shtml</option>
				</select>
			</td>
	  </tr>
	
	
		<tr class=css_page_list>
			<td height="30" colspan=2 align="center">
		  <input name='Submit' type='submit' class="bnt" value=' 修 改 '></td>
		</tr>
</table>
   		</div>
        
		<div id="myTab1_Content1" class='none' style="clear:both;">
<table width="100%" border="0"  align=center cellpadding="3" cellspacing="1" style="margin:5px 0;background:#FFF">
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">幻灯显示图片数量：ishomeimg
				<div id='hIsHomeimg' style="color:#ccc;letter-spacing: 0px;font-size:12px;">首页幻灯显示条数</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="ishomeimg" type="text" id="oIsHomeimg" onFocus="hIsHomeimg.style.color='blue';" onBlur="hIsHomeimg.style.color='#ccc';" value="<?php echo ($list["ishomeimg"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">首页推荐文章数量：tjnum
				<div id='hindexnum' style="color:#ccc;letter-spacing: 0px;font-size:12px;">0则不显示</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="tjnum" type="text" id="oindexnum" onFocus="hindexnum.style.color='blue';" onBlur="hindexnum.style.color='#ccc';" value="<?php echo ($list["tjnum"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">首页排行文章数量：phnum
				<div id='hphnum' style="color:#ccc;letter-spacing: 0px;font-size:12px;">0则不显示</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="phnum" type="text" id="ophnum" onFocus="hphnum.style.color='blue';" onBlur="hphnum.style.color='#ccc';" value="<?php echo ($list["phnum"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	

	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">首页显示的投票ID：isvote
				<div id='hIsVote' style="color:#ccc;letter-spacing: 0px;font-size:12px;">首页右下角显示的投票ID,0为不显示</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="isvote" type="text" id="oIsVote" onFocus="hIsVote.style.color='blue';" onBlur="hIsVote.style.color='#ccc';" value="<?php echo ($list["isvote"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">公告栏目ID：noticeid
				<div id='hnoticid' style="color:#ccc;letter-spacing: 0px;font-size:12px;">首页显示的最新公告栏目ID,在栏目管理里面查看</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="noticeid" type="text" id="onoticid" onFocus="hnoticid.style.color='blue';" onBlur="hnoticid.style.color='#ccc';" value="<?php echo ($list["noticeid"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">公告显示数量：noticenum
				<div id='hNoticNum' style="color:#ccc;letter-spacing: 0px;font-size:12px;">首页公告数</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="noticenum" type="text" id="oNoticNum" onFocus="hNoticNum.style.color='blue';" onBlur="hNoticNum.style.color='#ccc';" value="<?php echo ($list["noticenum"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	  <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">滚动公告显示数量：rollnum
				<div id='hrollnum' style="color:#ccc;letter-spacing: 0px;font-size:12px;">滚动公告数</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="rollnum" type="text" id="orollnum" onFocus="hrollnum.style.color='blue';" onBlur="hrollnum.style.color='#ccc';" value="<?php echo ($list["rollnum"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
	
		<tr class=css_page_list>
			<td height="30" colspan=2 align="center">
		  <input name='submit' type='submit' class="bnt" value=' 修 改 '></td>
		</tr>
</table>
   		</div>
		<div id="myTab1_Content2" class='none' style="clear:both;">
<table width="100%" border="0"  align=center cellpadding="3" cellspacing="1" style="margin:5px 0;background:#FFF">
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">列表页每页显示记录：artlistnum
				<div id='hartlistnum' style="color:#ccc;letter-spacing: 0px;font-size:12px;">文章分类列表每页显示记录数</div>
		  	</td>
			<td width="60%" align="left">
				
				<input name="artlistnum" type="text" id="oartlistnum" onFocus="hartlistnum.style.color='blue';" onBlur="hartlistnum.style.color='#ccc';" value="<?php echo ($list["artlistnum"]); ?>" style="width:30px;"onkeypress="var k=event.keyCode; if ((k==46)||(k<=57 && k>=48)) return true;else return false" onpaste="return false">
				
		  </td>
	  </tr>
		<tr class=css_page_list>
			<td height="30" colspan=2 align="center">
			<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>"/>
		  <input name='submit' type='submit' class="bnt" value=' 修 改 '></td>
		</tr>
</table>
   		</div>
        
		<div id="myTab1_Content3" class='none' style="clear:both;">
<table width="100%" border="0"  align=center cellpadding="3" cellspacing="1" style="margin:5px 0;background:#FFF">
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示评论：isping
				<div id='hIsPing' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="isping" type="text" id="oIsPing" onFocus="hIsPing.style.color='blue';" onBlur="hIsPing.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["isping"])  ==  "1"): ?>selected<?php endif; ?>>显示</option><option value="0" <?php if(($list["isping"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示摘要：iszy
				<div id='hIszhaiyao' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="iszy" type="text" id="oIszhaiyao" onFocus="hIszhaiyao.style.color='blue';" onBlur="hIszhaiyao.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["iszy"])  ==  "1"): ?>selected<?php endif; ?>>显示</option><option value="0" <?php if(($list["iszy"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">文章是否显示加入分享：isshare
				<div id='hIsshare' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="isshare" type="text" id="oIswz" onFocus="hIsshare.style.color='blue';" onBlur="hIsshare.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["isshare"])  ==  "1"): ?>selected<?php endif; ?> >显示</option><option value="0" <?php if(($list["isshare"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示点击数：ishits
				<div id='hIsHits' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="ishits" type="text" id="oIsHits" onFocus="hIsHits.style.color='blue';" onBlur="hIsHits.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["ishits"])  ==  "1"): ?>selected<?php endif; ?> >显示</option><option value="0" <?php if(($list["ishits"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示来源：iscopyfrom
				<div id='hIsFrom' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="iscopyfrom" type="text" id="oIsFrom" onFocus="hIsFrom.style.color='blue';" onBlur="hIsFrom.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["iscopyfrom"])  ==  "1"): ?>selected<?php endif; ?> >显示</option><option value="0" <?php if(($list["iscopyfrom"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示心情投票：mood
				<div id='hmood' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="mood" type="text" id="omood" onFocus="hmood.style.color='blue';" onBlur="hmood.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["mood"])  ==  "1"): ?>selected<?php endif; ?> >显示</option><option value="0" <?php if(($list["mood"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示作者：isauthor
				<div id='hIsAuthor' style="color:#ccc;letter-spacing: 0px;font-size:12px;"></div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="isauthor" type="text" id="oIsAuthor" onFocus="hIsAuthor.style.color='blue';" onBlur="hIsAuthor.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["isauthor"])  ==  "1"): ?>selected<?php endif; ?> >显示</option><option value="0" <?php if(($list["isauthor"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否启用鼠标缩放：mouseimg
				<div id='hmouserimg' style="color:#ccc;letter-spacing: 0px;font-size:12px;">启用该功能后，文章中的图片会随着鼠标滚轮放大和缩小</div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="mouseimg" type="text" id="omouserimg" onFocus="hmouserimg.style.color='blue';" onBlur="hmouserimg.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["mouseimg"])  ==  "1"): ?>selected<?php endif; ?>>启用</option><option value="0" <?php if(($list["mouseimg"])  ==  "0"): ?>selected<?php endif; ?> >不启用</option>
				</select>
				
		  </td>
	  </tr>
	
		<tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页上下篇：updown
				<div id='hupdown' style="color:#ccc;letter-spacing: 0px;font-size:12px;">内容页是否上一篇下一篇</div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="updown" type="text" id="oupdown" onFocus="hupdown.style.color='blue';" onBlur="hupdown.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["updown"])  ==  "1"): ?>selected<?php endif; ?> >启用</option><option value="0" <?php if(($list["updown"])  ==  "0"): ?>selected<?php endif; ?>>不启用</option>
				</select>
				
		  </td>
	  </tr>
	  <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页相关文章：xgwz
				<div id='hxgwz' style="color:#ccc;letter-spacing: 0px;font-size:12px;">内容页是否显示相关文章</div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="xgwz" type="text" id="oxgwz" onFocus="hxgwz.style.color='blue';" onBlur="hxgwz.style.color='#ccc';" style="width:150px;">
					<option value="1" <?php if(($list["xgwz"])  ==  "1"): ?>selected<?php endif; ?> >启用</option><option value="0" <?php if(($list["xgwz"])  ==  "0"): ?>selected<?php endif; ?>>不启用</option>
				</select>
				
		  </td>
	  </tr>
	  <tr onMouseOver="this.style.backgroundColor='#EEFCDD';this.style.color='red'" onMouseOut="this.style.backgroundColor='';this.style.color=''">
			<td width="40%" align="left">内容页是否显示评论：isping
				<div id='hisping' style="color:#ccc;letter-spacing: 0px;font-size:12px;">内容页是否显示评论</div>
		  	</td>
			<td width="60%" align="left">
				
				<select class='css_select' name="isping" type="text" id="oisping" onFocus="hisping.style.color='blue';" onBlur="hisping.style.color='#ccc';" style="width:150px;">
					<option value="0" <?php if(($list["isping"])  ==  "0"): ?>selected<?php endif; ?>>不显示</option><option value="1" <?php if(($list["isping"])  ==  "1"): ?>selected<?php endif; ?>>显示</option>
				</select>
				
		  </td>
	  </tr>
		<tr class=css_page_list>
			<td height="30" colspan=2 align="center">
			<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>"/>
		  <input name='submit' type='submit' class="bnt" value=' 修 改 '></td>
		</tr>
</table>
   		</div>
        
</div>
</form>
<div style="text-align:center;margin:10px;">
<hr>
<a href="http://www.waikucms.com" target="_blank">北京九州颐和文化中心网站管理系统</a> Version <font color="red"><?php echo C("version");?></font> &copy; <?php echo date("Y");;?> 版权所有 
</div>
</body>
</html>