<?php

session_start();
require_once 'conexion.php';
$result = false;

if(!empty($_POST)){
    $codigo_barra = $_POST['codigo_barra'];
    $codigo_raspable = $_POST['codigo_raspable'];

    
    $query = "SELECT * FROM card WHERE codigo_barra= :codigo_barra 
                AND codigo_raspable= :codigo_raspable";

    $prepared = $pdo->prepare($query);           
    $prepared->execute([
        'codigo_barra' => $codigo_barra,
        'codigo_raspable' => $codigo_raspable 
    ]);
   
    $result = $prepared->fetch(PDO::FETCH_ASSOC);

    $_SESSION['codigo_barra'] =  $codigo_barra; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi super login</title>
</head>
<body>

    <?php
    if($result == true){
        header('Location: home.php');
    }        
    ?>

    <a href="pre-login.php">PRE-LOGIN</a>

    <form action="login.php" method="POST" >
        <label for="">codigo_barra</label>
        <input type="number" name="codigo_barra" id="codigo_barra">
        <label for="">codigo_raspable</label>
        <input type="text" name="codigo_raspable" id="codigo_raspable">
        <input type="submit" value="loguarse" name="log"> 
    </form>

</body>
</html>