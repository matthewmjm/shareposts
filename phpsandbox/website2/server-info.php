<?php
    # $_SERVER SUPERGLOBAL

    // Create Server Array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
    ];

    /*
    echo $server['Host Server Name'];  //localhost
    echo '<br>';
    echo $server['Host Header'];  //localhost
    echo '<br>';
    echo $server['Server Software'];  //Apache/2.4.47 (Unix) OpenSSL/1.1.1k PHP/7.4.19 mod_perl/2.0.11 Perl/v5.32.1
    echo '<br>';
    echo $server['Document Root'];  // /Applications/XAMPP/xamppfiles/htdocs
    echo '<br>';
    echo $server['Current Page'];  // /phpsandbox/website2/server-info.php
    echo '<br>';
    echo $server['Script Name'];  // //phpsandbox/website2/server-info.php
    echo '<br>';
    echo $server['Absolute Path'];  // /Applications/XAMPP/xamppfiles/htdocs/phpsandbox/website2/server.php
    echo '<br>'; */

    // Create Client Array
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],
    ];

    // print_r($client); 
    /* Array ( 
        [Client System Info] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36 
        [Client IP] => ::1 
        [Remote Port] => 57883 
        )
    */


?>