<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        // set to expire in one hour

        header('Location: page2.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Cookies</title>
    </head>
    <body>
        <div class="container">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <label>Name</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </body>
</html>