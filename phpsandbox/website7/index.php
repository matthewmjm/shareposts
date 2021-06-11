<?php
    $path = '/dir0//dir1/myfile.php';
    $file = 'file1.txt';

    /*

    // Return filename
    echo basename($path);
    echo "<br>";
    
    // Return filename without ext
    echo basename($path, '.php');
    echo "<br>";
    
    // Return directory name from the path
    echo dirname($path, '.php');
    echo "<br>";

    // to see if a file exists (can also be used to determine if a folder exists)
    echo file_exists($file);

    // to get the absolute path
    echo realpath($file);

    // checks to see if file (unlike file_exists, does not work for a folder)
    echo is_file($file);

    // check if file is writeable
    echo is_writable($file);

    // check if file is readable
    echo is_readable($file);
    // get the file size
    echo filesize($file);

    // make directory
    mkdir('testing');

    // remove directory, if empty
    rmdir('testing');
    
    // Copy file
    echo copy('file1.txt', 'file2.txt');
    
    // Rename a file
    rename('file2.txt', 'myfile.txt');
    
    // Delete a file
    unlink('myfile.txt');
    
    // Read what is in file and output to screen
    echo file_get_contents($file);
    
    // write and replace a string to the file (returns file size)
    echo file_put_contents($file, 'Goodbye World');
    
    //write and append 
    $current = file_get_contents($file);
    $current .= ' Goodbye World';
    file_put_contents($file, $current);
    
    // put a file into a variable called a handle and then run functions
    $handle = fopen($file, 'r'); //read
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */

    // open a file for writing
    $handle = fopen('file2.txt', 'w'); //write
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);
    ?>