<?php
# $_SERVER SUPERGLOBAL

//Create server array
$server = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Scipt' => $_SERVER['PHP_SELF'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
];

// print_r($server);

//Create a client array
$client = [
    'Client system info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
];

// print_r($client);
