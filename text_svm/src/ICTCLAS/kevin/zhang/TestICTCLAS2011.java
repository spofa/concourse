package ICTCLAS.kevin.zhang;


import java.util.*;
import java.io.*;

class Result {
	public int start; //start position,词语在输入句子中的开始位置
	public int length; //length,词语的长度
	//public char sPOS[8]; //词性
	public int posId;//word type，词性ID值，可以快速的获取词性表
	public int wordId; //如果是未登录词，设成0或者-1
	public int word_type; //add by qp 2008.10.29 区分用户词典;1，是用户词典中的词；0，非用户词典中的词

  public int weight;//add by qp 2008.11.17 word weight
};



public class TestICTCLAS2011 {

	public static void main(String[] args) throws Exception {
		try {
//			String sInput = "张华平2009年底调入北京理工大学计算机学院。";
//			String sInput = "T 36.3℃  P 72次/分  R 20次/分  BP 150/78mmHg 神志清楚，精神稍倦，形体中等，营养一般，对答合理，言语欠清，查体合作。全身粘膜及巩膜未见黄染；全身浅表淋巴结未触及肿大。头面端正，双瞳孔等大等圆，直径约3.0mm，对光反射灵敏。耳鼻无异常，口唇无发绀，咽充血（-），双侧扁桃体无肿大，颈软，气管居中，甲状腺不大，颈静脉无怒张。胸廓对称无畸形，双肺叩诊呈清音，听诊双肺呼吸音清，未闻及干湿性罗音，未闻及哮鸣音。心前区无隆起，未及震颤，心界稍向左下扩大，心率72次/分，律齐，各瓣膜听诊区未闻及病理性杂音。腹平软，无浅表静脉曲张，未见胃肠型及蠕动波，腹部无压痛及反跳痛，肝脾肋下未触及，墨菲氏征（-），肝肾区无叩击痛，移动性浊音阴性，肠鸣音未见异常。脊柱四肢无畸形，双下肢无浮肿。神经系统检查见专科检查。 舌淡暗，舌底脉络迂曲，苔白腻，脉滑，尺脉弱。";
			String sInput = "患者于2006年1月在家安静状态下突发右侧肢体乏力，当时神清，伴言语欠清，无肢体抽搐，无头晕头痛等不适，家属急送其至广州军区总医院就诊，查头颅MR提示：左侧顶叶脑梗塞，给予抗聚、营养神经等治疗后病情稳定出院，遗留右侧肢体乏力，右手不能持物、不能行走，言语欠清。之后于2006年2月至我院康复科康复治疗，出院时可自行缓慢步行、右手仍不能持物。2006年6月10日患者在家中突然出现意识丧失、双目上视、四肢抽搐，至我院急诊就诊，拟“继发性癫痫”收入我科，经治疗后症状好转出院，出院后坚持口服“得理多”控制癫痫发作，2007年8月再次因“继发性癫痫”在我科接受治疗，根据病情将得理多加量以控制癫痫发作，至今无再发癫痫发作。之后先后多次于我院行针灸康复治疗，仍有右侧肢体乏力，自行扶拐拖步行走，右上肢不能持物，近1月患者自觉右侧肢体拘挛僵硬感明显，伴有右上肢轻微肿胀，活动受限，为求进一步系统诊疗，由门诊拟“脑梗塞后遗症”收入我科。 入院症见：患者神清，精神稍倦，右侧肢体乏力，局部僵硬感，右上肢远端肿胀，活动受限，右下肢扶行拖步，言语欠流利，夜间偶有胸闷不适，无恶寒发热、头痛耳鸣、无咳嗽咯痰、肢体抽搐等症状，纳眠可，口干无口苦，夜尿3－4次，大便日一行，质软通畅。";
			
			//分词
			Split(sInput);

			//对UTF8进行分词处理
//			SplitUTF8();

			//对BIG5进行分词处理
//			SplitBIG5();
		}
		catch (Exception ex)
		{
			ex.printStackTrace();
		} 


	}

	public static void Split(String sInput)
	{	
	try{	
		ICTCLAS2011 testICTCLAS2011 = new ICTCLAS2011();

		String argu = ".";
		System.out.println("ICTCLAS_Init");
		if (testICTCLAS2011.ICTCLAS_Init(argu.getBytes("GB2312"),0) == false)
		{
			System.out.println("Init Fail!");
			return;
		}

		/*
		 * 设置词性标注集
		        ID		    代表词性集 
				1			计算所一级标注集
				0			计算所二级标注集
				2			北大二级标注集
				3			北大一级标注集
		*/
		testICTCLAS2011.ICTCLAS_SetPOSmap(2);

		//导入用户词典前
		byte nativeBytes[] = testICTCLAS2011.ICTCLAS_ParagraphProcess(sInput.getBytes("GB2312"), 1);
		String nativeStr = new String(nativeBytes, 0, nativeBytes.length, "GB2312");

		System.out.println("未导入用户词典： " + nativeStr);

		//导入用户词典
		String sUserDict = "userdic.txt";
		int nCount = testICTCLAS2011.ICTCLAS_ImportUserDict(sUserDict.getBytes("GB2312"));
		testICTCLAS2011.ICTCLAS_SaveTheUsrDic();//保存用户词典
		System.out.println("导入个用户词： " + nCount);

		nativeBytes = testICTCLAS2011.ICTCLAS_ParagraphProcess(sInput.getBytes("GB2312"), 1);
		nativeStr = new String(nativeBytes, 0, nativeBytes.length, "GB2312");

		System.out.println("导入用户词典后： " + nativeStr);

		//动态添加用户词
		String sWordUser = "973专家组组织的评测	ict";
		testICTCLAS2011.ICTCLAS_AddUserWord(sWordUser.getBytes("GB2312"));
		testICTCLAS2011.ICTCLAS_SaveTheUsrDic();//保存用户词典			
		
		nativeBytes = testICTCLAS2011.ICTCLAS_ParagraphProcess(sInput.getBytes("GB2312"), 1);
		nativeStr = new String(nativeBytes, 0, nativeBytes.length, "GB2312");
		System.out.println("动态添加用户词后: " + nativeStr);

		//文件分词
		String argu1 = "TestGBK.txt";
		String argu2 = "TestGBK_result.txt";
		testICTCLAS2011.ICTCLAS_FileProcess(argu1.getBytes("GB2312"), argu2.getBytes("GB2312"), 1);



		//分词高级接口
		nativeBytes = testICTCLAS2011.nativeProcAPara(sInput.getBytes("GB2312"));

		int nativeElementSize = testICTCLAS2011.ICTCLAS_GetElemLength(0);//size of result_t in native code
		int nElement = nativeBytes.length / nativeElementSize;

		byte nativeBytesTmp[] = new byte[nativeBytes.length];

		//关键词提取
		int nCountKey = testICTCLAS2011.ICTCLAS_KeyWord(nativeBytesTmp, nElement);

		Result[] resultArr = new Result[nCountKey];
		DataInputStream dis = new DataInputStream(new ByteArrayInputStream(nativeBytesTmp));

		int iSkipNum;
		for (int i = 0; i < nCountKey; i++)
		{
			resultArr[i] = new Result();
			resultArr[i].start = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(1) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}

			resultArr[i].length = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(2) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}

			dis.skipBytes(testICTCLAS2011.ICTCLAS_GetElemLength(3));

			resultArr[i].posId = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(4) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}

			resultArr[i].wordId = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(5) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}

			resultArr[i].word_type = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(6) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}
			resultArr[i].weight = Integer.reverseBytes(dis.readInt());
			iSkipNum = testICTCLAS2011.ICTCLAS_GetElemLength(7) - 4;
			if (iSkipNum > 0)
			{
				dis.skipBytes(iSkipNum);
			}				

		}

		dis.close();

		for (int i = 0; i < resultArr.length; i++)
		{
			System.out.println("start=" + resultArr[i].start + ",length=" + resultArr[i].length + "pos=" + resultArr[i].posId + "word=" + resultArr[i].wordId + "  weight=" + resultArr[i].weight);
		}

		
		//释放分词组件资源
		testICTCLAS2011.ICTCLAS_Exit();
	}
	catch (Exception ex)
	{
	} 

	}

	public static void SplitUTF8()
	{
		try
		{

		
		ICTCLAS2011 testICTCLAS2011 = new ICTCLAS2011();

		String argu = ".";
		if (testICTCLAS2011.ICTCLAS_Init(argu.getBytes("GB2312"),1) == false)
		{//UTF8切分
			System.out.println("Init Fail!");
			return;
		}
		String argu1 = "TestUTF.txt";
		String argu2 = "TestUTF_result.txt";
		testICTCLAS2011.ICTCLAS_FileProcess(argu1.getBytes("GB2312"), argu2.getBytes("GB2312"), 1);


		//释放分词组件资源
		testICTCLAS2011.ICTCLAS_Exit();
		}
		catch (Exception ex)
		{
			ex.printStackTrace();
		} 
	}
	
	public static void SplitBIG5()
	{
		try
		{

		
		ICTCLAS2011 testICTCLAS2011 = new ICTCLAS2011();

		String argu = ".";
		if (testICTCLAS2011.ICTCLAS_Init(argu.getBytes("GB2312"),2) == false)
		{//UTF8切分
			System.out.println("Init Fail!");
			return;
		}
		String argu1 = "TestBIG.txt";
		String argu2 = "TestBIG_result.txt";
		testICTCLAS2011.ICTCLAS_FileProcess(argu1.getBytes("GB2312"), argu2.getBytes("GB2312"), 1);


		//释放分词组件资源
		testICTCLAS2011.ICTCLAS_Exit();
		}
		catch (Exception ex)
		{
			ex.printStackTrace();
		} 
	}
}