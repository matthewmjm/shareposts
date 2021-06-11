<?php

    // For
    # @params - init, condition, increment
    for($i = 0;$i <= 10;$i++){
        echo 'Number ' .$i;
        echo '<br>';
    };
    
    // While
    # @params - condition
    $i1 = 0;
    while($i1 < 10){
        echo '<br>';
        echo 'Number ' .$i1;
        $i1++;
    }
    
    // Do While
    // // always runs at least once
    # @params - condition
    echo '<br>';
    $i2 = 0;
    do{
        echo '<br>';
        echo 'Number ' .$i2;
        $i2++;
    }

    while($i2 < 10);

    //Foreach
    // // meant to work with arrays
    # @params - array

    echo '<br>';
    $people = array('Brad', 'Jose', 'William');
    
    foreach($people as $person){
        echo '<br>';
        echo $person;
    }
    
    echo '<br>';
    $people2 = array('Brad' => 'brad@sol.com', 'Jose' => 'jose@sol.com', 'William' => 'will@sol.com');
    
    foreach($people2 as $person2 => $email){
        echo '<br>';
        echo $person2.': '.$email;

    }

    
?>