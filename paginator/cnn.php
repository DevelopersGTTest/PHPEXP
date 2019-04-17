<?php

try{

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "paginator";

    $db = mysqli_connect($server, $user, $pass, $dbname);

    function sql($q){
        global $db, $resultado;
        $resultado = mysqli_query($db, utf8_decode($q));
        return $resultado;
    }
    
} catch (mysqli_sql_exception $e) { 
    throw $e; 
} 

?>