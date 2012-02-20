<?php
class BookModule
{
	public function cate()
	{
		global $_FANWE;
		$category = urldecode($_FANWE['request']['cate']);
		if(!isset($_FANWE['cache']['goods_category']['cate_code'][$category]))
			fHeader('location: '.FU('book/shopping'));

		BookModule::getList();
	}

	public function shopping()
	{
		BookModule::getList();
	}

	public function search()
	{
		BookModule::getList();
	}

	private function getList()
	{
		global $_FANWE;

		$category = urldecode($_FANWE['request']['cate']);
		$is_root = false;
		$page_args = array();
		if(isset($_FANWE['cache']['goods_category']['cate_code'][$category]))
		{
			$page_args['cate'] = $_FANWE['request']['cate'];
			$cate_id = $_FANWE['cache']['goods_category']['cate_code'][$category];
			$goods_cate_code = $category;
		}
		else
		{
			$is_root = true;
			$cate_id = $_FANWE['cache']['goods_category']['root'];
		}

		$sort = $_FANWE['request']['sort'];
		$sort = !empty($sort) ? $sort : "pop";

		$category_data = $_FANWE['cache']['goods_category']['all'][$cate_id];
		$category_tags = array();

		$_FANWE['nav_title'] = $category_data['cate_name'];

		$child_ids = array();
		if(isset($category_data['child']))
		{
			$child_ids = $category_data['child'];
			$tagurlpara['cate'] = urlencode($category_data['cate_code']);
			foreach($category_data['child'] as $child_id)
			{
				$child_cate = $_FANWE['cache']['goods_category']['all'][$child_id];
				$tag_key = 'goods_category_tags_'.$child_id;
				FanweService::instance()->cache->loadCache($tag_key);
				foreach($_FANWE['cache'][$tag_key] as $k => $tag)
				{
					$tagurlpara['tag'] = urlencode($tag['tag_name']);
					$tag['url'] = FU("book/".ACTION_NAME,$tagurlpara);
					$child_cate['tags'][] = $tag;
					if($k > 16)
						break;
				}
				$category_tags[] = $child_cate;
			}
		}

		$hot_tags = array();
		if(!$is_root)
		{
			$child_ids[] = $cate_id;
			require fimport("function/share");
			$hot_tags  = getHotTags($child_ids,$category,10);
		}

		$condition = " WHERE s.share_data IN ('goods','photo','goods_photo')";
		if(!$is_root)
		{
			$cids = array();
			FS('Share')->getChildCids($cate_id,$cids);
			$condition .= " AND sc.cate_id IN (".implode(',',$cids).")";
		}

		$title = $category_data['short_name'];
		$is_match = false;
		$tag = urldecode($_FANWE['request']['tag']);
		if(!empty($tag))
		{
            $_FANWE['nav_title'] = $tag .' - '. $_FANWE['nav_title'];
			$title = $tag;
			$is_match = true;
			//$match_key = FS('Words')->segment($tag,10);
			//$match_key = tagToUnicode($match_key,'+');
			$match_key = segmentToUnicode($tag,'+');
			$condition.=" AND match(sm.content_match) against('".$match_key."' IN BOOLEAN MODE) ";
			$page_args['tag'] = urlencode($tag);
		}

		//输出排序URL
		$sort_page_args = $page_args;
		$sort_page_args['sort'] = 'hot7';

		$hot7_url['url'] = FU('book/'.ACTION_NAME,$sort_page_args);
		if($sort=='hot7')
			$hot7_url['act'] = 1;

		$sort_page_args['sort'] = 'hot30';
		$hot30_url['url'] = FU('book/'.ACTION_NAME,$sort_page_args);
		if($sort=='hot30')
			$hot30_url['act'] = 1;

		$sort_page_args['sort'] = 'new';
		$new_url['url'] = FU('book/'.ACTION_NAME,$sort_page_args);
		if($sort=='new')
			$new_url['act'] = 1;

		$sort_page_args['sort'] = 'pop';
		$pop_url['url'] = FU('book/'.ACTION_NAME,$sort_page_args);
		if($sort=='pop')
			$pop_url['act'] = 1;

		if(!empty($_FANWE['request']['sort']))
			$page_args['sort'] = $sort;
		else
			$page_args['sort'] = 'pop';

		$today_time = getTodayTime();
		switch($sort)
		{
			//7天最热 点击次数
			case 'hot7':
				$day7_time = $today_time - 604800;
				$field = ",(s.create_time > $day7_time) AS time_sort ";
				$sort = " ORDER BY time_sort DESC,s.click_count DESC";
			break;
			//30天最热 点击次数
			case 'hot30':
				$day30_time = $today_time - 2592000;
				$field = ",(s.create_time > $day30_time) AS time_sort ";
				$sort = " ORDER BY time_sort DESC,s.click_count DESC";
			break;
			//最新
			case 'new':
				$field = '';
				$sort = " ORDER BY s.share_id DESC";
			break;
			//潮流  喜欢人数
			case 'pop':
			default:
				$day7_time = $today_time - 604800;
				$field = ",(s.create_time > $day7_time) AS time_sort ";
				$sort = " ORDER BY time_sort DESC,s.collect_count DESC";
			break;
		}

		$sql = 'SELECT DISTINCT(s.share_id),s.share_data,s.content,s.uid,s.collect_count,s.click_count,s.comment_count,s.create_time'.$field.'
				FROM '.FDB::table('share').' AS s ';

		if(!$is_root)
			$sql .= 'INNER JOIN '.FDB::table('share_category').' AS sc ON s.share_id = sc.share_id ';

		if($is_match)
			$sql .= 'INNER JOIN '.FDB::table('share_match').' AS sm ON sm.share_id = s.share_id ';

		$sql .= $condition.$sort;

		$sql_count = 'SELECT COUNT(DISTINCT s.share_id)
			FROM '.FDB::table('share').' AS s ';

		if(!$is_root)
			$sql_count .= 'INNER JOIN '.FDB::table('share_category').' AS sc ON s.share_id = sc.share_id ';

		if($is_match)
			$sql_count .= 'INNER JOIN '.FDB::table('share_match').' AS sm ON sm.share_id = s.share_id ';

		$sql_count .= $condition;

		$page_size = 50;
		$max_page = 100;
		$count = FDB::resultFirst($sql_count);
		if($count > $max_page * $page_size)
			$count = $max_page * $page_size;

		if($_FANWE['page'] > $max_page)
			$_FANWE['page'] = $max_page;

		$pager = buildPage('book/'.ACTION_NAME,$page_args,$count,$_FANWE['page'],$page_size,'',3);

		$share_datas = array();
		$sql  = $sql.' LIMIT '.$pager['limit'];

		$res = FDB::query($sql);
		while($data = FDB::fetch($res))
		{
			$data['time'] = getBeforeTimelag($data['create_time']);
			$data['url'] = FU('note/index',array('sid'=>$data['share_id']));
			$data['user'] = FS('User')->getUserCache($data['uid']);
			$data['is_follow_user'] = FS('User')->getIsFollowUId($data['uid']);
			$share_datas[$data['share_data']][] = $data['share_id'];
			$share_list[$data['share_id']] = $data;
		}

		FS('Share')->getShareImages($share_datas,$share_list,0,true);

		$col = 4;
		$index = 0;
		$share_display = array();
		foreach($share_list as $share)
		{
			$mod = $index % $col;
			$share_display['col'.$mod][] = $share;
			$index++;
		}

		include template('page/book/book_index');
		display();
	}
}
?>