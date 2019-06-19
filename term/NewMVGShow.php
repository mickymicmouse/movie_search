
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
</style>

                       
    </head>
    <body class="bgimg">

            <a href="NewMVGHome.php" id="pos1"><img src="main.PNG" style="position : absolute; left : 400px; top : 1%;"></a>
           


<?php 
        
        $conn = mysqli_connect("localhost", "root", "", "myclass");
        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");
     
        $actor_name = mysqli_real_escape_string($conn,$_POST['actor_name']);
        $genre = mysqli_real_escape_string($conn, $_POST['genre']);
        $ry = mysqli_real_escape_string($conn, $_POST['released_year']);
     

        
           // username and password sent from form  

          
         
           //$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
     
           $sql = "SELECT title, releasedate, actor1, actor2, actor3, actor4 FROM $genre WHERE $ry and (actor1 like '%$actor_name%' or actor2 like '%$actor_name%'  or actor3 like '%$actor_name%' or actor4 like '%$actor_name%') ORDER BY title LIMIT 20";//year DEC
           $result = mysqli_query($conn, $sql);

           if ($result->num_rows==0){
            error_reporting(0);
          
          echo "<center><form class='start'><a href='KnowActor.php'><input type='button' class='fun-btn' value='GO BACK' style='position: absolute; left:45%; top:50%;'></a></form></center>";   
            error_reporting(0);      
         } else {
        
     
           //$row = mysqli_fetch_assoc($result);            
           //$count = mysqli_num_rows($result);      
     
         //print_r($row);
           
     ?>

<center>
           <table class="type09" style="position: absolute; top:45%; left:15%; border-collapse: collapse; text-align: left; line-height: 1.5;">
            <thead><tr><th scope='cols' align='middle'>Rank</th><th scope='cols' align='middle'>MOVIE</th><th scope='cols' align='middle'>MAIN ACTOR</th><th scope='cols' align='middle'>RELEASED YEAR</th><th scope='cols' align='middle'>LINK</th></tr></thead></center>
        
        <?php
        $a=1;
           while ($row2 = mysqli_fetch_assoc($result)){
               
            error_reporting(0);
            echo "<tbody>
            <tr>
            <th scope='row' align='middle'>",$a,"</th>
            <td align='middle'>",$row2[title],"</td>
            <td align='middle'>",$row2[actor1],"</td>
            <td align='middle'>",$row2[releasedate],"</td>
            <td align='middle'><a href='https://en.wikipedia.org/wiki/$row2[title]'><img src ='button.png' style='width: 30px; height: 15px'></a></td>
            </tr>
            </tbody>";
            $a=$a+1;

            
             }
          }

          $conn->close();
        
       
?>

</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div style="position : fixed ; bottom:5px; right : 5px;">
<a href="#pos1"><img src="point.gif" width="180" height="180" ></a>


</div>
<br><br><br><br><br><br><br><br>

            
    </body>
</html>

