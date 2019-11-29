<?php

try{

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "paginator";

    $db = mysqli_connect($server, $user, $pass, $dbname);
    //def notations
    function sql($q){
        global $db;
        $result = mysqli_query($db, $q);
        return $result;
    }

    //echo 'db connected';
    
    //Adding generic Base operations....
    //no n ages
} catch (mysqli_sql_exception $e) { 
    throw $e; 
} 

?>