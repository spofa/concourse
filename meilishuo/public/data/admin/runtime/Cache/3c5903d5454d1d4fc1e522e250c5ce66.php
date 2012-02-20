<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="__TMPL__Static/Css/style.css" rel="stylesheet" />
<script type="text/javascript" src="__TMPL__Static/Js/jquery.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/base.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/json.js"></script>
<script type="text/javascript" src="__TMPL__Static/Js/jquery.pngFix.js"></script>
<script type="text/javascript">
<!--
//指定当前组模块URL地址 
var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var STATIC = '__TMPL__Static';
var VAR_MODULE = '<?php echo c('VAR_MODULE');?>';
var VAR_ACTION = '<?php echo c('VAR_ACTION');?>';
var CURR_MODULE = '<?php echo ($module_name); ?>';
var CURR_ACTION = '<?php echo ($action_name); ?>';

//定义JS中使用的语言变量
var CONFIRM_DELETE = '<?php echo L("CONFIRM_DELETE");?>';
var AJAX_LOADING = '<?php echo L("AJAX_LOADING");?>';
var AJAX_ERROR = '<?php echo L("AJAX_ERROR");?>';
var ALREADY_REMOVE = '<?php echo L("ALREADY_REMOVE");?>';
var SEARCH_LOADING = '<?php echo L("SEARCH_LOADING");?>';
var CLICK_EDIT_CONTENT = '<?php echo L("CLICK_EDIT_CONTENT");?>';
//-->
</script>
</head>
<body>
	<div class="fanwe-body">
		<div class="fb-title"><div><p><span><?php echo ($ur_href); ?></span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<form method='post' id="form" name="form" action="<?php echo U(MODULE_NAME.'/clear');?>">
<table cellpadding="4" cellspacing="0" border="0" class="table-form">
	<tr>
		<td>
			<ul class="tipslis">
				<li><?php echo L("SYSTEM_TIPS1");?></li>
				<li><?php echo L("SYSTEM_TIPS2");?></li>
				<li><?php echo L("SYSTEM_TIPS3");?></li>
				<li><?php echo L("SYSTEM_TIPS4");?></li>
			</ul>
		</td>
	</tr>
	<tr>
		<td style="padding-left:30px;">
			<label><input type="checkbox" name="is_admin" value="1" />&nbsp;<span><?php echo L("ADMIN_CACHE");?></span></label>&nbsp;&nbsp;
			<label><input type="checkbox" name="is_data" value="1" />&nbsp;<span><?php echo L("DATA_CACHE");?></span></label>&nbsp;&nbsp;
			<label><input type="checkbox" name="is_tpl" value="1" />&nbsp;<span><?php echo L("TPL_CACHE");?></span></label>
		</td>
	</tr>
	<tr>
		<td style="padding-left:30px;">
			<input type="submit" class="submit_btn" value="<?php echo L("SUBMIT");?>" />
			<input type="reset" class="reset_btn" value="<?php echo L("RESET");?>" />
			<input type="hidden" name="type" value="system" />
			<script language=javascript>
<!--
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\u8d44\u6e90\u63d0\u4f9b\uff1a\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x62\x62\x73\x2e\x67\x6f\x70\x65\x2e\x63\x6e\/\" \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\" \x3e\x3c\x66\x6f\x6e\x74 \x63\x6f\x6c\x6f\x72\x3d\"\x72\x65\x64\"\x3e\u72d7\u6251\u6e90\u7801\u793e\u533a\x3c\/\x66\x6f\x6e\x74\x3e\x3c\/\x61\x3e");
//-->
</script>
		</td>
	</tr>
</table>
</form>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
</body>
<script type="text/javascript">
jQuery(function($){
	updateBodyDivHeight();
	$(window).resize(function(){
		updateBodyDivHeight();
	});
});

function updateBodyDivHeight()
{
	jQuery(".body-table-div").height(jQuery(".fanwe-body").height() - 36);
}
</script>
</html>