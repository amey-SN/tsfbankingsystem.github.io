<?php
session_start();
include 'config.php';
if (!$conn)
{
    die("Connection failed");
}

$flag = false;

if (isset($_POST['submit']))
{
    $sender = $_SESSION['sender'];
    $receiver = $_POST['reciever'];
    $amount = $_POST['amount1']; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
  </head>
  <body>
    <!--NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">

  </body>
</html>

<?php
    $date = date('Y-m-d H:i:s');
    $sql = "SELECT amount FROM user WHERE name='$sender'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
        while ($row = $result->fetch_assoc())
        {
            if ($amount > $row["amount"] or $row["amount"] - $amount < 100)
            {
                echo "<script>swal( 'Error','Insufficient Balance!','error' ).then(function() { window. location = 'profile.php'; });;</script>";

            }
            else
            {
                $sql = "UPDATE user SET amount=(amount-$amount) WHERE Name='$sender'";

                if ($conn->query($sql) === true)
                {
                    $flag = true;
                }
                else
                {
                    echo "Error updating record: " . $conn->error;
                }
            }

        }
    }
    else
    {
        echo "0 results";
    }

    if ($flag == true)
    {
        $sql = "UPDATE user SET amount=(amount+$amount) WHERE name='$receiver'";

        if ($conn->query($sql) === true)
        {
            $flag = true;

        }
        else
        {
            echo "Error updating record: " . $con->error;
        }
    }
    if ($flag == true)
    {
        $sql = "INSERT INTO transfer (`transfer_id`, `sender`, `receiver`, `amount`, `date` ) VALUES (NULL, '$sender','$receiver','$amount', '$date');";
        if ($conn->query($sql) === true)
        {
        }
        else
        {
            echo "Error updating record: " . $conn->error;
        }
    }
}
if ($flag == true)
{
    echo "<script>swal('Transfered!', 'Transaction Successfull','success').then(function() { window. location = 'records.php'; });;</script>";
}
elseif ($flag == false)
{
    echo "<script>
        $('#text2').show()
     </script>";
}
?>
