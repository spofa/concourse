package org.ansj.splitWord.impl;

import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.Reader;

import org.ansj.domain.Term;
import org.ansj.splitWord.analysis.FilterAnalysis;
import org.ansj.splitWord.analysis.UserDefinedAnalysis;

public class FilterAnalysisText {
	public static void main(String[] args) throws IOException {
		Reader reader = new InputStreamReader(new FileInputStream("D:/data/text/1139_ceo.txt"), "UTF-8");
		FilterAnalysis toAnalysis = new FilterAnalysis(new UserDefinedAnalysis(reader, true));
		Term next = null;
		long start = System.currentTimeMillis();
		StringBuilder sb = new StringBuilder();
		int i = 0 ;
		while ((next = toAnalysis.next()) != null) {
			i++ ;
			System.out.println(next.getName() + ":" + next.maxNature);
//			sb.append(next.getName() + ":" + next.maxNature);
//			sb.append("\n");
		}
		System.out.println(i);
		System.out.println(System.currentTimeMillis() - start);
//		IOUtil.Writer("/Users/ansj/Documents/快盘/冒死.txt", "UTF-8", sb.toString());

	}
}
