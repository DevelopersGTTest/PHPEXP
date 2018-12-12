<?php
    session_start();
    require_once 'funciones.php';
    $id = intval($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once 'cdn.php';
    ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php 
        require_once 'navbar.php';
    ?>
</head>
<body>

    <?php
        $detalle_post = listar_detalle_post($db, $id);
        foreach($detalle_post as $value): 
    ?>

    <div class="container">
        <div class="card">
            <h5 class="card-header"><?=$value['nombre_categoria']?></h5>
            <div class="card-body">
                <h5 class="card-title"><?=$value['titulo'] ?></h5>
                <p class="card-text"><?=$value['descripcion']?> </p>
            </div>
        </div>
    </div>

    <?php
    
        endforeach;
    ?>

    <div class="container">
        <div class="form-group">
            <br>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <a href="#" class="btn btn-success">Agregar mi respuesta</a>
        </div>
    </div>
    
</body>
</html>