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
                background-color: lightseagreen;
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
      .inp1{
        margin-top: 70px;
        height: 40px;
        width: 500px;
        border: 2px solid black;
      }
      .b2{
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
   <p>
   <textarea type="text" name="message" placeholder="Enter your message" class = "inp1" style = "font-size: 20px; width: 800px; height:200px;"></textarea></p>
   <br><br><br>
   <input type="submit" name="submit" value="POST" class = "b2">
   <button class = "b2" type = "button" onclick= "location.href='../XSS/remove.php';">CLEAR</button>
   
   </form><br>
   <p><font size = "6">All the messages appear below </font></p>
	</div>
  <br><br><br><br><br><br><br><br><br>
  <center>
    <font size = "6">
      <table border = "1px" width  = "100%" cellpadding = "0px" cellspacing="0px" style = "margin-top: -100px; background-color: lightblue">
        <tr>
            <th>MESSAGES</th>
        </tr>
      </table>
  </font></center>
        <center>
<font size = "5">
<?php 
  $con = mysqli_connect("localhost","root","");
  
  mysqli_select_db($con,"user")or die("Failed");
  $sql = "SELECT message from messages;";
  $result = mysqli_query($con,$sql);
  
  
  if($result-> num_rows > 0){
           while($row = mysqli_fetch_row($result )){
            echo $row[0];
            echo "<br>";
           }
  }

?>
<?php
 if(isset($_GET["message"])){
  $message = $_GET["message"];
  $message = trim($_GET["message"]);

  $message = strip_tags($message );
  $message = htmlspecialchars( $message );
  
  //Method-2
 
  //$message = htmlspecialchars( $message );

  $con = mysqli_connect("localhost","root","");
  mysqli_real_escape_string($con,$message);
  
  mysqli_select_db($con,"user")or die("Failed");
  
  $sql1 = "INSERT into messages values('$message');";
  $result1 = mysqli_query($con,$sql1);
  
  echo ($message);
}
  ?>
</font>
</center>
</font>
</center>
</body>
</html>
