<?php

try{
    
    /**
     * @soap
     */

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "soap-testing";

    $db = mysqli_connect($server, $user, $pass, $dbname);

    function sql($q){
        global $db;
        $result = mysqli_query($db, $q);
        return $result;
    }

} catch (mysqli_sql_exception $e) { 
    throw $e; 
} 

?>