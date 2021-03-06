package edu.bupt.spring.web.controller;

import java.util.Date;
import java.util.List;

import javax.servlet.http.HttpServletRequest;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import edu.bupt.spring.entity.Admin;
import edu.bupt.spring.service.AdminService;

/**
 * 
 * @author linzhe
 * @date   2012-5-17
 * @email  m23linzhe@gmail.com
 */
@Controller("adminController")
public class AdminController {
    
	private static final Logger logger = LoggerFactory.getLogger(AdminController.class);
	
	@Autowired
    @Qualifier("adminServiceImpl")
	private AdminService adminService;
	
	@RequestMapping(value = "/admin/list")
    public String list(HttpServletRequest request){
    	List<Admin> list = adminService.findAll();
    	request.setAttribute("list", list);
        return "admin/list";
    }
    
    @RequestMapping(value = "/admin/add")
    public String add(Model model){
        
    	return "admin/add";
    }
    
    @RequestMapping(value = "/admin/save", method = {RequestMethod.POST})
    public String save(@ModelAttribute("admin") Admin admin, HttpServletRequest request) {
        
        admin.setCreateDate(new Date());
        admin.setLoginDate(new Date());
        String loginIp = request.getRemoteAddr();
        admin.setLoginIp(loginIp);
        
        adminService.save(admin);
        return "redirect:/admin/list";
    }
    
    @RequestMapping(value = "/admin/edit/{id}", method = {RequestMethod.GET})
    public String edit(@PathVariable Integer id, HttpServletRequest request) {
        
    	Admin admin = adminService.find(id);
    	logger.info(admin.toString());
        request.setAttribute("entity", admin);
        return "admin/edit";
    }
    
    @RequestMapping(value = "/admin/update", method = {RequestMethod.POST})
    public String update(@ModelAttribute("admin") Admin admin, HttpServletRequest request) {
        
    	Admin admin1 = adminService.find(admin.getId());
    	
    	logger.info(admin1.toString());
    	
    	admin1.setCreateDate(admin.getCreateDate());
    	admin1.setLoginDate(admin.getLoginDate());
    	admin1.setLoginIp(admin.getLoginIp());
    	
    	adminService.update(admin1);
        return "redirect:/admin/list";
    }
    
    
}
