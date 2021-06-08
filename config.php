<?php
$host = "localhost:3307"; //server name
$username = "root"; //username of server
$password=""; //password if required (generally not required for localhost database)
$db_name="user_table"; //database name
$conn = mysqli_connect($host, $username, $password, $db_name); //conecting to database
if(!$conn){ //checking for connectivity
  echo "Connection Error";
  exit;
}

?>
