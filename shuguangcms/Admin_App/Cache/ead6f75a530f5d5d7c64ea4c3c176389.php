<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CMS</title>
<link href="/Admin_App/Tpl/default/Public/images/main.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/Admin_App/Tpl/default/Public/images/common.js"></script>
</head>

<body>
<div class="bodyTitle">
	<div class="bodyTitleLeft"></div>
  <div class="bodyTitleText">基本设置</div>
</div>
<br>

  <form method="post" name="form1" action="/admin.php/Settings/update" ><table class="opt">
    <tr>
      <th colspan="2"><p class="i">不清楚的项目尽量保持默认设置　<!--font color="#FF0000">内核设置尽量不要修改，否则会影响系统运行</font --></p></th>
    </tr>
    <tr>
      <th colspan="2">网站名称</th>
    </tr>
    <tr>
      <td>
        <input name="sitename" type="text" class="txt" id="sitename" value="<?php echo ($sitename); ?>" size="40" /></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2">网站网址</th>
    </tr>
    <tr>
      <td><input name="siteurl" type="text" class="txt" id="siteurl2" value="<?php echo ($siteurl); ?>" size="40" /></td>
      <td valign="top">&nbsp;</td>
    </tr>
  <tr>
      <th colspan="2">邮箱地址</th>
    </tr> <tr>
      <td><input name="email" type="text" class="txt" id="email2" value="<?php echo ($email); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2">联 系 人</th>
    </tr>
    <tr>
      <td><input name="linkman" type="text" class="txt" id="linkman" value="<?php echo ($linkman); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr> 
     <tr>
      <th colspan="2">公司名称</th>
    </tr>
    <tr>
      <td><input name="company" type="text" class="txt" id="company" value="<?php echo ($company); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr> <tr>
      <th colspan="2">电　　话</th>
    </tr>
    <tr>
      <td><input name="telephone" type="text" class="txt" id="telephone2" value="<?php echo ($telephone); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2">传　　真</th>
    </tr>
    <tr>
      <td><input name="fax" type="text" class="txt" id="fax2" value="<?php echo ($fax); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr>  
     <tr>
      <th colspan="2">地　　址</th>
    </tr>
    <tr>
      <td><input name="address" type="text" class="txt" id="address" value="<?php echo ($address); ?>" /></td>
      <td valign="top">&nbsp;</td>
    </tr>  
     <tr>
     
      <th colspan="2">网站状态</th>
    </tr>
    <tr>
      <td><select name="status" id="status">
					    <option value="1" <?php if(($status)  ==  "1"): ?>selected="selected"<?php endif; ?>>正常运行</option>
					    <option value="2" <?php if(($status)  ==  "2"): ?>selected="selected"<?php endif; ?>>暂停访问</option>
				      </select></td>
      <td valign="top">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2">暂停原因</th>
    </tr>
    <tr>
      <td><textarea name="stopd" cols="48" rows="5"  id="stopd" class="area"><?php echo ($stopd); ?></textarea></td>
      <td valign="top">简单描述网站暂停访问原因</td>
    </tr>
  <tr>
      <th colspan="2" >
	 <input  type="submit" class="inputButton" id="btnSubmit" value=" 提交更新 ">
	 <input  type="reset" class="inputButton" id="btnSubmit4" value=" 还原重填 " /></th>
    </tr>
     <tr>
      <th colspan="2" class="bgFleet borderBottom">　附件设置<a name="attachments"></a></th>
    </tr>
	<tr>
      <th colspan="2">是否开启缩略图</th>
    </tr>
    <tr>
      <td><label>
        <input name="attach" type="radio" value="true"  class="checkbox" <?php if(($attach)  ==  "true"): ?>checked="checked"<?php endif; ?>/>
        开启
        <input type="radio" name="attach" value="false" class="checkbox"  <?php if(($attach)  ==  "false"): ?>checked="checked"<?php endif; ?>/>
        关闭
      </label></td>
      <td valign="top">&nbsp;</td>
    </tr>
	<tr>
      <th colspan="2">附件位置</th>
    </tr>
    <tr>
      <td><input name="attachdir" type="text" class="txt" id="attachdir2" value="<?php echo ($attachdir); ?>" /></td>
      <td valign="top">网站图片上传保存位置,无特殊需要,请不要修改此位置</td>
    </tr>
    <tr>
      <th colspan="2">允许附件大小</th>
    </tr>
    <tr>
      <td><input name="attachsize" type="text" class="txt" id="attachsize" value="<?php echo ($attachsize); ?>" /></td>
      <td valign="top">附件大小，尽量不要超过2M</td>
    </tr>
    
     <tr>
      <th colspan="2">允许附件类型</th>
    </tr>
    <tr>
      <td><input name="attachext" type="text" class="txt" id="attachext" value="<?php echo ($attachext); ?>" /></td>
      <td valign="top">允许上传图片的类型</td>
    </tr>
       <tr>
      <th colspan="2">缩略图</th>
    </tr>
    <tr>
      <td><input name="thumbmaxwidth" type="text" class="txt" id="thumbmaxwidth" value="<?php echo ($thumbmaxwidth); ?>" /></td>
      <td valign="top">最大宽度</td>
    </tr>
    <tr>
      <td><input name="thumbmaxheight" type="text" class="txt" id="thumbmaxheight" value="<?php echo ($thumbmaxheight); ?>" /></td>
      <td valign="top">最大高度</td>
    </tr>
     <tr>
      <td><input name="thumbsuffix" type="text" class="txt" id="thumbsuffix" value="<?php echo ($thumbsuffix); ?>" /></td>
      <td valign="top">缩略图后缀</td>
    </tr>
      <tr>
      <th colspan="2" >
	 <input  type="submit" class="inputButton" id="btnSubmit" value=" 提交更新 ">
	 <input  type="reset" class="inputButton" id="btnSubmit3" value=" 还原重填 " /></th>
    </tr> 
   <tr>
      <th colspan="2" class="bgFleet borderBottom">　SEO设置<a name="seo"></a></th>
    </tr>
    <tr>
      <th colspan="2"> 标题附加字</th>
    </tr>
    <tr>
      <td><input name="seotitle" type="text" class="txt" id="seotitle2" value="<?php echo ($seotitle); ?>" /></td>
      <td valign="top"> 网页标题通常是搜索引擎关注的重点，本附加字设置将出现在标题中论坛名称的后面，如果有多个关键字，建议用 "|"、","(不含引号) 等符号分隔 提交还原重设置</td>
    </tr>
    <tr>
      <th colspan="2"> Meta Keywords Keywords 项出现在页面头部的 Meta 标签中，用于记录本页面的关键字，多个关键字间请用半角逗号 "," 隔开</th>
    </tr>
    <tr>
      <td><input name="seokeywords" type="text" class="txt" id="seokeywords2" value="<?php echo ($seokeywords); ?>" /></td>
      <td valign="top">Keywords 项出现在页面头部的 Meta 标签中，用于记录本页面的关键字，多个关键字间请用半角逗号 "," 隔开</td>
    </tr>
    <tr>
      <th colspan="2"> Meta Description </th>
    </tr>
    <tr>
      <td><textarea name="seodescription" class="area"  id="seodescription"><?php echo ($seodescription); ?></textarea></td>
      <td valign="top"> Description 出现在页面头部的 Meta 标签中，用于记录本页面的概要与描述 </td>
    </tr>
      <tr>
      <th colspan="2" >
	 <input  type="submit" class="inputButton" id="btnSubmit" value=" 提交更新 ">
	 <input  type="reset" class="inputButton" id="btnSubmit3" value=" 还原重填 " /></th>
    </tr> 
    <tr>
      <th colspan="2" class="bgFleet borderBottom">　内核设置<a name="kernel"></a></th>
    </tr> 
    <tr>
      <th colspan="2">内核参数请不要修改，否则会引起系统不稳定</th>
    </tr>
    <tr>
      <th colspan="2"> debug_mode</th>
    </tr>
    <tr>
      <td><input name="debug_mode" type="text" class="txt" id="debug_mode" value="<?php echo ($debug_mode); ?>" /></td>
      <td valign="top">开启系统调试功能</td>
    </tr>
     <tr>
      <th colspan="2"> default_module</th>
    </tr>
    <tr>
      <td><input name="default_module" type="text" class="txt" id="default_module" value="<?php echo ($default_module); ?>" /></td>
      <td valign="top">默认模块</td>
    </tr>
     <tr>
      <th colspan="2"> db_fields_cache</th>
    </tr>
    <tr>
      <td><input name="db_fields_cache" type="text" class="txt" id="db_fields_cache" value="<?php echo ($db_fields_cache); ?>" /></td>
      <td valign="top">缓存系统表，提高速度</td>
    </tr>
     <tr>
      <th colspan="2"> web_log_record</th>
    </tr>
    <tr>
      <td><input name="web_log_record" type="text" class="txt" id="web_log_record" value="<?php echo ($web_log_record); ?>" /></td>
      <td valign="top">网站日志记录</td>
    </tr>
     <tr>
      <th colspan="2"> sql_debug_log</th>
    </tr>
    <tr>
      <td><input name="sql_debug_log" type="text" class="txt" id="sql_debug_log" value="<?php echo ($sql_debug_log); ?>" /></td>
      <td valign="top">sql调试日志</td>
    </tr>
    <tr>
      <th colspan="2"> tmpl_cache_time</th>
    </tr>
    <tr>
      <td><input name="tmpl_cache_time" type="text" class="txt" id="tmpl_cache_time" value="<?php echo ($tmpl_cache_time); ?>" /></td>
      <td valign="top">模板缓存时间，单位为(秒)，-1为永久</td>
    </tr>
    <tr>
      <th colspan="2"> ROUTER_ON</th>
    </tr>
    <tr>
      <td><input name="router_on" type="text" class="txt" id="router_on" value="<?php echo ($router_on); ?>" /></td>
      <td valign="top">启用路由</td>
    </tr> <tr>
      <th colspan="2"> HTML_URL_SUFFIX</th>
    </tr>
    <tr>
      <td><input name="html_url_suffix" type="text" class="txt" id="html_url_suffix" value="<?php echo ($html_url_suffix); ?>" /></td>
      <td valign="top">模板缓存时间，单位为(秒)，-1为永久</td>
    </tr> 
   
   <tr>
      <th colspan="2"> DATA_CACHE_TYPE</th>
    </tr>
    <tr>
      <td><input name="data_cache_type" type="text" class="txt" id="data_cache_type" value="<?php echo ($data_cache_type); ?>" /></td>
      <td valign="top">数据缓存类型 支持 File Db Apc Memcache Shmop Sqlite Xcache Apachenote Eaccelerator</td>
    </tr> 
   
   <tr>
      <th colspan="2"> DATA_CACHE_SUBDIR</th>
    </tr>
    <tr>
      <td><input name="data_cache_subdir" type="text" class="txt" id="data_cache_subdir" value="<?php echo ($data_cache_subdir); ?>" /></td>
      <td valign="top">使用子目录缓存 （自动根据缓存标识的哈希创建子目录）</td>
    </tr> 
   <tr>
      <th colspan="2"> sdata_time</th>
    </tr>
    <tr>
      <td><input name="sdata_time" type="text" class="txt" id="sdata_time" value="<?php echo ($sdata_time); ?>" /></td>
      <td valign="top">数据缓存时间，单位为(秒)，-1为永久</td>
    </tr> 
    
 
 </table>
 <input  type="submit" class="inputButton" id="btnSubmit" value=" 提交更新 ">
	<input  type="reset" class="inputButton" id="btnSubmit" value=" 还原重填 "><?php if(C("TOKEN_ON")):?><input type="hidden" name="<?php echo C("TOKEN_NAME");?>" value="<?php echo Session::get(C("TOKEN_NAME")); ?>"/><?php endif;?></form>
 

</body>
</html>