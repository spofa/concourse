package edu.fudan.nlp.parser.dep.yamada;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.ObjectOutputStream;
import java.io.OutputStreamWriter;
import java.nio.charset.Charset;
import java.util.Arrays;
import java.util.List;
import java.util.zip.GZIPOutputStream;

import org.apache.commons.cli.BasicParser;
import org.apache.commons.cli.CommandLine;
import org.apache.commons.cli.HelpFormatter;
import org.apache.commons.cli.Options;

import edu.fudan.ml.classifier.Linear;
import edu.fudan.ml.classifier.OnlineTrainer;
import edu.fudan.ml.inf.LinearMax;
import edu.fudan.ml.loss.ZeroOneLoss;
import edu.fudan.ml.types.AlphabetFactory;
import edu.fudan.ml.types.FeatureAlphabet;
import edu.fudan.ml.types.Instance;
import edu.fudan.ml.types.InstanceSet;
import edu.fudan.ml.types.LabelAlphabet;
import edu.fudan.ml.types.SparseVector;
import edu.fudan.ml.update.LinearMaxPAUpdate;
import edu.fudan.ml.update.Update;
import gnu.trove.TDoubleArrayList;
import gnu.trove.TIntObjectHashMap;
import gnu.trove.TObjectIntIterator;

/**
 * 句法分析器训练类
 * 
 * @version Feb 16, 2009
 */
public class ParserTrainer {

	String modelfile;
	Charset charset;
	File fp;
	AlphabetFactory factory;

	/**
	 * 构造函数
	 * 
	 * 默认编码格式为GB18030
	 * 
	 * @param data
	 *            训练文件的目录
	 * @throws Exception
	 */
	public ParserTrainer(String data) {
		this(data, "UTF-8");
		factory = AlphabetFactory.buildFactory();
	}

	/**
	 * 构造函数
	 * 
	 * @param dataPath
	 *            训练文件的目录
	 * @param charset
	 *            文件编码
	 * @throws Exception
	 */
	public ParserTrainer(String dataPath, String charset) {
		this.modelfile = dataPath;
		this.charset = Charset.forName(charset);
	}

	/**
	 * 生成训练实例
	 * 
	 * 以Yamada分析算法，从单个文件中生成特征以及训练样本
	 * 
	 * @param file
	 *            单个训练文件
	 * @throws Exception
	 */
	private void buildInstanceList(String file) throws IOException {

		System.out.print("generating training instances ...");

		CoNLLReader reader = new CoNLLReader(file);

		BufferedWriter writer = new BufferedWriter(new OutputStreamWriter(
				new FileOutputStream(fp), charset));

		int count = 0;
		while (reader.hasNext()) {

			Sentence instance = (Sentence) reader.next();
			ParsingState state = new ParsingState(instance);
			while (!state.isFinalState()) {
				// 左右焦点词在句子中的位置
				int[] lr = state.getFocusIndices();

				SparseVector features = state.getFeatures();
				ParsingState.Action action = getAction(lr[0], lr[1],
						instance.heads);
				state.next(action);
				if (action == ParsingState.Action.LEFT)
					instance.heads[lr[1]] = -1;
				if (action == ParsingState.Action.RIGHT)
					instance.heads[lr[0]] = -1;

				// writer.write(String.valueOf(instance.postags[lr[0]]));
				writer.write(instance.getTag(lr[0]));
				writer.write(" ");
				switch (action) {
				case LEFT:
					writer.write("L");
					break;
				case RIGHT:
					writer.write("R");
					break;
				default:
					writer.write("S");
				}
				writer.write(" ");
				int[] idx = features.indices();
				Arrays.sort(idx);
				for (int i = 0; i < idx.length; i++) {
					writer.write(String.valueOf(idx[i]));
					writer.write(" ");
				}
				writer.newLine();

			}
			writer.write('\n');
			writer.flush();
			count++;
		}
		writer.close();

		System.out.println(" ... finished");
		System.out.printf("%d instances have benn loaded.\n\n", count);
	}

	/**
	 * 模型训练函数
	 * 
	 * @param dataFile
	 *            训练文件
	 * @param maxite
	 *            最大迭代次数
	 * @param eps
	 * @throws IOException
	 * @throws Exception
	 */
	public void train(String dataFile, int maxite, double c) throws IOException {

		fp = File.createTempFile("train-features", null, new File("./"));

		buildInstanceList(dataFile);

		LabelAlphabet postagAlphabet = factory.buildLabelAlphabet("postag");

		FeatureAlphabet features = factory.buildFeatureAlphabet("feature");

		Features generator = new Features();
		Linear[] models = new Linear[postagAlphabet.size()];
		int fsize = features.size();

		for (int i = 0; i < postagAlphabet.size(); i++) {
			String pos = postagAlphabet.lookupString(i);
			InstanceSet instset = readInstanceSet(pos);
			LabelAlphabet alphabet = factory.buildLabelAlphabet(pos);
			int ysize = alphabet.size();
			System.out.printf("Training with data: %s\n", pos);
			System.out.printf("Number of labels: %d\n", ysize);
			LinearMax solver = new LinearMax(generator, ysize);
			ZeroOneLoss loss = new ZeroOneLoss();
			Update update = new LinearMaxPAUpdate();
			OnlineTrainer trainer = new OnlineTrainer(solver, update, loss,
					fsize, maxite, c);
			models[i] = trainer.train(instset, null);
			instset = null;
			solver = null;
			loss = null;
			trainer = null;
			System.out.println();
		}

		refineModels(models);
		saveModels(models);

		fp.delete();
		fp = null;
	}

	private void refineModels(Linear[] models) {
		LabelAlphabet postags = factory.buildLabelAlphabet("postag");
		int posize = postags.size();
		double[][] nweights = new double[posize][];
		TDoubleArrayList[] ww = new TDoubleArrayList[posize];
		for (int i = 0; i < posize; i++) {
			nweights[i] = models[i].getWeights();
			ww[i] = new TDoubleArrayList();
		}
		int length = nweights[0].length;

		FeatureAlphabet features = factory.buildFeatureAlphabet("feature");
		TIntObjectHashMap<String> index = new TIntObjectHashMap<String>();
		TObjectIntIterator<String> it = features.iterator();
		while (it.hasNext()) {
			it.advance();
			String value = it.key();
			int key = it.value();
			index.put(key, value);
		}
		int[] idx = index.keys();
		Arrays.sort(idx);

		FeatureAlphabet nfeatures = factory.rebuildFeatureAlphabet("feature");
		
		for (int i = 0; i < idx.length; i++) {
			int base = idx[i];
			int end = length;
			if (i < idx.length - 1)
				end = idx[i + 1];
			boolean del = true;
			for (int l = 0; l < posize; l++) {
				for (int j = base; j < end; j++) {
					if (nweights[l][j] != 0) {
						del = false;
						break;
					}
				}
			}
			int interv = end - base;
			if (!del) {
				String str = index.get(base);
				int id = nfeatures.lookupIndex(str, interv);
				for (int l = 0; l < posize; l++) {
					for (int j = 0; j < interv; j++) {
						ww[l].insert(id + j, nweights[l][base + j]);
					}
				}
			}
		}
		index.clear();
		for(int l = 0; l < posize; l++)	{
			models[l].setWeights(ww[l].toNativeArray());
			ww[l].clear();
		}
	}

	/**
	 * 读取样本
	 * 
	 * 根据词性读取样本文件中的样本
	 * 
	 * @param pos
	 *            词性
	 * @return 样本集
	 * @throws Exception
	 */
	private InstanceSet readInstanceSet(String pos) throws IOException {

		InstanceSet instset = new InstanceSet();

		LabelAlphabet labelAlphabet = factory.buildLabelAlphabet(pos);

		BufferedReader in = new BufferedReader(new InputStreamReader(
				new FileInputStream(fp), charset));

		String line = null;
		while ((line = in.readLine()) != null) {
			line = line.trim();
			if (line.matches("^$"))
				continue;
			if (line.startsWith(pos + " ")) {
				List<String> tokens = Arrays.asList(line.split("\\s+"));

				int[] data = new int[tokens.size() - 2];
				for (int i = 0; i < data.length; i++) {
					data[i] = Integer.parseInt(tokens.get(i + 2));
				}
				Instance inst = new Instance(data);
				inst.setTarget(labelAlphabet.lookupIndex(tokens.get(1)));

				instset.add(inst);
			}
		}

		in.close();

		labelAlphabet.setStopIncrement(true);
		instset.setAlphabetFactory(factory);

		return instset;
	}

	/**
	 * 保存模型
	 * 
	 * 以序列化的方式保存模型
	 * 
	 * @param models
	 *            模型参数
	 * @param pos
	 *            词性
	 * @throws Exception
	 */
	private void saveModels(Linear[] models) throws IOException {

		ObjectOutputStream outstream = new ObjectOutputStream(
				new GZIPOutputStream(new FileOutputStream(modelfile)));
		outstream.writeObject(factory);
		outstream.writeObject(models);
		outstream.close();
	}

	/**
	 * 根据已有的依赖关系，得到焦点词之间的应采取的动作
	 * 
	 * 
	 * @param l
	 *            左焦点词在句子中是第l个词
	 * @param r
	 *            右焦点词在句子中是第r个词
	 * @param heads
	 *            中心评词
	 * @return 动作
	 */
	private ParsingState.Action getAction(int l, int r, int[] heads) {
		if (heads[l] == r && modifierNumOf(l, heads) == 0)
			return ParsingState.Action.RIGHT;
		if (heads[r] == l && modifierNumOf(r, heads) == 0)
			return ParsingState.Action.LEFT;
		return ParsingState.Action.SHIFT;
	}

	private int modifierNumOf(int h, int[] heads) {
		int n = 0;
		for (int i = 0; i < heads.length; i++)
			if (heads[i] == h)
				n++;
		return n;
	}

	/**
	 * 主文件
	 * 
	 * @param args
	 *            ： 训练文件；模型文件；循环次数
	 * @throws Exception
	 */
	public static void main(String[] args) throws Exception {
		
		Options opt = new Options();

		opt.addOption("h", false, "Print help for this application");
		opt.addOption("iter", true, "iterative num, default 50");
		opt.addOption("c", true, "parameters 1, default 1");

		BasicParser parser = new BasicParser();
		CommandLine cl;
		try {
			cl = parser.parse(opt, args);
		} catch (Exception e) {
			System.err.println("Parameters format error");
			return;
		}
		
		if (args.length == 0 || cl.hasOption('h')) {
			HelpFormatter f = new HelpFormatter();
			f.printHelp(
					"Tagger:\n"
							+ "ParserTrainer [option] train_file model_file;\n",
					opt);
			return;
		}
		
		String datafile = args[0];
		String modelfile = args[1];
		int maxite = Integer.parseInt(cl.getOptionValue("iter", "50"));
		double c = Double.parseDouble(cl.getOptionValue("c", "1"));
		
		ParserTrainer trainer = new ParserTrainer(modelfile);
		trainer.train(datafile, maxite, c);
	}

}
