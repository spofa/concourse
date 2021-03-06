package edu.bupt.spring.entity;

import java.util.HashSet;
import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.JoinColumn;
import javax.persistence.JoinTable;
import javax.persistence.ManyToMany;
import javax.persistence.OrderBy;
import javax.persistence.Table;

import org.hibernate.annotations.Cache;
import org.hibernate.annotations.CacheConcurrencyStrategy;

/**
 * 标签
 * @author  linzhe
 * @Date    2012-5-23
 * @email   m23linzhe@gmail.com
 * @qq      398024808
 * @version 1.0
 *
 */
@Entity
@Table(name = "share_tag")
@Cache(usage = CacheConcurrencyStrategy.READ_WRITE)
public class Tag extends BaseEntity {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

    private String name;
    private Set<Product> products = new HashSet<Product>();
    
	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	@ManyToMany(cascade = {CascadeType.PERSIST, CascadeType.MERGE})
    @JoinTable(name = "share_product_tag", joinColumns = { @JoinColumn(name ="product_id" )}, inverseJoinColumns = { @JoinColumn(name = "tag_id") })
    @OrderBy("id")
	public Set<Product> getProducts() {
		return products;
	}

	public void setProducts(Set<Product> products) {
		this.products = products;
	}
	
}
