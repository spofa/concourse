package com.buptsse.ate.utils;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;


public class SeperateWords {
	
	public static void main(String[] args) {
		
		String[] files = FileHelp.getFiles("D:/panguso/hudong");
		System.out.println(files.length);
		for(String name : files){
			System.out.println(name);
			File file = new File(name);
			
			
			try{
				BufferedReader input=new BufferedReader(new FileReader(file)); 
				String text;
				while((text=input.readLine())!=null){
//					System.out.println(text);
					String[] words = text.split("��");
					System.out.println(words.length);
					String content = "";
					String preurl = "http://www.hudong.com/wiki/";
					for(String word : words){
						content += preurl + word + System.getProperty("line.separator");
					}
					FileHelp.writeFile(name + ".txt", content);
				}
				
				
			}catch(Exception ex) {
				ex.printStackTrace();
			}
			
			
		}
	}
}

