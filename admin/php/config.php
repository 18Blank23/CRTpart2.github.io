<?php
$hostname = "remotemysql.com";
  $username = "cix3dqBVsU";
  $password = "nn8hdgwJTx";
  $dbname = "cix3dqBVsU";
  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
