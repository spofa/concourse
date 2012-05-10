package com.buptsse.ate.module;


public class Reinforce {
	
	private int index;
	private String url;
	private String text;
	
	public Reinforce(int index, String url, String text){
		
		this.index = index;
		this.url = url;
		this.text = text;
	}
	
	public int getIndex() {
		return index;
	}
	
	public void setIndex(int index) {
		this.index = index;
	}
	public String getUrl() {
		return url;
	}
	public void setUrl(String url) {
		this.url = url;
	}
	public String getText() {
		return text;
	}
	public void setText(String text) {
		this.text = text;
	}

	@Override
	public String toString() {
		
		int beginIndex = url.lastIndexOf("/")+1;
		int endIndex = url.lastIndexOf(".");
		
		if(beginIndex > 0 && endIndex > 0){
			String id = this.url.substring(beginIndex, endIndex);
			if(!id.equals("baike_help")){
				return "("+ this.getText()+","+ this.index+","+ id +")";
			}else {
				return "";
			}
		}
		return "";
	}
	
}

