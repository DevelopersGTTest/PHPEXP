<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'sisdev';

    $db = mysqli_connect($server, $user, $pass, $dbName);

    mysqli_query($db, "SET NAMES 'utf8'");

?>