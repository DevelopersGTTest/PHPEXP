<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'factory';

    try{

        $db = mysqli_connect($server, $user, $pass, $dbName);
        mysqli_query($db, "SET NAMES 'utf8'");

        if(mysqli_connect_errno()){
            echo 'No se puede acceder a la base de datos' . mysqli_connect_errno();
        }else{
            //echo 'Conexion Exitosa!!';
        }
        
    } catch (mysqli_sql_exception $e) { 
        throw $e; 
    } 
?>