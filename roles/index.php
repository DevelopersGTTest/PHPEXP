<?php

require_once 'conexion.php';

if(isset($_POST)){
    $nick = isset($_POST['nick']) ? $_POST['nick'] : false ;
    $pass = isset($_POST['pass']) ? $_POST['pass'] : false ;

    var_dump($nick, $pass);
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