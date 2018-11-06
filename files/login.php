<?php

require_once 'conexion.php';
//consulta SELECT * FROM card WHERE codigo_barra='12345' AND codigo_raspable='2468'
$result = false;

if(!empty($_POST)){
 
    $query = "SELECT * FROM card WHERE codigo_barra= :codigo_barra 
                AND codigo_raspable= :codigo_raspable";

    $prepared = $pdo->prepare($query);
    
    
    $prepared->execute([
        'codigo_barra' => $_POST['codigo_barra'],
        'codigo_raspable' => $_POST['codigo_raspable']
    ]);

    //$user = $prepared->fetch(PDO::FETCH_ASSOC);    
    $result = $prepared->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi superlogin</title>
</head>
<body>

    <?php
    var_dump($result);
    if($result == true){
        header('Location: home.php');
    }        
    ?>

    <form action="login.php" method="POST" >
        <label for="">codigo_barra</label>
        <input type="number" name="codigo_barra" id="codigo_barra">
        <label for="">codigo_raspable</label>
        <input type="text" name="codigo_raspable" id="codigo_raspable">
        <input type="submit" value="loguarse" name="log"> 
    </form>

</body>
</html>