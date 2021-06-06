<<?php
$host = "localhost:3307";
$username = "root";
$password="";
$db_name="user_table";
$conn = mysqli_connect($host, $username, $password, $db_name);
if(!$conn){
  echo "Connection Error";
  exit;
}

  ?>
