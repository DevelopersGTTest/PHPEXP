<?php

if(isset($_POST)){
    
    session_start();
    require_once '../includes/conexion.php'; 
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql "SELECT * FROM usuarios WHERE email=$email AND pass=$pass";

    $query = mysqli_query($db, $sql);

    if($query && mysqli_num_rows($query) == 1){
        $usuario = mysqli_fetch_assoc($query);
        var_dump($usuario);

    }else{
        echo '<script> alert("Usuario/Contraseña Incorrecta") </script>';
    }

    
}

?>