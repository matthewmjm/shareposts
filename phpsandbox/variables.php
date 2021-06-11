<?php

    $output = 'Hello World!';
    // echo 'Hello World';
    echo $output;

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;
    echo $sum;

    $string1 = 'Hello';
    $string2 = 'World!!!';
    $greeting = $string1 . ' ' . $string2;
    echo $greeting;
    $greeting2 = "$string1 $string2!!!!!";
    echo $greeting2;

    $string3 = 'They\'re Here';
    echo $string3;

    $float1 = 4.4;
    $bool1 = true;

    define( 'GREETING', 'Hello Everyone');
    echo GREETING;
    define( 'GREETING2', 'Hello Everyone again!', true);
    echo greeting2;


?>