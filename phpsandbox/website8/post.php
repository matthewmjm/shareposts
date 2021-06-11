<?php
    require('config/config.php');
    require('config/db.php');

    // Check for a submit
    if(isset($_POST['delete'])){
        // Get form Data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        // die($query);
        if(mysqli_query($conn, $query)){
            header('Location: ' . ROOT_URL . '');
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }



    // get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // create query
    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    // get results
    $result = mysqli_query($conn, $query);

    // fetch data
    $post = mysqli_fetch_assoc($result);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
    <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <hr>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pull-right">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="delete" value="delete" class="btn btnn-danger">
        </form>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
    </div>
<?php include('inc/footer.php'); ?>
