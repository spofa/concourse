package edu.bupt.utils;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.FilenameFilter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.nio.ByteBuffer;
import java.nio.channels.FileChannel;
import java.util.ArrayList;
import java.util.Date;
import java.util.LinkedList;
import java.util.List;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class FileUtils {

	public static String TEMPDIR = System.getProperty("java.io.tmpdir") + "buptsseTemp/";
	
	public static String[] getFiles(String directory) {
		File file = new File(directory);
		String[] files = file.list(new FilenameFilter() {
			public boolean accept(File dir, String name) {
				File file = new File(dir, name);
				if(name != null){
					return file.isFile();
				}else {
					return false;
				}
			}
		});

		if (files != null) {
			for (int i = 0; i < files.length; i++) {
				files[i] = directory + "/" + files[i];
			}
		}
		return files;
	}

	public static List<String> getSuperFile(String directory) {
        
		List<String> fileNames = new ArrayList<String>();
        long a = System.currentTimeMillis();
        
        LinkedList list = new LinkedList();
        File dir = new File(directory);
        File file[] = dir.listFiles();
        for (int i = 0; i < file.length; i++) {
            if (file[i].isDirectory())
                list.add(file[i]);
            else
            	fileNames.add(file[i].getAbsolutePath());
        }
        File tmp;
        while (!list.isEmpty()) {
            tmp = (File) list.removeFirst();
            if (tmp.isDirectory()) {
                file = tmp.listFiles();
                if (file == null)
                    continue;
                for (int i = 0; i < file.length; i++) {
                    if (file[i].isDirectory())
                        list.add(file[i]);
                    else
                    	fileNames.add(file[i].getAbsolutePath());
                }
            } else {
            	fileNames.add(tmp.getAbsolutePath());
            }
        }
        
//        System.out.println(fileNames.size());
//        System.out.println(System.currentTimeMillis() - a);
        return fileNames;
    }
	
	public static void fetchFileList(String strPath, List<String> filelist, final String regex) { 
        
		File dir = new File(strPath); 
        File[] files = dir.listFiles(); 
        
        Pattern p = Pattern.compile(regex);
        
        if (files == null) 
            return; 
        for (int i = 0; i < files.length; i++) { 
            if (files[i].isDirectory()) { 
                fetchFileList(files[i].getAbsolutePath(), filelist, regex); 
            } else { 
                String strFileName = files[i].getAbsolutePath().toLowerCase();
                Matcher m = p.matcher(strFileName);
                if(m.find()){
                	filelist.add(strFileName);
//                	System.out.println(strFileName);
                }
            } 
        } 
    }
	public static String[] getFiles(String directory, final String suffix) {
		File file = new File(directory);
		String[] files = file.list(new FilenameFilter() {
			public boolean accept(File dir, String name) {
				if (name.endsWith(suffix)) {
					return true;
				} else {
					return false;
				}
			}
		});

		if (files != null) {
			for (int i = 0; i < files.length; i++) {
				files[i] = directory + "/" + files[i];
			}
		}
		return files;
	}

	public static List<String> readTxtByLine(String input, int min, int max){
		
		List<String> strList = new ArrayList<String>();
		try {
			InputStreamReader  read = new InputStreamReader (new FileInputStream(input),"utf-8");
			BufferedReader lbin = new BufferedReader(read);
			String str = lbin.readLine();
			while(str != null){
				if(str.length() > min && str.length() < max){
					strList.add(str);
				}
				str = lbin.readLine();
			}
			lbin.close();
		} catch (IOException e) {
			e.printStackTrace();
			return null;
		}
		return strList;
	}
	public static void copyDirectory(String srcDirStr, String dstDirStr) {
		File srcDir = new File(srcDirStr);
		File dstDir = new File(dstDirStr);
		if (srcDir.canRead()) {
			copyDirectory(srcDir, dstDir);
		} else {
			System.out.println("Can't copy directory!");
		}
	}

	public static void copyDirectory(File srcDir, File dstDir) {
		if (srcDir.isDirectory()) {
			if (!dstDir.exists()) {
				dstDir.mkdir();
			}
			String[] children = srcDir.list();
			for (int i = 0; i < children.length; i++) {
				copyDirectory(new File(srcDir, children[i]), new File(dstDir,
						children[i]));
			}
		} else {
			copyFile(srcDir, dstDir);
		}
	}

	public static long forChannel(File f1,File f2) throws Exception{
        
		long time=new Date().getTime();
        int length=2097152;
        FileInputStream in=new FileInputStream(f1);
        FileOutputStream out=new FileOutputStream(f2);
        FileChannel inC=in.getChannel();
        FileChannel outC=out.getChannel();
        ByteBuffer b=null;
        while(true){
            if(inC.position()==inC.size()){
                inC.close();
                outC.close();
                return new Date().getTime()-time;
            }
            if((inC.size()-inC.position())<length){
                length=(int)(inC.size()-inC.position());
            }else
                length=2097152;
            b=ByteBuffer.allocateDirect(length);
            inC.read(b);
            b.flip();
            outC.write(b);
            outC.force(false);
        }
    }
	
	public static void copyFile(File src, File dst) {
		InputStream in;
		try {
			in = new FileInputStream(src);
			OutputStream out = new FileOutputStream(dst);
			byte[] buf = new byte[1024];
			int len;
			while ((len = in.read(buf)) > 0) {

				out.write(buf, 0, len);

			}
			in.close();
			out.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	
	public static void deleteFiles(String directory, final String fileType) {
		File file = new File(directory);
		File[] files = file.listFiles(new FilenameFilter() {
			public boolean accept(File dir, String name) {
				if (name.endsWith(fileType)) {
					return true;
				} else {
					return false;
				}
			}
		});
		for (int i = 0; i < files.length; i++) {
			files[i].deleteOnExit();
		}
	}

	public static void deleteFoder(File foder) {
		for (File file : foder.listFiles()) {
			if (file.isFile()) {
				file.delete();
			} else {
				deleteFoder(file);
			}
		}
	}

	public static void makedir(String path) {
		File foder = new File(path);
		if (!foder.exists()){
			foder.mkdir();
		}
	}

	public static void writeFile(String path, String content) {
		FileWriter outputStream;
		try {
			File aFile = new File(path);
			if (!aFile.exists())
				aFile.createNewFile();
			outputStream = new FileWriter(aFile);
			outputStream.write(content);
			outputStream.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	public static void writeFile(String path, String fileName, String content) {
		File foder = new File(path);
		if (!foder.exists())
			foder.mkdir();
		writeFile(path + "/" + fileName, content);
	}
	
	public static String readText(String fileName) {
		
		String content = "";
        try {
        	BufferedReader in = new BufferedReader(new FileReader(fileName)); 
            
            String line = null;
			while((line = in.readLine())!=null) 
			{ 
				content += line + System.getProperty("line.separator"); 
			}
			/*if(filters != null){
				for(int i = 0; i < filters.length; i++) {//String filter : filters){
					content = content.replace(content, filters[i]);
				}
			}*/
			
		} catch (IOException e) {
			e.printStackTrace();
		}
		return content;
	}

	

	public static void copyJarFile(String source, String dest) {
		InputStream in = FileUtils.class.getResourceAsStream(source);
		try {
			OutputStream out = new FileOutputStream(dest);
			byte[] buf = new byte[1024];
			int len;
			while ((len = in.read(buf)) > 0) {
				out.write(buf, 0, len);
			}
			in.close();
			out.close();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

	public static String[] getNames(String[] files) {
		String[] names = new String[files.length];

		for (int i = 0; i < files.length; i++) {
			File aFile = new File(files[i]);
			names[i] = aFile.getName();
		}

		return names;
	}

	public static List<String> getURLs(String filePath) {
		List<String> urls = new ArrayList<String>();
		try {
			FileReader reader = new FileReader(filePath);
			BufferedReader bfReader = new BufferedReader(reader);
			String url = null;
			while ((url = bfReader.readLine()) != null) {
				urls.add(url);
			}
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
		return urls;
	}

	public static String getDir(String filePath) {
		File file = new File(filePath);		
		if (file.exists()) {
			return file.getParentFile().getPath();
		}				
		return "c:/";
	}

	public static void mergeFiles(String filePath, String fileName){
		
		List<String> filelist = new ArrayList<String>();
		fetchFileList(filePath, filelist, ".txt");
		
		StringBuffer content = new StringBuffer();
		for(String path : filelist){
			content.append(readText(path) + System.getProperty("line.separator"));
//			content.append("=======================================================================");
		}
		
		writeFile(fileName, content.toString());
	}
	
	public static void main(String argv[]) throws Exception {
	
//		deleteFoder(new File("D:/sites/www.jiathis.com"));
//		deleteFiles("C:/heritrix", ".password");
		
		FileUtils.mergeFiles("E:/data/title_seg", "E:/data/title_seg.txt");
		
		
		
		
	}

}
