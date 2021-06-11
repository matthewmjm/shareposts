<?php
    # substr()
    # returns a portion of a string
    // $output = substr('Hello', 1, 3);
    // $output = substr('Hello', -2);
    // echo $output;

    # strlen()
    # returns the length of a string
    // $output = strlen('Hello World');
    // echo $output;

    # strpos()
    # find the first occurrence of a specified substring
    // $output = strpos('Hello World', 'o');
    // echo $output;

    # strrpos()
    # find the last occurrence of a specified substring
    // $output = strrpos('Hello World', 'o');
    // echo $output;

    # trim()
    # trims whitespace
    // $text = 'Hello World           ';
    // var_dump($text);
    // echo "<br>";
    // $trimmed = trim($text);
    // var_dump($trimmed);

    # strtoupper()
    # makes everything uppercase
    // $output = strtoupper('Hello World');
    // echo $output;

    # strtolower()
    # makes everything lowercase
    // $output = strtolower('HELLo wORlD');
    // echo $output;

    # ucwords()
    # makes every word start with uppercase
    // $output = ucwords('hello world');
    // echo $output;

    # str_replace()
    # replace all occurrences of a search string with a replacement
    // $text = 'hello world';
    // $output = str_replace('world', 'everyone', $text);
    // echo $output;

    # is_string()
    # tests whether something is a string or not ('1' indicates true; blank is false)
    // $val = 'Hello';
    // $output = is_string($val);
    // echo $output;
    # another is_string() example looping through an array
    // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "$value is a string<br>";
    //     }
    // }

    # gzcompress()
    # allows you to compress a string
    $text = 'Spicy jalapeno bacon ipsum dolor amet jowl drumstick strip steak sirloin brisket swine pancetta shoulder picanha. Meatloaf filet mignon pork boudin pork chop. Picanha chuck alcatra beef ribs filet mignon. Brisket flank turducken pork hamburger porchetta landjaeger biltong pork loin ham hock.';
    $output = gzcompress($text);
    echo $output;
    echo '<br>';
    # gzuncompress()
    # allows you to decompress a string
    echo gzuncompress($output);













?>