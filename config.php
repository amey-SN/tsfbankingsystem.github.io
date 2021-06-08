<?php
$host = "localhost:3307"; //server name
$username = "id16961631_root"; //username of server
$password="$[*0~WR!QLUNqObb"; //password if required (generally not required for localhost database)
$db_name="id16961631_bankusers"; //database name
$conn = mysqli_connect($host, $username, $password, $db_name); //conecting to database
if(!$conn){ //checking for connectivity
  echo "Connection Error";
  exit;
}

?>
