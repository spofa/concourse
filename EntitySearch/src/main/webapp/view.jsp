<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0042)http://renlifang.msra.cn/view.aspx?id=1429 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    
    <style type="text/css">
        *
        {
            font-family: 微软雅黑,黑体,宋体;
        }
        .previewSection
        {
            background-color: #FEE37A;
            border: 1px solid #C6E4F2;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border: 0px solid #ffbf00;
            margin-bottom: 30px;
            width: 1000px;
            -moz-box-shadow: 0px 0px 4px rgba(170,170,170,1);
            -webkit-box-shadow: 0px 0px 4px rgba(170,170,170,1);
            padding: 10px 0 6px 0;
        }
        .previewSave
        {
            display: inline-block;
            width: 132px;
            height: 38px;
            background: url("images/preview_save.png") no-repeat scroll 0 0 transparent;
            cursor: pointer;
            cursor: hand;
        }
        .previewSave:hover
        {
            background: url("images/preview_save_hover.png") no-repeat scroll 0 0 transparent;
        }
        .previewReturn
        {
            display: inline-block;
            width: 132px;
            height: 38px;
            background: url("images/preview_edit.png") no-repeat scroll 0 0 transparent;
            cursor: pointer;
            cursor: hand;
        }
        .previewReturn:hover
        {
            background: url("images/preview_edit_hover.png") no-repeat scroll 0 0 transparent;
        }
    </style>
<link href="css/basic.css" type="text/css" rel="stylesheet">
<link href="css/default.css" type="text/css" rel="stylesheet">
<link href="css/search.css" type="text/css" rel="stylesheet">
<link href="css/searchresult.css" type="text/css" rel="stylesheet">
<link href="css/view.css" type="text/css" rel="stylesheet">
<title>
	人立方关系搜索 - 李开复
</title>
</head>
<body screen_capture_injected="true">
     <div class="container">
        <div class="header-wrapper">
            <div class="header-top">
                <div class="top-right">
                    <a href="#" style="margin-left: 13px;">登录</a>
                </div>
            </div>
            <div class="header-middle">
                <a href="#" class="header-top-home"></a>
                <div id="Panel1">
                    <div class="search-bar-wrapper">
                        <div class="search-column-wrapper">
                            <span class="search-column"><a href="#">首页</a></span>
                            <span class="search-column-sel"><a href="#">关系百科</a></span> 
							<span class="search-column"><a href="#">Q20读心机器人</a></span> 
							<span class="search-column"><a href="#">微博关系图</a></span>
                            <span class="search-column"><a href="#">六度搜索</a></span>
                        </div>
                        <div class="search-bar">
                            <input name="ctl00$GeneralSearchBox" type="text" id="GeneralSearchBox" class="search-input" title="">
                            <input type="button" name="ctl00$GeneralSearchButton" value="" id="GeneralSearchButton" class="search-btn" alt="搜索" title="搜索">
                            <input type="button" name="ctl00$GeneralCreateButton" value=""  id="GeneralCreateButton" class="create-btn" alt="创建词条" title="创建词条">
                        </div>
                    </div>
                
               </div>
                <div class="clear">
                </div>
            </div>
            <div class="search-down">
            </div>
        </div>
      <div class="content-wrapper">
            
    <div class="view-content">
    
        <div class="nav-panel">
            <a href="#" style="font-weight: bold">去找其他的李开复<img src="images/find_all_name.jpg" style="width:15px;height:16px;vertical-align:top;margin-left:3px;margin-top:2px;">
            </a>
        </div>

        <div class="view-left-wrapper">
		 <!--名片-->
             <div class="basicInfo">
                <div class="basicInfoHeader">
                </div>
                <div class="basicInfoContent">
                    <div class="basicInfoNewTool">
                    
                        <a href="#" class="twLineEditIcon" title="设置名片"></a>
                        
                    </div>
                    <div class="basicInfoImage">
                        <img width="65px" height="65px" class="user-profile-link" alt="李开复" title="">
                    </div>
                    <div class="basicInfoBasicContent">
                        <div class="basicInfoBasicContent_Name">李开复</div>
                        <div class="basicInfoBasicContent_Label">
                            <div class="twoLineDescPerLineNotShown" title="">标签:Google,微软全球副...</div></div>
                    </div>
                    
                </div>
                <div class="basicInfoDescTool">
                    <div class="basicInfoDescToolContent">
                        <div class="basicInfoDescToolContent_web">                       
                                    <span class="profile-person-page"><a href="#" target="_blank" class="iconimage baidubk"></a></span>                       
                                    <span class="profile-person-page"><a href="#" target="_blank" class="iconimage sinawb"></a></span>
                                    
                        </div>
                        <div class="basicInfoDescToolContent_edit">
                            <a href="#" style="display: block;">编辑词条</a>
                        </div>
                    </div>
                </div>
                <div class="basicInfoFooter">
                </div>
            </div>

            <!--关人物关系图-->
            <div class="leftPanelHeader">
                <div class="leftPanelHeaderText">
                    人物关系图</div>
                <div class="leftPanelHeaderTool">
                    
                    <a href="#" onclick="return bigGraph();"><span class="leftPanelMoreTool"></span></a>
                </div>
            </div>
            <div class="leftPanelContent">
                <div class="selected-map-view-small" id="selectedMapView" style="display: visible;">
                    <object width="312px" height="312px" bgcolor="#000000" id="visualizedSearch" data="http://renlifang.msra.cn/asset/visualizedSearch.swf" type="application/x-shockwave-flash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab">
                        <param value="asset/visualizedSearch.swf" name="movie">
                        <param name="quality" value="high">
                        <param name="bgcolor" value="#000000">
                        <param value="sameDomain" name="allowScriptAccess">
                        <param value="false" name="allowFullScreen">
                        <param name="wmode" value="Opaque">
                        <param value="asset/visualizeSearchViewConfig.xml" name="configUrl">
                        <param value="isSearch=true&amp;configUrl=asset/visualizeSearchViewConfig.xml&amp;query=1429:e4fbddf131c7bbbc42db699f38893b7b" name="FlashVars">
                        <embed src="asset/visualizedSearch.swf" quality="high" bgcolor="#000000" width="312px" height="312px" name="visualizedSearch" align="middle" play="true" loop="false" vmode="Opaque" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" flashvars="isSearch=true&amp;configUrl=asset/visualizeSearchViewConfig.xml&amp;query=1429:e4fbddf131c7bbbc42db699f38893b7b" pluginspage="http://www.macromedia.com/go/getflashplayer">
                         
                    </object>
                </div>
            </div>
            
			<!--可能的人物关系-->
            <div class="leftPanelHeader" id="rec-person-header" style="display: block;">
                <div class="leftPanelHeaderText" id="rec-person-headertext"> 可能的人物关系</div>       
                <div class="leftPanelHeaderTip" id="recperson-tip"> 众人拾柴火焰高，进入<a href="#">关系百科</a>进行编辑
                </div>
            </div>
            <div class="leftPanelContent" style="display: block">
                <div class="rec-person-view">
                    <ul class="profile-related-people borderul" id="rec-ul"> 
                        <li class="profile-recommend-people-item" seq="0" hashcode="42494634">
                            <div style="min-height:30px">
                                <img width="25px" height="25px" src="images/people_small.png" style="float: left">
                                <div class="recommend-people-info">
                                    <span class="related-people-info-name">
                                        <a href="#">沈向洋</a>
                                    </span>
									<span class="related-people-info-label">机构:微软;标签:教授,副总裁;</span>
                                    <div class="related-people-info-rel">
                                    </div>
                                </div>
                                <div class="recommend-tool">
                                    <a href="#" onclick="return addpeople(5822448,&#39;沈向洋&#39;,42494634);">
                                        <span class="addpeopleBtnSpan"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="related-block-info" kw="沈向洋" ul="2" ss="60" style="clear:both">
							<div class="blk">...时候，这几乎成了他的一个“头衔”。同样的头衔还用在
								<span class="highlight">李开复</span>、<span class="highlight">沈向洋</span>和张宏江这三个人身上。一位中国记者拿这个问题去询问图...
							</div>
							<div class="url">blog.csdn.net</div></div>
                        </li>
                         <li class="profile-recommend-people-item" seq="0" hashcode="42494634">
                            <div style="min-height:30px">
                                <img width="25px" height="25px" src="images/people_small.png" style="float: left">
                                <div class="recommend-people-info">
                                    <span class="related-people-info-name">
                                        <a href="#">沈向洋</a>
                                    </span>
									<span class="related-people-info-label">机构:微软;标签:教授,副总裁;</span>
                                    <div class="related-people-info-rel">
                                    </div>
                                </div>
                                <div class="recommend-tool">
                                    <a href="#" onclick="return addpeople(5822448,&#39;沈向洋&#39;,42494634);">
                                        <span class="addpeopleBtnSpan"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="related-block-info" kw="沈向洋" ul="2" ss="60" style="clear:both">
							<div class="blk">...时候，这几乎成了他的一个“头衔”。同样的头衔还用在
								<span class="highlight">李开复</span>、<span class="highlight">沈向洋</span>和张宏江这三个人身上。一位中国记者拿这个问题去询问图...
							</div>
							<div class="url">blog.csdn.net</div>
						  </div>
                        </li>            
    
                    </ul>
                </div>
                <div class="rec-person-view-fw">
                    <a href="#">更多...</a>
                </div>
                <div class="rec-person-view-btn">
                </div>
            </div>
        </div>
		<!--个人信息-->
        <div class="view-right-wrapper">
            <div class="view-panel" id="profileInfo_panel" style="display: block">
                <div class="kvp-person-view">
                    <ul class="kvp-person-itemset">
                        
                                <li class="kvp-person-singleitem-wrapper">
                                
                                    <span class="kvp-person-singleitem-key">性别:</span>
                                    <span class="kvp-person-singleitem-value-column2">男</span>
                                    <span class="kvp-person-singleitem-key">生日:</span>
                                    <span class="kvp-person-singleitem-value-column2">60后</span>
                                
                                    <div class="view-splitter-nomargin"></div>
                                </li>
                                    
                                <li class="kvp-person-singleitem-wrapper">
                                
                                    <span class="kvp-person-singleitem-key">标签:</span>
                                    <span class="kvp-person-singleitem-value">Google，微软全球副总裁，创新工场董事长兼首席执行官</span>
                                
                                    <div class="view-splitter-nomargin"></div>
                                </li>
                                    
                                <li class="kvp-person-singleitem-wrapper">
                                
                                    <span class="kvp-person-singleitem-key">个人页面:</span>
                                    <span class="kvp-person-singleitem-value">
										<span class="profile-personalpage"><a href="#" target="_blank">新浪微博</a></span>
										<span class="profile-personalpage"><a href="#" target="_blank">百度百科</a></span>
									</span>
                                
                                    <div class="view-splitter-nomargin"></div>
                                </li>
                                    
                    </ul>
                </div>
                
                    <div class="margin-35px-top"></div>
					
					<!--个人简介-->
                            
                <div class="bio-person-view" style="display: block">
                    <ul class="bio-person-itemset">
                        
                                <li class="bio-person-singleitem-wrapper" style="">
										<div class="bio-person-singleitem-string">李开复（1961年12月3日－）是一位信息产业的执行官和计算机科学的研究者。1998年，	李开复加			盟微软公司，并随后创立了微软中国研究院（现微软亚洲研究院）。2005年7月加入Google（谷歌）公司，并担任Google（谷歌）全球副总裁兼中国区总裁一职。2009年9月宣布离职并创办创新工场任董事长兼首席执行官。创新工场董事长兼首席执行官李开复2011年11月通过微博公布了来自卡内基梅隆大学的声明和聘书，以回应方舟子对其职称的质疑，并详细总结了自己获得职称的过程。</							div>
                                    <div class="bio-person-singleitem-cmts">
                                        来源
                                        <span class="bio-person-singleitem-src"><a href="#" target="_blank">百度百科</a></span>
                                    </div>
                                </li>
                                    
                    </ul>
                    
                </div>
                <div class="just-for-margin"></div>
            </div>
           
		     <!--机构关系-->
            <div class="view-title-bar" style="display: block">
                <div class="view-title-bar-text">
                    机构关系</div>
                <div class="view-title-bar-tip">
                </div>
            </div>
            <div class="view-panel" id="orgrelation-view" style="display: block">
                <div class="profile-person-view">
                    <ul class="profile-related-people">
                        
                        <li class="profile-related-org-item" seq="0" style="">
                                <a href="#" class="profile-related-image">
                                    <img width="48px" height="48px" src="images/oicon48.png">
                                </a>
                            <div class="related-org-info">
                                <span class="related-org-info-name">
                                    <a href="#">微软
                                    </a>
                                </span>
								<span class="related-org-info-label">
                                 </span>
                                <div class="related-org-info-rel">
                                    
                                </div>
                                <div class="related-block-info" kw="微软">
									<div class="blk">...'s My Baby－－那是我“儿子” 一个平等的、真诚的、自由的文化，能够将有才华的人组成一支杰出的队伍。 －－
										<span class="highlight">李开复</span>
										<span class="highlight">微软</span>
										多次上演后发先至的喜剧，这一次能再现吗？ 邸烁坐在希格玛大厦第五层靠东边的一个格子间里，身着牛仔裤，运动鞋，蓝色格子...
									</div>
									<div class="url">http://blog.csdn.net/northplayboy/archive/2006/04/15/664997.aspx</div>
                                </div>
                            </div>
                            <div class="view-splitter">
                            </div>
                        </li>
                         <li class="profile-related-org-item" seq="0" style="">
                                <a href="#" class="profile-related-image">
                                    <img width="48px" height="48px" src="images/oicon48.png">
                                </a>
                            <div class="related-org-info">
                                <span class="related-org-info-name">
                                    <a href="#">微软
                                    </a>
                                </span>
								<span class="related-org-info-label">
                                 </span>
                                <div class="related-org-info-rel">
                                    
                                </div>
                                <div class="related-block-info" kw="微软">
									<div class="blk">...'s My Baby－－那是我“儿子” 一个平等的、真诚的、自由的文化，能够将有才华的人组成一支杰出的队伍。 －－
										<span class="highlight">李开复</span>
										<span class="highlight">微软</span>
										多次上演后发先至的喜剧，这一次能再现吗？ 邸烁坐在希格玛大厦第五层靠东边的一个格子间里，身着牛仔裤，运动鞋，蓝色格子...
									</div>
									<div class="url">http://blog.csdn.net/northplayboy/archive/2006/04/15/664997.aspx</div>
                                </div>
                            </div>
                            <div class="view-splitter">
                            </div>
                        </li>
  
                    </ul>
                </div>
            </div>
            <div class="view-title-bar" style="display: block;margin-bottom:12px;">
                <div class="view-title-bar-tool">
                    <div class="profile-related-org-item-page view-page-navigator"><span class="current pagehide">1</span></div>
                </div>
            </div>

            <!--人物关系-->
            <div class="view-title-bar" id="relation_panel_header" style="display: block">
                <div class="view-title-bar-text">
                    人物关系</div>
                <div class="view-title-bar-tip">
                </div>
            </div>
            <div class="view-panel" id="relation_panel" style="display: block">
                <div class="profile-person-view">
                    <ul class="profile-related-people" id="select-per">
                        
                        <li class="profile-related-people-item" seq="0" style="">
                            <a href="#" class="profile-related-image">
                                <img width="48px" height="48px"  alt="唐骏" title="">
                            </a>
                            <div class="related-people-info">
                                <span class="related-people-info-name">
                                    <a href="">唐骏</a>
                                </span><span class="related-people-info-label">
                                    标签:职业经理人、新华都集团总裁兼CEO,IT风云人物;</span>
                                <div class="related-people-info-rel">
                                    
                                </div>
                                <div class="related-block-info" kw="唐骏">
									<div class="blk">...，微软还有一个十分独立的机构，即微软亚洲研究院。微软亚洲研究院第一任院长是
										<span class="highlight">李开复</span>,第二任院长是张亚勤。除张亚勤外，
										<span class="highlight">唐骏</span>、
										<span class="highlight">李开复</span>、高群耀都已经离开了微软，但现在他们仍保持着良好的私人关系。
										<span class="highlight">唐骏</span>一直认为，朋友是一辈子的事情，不会因为工作发生变...
									</div>
									<div class="url">http://windly1001.blog.163.com/blog/static/215132820088220339728/</div>
                                </div>
                            </div>
                            
                            <div class="view-splitter">
                            </div>
                        </li>
                         <li class="profile-related-people-item" seq="0" style="">
                            <a href="#" class="profile-related-image">
                                <img width="48px" height="48px"  alt="唐骏" title="">
                            </a>
                            <div class="related-people-info">
                                <span class="related-people-info-name">
                                    <a href="">唐骏</a>
                                </span><span class="related-people-info-label">
                                    标签:职业经理人、新华都集团总裁兼CEO,IT风云人物;</span>
                                <div class="related-people-info-rel">
                                    
                                </div>
                                <div class="related-block-info" kw="唐骏">
									<div class="blk">...，微软还有一个十分独立的机构，即微软亚洲研究院。微软亚洲研究院第一任院长是
										<span class="highlight">李开复</span>,第二任院长是张亚勤。除张亚勤外，
										<span class="highlight">唐骏</span>、
										<span class="highlight">李开复</span>、高群耀都已经离开了微软，但现在他们仍保持着良好的私人关系。
										<span class="highlight">唐骏</span>一直认为，朋友是一辈子的事情，不会因为工作发生变...
									</div>
									<div class="url">http://windly1001.blog.163.com/blog/static/215132820088220339728/</div>
                                </div>
                            </div>
                            
                            <div class="view-splitter">
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="view-title-bar" id="relation_panel_tailer" style="display: block;margin-bottom:12px;">
                <div class="view-title-bar-tool">
                    <div class="profile-related-people-item-page view-page-navigator">
						<span class="current">1</span>
						<a href="#" onclick="">2</a>
						<a href="#" onclick="">3</a>
						<a href="#" onclick="">4</a>
						<a href="#" onclick="">5</a>
						<span class="view-nextpage" style="width:6px;">&nbsp;</span></a>
					</div>
                </div>
            </div>

            
          
            <div class="view-title-bar" id="selectedpage_header" style="display: block">
                <div class="view-title-bar-text">
                    网&nbsp;页</div>
                <div class="view-title-bar-tool">
                </div>
                <div class="view-title-bar-tip">
                </div>
            </div>
            <div class="view-panel" id="webpage-panel" style="display: block">
                
                <div class="selectedpage view-clip" seq="0" style="">
                    <div class="view-title">
                        <a href="#" target="_blank">IT人物写真（一）：李彦宏·<span class="highlight">李开复</span>·马云--别有根芽</a>
					</div>
                    <div class="view-desp">
                        ...理解，改变中国已有的创新模式，至少改变我所雇佣的这批青年，他们对于一个成功机构的理解。”
7年前，正是因为欣赏比尔-盖茨，<span class="highlight">李开复</span>选择了微软，对于将来的Google中国而言，李开最希望自己招募的青年学会把偶像当作一个“隔壁的朋友”，而不是高不...
					</div>
                    <div class="view-url">
                        cisety.bokee.com/3645294.html</div>
                </div>
				
				 <div class="selectedpage view-clip" seq="1" style="">
                    <div class="view-title">
                        <a href="#" target="_blank">IT人物写真（一）：李彦宏·<span class="highlight">李开复</span>·马云--别有根芽</a>
					</div>
                    <div class="view-desp">
                        ...理解，改变中国已有的创新模式，至少改变我所雇佣的这批青年，他们对于一个成功机构的理解。”
7年前，正是因为欣赏比尔-盖茨，<span class="highlight">李开复</span>选择了微软，对于将来的Google中国而言，李开最希望自己招募的青年学会把偶像当作一个“隔壁的朋友”，而不是高不...
					</div>
                    <div class="view-url">
                        cisety.bokee.com/3645294.html</div>
                </div>
                
              
              
                
            </div>
            <div class="view-title-bar" id="selectedpage_tailer" style="display: block;margin-bottom:12px;">
                <div class="view-title-bar-tool">
                    <div class="selectedpage-page view-page-navigator">
						<span class="current">1</span>
						<a href="#" onclick="">2</a>
						<a href="#" onclick="">3</a>
						<a href="#" onclick="">4</a>
						<a href="#" onclick="">5</a>
						<span class="view-nextpage" style="width:6px;">&nbsp;</span></a>
					</div>
                </div>
            </div>

       
        <div class="clear"></div>
    </div>

    </div>
        <div class="clear">
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-middle">
            <div class="embed">
            </div>
            <div class="links">
                <a href="#">微软亚洲研究院</a> | <a href="#">反馈</a>
                <br>© 2011 Microsoft 版权所有 | <a target="_blank" href="#">联系我们</a>
                | <a target="_blank" href="#">隐私声明</a>
                | <a target="_blank" href="#">商标</a>
				| <a target="_blank" id="statmentLInk" href="#">使用条款</a>
				| <a target="_blank" href="#">京ICP备09042378号</a>
			</div>
        </div>
    </div>
   
    </body></html>