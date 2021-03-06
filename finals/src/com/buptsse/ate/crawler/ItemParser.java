package com.buptsse.ate.crawler;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import org.apache.log4j.Logger;
import org.apache.log4j.PropertyConfigurator;
import org.dom4j.Document;
import org.dom4j.DocumentHelper;
import org.dom4j.Element;
import org.dom4j.io.OutputFormat;
import org.dom4j.io.XMLWriter;
import org.jsoup.Jsoup;

import com.buptsse.ate.utils.Constant;
import com.buptsse.ate.utils.FileHelp;
import com.buptsse.ate.utils.XmlHelp;

public class ItemParser {

	private static Logger logger = Logger.getLogger(ItemParser.class);
	private NewsItem newsItem = new NewsItem();
	protected org.jsoup.nodes.Document doc;
	
	public ItemParser() {
		
	}

	
	public ItemParser(String url) {
		
		try {
			this.doc = Jsoup.connect(url)
					.userAgent("Mozilla/5.0 (Windows NT 6.1; rv:5.0)")
					.cookie("auth", "token").timeout(1000).get();
			this.newsItem.setUrl(url);
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	public ItemParser(File file, String charset) {
		
		
		try {
			this.doc = Jsoup.parse(file, charset);
			this.newsItem.setUrl(file.getAbsolutePath());
		} catch (IOException e) {
			e.printStackTrace();
		}
	}
	
	public void fetch(){
		
	}
	
	public void saveFile(String filePath, boolean overwrite){
		
		File dir = new File(filePath.substring(0, filePath.lastIndexOf("/")));
		File file = new File(filePath);
		
		if(!dir.exists()){
			dir.mkdirs();
		}
		
		if(file.exists() && overwrite == false){
			System.out.println("网页已存在！");
			return;
		}
		
		if(this.newsItem.getTitle().equals("") || this.newsItem.getSummary().equals("")){
			
			System.out.println(this.newsItem.getUrl() +"网页不存在！");
			return;
		}
		
		XMLWriter out;
		OutputFormat outputFormat = OutputFormat.createPrettyPrint();
		outputFormat.setEncoding("UTF-8");
		
		try {
			out = new XMLWriter(new FileWriter(filePath), outputFormat);
			out.startDocument();
//			out.write(Namespace.CDATA_SECTION_NODE);
			
			Element rootElement = DocumentHelper.createElement("datas");
			Element titleElement = rootElement.addElement("title");
			Element keywordElement = rootElement.addElement("keyword");
			Element descriptionElement = rootElement.addElement("description");
			Element sourceElement = rootElement.addElement("source");
			Element authorElement = rootElement.addElement("author");
			Element publishedElement = rootElement.addElement("published");
			Element urlElement = rootElement.addElement("url");
			Element updateTimeElement = rootElement.addElement("updateTime");
			Element summaryElement = rootElement.addElement("summary");
			Element tagsElement = rootElement.addElement("tags");
			Element relationsElement = rootElement.addElement("relations");
			Element entitiesElement = rootElement.addElement("entities");
			
			titleElement.addText(this.newsItem.getTitle());
//			keywordElement.addText(this.newsItem.getKeyword());
//			descriptionElement.addText(this.newsItem.getDescription());
//			sourceElement.addText(this.newsItem.getSource());
			authorElement.addText(this.newsItem.getAuthor()+"");
			urlElement.addText(this.newsItem.getUrl());
			updateTimeElement.addText(System.currentTimeMillis()+"");
			summaryElement.addCDATA(this.newsItem.getSummary());
			
			if(this.newsItem.getTagList() != null){
				for(Tag tag : this.newsItem.getTagList()){
					Element tagElement = tagsElement.addElement("tag");
					tagElement.addText(tag.getTag());
					tagElement.addAttribute("url", tag.getLink());
				}
			}
			
			/*for(Relation relation : this.newsItem.getRelationList()){
				Element relationElement = relationsElement.addElement("relation");
				relationElement.addText(relation.getTitle());
				relationElement.addAttribute("url", relation.getLink());
			}*/
			
			/*for(Entity entity : this.newsItem.getEntityList()){
				Element entityElement = entitiesElement.addElement("entity");
				entityElement.addText(entity.getName());
				entityElement.addAttribute("weight", entity.getWeight()+"");
			}*/
			
			publishedElement.addText(this.newsItem.getPublished());
			
			out.writeOpen(rootElement);
			out.write(titleElement);
			out.write(sourceElement);
			out.write(keywordElement);
			out.write(descriptionElement);
			out.write(authorElement);
			out.write(publishedElement);
			out.write(updateTimeElement);
			out.write(urlElement);
			out.write(summaryElement);
			out.write(tagsElement);
			out.write(relationsElement);
			out.write(entitiesElement);
			
			out.writeClose(rootElement);
			
			out.endDocument();
			out.close();
		}catch(Exception e){
			e.printStackTrace();
		}
	}
	
	public NewsItem parse(String fileName) throws Exception{
		
		Document doc = XmlHelp.getDocument(fileName);
		Element root = doc.getRootElement();
		
		Element datas = (Element) root.selectSingleNode("//datas");
		String title = datas.element("title").getStringValue();
		String published = datas.element("published").getStringValue();
		String summary = datas.element("summary").getStringValue();
		
		List<Tag> tagList = new ArrayList<Tag>();
		List<Element> tags = datas.selectNodes("tags");
		
		for(Element element : tags){
			tagList.add(new Tag(element.attributeValue("url"), element.getStringValue()));
		}
		
		newsItem.setTitle(title);
		newsItem.setPublished(published);
		newsItem.setSummary(summary);
		newsItem.setTagList(tagList);
		return newsItem;
	}

	public org.jsoup.nodes.Document getDoc() {
		return doc;
	}

	public void setDoc(org.jsoup.nodes.Document doc) {
		this.doc = doc;
	}
	
	
	@Override
	public String toString() {
		String str = this.newsItem.title;
		return str;
	}
	
	public NewsItem getNewsItem() {
		
		return newsItem;
	}

	public void setNewsItem(NewsItem newsItem) {
		
		this.newsItem = newsItem;
	}

	public static void main(String[] args){
		
		String filePath = "D:/data/sina/xml";
		String savePath = "D:/data/sina/txt";
		
		List<String> filelist = new ArrayList<String>();
		FileHelp.refreshFileList(filePath, filelist, ".xml");
		ItemParser parser = new ItemParser();
		
		String saveFileName = "";
		
		for(String fileName : filelist){
	//		String url = "http://www.36kr.com/p/97503.html";
			try{
				NewsItem newsItem = parser.parse(fileName);
				String title = newsItem.getTitle();
				String time = newsItem.getPublished();
//				String content = newsItem.getSummary();
				
				saveFileName = savePath + "/" + time.substring(0, 11) + "_" + title.replace("/", "_") + ".txt";
//				logger.info(saveFileName);
				
				FileHelp.writeFile(saveFileName, newsItem.getSummary());
//				break;
			}catch(Exception e){
				logger.info("文件名:" + saveFileName);
				continue;
			}
		}
	}
}
