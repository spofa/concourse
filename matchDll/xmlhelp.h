#pragma once
#include "tinyxml.h"
#include "list"
#include"algorithm" 
using namespace std;

typedef list<TiXmlElement *> ElementList;

class xmlhelp
{
public:
	xmlhelp(void);
	~xmlhelp(void);
	static int getNodeCount(TiXmlNode *node);
	static int getElementCount(TiXmlElement *element);
	static int getSemanticElements(TiXmlElement *element, ElementList *semantics);
	static int STM(TiXmlElement *element, TiXmlElement *element2);
	static void add(ElementList  *list1, ElementList  *list2);
	static void move(ElementList  *list1, ElementList  *list2) ;
	static ElementList * getRootList(vector<char*>& files, int size);
	static TiXmlElement* getRootElement(char* file);
	static void init(TiXmlElement* element);
	static string getStringValue(TiXmlNode* node);
	static void reduceElement(TiXmlElement* element, int num);
};
