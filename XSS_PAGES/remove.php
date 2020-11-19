  <?php
  $con = mysqli_connect("localhost","root","");
  
  mysqli_select_db($con,"user")or die("Failed");
  
  $result1 = mysqli_query($con,"DELETE FROM messages;") or die("Failed to query database".mysqli_error($con));

  ?>
  <html>
  <head>
  </head>
  <body>
    <h1>CLEARED SUCCESSFULLY!!!</h1>
  	<a href = "xss_stored.php" style = "font-size: 40px;"> Go back</a>
  </body>
  </html>

