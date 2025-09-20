<?php
    # $_SERVER SUPERGLOBAL
    //CREATER SERVER ARRAY
    $server = [//array asociativo / diccionario
        #key
        "Host Server Name"=> $_SERVER['SERVER_NAME'],
        "Host Header"=> $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ] ;

    foreach($server as $key) {
        #echo''. $key .'<br>';
    };

    //CREATER CLIENT ARRAY
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],//Investigar por que en la respuesta parecen otros browsers distintos al que se esta usando
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],
        ] ;

    #echo '<br>';
    foreach($client as $key) {
        #echo''. $key .'<br>';
    };
?>