#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sun May 26 01:02:57 2019

@author: sum-in
"""



from selenium import webdriver
from bs4 import BeautifulSoup
from urllib.request import urlopen
import json
from collections import OrderedDict
import pandas as pd

driver = webdriver.Chrome('/Users/sum-in/Desktop/chromedriver')
driver.implicitly_wait(3)
driver.get('https://www.imdb.com/search/name?gender=male,female&ref_=nv_cel_m')



actor_information = []

for j in range(1837):
    aaa = []
    for i in range(50):
        aaa.append(driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div['+str(i+1)+']/div[1]/a').get_attribute('href'))
    
    
    
    
    for i in range(len(aaa)):
        url = aaa[i]
        page = urlopen(url)
        soup = BeautifulSoup(page, 'html.parser')
        act_name = soup.find('span', attrs={'class':'itemprop'}).text
        
        try:
            gender = soup.find('div',attrs={'id':'name-job-categories'}).a.span.text.strip()
        except Exception as e:
            date_time = 0
            print(act_name+'에서 성별 오류 발생')
        
        try:
            date_time = soup.find('div', attrs={'id':'name-born-info'}).time.attrs['datetime']
        except Exception as e:
            date_time = 0
            print(act_name+'에서 출생 년 월 오류 발생')
        
        try:
            height = soup.find('div', attrs={'id':'details-height'}).text.split(':')[1].strip()
        except Exception as e:
            date_time = 0
            print(act_name+'에서 키 정보 오류 발생')
        
        try:
            movie = soup.find('div', attrs={'id':'filmography'}).text.strip()
        except Exception as e:
            date_time = 0
            print(act_name+'에서 영화 정보 오류 발생')    
        
        actor_information.append([act_name, gender, date_time, height, movie])
    
    print(str(j+163)+'페이지 완료')
    if(j == 0):
        driver.find_element_by_xpath('//*[@id="main"]/div/div[1]/a').click()
    driver.find_element_by_xpath('//*[@id="main"]/div/div[1]/a[2]').click()
    




actor_information[0][4]
for i in range(len(actor_information)):
    a.append(actor_information[i][4])


celebs = pd.DataFrame(actor_information) 

celebs.columns=['name','gender','born','height','movies']

celebs.to_csv('celebs_prac.csv')

