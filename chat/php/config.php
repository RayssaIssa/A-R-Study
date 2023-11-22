<?php
  $hostname = "localhost";
  $usernamee = "root";
  $password = "";
  $dbname = "study";

  $conn = mysqli_connect($hostname, $usernamee, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
