package edu.bupt.spring.service.impl;

import java.util.List;

import javax.persistence.Query;

import org.springframework.stereotype.Service;

import edu.bupt.spring.base.DaoSupport;
import edu.bupt.spring.entity.Category;
import edu.bupt.spring.service.CategoryInfoService;

@Service
public class CategoryInfoServiceImpl extends DaoSupport<Category> implements CategoryInfoService {

	public List<Category> findAll() {
		Query query = em.createQuery("select o from CategoryInfo o ");
		return query.getResultList();
	}

	public List<Category> findFirdLevel() {
		Query query = em.createQuery("select o from CategoryInfo o where o.parent is null");
		return query.getResultList();
	}

	

}
