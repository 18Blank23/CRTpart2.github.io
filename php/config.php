<?php
  $hostname = "db4free.net";
  $username = "crtadmin";
  $password = "crtadmin";
  $dbname = "chatadmin";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
