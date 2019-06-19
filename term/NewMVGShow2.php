<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
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
 


table.type09 thead th {
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    color: #369;
    border-bottom: 3px solid #036;
}
table.type09 tbody th {
    width: 50px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    background: #f3f6f7;
}
table.type09 td {
    width: 200px;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
    background: #FFFFFF;
}



 .page {
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
}


/* add default color for animation start  */


/* toggle this class */

.color-bg-start {
  background-color: salmon;
}


/* toggle class bg-animate-color */

.bg-animate-color {
  animation: random-bg .5s linear infinite;
}


/* add animation to bg color  */

@keyframes random-bg {
  from {
    filter: hue-rotate(0);
  }
  to {
    filter: hue-rotate(360deg);
  }
}

.fun-btn {
  /* change bg color to get different hues    */
  background-color: salmon;
  color: white;
  padding: 2em 3em;
  border: none;
  transition: all .3s ease;
  border-radius: 5px;
  letter-spacing: 2px;
  text-transform: uppercase;
  outline: none;
  align-self: center;
  cursor: pointer;
  font-weight: bold;
}

.fun-btn:hover {
  animation: random-bg .5s linear infinite, grow 1300ms ease infinite;
}

.start-fun {
  background-color: #fff !important;
  /* change color of button text when fun is started   */
  color: salmon !important;
}

/* pulsating effect on button */
@keyframes grow {
  0% {
    transform: scale(1);
  }
  14% {
    transform: scale(1.3);
  }
  28% {
    transform: scale(1);
  }
  42% {
    transform: scale(1.3);
  }
  70% {
    transform: scale(1);
  }
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

            <a href="NewMVGHome.php" id="pos1"><img src="main.PNG" style="position : absolute; left : 400px; top : 1%;"></a>
           
<?php 
        
        $conn = mysqli_connect("localhost", "root", "", "myclass");
        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");
     
      $height1 = mysqli_real_escape_string($conn,$_POST['height']);
      $age1 = mysqli_real_escape_string($conn,$_POST['age']);
      $gender1 = mysqli_real_escape_string($conn,$_POST['gender']);
      $ry = mysqli_real_escape_string($conn, $_POST['released_year']);
      $genre = mysqli_real_escape_string($conn, $_POST['genre']);
     
        
        
          

            $dd = $_POST['gender'];
      $sql = "SELECT DISTINCT a.title, c.actor_name, a.releasedate from $genre a, celeb c  where $height1 and $age1  and $ry and c.actor_name in(SELECT ic.actor_name FROM celeb ic WHERE ic.actor_name=actor1 or ic.actor_name=actor2 or ic.actor_name=actor3 or ic.actor_name=actor4) $dd order by c.num, a.releasedate DESC LIMIT 20";
           $result = mysqli_query($conn,$sql);
           


           if ($result->num_rows == 0){
              error_reporting(0);
              echo "<center><form class='start'><a href='DontKnow.php'><input type='button' class='fun-btn' value='GO BACK' style='position: absolute; left:45%; top:50%;'></a></form></center>";   
            error_reporting(0);            
           } else {
          ?>


            <center>
           <table class="type09" style="position: absolute; top:45%; left:15%; border-collapse: collapse; text-align: left; line-height: 1.5;">
            <thead>
            <tr>
            <th scope='cols' align='middle'>Rank</th>
            <th scope='cols' align='middle'>MOVIE</th>
            <th scope='cols' align='middle'>ACTOR NAME</th>
            <th scope='cols' align='middle'>RELEASED YEAR</th>
            <th scope='cols' align='middle'>LINK</th>
            </tr>
            </thead>
            </center>


          <?php
          $a=1;
           while ($row2 = mysqli_fetch_assoc($result)){
               
               
                error_reporting(0);
                echo "<tbody>
                <tr>
                <th scope='row' align='middle'>",$a,"</th>
                <td align='middle'>",$row2[title],"</td>
                <td align='middle'>",$row2[actor_name],"</td>
                <td align='middle'>",$row2[releasedate],"</td>
                <td align='middle'><a href='https://en.wikipedia.org/wiki/$row2[title]'><img src = 'button.png' style='width: 30px; height: 15px'></a></td>
                </tr>
                </tbody>";
                $a=$a+1;
                 }
              }
           
        
           
        $conn->close();

      #$height=$_GET['actor_height'];
?>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    


<br><br><br><br><br><br><br><br>



<div style="position : fixed ; bottom:5px; right : 5px;">

<a href="#pos1"><img src="point.gif" width="180" height="180" ></a>

</div>

            
    </body>
</html>




