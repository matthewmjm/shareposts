<?php 
    session_start();

    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
    $name = isset($_SESSION['email']) ? $_SESSION['email'] : "Guest Email";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Sessions</title>
    </head>
    <body>
        <h1>Thank you <?php echo $name; ?></h1>
        <a href="page4.php">Go To Page 4</a>
    </body>
</html>