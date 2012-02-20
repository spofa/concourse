<?php
$url = $_FANWE['request']['url'];
if(empty($url))
	exit;

$result = array();
require fimport('service/sharegoods');
$url = urldecode($url);

$share_module = new SharegoodsService($url);

$goods_list = $_FANWE['request']['goods'];
if(!is_array($goods_list))
	$goods_list = array();

//检测是否已经采集此商品
if($share_module->getExists($goods_list))
{
	$result['status'] = -1;
	outputJson($result);
}

//一个分享最多能发布多少商品
if(count($goods_list) >= $_FANWE['setting']['share_goods_count'])
{
	$result['status'] = -2;
	outputJson($result);
}

$goods = $share_module->fetch();
if($goods)
{
	$result['status'] = 1;
	$result['info'] = authcode(serialize($goods), 'ENCODE');
	$result['type'] = 'g'; //商品
	$result['img'] = $goods['item']['img'];
	$result['key'] = $goods['item']['key'];
	$result['tags'] = implode(' ',FS('Words')->segment($goods['item']['name'],$_FANWE['setting']['share_tag_count']));
	$args = array('goods'=>$goods,'result'=>$result);
	$result['item'] = tplFetch("services/share/goods_item",$args);
	$result['html'] = tplFetch("services/share/goods_result",$args);
}
else
{
	$result['status'] = 0;
}
outputJson($result);
?>