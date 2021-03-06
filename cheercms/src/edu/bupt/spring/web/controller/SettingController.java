package edu.bupt.spring.web.controller;

import javax.servlet.http.HttpServletRequest;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

import edu.bupt.spring.config.SystemConfig;
import edu.bupt.spring.utils.SystemConfigUtil;



/**
 * 
 * @author  linzhe
 * @Date    2012-5-26
 * @email   m23linzhe@gmail.com
 * @qq      398024808
 * @version 1.0
 *
 */

@Controller("settingController")
public class SettingController extends BaseController {
    
//	@Autowired
//    @Qualifier("UserService")
//    private UserService userService;
	
    @RequestMapping(value = "/setting/edit")
    public String edit(HttpServletRequest request){
    	
    	SystemConfig systemConfig = SystemConfigUtil.getSystemConfig();
    	
    	System.out.println(systemConfig.getAddress());
        return "setting/edit";
    }
    
    
    
}
