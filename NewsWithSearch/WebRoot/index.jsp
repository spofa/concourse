<%@ page language="java"  pageEncoding="utf-8"%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  
  <head>
    <title>实体搜索</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
  </head>
  
  <body>
   		 <div id="mainlink">
				<span><a href="index.jsp">实体搜索引擎</a></span><br /><br />
				<a href="newsAction.action?category=china" >国内</a> | <a href="newsAction.action?category=world" >国际</a> | <a href="newsAction.action?category=society" >社会</a> | <a href="newsAction.action?category=compatriot" >港澳</a> | <a href="newsAction.action?category=taiwan" >台湾</a> | <a href="newsAction.action?category=huaren" >华人</a> | <a href="newsAction.action?category=economic" >经济</a> | <a href="newsAction.action?category=wenhua" >文化</a> | <a href="newsAction.action?category=entertainment" >娱乐</a> | <a href="newsAction.action?category=sports" >体育</a> | <a href="newsAction.action?category=jiaoyu" >教育</a> | <a href="newsAction.action?category=jiankang" >健康</a> | <a href="newsAction.action?category=life" >生活</a> | <a href="newsAction.action?category=keji" >IT</a><br />
				<form action="searchAction.action" method="post" >
					实体搜索：
					<input type="text" name="searchParam" style="height:20px"/>
					<select name="searchWhich">
						<option value="title"/>标题
						<option value="content"/>内容
					</select>
					<input type="submit" value="搜索" style="height:23px"/>
				</form>
				三大类（实体类、时间类和数字类）
				七小类（人名、机构名、地名、时间、日期、货币和百分比）		 
   		 </div>
  </body>
</html>
