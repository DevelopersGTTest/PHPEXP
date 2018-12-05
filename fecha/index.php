<?php

if(!empty($_POST)){

    require_once 'conexion.php';
    date_default_timezone_set('America/Guatemala');
    $fecha = date('Y-m-d');
    
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO demo(comentario, fecha) VALUES('$comentario', '$fecha')";

    $query = mysqli_query($db, $sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="index.php" method="POST">
        <label for="">comentario</label>
        <input type="text" name="comentario" placeholder="escribe tu comentario">
        <label for="">fecha</label>
        <input type="date" name="fecha" value="<?= $fecha ?>" >
        <input type="submit" value="Guardar">        
    </form>
</body>
</html>