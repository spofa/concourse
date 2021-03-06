<?php
class CommonAction extends Action
{
	function _initialize() 
	{
		//先检查cookie
		if(!Cookie::is_set('waikucms'))
		{
			redirect (PHP_FILE .C('USER_AUTH_GATEWAY'));
		}
		else
		{
			//保存cookie信息
			Cookie::set('waikucms','1',60*60*3);
		}
		
		// 用户权限检查
		if (C('USER_AUTH_ON') && !in_array(MODULE_NAME,explode(',',C('NOT_AUTH_MODULE')))) 
		{
			import ('ORG.Util.RBAC');
			if (!RBAC::AccessDecision()) 
			{
				//检查认证识别号
				if (! $_SESSION [C('USER_AUTH_KEY')]) 
				{
					//跳转到认证网关
					redirect (PHP_FILE .C('USER_AUTH_GATEWAY'));
				}
				// 没有权限 抛出错误
				if (C('RBAC_ERROR_PAGE')) 
				{
					// 定义权限错误页面
					redirect (C('RBAC_ERROR_PAGE') );
				}
				else
				{
					if (C('GUEST_AUTH_ON')) 
					{
						$this->assign ( 'jumpUrl', PHP_FILE .C('USER_AUTH_GATEWAY') );
					}
					// 提示错误信息
					$this->error (L('_VALID_ACCESS_'));
				}
			}
		}
	}
}
?>