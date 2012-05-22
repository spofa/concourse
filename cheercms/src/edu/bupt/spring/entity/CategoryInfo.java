package edu.bupt.spring.entity;

import java.util.HashSet;
import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.OneToMany;
import javax.persistence.Table;

@Entity
@Table(name="tbl_Categoryinfo")
public class CategoryInfo {
	
	private int id;
	private String name;
	private int orderList;
	private String status;
	/** 子类别 **/
	private Set<CategoryInfo> children = new HashSet<CategoryInfo>();
	/** 所属父类 **/
	private CategoryInfo parent;
	
	@Id
	@GeneratedValue
	@Column(name="id",unique = true)
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	
	@Column(name="name")
	public String getName() {
		return name;
	}
	
	public void setName(String name) {
		this.name = name;
	}
	
	@ManyToOne(cascade=CascadeType.ALL,fetch=FetchType.EAGER)
	@JoinColumn(name="parentid")
	public CategoryInfo getParent() {
		return parent;
	}

	public void setParent(CategoryInfo parent) {
		this.parent = parent;
	}
	@OneToMany(cascade=CascadeType.ALL,fetch=FetchType.LAZY,mappedBy="parent")
	public Set<CategoryInfo> getChildren() {
		return children;
	}

	public void setChildren(Set<CategoryInfo> children) {
		this.children = children;
	}
	
	public int getOrderList() {
		return orderList;
	}
	public void setOrderList(int orderList) {
		this.orderList = orderList;
	}
	
	@Column(name="status")
	public String getStatus() {
		return status;
	}
	public void setStatus(String status) {
		this.status = status;
	}
	
}
