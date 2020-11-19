<!DOCTYPE html>
<html>
<head>
   <title>XSS 1</title>
<style>
*{
  margin:0px;
  padding:0px;
}
.menu{
            width :100%;
            height:80px;
            background-color:rgba(0,0,0,0.85);
            
            
        
          }
#b1{
                background-color:lightseagreen;
                border: 2px solid black;
                color: white;
                padding: 15px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                margin-top: 20px;
                font-family: 'Righteous', cursive;
}
      #b1:hover {
              background-color: rgba(0,0,0,0.8);
          color: white; 
                }
      #inp1{
        margin-top: 70px;
        height: 40px;
        width: 500px;
        border: 2px solid black;
      }
      #b2{
                background-color: rgba(0,0,0,0.8);
                border: 2px solid black;
                color: white;
                padding: 15px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                font-family: 'Righteous', cursive;
       }
       

</style>

</head>
<body>
	
	 <div >
    <div class = "menu">
      </div>
      <center>
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';" id = "b1">HOME</button>
      </center>
    </div>
<div align="center">
   <form method="GET" action="" name="form">
   <p><textarea type="text" name="username" placeholder="Enter your message" id = "inp1" style = "font-size: 20px; width: 800px; height:200px;"></textarea> </p>
   <br><br><br>
   <input type="submit" name="submit" value="SUBMIT" id = "b2">
   
   </form>
	</div>
  <br><br><br>
  <center>
    <font size = "6">

<?php

//Method-1 to prevent malicious scripts from running
/*
if(isset($_GET['username'])){
 
  $username = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t>/i', '', $_GET[ 'username' ] );
  echo($username);
}
*/




//Method -2 to prevent malicious scripts from running

if(isset($_GET['username'])){
 
  $username = htmlspecialchars( $_GET[ 'username' ] );
  echo($username);
}



  




?>
</font>
<center>
</body>
</html>




