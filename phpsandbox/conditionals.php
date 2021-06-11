<?php
    # CONDITIONALS

    $num = 5;

    if($num == 5){
        echo '5 passed';
        echo '<br>';
    }
    
    if($num == '5'){
        echo 'string 5 passed';
        echo '<br>';
    }


    if($num === '5'){
        echo '5 passed';
    } elseif($num == '6'){
        echo '6 passed';
    } else {
        echo 'did not pass';
        echo '<br>';
    }

    // Nesting
    $num1 = 5;
    if($num1 > 4){
        if($num1 < 10){
            echo '$num1 passed<br>';
        }
    }

    // logical operators
    if($num1 > 4 && $num1 < 10){
        echo "$num1 passed the logical operators<br>";
    }

    // switches
    $favColor = 'yellow';
    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    }


?>