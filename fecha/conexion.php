<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'pruebas';

    $db = mysqli_connect($server, $user, $pass, $dbName);

    mysqli_query($db, "SET NAMES 'utf8'");

    if(mysqli_connect_errno()){
        echo 'No se puede acceder a la base de datos' . mysqli_connect_errno();
    }else{
        //echo 'Conexion Exitosa!!';
    }

?>