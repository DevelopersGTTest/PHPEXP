<?php

    if(isset($_POST)){
        
        session_start();
        require_once '../includes/conexion.php';

        $nombres =    isset($_POST['nombres']) ?  $_POST['nombres'] : false ;
        $apellidos =  isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email =      isset($_POST['email']) ? $_POST['email'] : false;
        $pass =       isset($_POST['pass']) ? $_POST['pass'] : false;

        $sql = "INSERT INTO usuarios(nombres, apellidos, email, pass) 
            VALUES( '$nombres', '$apellidos', '$email',  '$pass')";
        
        $execute = mysqli_query($db, $sql);

        if($execute){
            $_SESSION['completado'] = "Te has registrado exitosamente";
        }else{
            echo 'hubo un error';
        }
    }
    header("Location: ../includes/login.php")
?>