#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Sun May 19 20:21:59 2019

@author: sum-in
"""
from selenium import webdriver
from bs4 import BeautifulSoup
from urllib.request import urlopen
import csv
import pandas as pd


driver = webdriver.Chrome('/Users/sum-in/Desktop/chromedriver')


driver.implicitly_wait(3)
driver.get('https://www.imdb.com/chart/moviemeter?ref_=nv_mv_mpm')


#장르선택(액션부터 장르 총 23개)

a=[]

for i in range(23):
    a.append(driver.find_element_by_xpath('//*[@id="sidebar"]/div[6]/span/ul/li['+str(i+1)+']/a'))
    
#액션장르선택
a[0].click()

#제목
movie = []

for i in range(50):
    movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])


driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a').click()

for j in range(5039):
    for i in range(50):
        movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])
    print(str(j+2)+'쪽 크롤링 완료')
    driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a[2]').click()
    
    
    
    
    
# csv로 저장   
action = pd.DataFrame(movie) 

action.columns=['title','Release date','Celebs']

action.to_csv('action.csv')





#어드벤쳐 장르 선택
a[1].click()


#크롤링
movie = []

for i in range(50):
    movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])


driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a').click()

for j in range(5039):
    for i in range(50):
        movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])
    print(str(j+2)+'쪽 크롤링 완료')
    driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a[2]').click()


# csv로 저장   
adventure = pd.DataFrame(movie) 

adventure.columns=['title','Release date','Celebs']

adventure.to_csv('adventure.csv')




#에니메이션 장르 선택
a[2].click()


#크롤링
movie = []

for i in range(50):
    movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])


driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a').click()

for j in range(5039):
    for i in range(50):
        movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])
    print(str(j+2)+'쪽 크롤링 완료')
    driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a[2]').click()


# csv로 저장   
animation = pd.DataFrame(movie) 

animation.columns=['title','Release date','Celebs']

animation.to_csv('animation.csv')

















driver = webdriver.Chrome('/Users/sum-in/Desktop/chromedriver')


driver.implicitly_wait(3)
driver.get('https://www.imdb.com/chart/moviemeter?ref_=nv_mv_mpm')


#장르선택(액션부터 장르 총 23개)

a=[]

for i in range(23):
    a.append(driver.find_element_by_xpath('//*[@id="sidebar"]/div[6]/span/ul/li['+str(i+1)+']/a'))






#에니메이션 장르 선택
a[17].click()



#크롤링
movie = []

for i in range(50):
    movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                  driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])


driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a').click()

for j in range(5039):
    for i in range(50):
        movie.append([driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/a').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/h3/span[2]').text,
                      driver.find_element_by_xpath('//*[@id="main"]/div/div[3]/div/div['+str(i+1)+']/div[3]/p[3]').text])
    print(str(j+2)+'쪽 크롤링 완료')
    driver.find_element_by_xpath('//*[@id="main"]/div/div[4]/a[2]').click()


# csv로 저장   
Sci-Fi = pd.DataFrame(movie) 

Sci-Fi.columns=['title','Release date','Celebs']

Sci-Fi.to_csv('Sci-Fi.csv')


Sci-Fi = pd.DataFrame(movie) 

Sci-Fi.columns=['title','Release date','Celebs']

Sci-Fi.to_csv('Sci-Fi.csv')
























file_dir = "/Users/sum-in/Desktop/pra01.csv"


csvFile = open(file_dir, "a", newline='')


wr = csv.writer(csvFile)

for i in range(len(movie)):    
    wr.writerow(movie)
csvFile.close()












