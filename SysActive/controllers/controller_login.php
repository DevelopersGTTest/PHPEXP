<?php

if(isset($_POST)){
    
    session_start();
    require_once '../includes/conexion.php'; 
    
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "SELECT * FROM usuarios WHERE email= '$email' AND pass= '$pass'";

    $query = mysqli_query($db, $sql);

    if($query && mysqli_num_rows($query) == 1){
        $usuario = mysqli_fetch_assoc($query);
        
        $_SESSION['email_most'] = $usuario['email'];

        header("Location: ../index.php");

    }else{
        $_SESSION['no_user'] = 'error al loguearse';
        header("Location: ../includes/login.php");
    }
    
    
}

?>