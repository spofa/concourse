<?php 
class ProductAction extends GlobalAction 
{
	public function index()
	{
		$id=intval($_REQUEST['id']);
		$module=intval($_REQUEST['module']);
		if ($id>0){
			$cate = D('Category')->where('parent_id='.$id)->findAll();
			
			$str = '(';
			foreach ($cate as $value) {
				$str = $str.'category_id='.$value['id'].' or ';
			}
			$str = $str.'1=0)';
		//	dump($str);
		//	$mapc['category_id']=$id;
		}
		
		if ($module>0){
			$str = $str.' and module='.$module;
//			$mapc['module']=$module;
		}
		
		$Product=D("Product");
		$count=$Product->count($str);
		//if($count<=1)$this->error('此类别无产品');
		import("ORG.Util.Page");
		$listRows=9;
		$p=new page($count,$listRows);
		
//		$list = $Product->where('status=1')->order('id desc')->limit($p->firstRow.','.$p->listRows)->select();
		$list = $Product->findAll($str,'*','id desc',$p->firstRow.','.$p->listRows);
		//$list=$p->order('pid desc')->limit("$p->firstRow.','.$p->listRows")->findAll();
		$page = $p->show();
		/**/
		//分类
		//分类
		$map['module']=1;//分类
		$map['parent_id']=0;
		$Category=D('Category')->relation(true)->order("displayorder desc")->where($map)->findall();
		
		$this->assign('listCate', $Category);
//		dump($list);
//		dump($Category);
		$this->assign('titler','产品中心');
		$this->assign('module',$module);
//		$this->assign('category',$Category);
//		$this->assign('Product',$Product);
		$this->assign('count',$count);
		$this->assign('page',$page);
		$this->assign('list', $list);
		$this->display();
	}
	
	
	public function search()
	{
		$keyword=$_POST['keyword'];
		$id=intval($_REQUEST['id']);
		$module=intval($_REQUEST['module']);
		if ($id>0){
			$mapc['category_id']=$id;
		}
		
		if ($module>0){
			$mapc['module']=$module;
		}
//		dump($keyword);
		$Product=D("Product");
		$count=$Product->count($mapc);
		//if($count<=1)$this->error('此类别无产品');
		import("ORG.Util.Page");
		$listRows=16;
		$p=new page($count,$listRows);
		$list=$Product->findAll($mapc,'*','id desc',$p->firstRow.','.$p->listRows);
		//$list=$p->order('pid desc')->limit("$p->firstRow.','.$p->listRows")->findAll();
		$page = $p->show();	
		/**/
		//分类
		$map['module']=1;//分类
		$map['parent_id']=0;
		$Category=D('Category')->relation(true)->order("displayorder desc")->where($map)->findall();
		
		$this->assign('listCate', $Category);
		
		$this->assign('titler','产品中心');
		$this->assign('module',$module);
//		$this->assign('cate',$Category);
		$this->assign('Product',$Product);
		$this->assign('count',$count);
		$this->assign('page',$page);
		$this->assign('list', $list);
		$this->display("Product:index");
	}
	
	public function read(){
		
		$id=intval($_REQUEST['id']);
		$Product=D("Product");
		$list=$Product->find($id);
//		dump($list);
		if (!$list) {
			$this->error("产品不存在");
		}
		//分类
		$Product->setINC('hits','id='.$id);
		
		$map['module']=1;//分类
		$map['parent_id']=0;
		$Category=D('Category')->relation(true)->order("displayorder desc")->where($map)->findall();
//		dump($Category);
		$this->assign('listCate', $Category);
		$this->assign('product',$list);
		$this->display();
		
	}

}
?>