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
                    img {
                        position : absolute;
                        left : 400px;
                     }   
                    
                     a {
  text-transform: uppercase;
  font-size: 36px;
  color: black;
  text-decoration: none;
  position: relative;
  display: block;
}
                     .link-1 a:before, 
                     .link-1 a:after {
  content: '';
  border-top: solid 1px black;
  border-bottom: solid 1px black;
  position: absolute;
  top:0;
  bottom: 0;
  width: 0;
}

.link-1 a:before { left: 0; }
.link-1 a:after { right: 0; }

.link-1 a:hover:before, 
.link-1 a:hover:after {
  width: 50%;
}

.link-1 a:before, 
.link-1 a:after {
  -webkit-transition: all 0.2s ease;
          transition: all 0.2s ease;
}
                     

                </style>
                       
    </head>
    <body class="bgimg">
            
            <hr align="center"  style="border: solid 1px  lightgreen; width: 40% ;">

                    <img src="moivegator_left.png" width="100" height="100" style="position:absolute; left:30%;"> 
                    <p style=" font-size:60px; position: absolute; left: 39%; top: -6%;">Moviegator!</p>
                    <img src="logoleft.png" width="100" height="100" style="position:absolute; left:64%;">
<br>
<br>
<br>
<br>
<br>
            <hr align="center" style="border: solid 1px  lightgreen; top:70%; width: 40% ;">
            <hr style="border: solid 1px  lightgreen; position: absolute ; top:60%; left:33% ;width:460px; -webkit-transform: rotate(90deg);" >
<br>
<br> 
<br>
<br>
<br>
<br>
<br>
<br>      
            <form>
               <table>
                   <tr>
                       <td style="position:absolute; left:3%; font-size: 40px">
                            <div class="link-1">
                                    <a href="KnowActor.php">
                                      <span class="thin" style="font-size: 50px">DO YOU KNOW ACTOR?</span></a>
                                   
                            </div>
                            <tr>
                              
                            </tr>
                       </td>
                       <td style="position:absolute; right:16%; font-size: 40px">
                            <div class="link-1">
                                    <a href="DontKnow.php">
                                      <span class="thin" style="font-size: 50px">OR NOT ?</span>
                                   
                                  </div>
                                  <tr>
                                      
                                        
          
                                  </tr>
                       </td>
                   </tr>
               </table>
           </form> 

           


    </body>
</html>