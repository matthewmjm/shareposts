<?php
    // day
    echo date('d');
    echo '<br>';
    // month
    echo date('m');
    echo '<br>';
    // year
    echo date('Y');
    echo '<br>';
    // day of the week
    echo date('l');
    echo '<br>';
    // month/day/year
    echo date('m/d/Y');
    echo '<br>';
    // hour
    echo date('h');
    echo '<br>';
    // minute
    echo date('i');
    echo '<br>';
    // seconds
    echo date('s');
    echo '<br>';
    // am or pm
    echo date('a');
    echo '<br>';
    // month/day/year hour:minute:second AM/PM
    echo("New York time - ");
    echo date('m/d/Y h:i:s a');
    echo '<br>';
    
    // set time zone
    date_default_timezone_set('America/Denver');
    
    // month/day/year hour:minute:second AM/PM
    echo("Denver time - ");
    echo date('m/d/Y h:i:s a');
    echo '<br>';
    
    /*
    Unix timestamp is a long integer containing the number of
    seconds between the Unix Epoch (January 1, 1970 00:00:00 GMT) 
    and the time specified.
    */
    
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo 'Brad\'s birthday timestamp is: ';
    echo $timestamp;
    echo '<br>';
    echo 'Brad\'s birthday is: ';
    echo date('m/d/Y h:i:s a', $timestamp);
    
    
    // String to time
    $timestamp2 = strtotime('7:00pm March 22, 2016');
    echo '<br>';
    echo 'March 22, 2016 at 7:00pm timestamp is: ';
    echo $timestamp2;
    echo '<br>';
    echo 'March 22, 2016 at 7:00pm is: ';
    echo date('m/d/Y h:i:s a', $timestamp2);
    echo '<br>';
    $timestamp3 = strtotime('tomorrow');
    echo 'Tomorrow is: ';
    echo date('m/d/Y h:i:s a', $timestamp3);
    echo '<br>';
    $timestamp4 = strtotime('next Sunday');
    echo 'Next Sunday is: ';
    echo date('m/d/Y h:i:s a', $timestamp4);
    echo '<br>';
    $timestamp5 = strtotime('+2 Months');
    echo '+2 Months is: ';
    echo date('m/d/Y h:i:s a', $timestamp5);
    echo '<br>';


?>