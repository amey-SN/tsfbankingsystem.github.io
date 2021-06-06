<?php
session_start();
$server="localhost:3307";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"user_table");
if(!$con){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap" rel="stylesheet">
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

  <!-- Main -->
  <section id="view" class="container">
      <div class="header">
        <h1 class="text-center">CUSTOMER <span>DETAILS</span></h1>
      </div>
      <div class=" row">
        <div class="col col-sm-6" style="background-color:lavender;">
          <div class="box red">
                <h2>Customer Details</h2>
                <p>  <?php
                  if (isset($_SESSION['user']))
                  {
                    $user=$_SESSION['user'];
                    $result=mysqli_query($con,"SELECT * FROM user WHERE Name='$user'");
                    while($res=mysqli_fetch_array($result))
                    {
                      echo "<p><b class='font-weight-bold'>User ID</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: ".$res['id']."</p><br>";
                      echo "<p name='sender'><b class='font-weight-bold'>Name&nbsp;&nbsp&nbsp;</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: ".$res['name']."</p><br>";
                      echo "<p><b class='font-weight-bold'>Account Number&nbsp;&nbsp;</b> : ".$res['acc_no']."</p><br>";
                      echo "<p><b class='font-weight-bold'>Phone</b>&nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp;&nbsp&nbsp;&nbsp;: ".$res['phone']."</p><br>";
                      echo "<p><b class='font-weight-bold'>Email ID</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: ".$res['email']."</p><br>";
                      echo "<p><b class='font-weight-bold'>City</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: ".$res['city']."</p><br>";
                      echo "<p><b class='font-weight-bold text-center'>Balance</b>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: <b>&#8377;</b> " .$res['amount']."</p>";
                    }
                  }
                ?></p>
                </div>
        </div>
        <div class="col col-sm-6" style="background-color:orange;">
            <div class="box red">
              <h2>Money Transfer</h2>
              <div >
                          <form action="transfer.php" method="POST">

                          <b>Sender</b> : <span><input id="myinput" name="sender" disabled type="text" style="width: 40%;border:none;" value='<?php echo "      $user";?>'></input></span>

                              <br><br><br>
                              <div class="row">
                          <b class="col col-sm-2">Reciever:</b>
                          <select name=receiver id="dropdown" class="form-select form-select-sm col col-sm-2"  style="width: 50%;">
                              <option selected>Select Receiver</option>
                              <?php
                              $db = mysqli_connect("localhost:3307", "root", "", "user_table");
                              $result = mysqli_query($db, "SELECT * FROM user WHERE Name!='$user'");
                              while($res = mysqli_fetch_array($result)) {
                                    echo("<option> "."  ".$res['name']."</option>");
                              }
                              ?>
                          </select>
                            </div>

                      <br><br>
                              <b>Amount to be transferred &#8377;:</b>
                              <input name="amount" type="number" style="width:35%;" min="100" required>
                              <br><br><br>
                              <button type="submit" id="transfer"  name="transfer" class="btn btn-outline-success">Transfer</button>
                              </form>
              </div>
            </div>
        </div>
      </div>
  </section>

<script type="text/javascript">
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
  </body>
</html>
