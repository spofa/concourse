/*
 * 文件名：CharSets.java
 * 版权：Copyright 2008-20012 复旦大学 All Rights Reserved.
 * 描述：自然语言处理基础工具包
 * 修改人：xpqiu
 * 修改时间：2008-12-17
 * 修改内容：新增
 *
 * 修改人：〈修改人〉
 * 修改时间：YYYY-MM-DD
 * 跟踪单号：〈跟踪单号〉
 * 修改单号：〈修改单号〉
 * 修改内容：〈修改内容〉
 */
package ICTCLAS.I3S.AC;

/**
 * @author Administrator
 * @version 1.0
 * @since 1.0
 */
public class CharSets {
	
	public static String punctuation =  
		"、。·ˉˇ¨〃々—～‖…‘’“”〔〕〈〉《》「」『』〖〗【】±＋－×"+
		"÷∧∨∑∏∪∩∈√⊥‖∠⌒⊙∫∮≡≌≈∽∝≠≮≯≤≥∞∶∵∴∷♂♀°′"+
		"〃℃＄¤￠￡‰§№☆★〇○●◎◇◆回□■△▽⊿▲▼◣◤◢◥▁▂▃▄▅"+
		"▆▇█▉▊▋▌▍▎▏▓※→←↑↓↖↗↘↙〓ⅰⅱⅲⅳⅴⅵⅶⅷⅸⅹ①②③④"+
		"⑤⑥⑦⑧⑨⑩⒈⒉⒊⒋⒌⒍⒎⒏⒐⒑⒒⒓⒔⒕⒖⒗⒘⒙⒚⒛⑴⑵⑶⑷⑸⑹⑺⑻"+
		"⑼⑽⑾⑿⒀⒁⒂⒃⒄⒅⒆⒇ⅠⅡⅢⅣⅤⅥⅦⅧⅨⅩⅪⅫ！"+
		"”ㄅㄆㄇㄈㄉㄊㄋㄌㄍㄎㄏㄐㄑ"+
		"ㄒㄓㄔㄕㄖㄗㄘㄙㄚㄛㄜㄝㄞㄟㄠㄡㄢㄣㄤㄥㄦㄧㄨㄩ︴﹏﹋﹌—━│┃"+
		"┄┅┆┇┈┉┊┋┌┍┎┏┐┑┒┓└┕┖┗┘┙┚┛├┝┞┟┠┡┢┣┤┥┦"+
		"┧┨┩┪┫┬┭┮┯┰┱┲┳┴┵┶┷┸┹┺┻┼┽┾┿╀╁╂╃╄╅╆╇╈╉"+
		"╊╋⊕㊣㈱曱甴囍∟┅﹊﹍╭╮╰╯_^（：！\t\b\r\"<>`,:~～"+
		"卐℡ぁ＂″ミ灬№＊ㄨ≮≯＋－／∝≌∽≤≥≈＜＞じ"+
		"ぷ┗┛￥￡§я-―¨…‰′〃℅℉№℡∕∝∣═║╒╓╔╕╖╗╘╙╚╛╜╝"+
		"╞╟╠╡╢╣╤╥╦╧╨╩╪╫╬╱╲╳▔▕〆〒〡〢〣〤〥〦〧〨〩㎎㎏㎜"+
		"㎝㎞㎡㏄㏎㏑㏒㏕兀∶﹍﹎"+
		"▄【┻┳═\\/%&';=@#!˙";	
	
	public static String RegexPunc="\\-\\(\\)\\{\\}\\[\\]\\s\\.\\*\\+\\^\\$\\\\\\?\\|";
	
	public static String allRegexPunc = punctuation+RegexPunc;
	
	public static String japanese = "ぁあぃいぅうぇえぉおかがき"+
		"ぎくぐけげこごさざしじすずせぜそぞただちぢっつづてでとどなにぬねのはば"+
		"ぱひびぴふぶぷへべぺほぼぽまみむめもゃやゅゆょよらりるれろゎわゐゑをん"+
		"ァアィイゥウェエォオカガキギクグケゲコゴサザシジスズセゼソゾタダチヂッ"+
		"ツヅテデトドナニヌネノハバパヒビピフブプヘベペホボポマミムメモャヤュユ"+
		"ョヨラリルレロヮワヰヱヲンヴヵヶ";
	public static String unkown = "ΑΒΓΔΕΖΗΘΙΚ∧ΜΝΞΟ∏Ρ∑Τ"+
	"ΥΦΧΨΩαβγδεζηθικλμνξοπρστυφχψω"+
	"АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦ"+
	"ЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчш"+
	"щъыьэюāáǎàēéěèīíǐìōóǒòūúǔùǖǘǚǜüêɑńňɡ";
	public static String fullShape = "＃￥％＆’（）＊＋，－．／０１２３４５６７８９：；＜＝＞？＠ＡＢＣＤ"+
		"ＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ＼＾＿‘ａｂｃｄｅｆｇ"+
		"ｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ｛｜｝［］";
	public static String chineseNum = "一二三四五六七八九十";

}
