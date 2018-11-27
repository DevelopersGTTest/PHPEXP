<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'pruebarol';

$db = mysqli_connect($server, $user, $pass, $dbname);

mysqli_query($db, "SET NAMES 'utf8'");

if(mysqli_connect_errno()){
    echo 'fallo la conexion :' . mysqli_connect_errno();
}else{
    //echo 'conexion exitosa';
}

?>