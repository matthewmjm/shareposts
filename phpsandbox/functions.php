<?php

    # FUNCTION - Block of code that can be repeatedly called

    // Create Simple Function
    function simpleFunction(){
        echo 'hello world';
        echo '<br>';
    }
    
    // Run a simple function
    simpleFunction();
    
    //function with Param
    function sayHello($name){
        echo "Hello $name<br>";
    }
    sayHello('Joe');

    // Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }
    echo addNumbers(2, 4);
    echo "<br>";

    // By Reference
    $myNum = 10;
    
    // this is not passed by reference therefore it will not manipulate myNum and leaves as is
    function addFive($num){
        $num += 5;
    }
    addFive($myNum);
    echo "Value of addFive: $myNum<br>";
    
    // passed in by reference so it will manipulate myNum
    function addTen(&$num){
        $num += 10;
    }

    addTen($myNum);
    echo "Value of addTen: $myNum<br>";
?>