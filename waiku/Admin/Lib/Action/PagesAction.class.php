<?php
class PagesAction extends CommonAction
{
	Public function _empty()
	{ 
		alert('方法不存在!',1);
	}
	
    public function index()
    {
		$Pages = D('Pages');
		$list = $Pages->order('addtime desc')->select();
		
		/*$p->setConfig('prev','上一页');
		$p->setConfig('header','篇文章');
		$p->setConfig('first','首 页');
		$p->setConfig('last','末 页');
		$p->setConfig('next','下一页');
		$p->setConfig('theme',"%first%%upPage%%linkPage%%downPage%%end%
		<li><span><select name='select' onChange='javascript:window.location.href=(this.options[this.selectedIndex].value);'>%allPage%</select></span></li>\n<li><span>共<font color='#009900'><b>%totalRow%</b></font>篇文章 20篇/每页</span></li>");
		$this->assign('page',$p->show());*/
		$this->assign('list',$list);
//		$this->moveop();//文章编辑option
//		$this->jumpop();//快速跳转option
		$this->urlmode();
		$this->display("index");
    }
	
	  public function add()
    {
		$this->addop();//文章编辑option
		$this->jumpop();//快速跳转option
		$this->vote(0);
		$this->display('add');
    }
	
	 public function edit()
    {
		$type = M('Pages');
		$list = $type->where('aid='.$_GET['aid'])->find();
		$this->assign('list',$list);
		$this->editop();//文章编辑option
		$this->jumpop();//快速跳转option
		$this->vote($list['voteid']);
		$this->display();
    }
	
	
	public function doedit()
    {	
		if(empty($_POST['title']))
		{
			alert('标题不能为空!',1);
			
		}
		
		if(isset($_POST['linkurl']))
		{
			$data['linkurl'] = trim($_POST['linkurl']);
		}
		if(isset($_POST['imgurl']))
		{
			$data['imgurl'] = trim($_POST['imgurl']);
		}
		$data['aid'] = $_POST['aid'];
		$data['pagenum'] = $_POST['pagenum'];
		$data['content'] = $_POST['content'];
		$data['title'] = trim($_POST['title']);
		$data['hits'] = trim($_POST['hits']);
		Load('extend'); //加载扩展函数库
		empty($_POST['addtime']) ? $data['addtime'] = date('Y-m-d H:i:s') : $data['addtime'] = trim($_POST['addtime']);
		empty($_POST['author']) ? $data['author'] = '未知' : $data['author'] = trim($_POST['author']);
		empty($_POST['keywords']) ? $data['keywords'] = '' : $data['keywords'] = trim($_POST['keywords']);
		empty($_POST['description']) ? $data['description'] = '' : $data['description'] = trim($_POST['description']);
		empty($_POST['copyfrom']) ? $data['copyfrom'] = '' : $data['copyfrom'] = trim($_POST['copyfrom']);
		empty($_POST['islink']) ? $data['islink'] = '0' : $data['islink'] = trim($_POST['islink']);
		empty($_POST['istop']) ? $data['istop'] = '0' : $data['istop'] = trim($_POST['istop']);
		empty($_POST['isimg']) ? $data['isimg'] = '0' : $data['isimg'] = trim($_POST['isimg']);
		empty($_POST['ishot']) ? $data['ishot'] = '0' : $data['ishot'] = trim($_POST['ishot']);
		empty($_POST['note']) ? $data['note'] = trim(strip_tags(msubstr($_POST['content'],0,130,'utf-8',false))).'...' : $data['note'] = $_POST['note'];
		$Pages = M('Pages');
		if($Pages->save($data))
		{
			alert('操作成功!',U('Pages/index'));
			
		}
		alert('操作失败!',1);
    }
	
	
	public function doadd()
    {
		//验证
		if(empty($_POST['title']))
		{
			alert('标题不能为空!',1);
			
		}
		if(empty($_POST['typeid']))
		{
			alert('请选择栏目!',1);
			
		}
		if(isset($_POST['linkurl']))
		{
			$data['linkurl'] = trim($_POST['linkurl']);
		}
		if(isset($_POST['imgurl']))
		{
			$data['imgurl'] = trim($_POST['imgurl']);
		}
		$data['status'] = 1;
		$data['voteid'] = $_POST['voteid'];
		$data['pagenum'] = $_POST['pagenum'];
		$data['content'] = $_POST['content'];
		$data['title'] = trim($_POST['title']);
		$data['hits'] = trim($_POST['hits']);
		$data['typeid'] = trim($_POST['typeid']);
		Load('extend'); //加载扩展函数库
		empty($_POST['addtime']) ? $data['addtime'] = date('Y-m-d H:i:s') : $data['addtime'] = trim($_POST['addtime']);
		empty($_POST['author']) ? $data['author'] = '未知' : $data['author'] = trim($_POST['author']);
		empty($_POST['keywords']) ? $data['keywords'] = '' : $data['keywords'] = trim($_POST['keywords']);
		empty($_POST['description']) ? $data['description'] = '' : $data['description'] = trim($_POST['description']);
		empty($_POST['copyfrom']) ? $data['copyfrom'] = '' : $data['copyfrom'] = trim($_POST['copyfrom']);
		empty($_POST['islink']) ? $data['islink'] = '0' : $data['islink'] = trim($_POST['islink']);
		empty($_POST['istop']) ? $data['istop'] = '0' : $data['istop']=trim($_POST['istop']);
		empty($_POST['isimg']) ? $data['isimg'] = '0' : $data['isimg']=trim($_POST['isimg']);
		empty($_POST['ishot']) ? $data['ishot'] = '0' : $data['ishot']=trim($_POST['ishot']);
		empty($_POST['note']) ? $data['note'] = trim(strip_tags(msubstr($_POST['content'],0,130,'utf-8',false))) : $data['note']=trim($_POST['note']);
		$article = M('article');
		if($article->data($data)->add())
		{
		 alert('操作成功!',U('Pages/index'));
		 
		}
		alert('操作失败!',1);
	}
		
		
	public function del()
    {
		$article=D('Pages');
		if($article->relation(true)->delete($_GET['aid'])){
		 alert('操作成功!',U('Pages/index'));
		 
		}
		alert('操作失败!',1);
    }
	
	public function status(){
		$a = M('article');
		if($_GET['status'] == 0)
		{
			$a->where( 'aid='.$_GET['aid'] )-> setField( 'status',1);
		}
		elseif($_GET['status'] == 1)
		{
			$a->where( 'aid='.$_GET['aid'] )-> setField( 'status',0);
		}
		else
		{
			alert('非法操作',1);
		}
		$this->redirect('index');
	}


	public function delall()
	{
		$aid = $_REQUEST['aid'];  //获取文章aid
		$aids = implode(',',$aid);//批量获取aid
		$id = is_array($aid) ? $aids : $aid;
		$map['aid'] = array('in',$id);
		if(!$aid)
		{
			alert('请勾选记录!',1);
			
		}
		$article = D('Pages');
		
		if($_REQUEST['Del'] == '更新时间')
		{
			$data['addtime'] = date('Y-m-d H:i:s');
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Pages/index'));
				
			}
		alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '删除')
		{
			foreach($aid as $v)
			{
				$article->relation(true)->delete($v);
			}
			alert('操作成功!',U('Pages/index'));
			
		}
		
		if($_REQUEST['Del'] == '批量未审')
		{
			$data['status'] = 0;
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '批量审核')
		{
			$data['status'] = 1;
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '推荐')
		{
			$data['ishot'] = 1;
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '解除推荐')
		{
			$data['ishot'] = 0;
			if($article->where($map)->save($data)){
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '固顶')
		{
			$data['istop'] = 1;
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '解除固顶')
		{
			$data['istop']=0;
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
		
		if($_REQUEST['Del'] == '移动')
		{
			$data['typeid'] = $_REQUEST['typeid'];
			if($article->where($map)->save($data))
			{
				alert('操作成功!',U('Article/index'));
				
			}
			alert('操作失败!',1);
		}
	}
	
	private function urlmode()
	{
		$config = F('basic','','./Web/Conf/');
		$config['urlmode'] == 0 ? $urlmode = 'index.php/': $urlmode = '';
		switch ($config['suffix'])
		{
			case 0:
				$suffix	= '.html';
				break;
			case 1:
				$suffix = '.htm';
				break;
			case 2:
				$suffix = '.shtml';
				break;
		}
		$this->assign('urlmode',$urlmode);
		$this->assign('suffix',$suffix);
		unset($config);
	}
}
?>