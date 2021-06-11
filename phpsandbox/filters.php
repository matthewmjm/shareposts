<?php
    // Check for posted data
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    } else {
        echo 'No Data';
    } */

    /*
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // Remove illegal characters (sanitize)
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
        // Validate using filter_var since the unsanitized email will be passed in the filter_input below; so we can used that when we sanitize
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }   else {
            echo 'Email is invalid';
        }

        // if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        //     echo 'Email is valid';
        // }   else {
        //     echo 'Email is invalid';
        // }
    } */
    /*
    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var.' is a number';
    } else {
        echo $var.' is NOT a number';
    } */
/*
    $var = 'uu748975979hwj9vuwb';
    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); 
    */

    /*
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));
    */

    $arr = array(
        "name" => "brad traversy",
        "age" => "35",
        "email" => "brad@gmail.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            ) 
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>