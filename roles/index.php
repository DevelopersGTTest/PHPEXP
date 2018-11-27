<?php

require_once 'conexion.php';

if(isset($_POST)){
    $nick = isset($_POST['nick']) ? $_POST['nick'] : false ;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : false ;

    //Array de usuario
    $arrayUsuario = [ $nick, $pass, 1 ];

    $rol = $arrayUsuario[2];    

    if($rol == 1){
        echo '<script> alert("Eres Admin") </script>';
    }else{
        echo '<script> alert("ese un simple usuario") </script>';
    }
    
    /*Consulta necesaria: 
        SELECT * FROM usuarios WHERE nick="sam" AND pass="123"
        SELECT * FROM usuarios WHERE nick="sam" AND pass="123" AND id_rol = 1
    */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    
    <form action="index.php" method="POST" >
    <label for="">Nick</label>
    <input type="text" name="nick" placeholder="Escribe tu usuario">
    <label for="">Password</label>
    <input type="text" name="pass" placeholder="Escribe tu Password">
    <input type="submit" value="Ingresar" >    
    </form>

</body>
</html>