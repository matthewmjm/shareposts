<?php
    if(isset($_GET['name'])){
        // echo $_GET['name'];
        // echo "<br>";
        // echo $_GET['email'];
        // echo "<br>";
        // print_r($_GET);
        // echo "<br>";
        $name = htmlentities($_GET['name']);
        echo $name;
        echo "<br>";
    }
    /*
    
    if(isset($_POST['name'])){
        // $name = htmlentities($_POST['name']);
        // echo $name;
        // echo "<br>";
        // print_r($_POST);
    }
    
    if(isset($_REQUEST['name'])){
        // $name = htmlentities($_REQUEST['name']);
        // echo $name;
        // echo "<br>";
        // print_r($_REQUEST);
    }
    
    // if(isset($_REQUEST['name'])){
    //     $name = htmlentities($_REQUEST['name']);
    //     echo $name;
    //     echo "<br>";
    //     print_r($_REQUEST);
    // }
    echo $_SERVER['QUERY_STRING'];
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <!-- <form method="POST" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form> -->
    <ul>
        <li>
            <a href="get_post.php?name=Matthew">Matthew</a>
        </li>
        <li>
            <a href="get_post.php?name=Matt">Matt</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>

