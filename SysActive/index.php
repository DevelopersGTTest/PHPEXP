<?php
    session_start();
    require_once './includes/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/funciones.js" ></script>
    <?php
        require_once 'includes/cdn.php';
    ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php 
        require_once 'includes/navbar.php';
    ?>
</head>
<body>

    <?php  if(isset($_SESSION['email_most'])) :?>
        <div>
            <h3>Bienvenido <?=$_SESSION['email_most'] ; ?></h3>
            <a href="./includes/logout.php">Salir</a>
        </div>
    <?php endif; ?>

    <!-- Post Inicio -->
    <?php
        $post = listar_post($db);
        if(!empty($post)):
          foreach($post as $value):
    ?>
    <div class="container">
        <div class="card">
            <h5 class="card-header"><?=$value['nombre_categoria']?></h5>
            <div class="card-body">
                <h5 class="card-title"><?=$value['titulo'] ?></h5>
                <p class="card-text"><?=$value['descripcion']?> </p>
                <a href="#" class="btn btn-primary">Ver respuestas</a>
            </div>
        </div>
    </div>

    <?php  
           endforeach;   
           endif;
    ?>    
    <!--div class="container">
        <div class="card">
            <h5 class="card-header">Backend</h5>
        <div class="card-body">
            <h5 class="card-title">Que es GraphQL</h5>
            <p class="card-text">Es un Lenaguje de consultas </p>
            <a href="#" class="btn btn-primary">Ver respuestas</a>
        </div>
    </div>
    </div-->
    <!-- Post   Fin -->
    
</body>
</html>