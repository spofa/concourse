package com.buptsse.wie;

import org.dom4j.Element;
import org.dom4j.Attribute;

/**
 * 网页抽取内容类
 */
public class ExtractionContent {
	private String value;
	private String href;
	
	public String getValue() {
		return value;
	}
	public String getLink(){
		return href;
	}
	
	public void setValue(String value) {
		this.value = value;
	}
	
	public void setLink(String link) {
		this.href = link;
	}
	
	public ExtractionContent(String value, String link) {
		this.value = value;
		this.href = link;
	}
	
	/**
	 * 抽取节点内容的拼接，将一些多属性
	 * 的标签的内容进行内容组合
	 * 
	 * @param node
	 */
	public ExtractionContent(Element node) {
		if (node.getName().equalsIgnoreCase("img")) {
			this.value = "[图片]";
			for (Object obj : node.attributes()) {
				Attribute attr = (Attribute)obj;
				
				if (attr.getName() == "src") {
					this.href = attr.getValue();
				}
			}
		} else if (node.getName().equalsIgnoreCase("a")) {
			this.value = node.getStringValue();
			for (Object obj : node.attributes()) {
				Attribute attr = (Attribute)obj;
				
				if (attr.getName() == "href") {
					this.href = attr.getValue();
				}
			}
		} else {
			this.value = node.getStringValue();
			this.href = null;
		}
	}
}
