#!usr/bin/python
# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from BeautifulSoup import BeautifulSoup
import time, re

def corrector(name):
	driver = webdriver.PhantomJS()
	driver.get("http://www.mieliestronk.com/corncob_lowercase.txt")
	s1 = driver.page_source
	soup = BeautifulSoup(s1)
	s3 = soup.find('pre')
	print re.search(name,s3,re.I).group(0)
	#print m.group(0)

corrector("abel")
