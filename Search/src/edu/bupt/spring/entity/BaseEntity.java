package edu.bupt.spring.entity;

import java.io.Serializable;
import java.util.Date;

import javax.persistence.Column;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.MappedSuperclass;

/**
 * 实体类 基类
 * @author  linzhe
 * @Date    2012-5-27
 * @email   m23linzhe@gmail.com
 * @qq      398024808
 * @version 1.0
 *
 */


@MappedSuperclass
public class BaseEntity implements Serializable {

	private static final long serialVersionUID = -6718838800112233445L;

	private int id;// ID
	private Date createDate;// 创建日期
	private Date modifyDate;// 修改日期

//	@SearchableId
	@Id
	@GeneratedValue
	@Column(name="id",unique = true)
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

//	@SearchableProperty(store = Store.YES)
	@Column(updatable = false)
	public Date getCreateDate() {
		return createDate;
	}

	public void setCreateDate(Date createDate) {
		this.createDate = createDate;
	}

//	@SearchableProperty(store = Store.YES)
	public Date getModifyDate() {
		return modifyDate;
	}

	public void setModifyDate(Date modifyDate) {
		this.modifyDate = modifyDate;
	}

	/*@Override
	public int hashCode() {
		return id == null ? System.identityHashCode(this) : id.hashCode();
	}*/

	/*@Override
	public boolean equals(Object obj) {
		if (this == obj) {
			return true;
		}
		if (obj == null) {
			return false;
		}
		if (getClass().getPackage() != obj.getClass().getPackage()) {
			return false;
		}
		final BaseEntity other = (BaseEntity) obj;
		if (id == null) {
			if (other.getId() != null) {
				return false;
			}
		} else if (!id.equals(other.getId())) {
			return false;
		}
		return true;
	}*/

}