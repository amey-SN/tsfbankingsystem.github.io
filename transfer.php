<?php
session_start();
$server="localhost:3307";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"user_table");
if(!$con){
    die("Connection failed");
}


$flag=false;

if (isset($_POST['transfer']))
{
$sender=$_SESSION['sender'];
$receiver=$_POST['receiver'];
$amount=$_POST["amount"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
  <a class="navbar-brand nav1" href="#">The Sparks Foundation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Help</a>
      </li>
    </ul>
  </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">About</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>

<?php

$sql = "SELECT amount FROM user WHERE name='$sender'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($res = $result->fetch_assoc()) {
 if($amount>$res["amount"] or $res["amount"]-$amount<100){
    echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'users.php'; });;</script>";

 }
else{
    $sql = "UPDATE 'user' SET amount=(amount-$amount) WHERE Name='$sender'";


if ($con->query($sql) === TRUE) {
  $flag=true;
} else {
  echo "Error updating record: " . $con->error;
}
 }

  }
} else {
  echo "0 results";
}

if($flag==true){
$sql = "UPDATE `user` SET amount=(amount+$amount) WHERE name='$receiver'";

if ($con->query($sql) === TRUE) {
  $flag=true;

} else {
  echo "Error updating record: " . $con->error;
}
}
if($flag==true){
$sql = "INSERT INTO `transfer` (`transfer_id`, `sender`, `receiver`, `amount`) VALUES (NULL, '$sender','$receiver','$amount')";
if ($con->query($sql) === TRUE) {
} else
{
  echo "Error updating record: " . $con->error;
}
}
}
if($flag==true){
echo "<script>swal('Transfered!', 'Transaction Successfull','success').then(function() { window. location = 'users.php'; });;</script>";
}
elseif($flag==false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>
