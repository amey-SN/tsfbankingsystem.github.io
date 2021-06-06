<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Customers</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
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

  <section id="user_table">
          <div class="container">
            <h2>LIST OF <span> CUSTOMERS </span> </h2>
            <ul class="responsive-table">
                <li class="table-header" style="position: sticky;top:0" ><div class="col col-1 header">Id</div>
                  <div class="col col-2 header">Customer Name</div>
                  <div class="col col-3 header">Email</div>
                  <div class="col col-4 header">Amount</div>
                  <div class="col col-5 header">Action</div>
                </li>

                <?php
                    include 'config.php';
                    $sql = "SELECT * FROM user";
                    $result = mysqli_query($conn, $sql);
                    while ($res = mysqli_fetch_array($result)){

                echo "<form method ='post' action = 'profile.php'>";

                  echo "<li class='table-row'>";
                    echo   "<div class='col col-1' data-label='JId'>" .$res['id']. "</div>";
                    echo   "<div class='col col-2' data-label='Customer Name'>" .$res['name']. "</div>";
                    echo   "<div class='col col-3' data-label='Amount'>" .$res['email']. "</div>";
                    echo    "<div class='col col-4' data-label='Payment Status'>" .$res['amount']. "</div>";
                    echo "  <div class='col col-1' data-label='Action'><a herf='profile.php'> <button type='submit' class='btn btn-lg btn-success' name='user' id='users1' value= '{$res['name']}' >View</button></a></div>";
                    echo "</li>";
                    echo "</form>";
                  }
                ?>
          </ul>
        </div>

      </section>
      <script type="text/javascript">
      var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
      })

      var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
      container: 'body'
      })


      </script>
  </body>
</html>
