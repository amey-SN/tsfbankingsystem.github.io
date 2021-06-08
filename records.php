

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>

    </head>
    <style media="screen">
        .record_table{
        margin-top:90px;
        }
        .table{
        margin-top: 20px;
        }
        }
    </style>
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
                        <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">About</button>
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
        <!--TOTAL TRANSFER RECORDS -->
        <div class="container record_table">
            <h2 class="text-center">LIST OF <span> TRANSACTIONS </span> </h2>
            <table class="container table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Receiver</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date of Transaction</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'config.php'; //connecting to database
                         $id = 0;
                         $sql ="select * from transfer";
                         $query =mysqli_query($conn, $sql);
                         while($rows = mysqli_fetch_assoc($query))
                         {
                           $id = $id+1;
                         ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $id ?></td>
                        <td class="py-2"><?php echo $rows['sender']; ?></td>
                        <td class="py-2"><?php echo $rows['receiver']; ?></td>
                        <td class="py-2"><?php echo $rows['amount']; ?> </td>
                        <td class="py-2"><?php echo $rows['date']; ?> </td>
                        <?php
                            }
                            
                            ?>
                </tbody>
            </table>
        </div>
        <!--END TOTAL TRANSFER RECORDS-->
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
    </body>
</html>

