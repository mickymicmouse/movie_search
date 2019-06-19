library(rvest)
library(httr)
url<-"https://search.naver.com/search.naver?date_from=&date_option=0&date_to=&dup_remove=1&nso=&post_blogurl=&post_blogurl_without=&query=%ED%81%AC%EB%A1%A4%EB%A7%81%20in%20R&sm=tab_pge&srchby=all&st=sim&where=post&start=%22,"
(nv<-read_html(url))

(rvns<-html_node(nv, "a.sh_blog_title._sp_each_url._sp_each_title"))
(title<-html_text(rvns))
gsub("r", "")
ur<-"http://movie.naver.com/movie/running/current.nhn"
dat<-get(ur)

library(RSelenium)
as<-wdman::phantomjs(port = 4568L)

remDr <- remo (port = 4568L, browserName ='phantomjs')
remDr$open()



p_job<-data.frame(strsplit(ac_job,split = '|',fixed=TRUE))
p_job//데이터 스플릿하는 ㅂ


//직업에 추출 후 actor만 뽑아오기
ac_job<-c()
samurl<-("https://www.imdb.com/name/nm0000001")
re<-read_html(samurl)
rv<-html_node(re, "div#name-job-categories.infobar")
rv
job<-html_text(rv)
job
ac_job<-c(ac_job,job)
ac_job<-gsub("\n","",ac_job)
(height<- html_node(read_ht, "div#details-height.see-more.inline.canwrap#text"))

if(grep("Actor", ac_job)==T) {
  
  
  
  
  
} else {
  break;
}
ac_job<-c()


//크롤링 변환 이름, 생년월ㅇ
ac_name <-c()
ac_date <-c()

for(i in 1:9){
url<-paste0("https://www.imdb.com/name/nm000000",i)

read_ht<-read_html(url)
rvns<-html_node(read_ht, "div#name-born-info")%>%html_node('time')
navns<-html_node(read_ht, "span.itemprop")
height<- html_node(read_ht, "div#details-height.see-more.inline.canwrap")%>%html_node('#text')
name<-html_text(navns)
date<-html_text(rvns)
ac_date<-c(ac_date,date)
ac_name<-c(ac_name,name)
}
ac_date<-gsub("\n","",ac_date)
ac_date
(actor_born<-data.frame(ac_name,ac_date))





for(i in 10:99){
  url1<-paste0("https://www.imdb.com/name/nm00000",i)
  read_ht<-read_html(url1)
  rvns<-html_node(read_ht, "div#name-born-info")%>%html_node('time')
  navns<-html_node(read_ht, "span.itemprop")
  name<-html_text(navns)
  date<-html_text(rvns)
  ac_date<-c(ac_date,date)
  ac_name<-c(ac_name,name)
}
ac_date<-gsub("\n","",ac_date)
(actor_born<-data.frame(ac_name,ac_date))
actor_born



library(RODBC)
con<-odbcConnect('MYSQL');
sqlTables(con)
con
write.table(actor_born,file="act_born.txt",quote=F)
write.csv(actor_born,file="act1.csv",low.name=F)
