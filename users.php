

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>View Customers</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
    </head>
    <body>
        <!--NAV-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light nav1">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                The Sparks Foundation
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button tyoe="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">About</button>
                    </form>
                </div>
            </div>
        </nav>
        <!--END NAV-->
        <!-- MODAL -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">About</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center" style="font-weight: bold;">
                        WELCOME TO THE TSF BASIC BANKING SYSTEM
                    </div>
                    <div class="modal-body">
                        <p>This Site is Developed by <span> Mr. Dhiraj Rajesh Shinde </span> as a task of GRIPJUNE2021 Internship Program by The Sparks Foundation</p>
                        <p>The site is developed using HTML, CSS, BOOTSTRAP5, JavaScript, PHP and MYSQL.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END MODAL-->
        <!--LIST OF CUSTOMERS-->
        <section id="user_table" class= "my-5 p-4">
            <div class="container">
                <h2 class="text-center">LIST OF <span> CUSTOMERS </span> </h2>
                <ul class="responsive-table">
                    <li class="table-header" style="position: sticky;top:0" >
                        <div class="col col-1 header">Id</div>
                        <div class="col col-2 header">Customer Name</div>
                        <div class="col col-3 header">Email</div>
                        <div class="col col-4 header">Amount</div>
                        <div class="col col-5 header">Action</div>
                    </li>

                    <!--PHP SCRIPT TO FETCH DATA FROM DATABASE-->
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM user";
                        $result = mysqli_query($conn, $sql);
                        while ($res = mysqli_fetch_array($result)){ //loop to display each row of user table 
                        echo"<form method ='post' action = 'profile.php'>";
                        echo "<li class='table-row'>";
                        echo   "<div class='col col-1' data-label='JId'>" .$res['id']. "</div>";
                        echo   "<div class='col col-2' data-label='Customer Name'>" .$res['name']. "</div>";
                        echo   "<div class='col col-3' data-label='Amount'>" .$res['email']. "</div>";
                        echo    "<div class='col col-4' data-label='Payment Status'>" .$res['amount']. "</div>";
                        echo "  <div class='col col-1' data-label='Action'><a herf='profile.php'> <button type='submit' class='btn btn-lg btn-success' name='user' id='users1' value= '{$res['name']}'> View</button></a></div>";
                        echo "</li>";
                        echo "</form>";
                        }
                        ?>
                        <!--END PHP SCRIPT-->
                </ul>
            </div>
        </section>
        <!--END LIST OF CUSTOMERS-->
        <!--FOOTER-->
        <footer id="footer" class="bg-light d-flex-column text-center footer">
            <hr class="mt-0">
            <!--Social buttons-->
            <div class="text-center">
            <h4>You can find us at</h4>
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                <a href="#!" class="sbtn btn-large mx-1" title="Facebook">
                    <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#!" class="sbtn btn-large mx-1" title="Linkedin">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#!" class="sbtn btn-large mx-1" title="Twitter">
                    <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                </li>
                <li class="list-inline-item">
                <a href="#!" class="sbtn btn-large mx-1" title="Youtube">
                    <i class="fab fa-youtube-square fa-2x"></i>
                </a>
                </li>
            </ul>
            </div>
            <!--/.Social buttons-->
            <hr class="mb-0">
            <!--Copyright-->
            <div class="py-3 text-center">
            Copyright 2021-
            <a href="https://www.thesparksfoundationsingapore.org/"><span>THE SPARKS FOUNDATION</span></a> | TSF BANKING
            </div>
            <!--/.Copyright-->
        </footer>  
  <!--END FOOTER-->
        <!--SCRIPTS-->
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


