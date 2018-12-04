<?php

    if(isset($_POST)){
        
        session_start();
        require_once '../includes/conexion.php';

        $nombres =    isset($_POST['nombres']) ?  $_POST['nombres'] : false ;
        $apellidos =  isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email =      isset($_POST['email']) ? trim($_POST['email']) : false;

        if(isset($_SESSION['id_usuario'])){
            $sql = "UPDATE usuarios SET
            nombres='$nombres', apellidos='$apellidos', email='$email'
                WHERE id_usuario = ". $_SESSION['id_usuario'];
            
            $execute = mysqli_query($db, $sql);

            if($execute){
                $_SESSION['datos_actualizados'] = 'Tus datos se han actualizado correctamente' ;
            }else{
                echo 'hubo un error';
            }
        }
    }
    header("Location: ../includes/perfil.php")
?>