<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
body, html { 
    margin: 0;
    padding: 0;
    height: 100%;
}
.bgimg {
    border: 0;
    padding: 0; 
    background-image: url('BG3.png');
    min-height: 100%;
    min-width: 100%;
    background-position: center;
    background-size: cover;
}

#bg {
  position: fixed; 
  top: 0; 
  left: 0; 
    
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}
</style>
            <style>
                    .img {
                        position : absolute;
                        left : 400px;
                        top : 1%;
                        
                     }   
                    
                     @-webkit-keyframes stripe-slide {
  0% {
    background-position: 0% 0;
  }
  100% {
    background-position: 100% 0;
  }
}
@keyframes stripe-slide {
  0% {
    background-position: 0% 0;
  }
  100% {
    background-position: 100% 0;
  }
}
body {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: sans-serif;
 
}

.btn {
  overflow: visible;
  margin: 0;
  padding: 0;
  border: 0;
  background: transparent;
  font: inherit;
  line-height: normal;
  cursor: pointer;
  -moz-user-select: text;
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  padding: 16px 36px 22px;
  background-color: #fff;
  color: #666;
  border: 2px solid #666;
  border-radius: 6px;
  margin-bottom: 16px;
  transition: all .5s ease;
  
}
.btn:-moz-focus-inner {
  padding: 0;
  border: 0;
}
.btn--stripe {
  overflow: hidden;
  position: relative;
}
.btn--stripe:after {
  content: '';
  display: block;
  height: 7px;
  width: 100%;
  background-image: repeating-linear-gradient(45deg, #666, #666 1px, transparent 2px, transparent 5px);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-top: 1px solid #666;
  position: absolute;
  left: 0;
  bottom: 0;
  background-size: 7px 7px;
}
.btn--stripe:hover {
  background-color: #666;
  color: #fff;
  border-color: #000;
}
.btn--stripe:hover:after {
  background-image: repeating-linear-gradient(45deg, #fff, #fff 1px, transparent 2px, transparent 5px);
  border-top: 1px solid #000;
  -webkit-animation: stripe-slide 12s infinite linear forwards;
          animation: stripe-slide 12s infinite linear forwards;
}
.btn--large {
  width: 50%;
}
.btn--radius {
  border-radius: 36px;
}
                </style>

                       
    </head>
    <body class="bgimg">

            <a href="NewMVGHome.php"><img src="main.PNG" class="img"></a>

            <style>
            select{
                width: 196px; height: 41px; font-size: 15px; color:#999;
                border:2px solid #ddd; background: url(bg_select.png) no-repeat right 13px center;
 }
 input{
                width: 300px; height: 41px; font-size: 15px; color:#999;
                border:2px solid #ddd; background: url(bg_select.png) no-repeat right 13px center;
 }
        </style>

            <span class="thin" style="position: absolute; left:42%; top:27%; font-size: 20px">CHOOSE DETAILES!</span>

<form action="NewMVGShow2.php" method="POST">
<div style="position: absolute; left:25%; top:40%; font-size: 20px">
         <select name="age">
            <option value=" 2019-birth_year>0">AGE</option>
            <option value=" 2019-birth_year <=10">UNDER 10</option>
            <option value=" 2019-birth_year >=11 and 2019-birth_year <=15">11~15</option>
            <option value=" 2019-birth_year >=16 and 2019-birth_year <=20">16~20</option>
            <option value=" 2019-birth_year >=21 and 2019-birth_year <=25">21~25</option>    
            <option value=" 2019-birth_year >=26 and 2019-birth_year <=30">26~30</option> 
            <option value=" 2019-birth_year >=31 and 2019-birth_year <=35">31~35</option> 
            <option value=" 2019-birth_year >=36 and 2019-birth_year <=40">36~40</option> 
            <option value=" 2019-birth_year >=41 and 2019-birth_year <=45">41~45</option>
            <option value=" 2019-birth_year >=46 and 2019-birth_year <=50">46~50</option>   
            <option value=" 2019-birth_year >=51 and 2019-birth_year <=55">51~55</option>    
            <option value=" 2019-birth_year >=56 and 2019-birth_year <=60">56~60</option> 
            <option value=" 2019-birth_year >=61 and 2019-birth_year <=65">61~65</option>      
            <option value=" 2019-birth_year >=66">OVER 66</option>                                                                
         </select>
         <select name="gender">
                <option value="">GENDER</option>
                <option value="and gender = 'male'">MALE</option>
                <option value="and gender = 'female'">FEMALE</option>
         </select>
         <select name="height">
                <option value="height>0">HEIGHT</option>
                <option value="height <= 145 ">UNDER 145</option>
                <option value="height >= 146 and height <=150 ">146~150</option>
                <option value="height >= 151 and height <=155 ">151~155</option>    
                <option value="height >= 156 and height <=160 ">156~160</option> 
                <option value="height >= 161 and height <=165 ">161~165</option> 
                <option value="height >= 166 and height <=170 ">166~170</option> 
                <option value="height >= 171 and height <=175 ">171~175</option>
                <option value="height >= 176 and height <=180 ">176~180</option>   
                <option value="height >= 181 and height <=185 ">181~185</option>    
                <option value="height >= 186 ">OVER 186</option> 
                
         </select>

        </div>

        <div style="position: absolute; left:32%; top:60%; font-size: 20px">

        <select name="genre">
            <option value="allmovie">GENRE</option>
            <option value="adventure">ADVANTURE</option>
            <option value="action">ACTION</option>
            <option value="animation">ANIMATION</option>    
            <option value="Comedy">COMEDY</option> 
            <option value="Crime">CRIME</option> 
            <option value="Documentary">DOCUMENTARY</option> 
            <option value="Drama">DRAMA</option>
            <option value="Family">FAMILY</option>   
            <option value="Fantasy">FANTASY</option>    
            <option value="History">HISTORY</option> 
            <option value="Horror">HORROR</option>      
            <option value="Music">MUSIC</option>  
            <option value="Mystery">MYSTERY</option>            
            <option value="Romance">ROMANCE</option>      
            <option value="scifi">SF</option>        
            <option value="War">WAR</option>                                                    
         </select>

        <select name="released_year">
                <option value="releasedate>0">RELEASED YEAR</option>
                <option value="releasedate<1960">Before 1960</option>
                <option value="releasedate>=1960 and releasedate<1970">1960s</option>
                <option value="releasedate>=1970 and releasedate<1980">1970s</option>    
                <option value="releasedate>=1980 and releasedate<1990">1980s</option> 
                <option value="releasedate>=1990 and releasedate<2000">1990s</option> 
                <option value="releasedate>=2000 and releasedate<2010">2000s</option> 
                <option value="releasedate>=2010 and releasedate<2020">2010s</option>                                                               
             </select>
</div>

<img src="aligator2.gif" style="position: absolute; right:48%; bottom:13%; withd:22% ; height:20%" >
        <div style="position: absolute; left:42%; top:85%; font-size: 20px">
        <button class="btn btn--stripe">SEARCH!</button>
         
 </div>
 </form>

    </body>
</html>

<?php

   $conn = mysqli_connect("localhost", "root", "", "myclass");
   mysqli_query($conn, "set session character_set_connection=utf8;");
   mysqli_query($conn, "set session character_set_results=utf8;");
   mysqli_query($conn, "set session character_set_client=utf8;");

?>
