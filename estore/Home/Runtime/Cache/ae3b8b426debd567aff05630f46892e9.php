<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="美丽说,网购,购物社区,打折信息,淘宝网购物,淘宝网导购,淘宝网女装,女人街">
	<meta name="description" content="沸腾着血拼快感的时尚购物社区。每天推荐网上最好看、最超值的衣服、鞋子、包包、配饰、化妆品、团购；提供最可靠的评论和价格比较。">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title>美丽说.com</title>
	<link rel="stylesheet" type="text/css" href="../Public/bangding_files/global_new.css">
	<link rel="apple-touch-icon-precomposed" href="http://stc-tx.meiliworks.com/css/images/custom_icon_precomposed.png">
	<script type="text/javascript">var LOAD_BEGIN_TIME = (new Date()).getTime();</script>
	 
	<script type="text/javascript" src="../Public/bangding_files/base.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/bangding_files/newReg.css">	
	<script type="text/javascript">
		// 增加当前用户信息
		Meilishuo.current_user = {
			'id': 0,
			'nickname': '',
			'avatar': ''
		};
		var GOODS_T_DEPART = 100000000;
		var renrenApiKey = "b0b7bffe39384d7b833e0d75eeff7715";
		var current_user_id = "0";
		var lock_a        = "0";
		var lock_eniger   = "0";
				      var person  = "0";
				var DEFAULT_COOKIEDOMAIN = '.meilishuo.com';

				$(function(){
			//lazy load
			var isiPad = navigator.userAgent.match(/iPad/i) != null;
			if( !isiPad ) {
				$('.normal_pic, .goods_pic img, .quote_picture img, .detail_body img').lazyload({ placeholder : "/css/images/loading.gif" });
				$('.twitter_avatar img').lazyload({ placeholder : "/css/images/loading64.gif" });
			}
		});
			</script>
		<script type="text/javascript"><!--//--><![CDATA[//><!--
		jQuery.extend(Meilishuo.config, {"domain":{"root":"meilishuo.com","upload":"img.meilishuo.com"},"picture_url":"http:\/\/imgtest.meiliworks.com\/","is_actived":0});document.domain = Meilishuo.config.domain.root;
	//--><!]]></script>
</head>

<body class="f960">
<!-- google_ad_section_start(weight=ignore) -->

<input type="hidden" id="twitter_latest_id" value="">
<div id="wrapper">
	
	
	<div class="container_12" style="width: 948px; ">
		<div class="new_header">
	<div class="header_top">
			<ul class="menu_leo">
			<li class="list_f"><a class="ured" href="http://www.meilishuo.com/users/register/aa74158f1933b65e23e61bf99d8157f5" target="_blank">注册</a></li>
			<li class="list_f"><a class="ured" href="http://www.meilishuo.com/logon">登录</a></li>
			<li class="list_f cursor" id="setting"><a class="setting">更多<small>▼</small></a></li>
			<li class="list_f"><a href="http://www.meilishuo.com/connect/auth/taobao"><em class="h_taobao">&nbsp;&nbsp;</em>淘宝登录</a></li>
			<li class="list_f"><a href="http://www.meilishuo.com/connect/auth/qzone"><em class="login_Q">&nbsp;</em> QQ登录</a></li>
			<li class="list_f"><a class="weibo" href="http://www.meilishuo.com/connect/auth/weibo">微博登录</a></li>
			<li class="list_f"><a href="http://user.qzone.qq.com/1379986183" class="qzone_like left" target="_blank"><span>38.8万</span></a></li>
			<li class="list_f"><a href="http://weibo.com/meilishuo" class="sina_like left" target="_blank"><span>186万</span></a></li>
		</ul>
		</div>
	<div class="clear"></div>
	<div class="header_b">
		<span class="header_b_left"> </span>
		<h1><a class="logo_new" href="http://www.meilishuo.com/welcome">美丽说</a></h1>
		<ul class="nav_new f16">
							<li>
									<a class="home" href="http://www.meilishuo.com/">我的首页</a>
								</li>
				<li>
									<a class="racks" href="http://www.meilishuo.com/goods/">逛宝贝</a>
								</li>
				<li>
									<a class="group" href="http://www.meilishuo.com/group/">杂志社</a>
									<img src="../Public/bangding_files/new.gif" style="margin-left:280px;margin-top:-7px;position: absolute; z-index: 99;">
				</li>
				<li>
									<a class="group" href="http://www.meilishuo.com/goods/report">搭配秀</a>
								</li>
				<li>
									<a class="banmei" href="http://www.meilishuo.com/findfs/main/recommend">达人</a>
								</li>
				<li>
									<a class="FAQ" href="http://www.meilishuo.com/ask/">问答</a>
								</li>
				<li>
									<a class="shops" href="http://www.meilishuo.com/shop/">好店</a>
								</li>
				<li>
									<a class="tuangou" href="http://www.meilishuo.com/welfare/">福利社<span class="nav_new_line"> </span></a>
								</li>
					</ul>
		<div class="ser_n">
						    <form id="frame_header_tools_searchBox" action="" method="get">
					<input class="ipt1" name="searchKey" type="text">
					<input class="ipt2" type="submit" id="fm_hd_btm_shbx_bttn" value="">
				</form>
						<script type="text/javascript">

</script>
		</div>
		<span class="header_b_right"> </span>
	</div>
</div>
<ul class="add_menu_leo hw76 none" id="moreConnectBox" style="left: 932px; top: 38px; display: none; ">
	<li><a href="http://www.meilishuo.com/connect/auth/txweibo" target="_blank"><em class="s_tx">&nbsp;</em> 腾讯微博</a></li>
	<li><a href="http://www.meilishuo.com/connect/auth/baidu" target="_blank"><em class="h_baidu">&nbsp;</em>百度登录</a></li>
	<li><a href="http://www.meilishuo.com/connect/auth/wangyi" target="_blank"><em class="h_wangyi">&nbsp;</em>网易登录</a></li>
</ul>
<script type="text/javascript">
//鼠标划过效果
$(function(){
	$('#setting').hover(function(){
		//alert($(this).position().top);
		$('#moreConnectBox').css({
								'left' : $(this).offset().left + $(this).width() - $('#moreConnectBox').width() - 5 + 'px', 
								'top' : $(this).offset().top + $(this).height() - 5 + 'px'
								})
							.show();
	},function(){
		var t = setTimeout(function(){
			$('#moreConnectBox').hide();
		} ,500);
		
		$('#moreConnectBox').mouseenter(function(){
			clearTimeout(t);
		}).mouseleave(function () {
			$(this).hide();
		});
	});

	$('#frame_header_tools_searchBox .ipt1').focus(function() {
		if ($(this).val() == '搜宝贝、用户名...') {
			$(this).val('');
		}
	})
	.blur(function() {
		if ($(this).val() == '') {
			$(this).val('搜宝贝、用户名...');
		}
	});
});
</script>		<div class="clear"></div>
	</div>

	
					<div id="h_banner" class="container_12"><a href="http://www.meilishuo.com/users/register/aa74158f1933b65e23e61bf99d8157f5">美丽说，最具人气的时尚分享社区，623万MM的美丽地盘。跟朋友一起修炼美丽，每天分享怎样搭配，怎样化妆，哪里去买；记录我漂亮的一天，让改变发生！</a></div><!-- not logon banner -->
			
	
		<div class="clear"></div>
		<div id="main" class="container_12">
			
				<div class="grid_12">
		<script type="text/javascript">
	function showPermissionDialog() {
		XN.Connect.showPermissionDialog('publish_feed', function(){
			location.href = 'http://www.meilishuo.com/connect/confirm';
		});
	}
</script>
<div class="box_shadow p13">
	<div class="connect_login_top">
		<div class="connect_login_left1">
			<div id="ext_profile" class="profile">
				<img class="face" src="../Public/bangding_files/0">
				<div class="name">
					<div>亲爱的韦飞霞</div>
					<div>简单设置帐号，与姐妹们一起美丽说，一起美丽修炼！</div>
				</div>
				<div class="clear-fix"></div>
			</div>
	
			<div id="newRegForm">
				<div class="left newRegFromMain">
	
										<div id="regWarning" style="z-index: 100; display: none; ">
						<div class="bottom-left-w">
							<div class="bottom-right-w">
								<div class="top-left-w">
									<p class="top-right-w messageBox">
									</p>
								</div>
							</div>
						</div>
					</div>
	
										<div id="regNotice" style="z-index: 100; display: none; ">
						<div class="bottom-left-t">
							<div class="bottom-right-t">
								<div class="top-left-t">
									<p class="top-right-t messageBox">
									</p>
								</div>
							</div>
						</div>
					</div>
					<form action="http://www.meilishuo.com/users/registerActionWeibo" onsubmit="return registerAction.blurNicknameInput();" method="post" id="form">
	
	
												<div class="oneline">
							<div class="titleBox left">昵称：</div>
							<div class="inputBox left">
								<input type="text" class="input1" id="nickname" name="nickname" value="韦飞霞" onblur="return registerAction.blurNicknameInput();" onfocus="return registerAction.blurNicknameInput();">
							</div>
							<div class="hints left" style="width: 25px; height: 25px; background-image: url(http://img.meilishuo.net/css/images/register/good.gif); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; "></div>
							<div style="clear:both"></div>
						</div>
	
						<div class="clear-fix"></div>
	
	
						<div class="oneline">
							<div class="titleBox left">&nbsp;</div>
							<div class="inputBox left">
								<input type="submit" value="下 一 步" id="" class="weiboNext button button-100">
				             </div>
				             <div class="clear-fix"></div>
						</div>
												<div style="color:#b5b5b5; float:right; margin:165px 35px 0 0;">
							<input type="checkbox" name="follow-mls" id="follow-mls-reg">关注美丽说官方微博
		 				</div>
												<input type="hidden" value="aa74158f1933b65e23e61bf99d8157f5" id="invite_code" name="invite_code">
						<input type="hidden" value="#2035726980@t.sina.com" id="weiboEmail" name="weiboEmail">
						<input type="hidden" value="女" id="weiboGender" name="weiboGender">
						<input type="hidden" value="北京" id="weiboProvince" name="weiboProvince">
						<input type="hidden" value="" id="weiboCity" name="weiboCity">
						<input type="hidden" value="2035726980" id="weiboId" name="weiboId">
						<input type="hidden" value="http://tp1.sinaimg.cn/2035726980/180/5603372842/0" id="weiboAvatar" name="weiboAvatar">
						<input type="hidden" value="3" id="openType" name="openType">
											</form>
				</div> <!-- /#newRegForm -->
			</div>
		</div> <!-- ./connect_login_left1 -->
		<div class="connect_login_right1">
			<div class="bangd_top">已有美丽说帐号，<a onclick="$(&#39;#hadlogin&#39;).show();">用已有帐号绑定</a></div>
			<div style="margin-top:28px; display:none;" id="hadlogin">
				<form action="" onsubmit="return check_user_logon(&#39;bang&#39;);return false;" method="post" id="loginForm">
					<div class="logon_form_inputa">
						<div class="titleBox left">账 号：</div>
						<div class="left"><input type="text" name="username" onclick="$(&#39;#regNotice&#39;).hide();" id="username" class="logonInput" value="注册时使用的邮箱/昵称"></div>
						<div style="clear:both"></div>
					</div>
					<div class="logon_form_inputb">
						<div class="passwordMask" id="passwordMask" style="display: none;">请输入密码</div>
						<div class="passwordInput ">
							<div class="titleBox left">密 码：</div>
							<div class="left"><input type="password" onclick="$(&#39;#regNotice&#39;).hide();" name="password" id="bangpassword" class="logonInput" value=""></div>
						</div>
					</div>
					<div class="clear-fix"></div>
										<div class="follow-chkbox">
						<input type="checkbox" name="follow-mls" id="follow-mls">关注美丽说官方微博
		 			</div>
										<div id="logon_hint_logon" class="logon_hint_logon"></div>
					<input type="submit" onclick="return check_user_logon(&#39;bang&#39;);return false;" value="绑定账号" class="submitBanglog button button-100">
				</form>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div style="clear: both;"></div>
	<div id="verify" style="display:none;">
		<div id="verify_succ" style="width:300px;height:50px; text-align: center; padding: 20px 0 0 60px;">
			<img src="../Public/bangding_files/kule.gif" style="width:30px;height:31px; float: left;">
			<div class="verify_con">很遗憾，美丽说是女生的时尚聚集地！<br>你可以邀请你的女性朋友来美丽说玩哦！</div>
			<div class="verify_con_1" style="clear:both;"></div>
		</div>
		<div class="btn" style="position:absolute;left:150px;top:100px;"><input class="verify_btn" style="border:0 none;width:73px;height:28px;" src="../Public/bangding_files/know.gif" type="image" name="verifyBtn" id="verifyBtn" value="" onclick="closeVerifyWin()"></div>
		<div class="btn" id="newbtn"></div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#nickname').focus();
	});
</script>
		</div>
		
						<div class="clear"></div>
	</div><!-- main -->
	<div class="clear"></div>

	<div id="show_err"></div>

		
    <!-- google_ad_section_end -->
		

		 <!-- google_ad_section_end -->
		<div class="clear-fix"></div>
		<!-- google_ad_section_start(weight=ignore) -->
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
							




		<div id="pop_qbi_content" class="qbi-first none">
		<ul>
			<li>
				<span class="qbi_bg mt10 r">首次使用QQ号或腾讯微博登录美丽说即送1Q币</span>
				<span class="qbi_ico1"></span>
			</li>
			<li class="m30 c">
				<a class="qbi_ico2" href="http://www.meilishuo.com/connect/auth/qzone"></a>
				<a class="qbi_ico3" href="http://www.meilishuo.com/connect/auth/txweibo"></a>
			</li>
			<li class="c">（注：QQ号需满一年以上且必须是MM才可成功领取哦）</li>
		</ul>
	</div>
	

				<!-- google_ad_section_start(weight=ignore) -->
	<div class="container_12">
		<div class="grid_12 mt10">
			<div class="box_shadow p13">
				<div class="clear"></div>
<div class="clear-fix"></div>
<div class="footer_top">
	<div class="f_list">
		<h4>发现美丽</h4>
		<ul class="l_one">
			<li><a href="http://www.meilishuo.com/goods/" target="_blank">挑衣服</a></li>
			<li><a href="http://www.meilishuo.com/findfs/main/recommend" target="_blank">看达人</a></li>
			<li><a href="http://www.meilishuo.com/shop/" target="_blank">逛店铺</a></li>
			<li><a href="http://www.meilishuo.com/ask/" target="_blank">美丽问答</a></li>
			<li><a href="http://www.meilishuo.com/tuan/" target="_blank">美丽说团购</a></li>
		</ul>
	</div>
	<div class="f_list">
		<h4>获取帮助</h4>
		<ul class="l_one">
			<li><a href="http://www.meilishuo.com/helpcenter/" target="_blank">新手指南</a></li>
			<li><a href="http://www.meilishuo.com/sitemap/" target="_blank">网站地图</a></li>
			<li><a href="http://www.meilishuo.com/contactus/" target="_blank">美丽说客服</a></li>
			<li><a href="javascript:void(0);" onclick="return showSendPmsgBox(&#39;美丽客服精灵&#39;);">意见薄</a></li>
			
		</ul>
	</div>
	<div class="f_list">
		<h4>关于我们</h4>
		<ul class="l_one">
			<li><a href="http://www.meilishuo.com/aboutus/" target="_blank">关于美丽说</a></li>
			<li><a href="http://www.meilishuo.com/contactus/" target="_blank">联系我们</a></li>
			<li><a href="http://www.meilishuo.com/joinus/" target="_blank">加入美丽说</a></li>
			<li><a href="http://www.meilishuo.com/contactus/cooperate" target="_blank">广告投放与品牌推广</a></li>
			<li><a href="http://www.meilishuo.com/PrivacyProctClaim" target="_blank">隐私政策</a></li>
		</ul>
	</div>
	<div class="f_list">
		<h4>更多</h4>
		<ul class="l_one">
			<li><a href="http://webapp.meilishuo.com/mobile/iphone" target="_blank">下载iPhone客户端</a></li>
			<li><a href="http://www.meilishuo.com/mobile/Android" target="_blank">下载Android客户端</a></li>
			<li><a href="http://www.meilishuo.com/topic/list/new" target="_blank">今日热门话题</a></li>
			<li><a href="http://www.meilishuo.com/topic/list/hot" target="_blank">每周热门话题</a></li>
			<li><a href="http://www.meilishuo.com/aboutus/links" target="_blank">友情链接</a></li>		</ul>
	</div>
	<div class="f_list">
		<h4>关注我们</h4>
		<ul class="l_two">
			<li><a href="http://t.sina.com.cn/meilishuo" target="_blank"><span class="s_sina">&nbsp;&nbsp;</span>新浪微博</a></li>
			<li><a href="http://page.renren.com/699103070" target="_blank"><span class="s_ren">&nbsp;&nbsp;</span>人人主页</a></li>
			<li><a href="http://t.qq.com/meilishuo" target="_blank"><span class="s_tx">&nbsp;&nbsp;</span>腾讯微博</a></li>
			<li><a href="http://user.qzone.qq.com/1379986183/" target="_blank"><span class="s_qzone">&nbsp;&nbsp;</span>QQ空间</a></li>
			<li><a href="http://t.163.com/meilishuo" target="_blank"><span class="h_wangyi">&nbsp;</span>网易微博</a></li>
			<li><a href="http://site.douban.com/121404/" target="_blank"><span class="s_dbai">&nbsp;&nbsp;</span>豆瓣</a></li>
		</ul>
	</div>
</div>
<div class="clear-fix"></div>
<div class="new_footer left">
	<div class="nf_r">Copyright ©2011 Meilishuo.com, All Rights Reserved. 京ICP备11031139号&nbsp; 京ICP证100798号&nbsp; 京公网安备110108006045&nbsp; <a href="http://imgtest.meiliworks.com/css/images/about/license.jpg" target="_blank">工商注册号110108013011072</a></div>
</div>
<!-- frame_footer -->				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
<div id="xs"></div>



<!-- 在html加载以后加载若干js代码 -->
<script type="text/javascript" src="../Public/bangding_files/connect.js"></script>
<script type="text/javascript" src="../Public/bangding_files/initRenren.js"></script>
<script type="text/javascript" src="../Public/bangding_files/register.js"></script>

<div id="goTop" class="none" style="top: 479px; left: 1183px; ">
		<div class="love_bg">
		<h4 class="love_bgt"></h4>
		<h4 class="love_bgm">
							<a href="javascript:void(0);" onclick="AddFavorite();" class="collect"></a>
					</h4>
		<h4 class="love_bgb"></h4>
	</div>
	<a onclick="javascript:void(0)" id="go_top"></a>	
</div>
<!-- google_ad_section_end -->





<div id="msg_float_div" style="position: fixed; right: 151.5px; top: 1px; "><div id="systemUserMsg"><div id="userMsg">
	<div class="userMsg_middle">
	    <div class="click_close" onclick="javascript:useMsgClose();"></div>
	    <div>
	    				<div class="userMsg_oneline">
				<a href="http://www.meilishuo.com/weibo/at">有&nbsp;<span class="red">1</span>&nbsp;条提到我（@我）</a>
			</div>
								</div>
    </div>
</div>
</div></div></body></html>