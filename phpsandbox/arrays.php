<?php

    // Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    // echo $people;
    echo $people[1];
    $ids = array(23, 55, 12);
    echo $ids[1];
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[2];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';
    echo $cars[4];

    echo count($cars);
    print_r($cars);
    var_dump($cars);


    // Associative
    $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    echo $people2['Brad'];
    $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    echo $ids2[22];
    $people2['Jill'] = 42;
    print_r($people2);
    var_dump($people2);


    // Multi-Dimensional
    $cars3 = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );

    echo $cars3[1][2];

?>