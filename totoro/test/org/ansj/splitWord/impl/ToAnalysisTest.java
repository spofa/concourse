package org.ansj.splitWord.impl;

import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.Reader;

import org.ansj.domain.Term;
import org.ansj.library.NatureEnum;
import org.ansj.splitWord.analysis.ToAnalysis;
import org.ansj.util.IOUtil;

public class ToAnalysisTest {
	public static void main(String[] args) throws IOException {
		Reader reader = new InputStreamReader(new FileInputStream("D:/data/text/1139_ceo.txt"), "UTF-8");
		ToAnalysis toAnalysis = new ToAnalysis(reader,true);
		Term next = null;
		long start = System.currentTimeMillis();
		StringBuilder sb =  new StringBuilder() ;
		while ((next = toAnalysis.next()) != null) {
			sb.append(next.getName()+":"+next.maxNature+"/ "+next.getOffe()) ;
			sb.append("\n") ;
			if(next.maxNature==NatureEnum.nr)
			System.out.println(next.getName()+":"+next.getOffe());
		}
		System.out.println(System.currentTimeMillis() - start);
//		IOUtil.Writer("/Users/ansj/Documents/快盘/冒死.txt", "UTF-8", sb.toString()) ;
	}
}
