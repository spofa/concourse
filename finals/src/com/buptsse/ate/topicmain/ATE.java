package com.buptsse.ate.topicmain;

import java.io.IOException;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.Map;

import org.apache.log4j.Logger;
import org.apache.log4j.PropertyConfigurator;

import com.buptsse.ate.cBigram.CBigramExtraction;
import com.buptsse.ate.cSingle.CSingleTermExtraction;
import com.buptsse.ate.cTrigram.CTrigramExtraction;
import com.buptsse.ate.utils.Constant;


/**
 * 对训练文本进行分词处理
 * 
 * @author ZhuYan
 * @version 2008/05/21
 */

public class ATE {

	private Logger log = Logger.getLogger(getClass());
	public ATE(){
		
	}
	
	private Map<String, Integer> singleTermMap = null;
	private Map<String, Integer> bigramTermMap = null;
	private Map<String, Integer> trigramTermMap = null;
	
	
	/**
	 * 对训练文本进行分词处理，生成res文件
	 * @param inputPath 训练文本的路径
	 * @param outputPath 训练文本分词后存放res文件的路径
	 * @throws IOException 
	 */
	public void pretreatmentTrain(String inputPath, String outputPath) throws IOException {
		
		// Automatically tag the files, form tag files
//		log.info(inputPath);
		Classifier classifier = new Classifier(inputPath, outputPath, Constant.TRAIN_FLAG);
		classifier.classify();
		
		// get words in the user dictionary
		UserDict userDict = new UserDict();
		HashSet<String> userDictList = userDict.getUserDict();
		String path = Constant.CPATH; // tag文件的目录
	
		/*log.info("userDictList size:" + userDictList.size());
		for(Iterator it = userDictList.iterator(); it.hasNext();){
			log.info(it.next());
		}*/
		// 单词抽取
		CSingleTermExtraction cste = new CSingleTermExtraction(path, userDictList);
		cste.createMap();
	    cste.extract();
	    singleTermMap = cste.getMaps().get(0);
	    /*log.info("========size:" + cste.getMaps().get(0).size());
		for(String key : cste.getMaps().get(0).keySet()){
			log.info(key + "=========" + cste.getMaps().get(0).get(key));
		}*/
		// 双词抽取
		CBigramExtraction cbe = new CBigramExtraction(userDictList, cste);
		cbe.createMaps();
		cbe.extract();
		bigramTermMap = cbe.getMaps().get(0);
		/*log.info("size:" + cbe.getMaps().get(0).size());
		for(String key : cbe.getMaps().get(0).keySet()){
			log.info(key + "=========" + cbe.getMaps().get(0).get(key));
		}*/
		// 三词抽取
		CTrigramExtraction cte = new CTrigramExtraction(userDictList, cste);
		cte.createMaps();
		cte.extract();
		trigramTermMap = cte.getMaps().get(0);
//		log.info("size:" + cte.getMaps().get(0).size());
		/*for(String key : cte.getMaps().get(0).keySet()){
			log.info(key + "=========" + cte.getMaps().get(0).get(key));
		}*/
	}


	public Map<String, Integer> getSingleTermMap() {
		return singleTermMap;
	}


	public void setSingleTermMap(Map<String, Integer> singleTermMap) {
		this.singleTermMap = singleTermMap;
	}


	public Map<String, Integer> getBigramTermMap() {
		return bigramTermMap;
	}


	public void setBigramTermMap(Map<String, Integer> bigramTermMap) {
		this.bigramTermMap = bigramTermMap;
	}


	public Map<String, Integer> getTrigramTermMap() {
		return trigramTermMap;
	}


	public void setTrigramTermMap(Map<String, Integer> trigramTermMap) {
		this.trigramTermMap = trigramTermMap;
	}

}
