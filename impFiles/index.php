<?php
if(!empty($_POST)){
    
    require_once 'conexion.php';

    $nick = $_POST['nick'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE nick='$nick' AND pass='$pass'";
    die();
    $query = mysqli_query($db, $sql);

    if($query && mysqli_num_rows($query) == 1 ){
        $usuario = mysqli_fetch_assoc($query);
        
        $_SESSION['id_rol'] = $usuario['id_rol'];

        if( $_SESSION['id_rol'] == 1 ){
            header("Location: homeadmin.php");
        }else{
            header("Location: homenormal.php");
        }
        
    }else{
        echo '<script> alert("Usuario o Password Incorrecto")  </script>';
    }
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