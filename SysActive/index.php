<?php
    session_start();
    require_once './includes/funciones.php';
    if(isset($_SESSION['id_usuario'])){
        $usu =  $_SESSION['id_usuario'];
    }else{
       if(!isset($_SESSION['id_usuario'])){
           $_SESSION['no_usuario'] = "Registrate para poder ver";
           $usu =  $_SESSION['no_usuario'];
       }
    }
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
            <?php if(isset($_SESSION['id_usuario'])) : ?>
                <h3>Bienvenido <?=$_SESSION['email_most'] ; ?></h3>
                <a href="./includes/logout.php">Salir</a>
                <a href="./includes/perfil.php">Ir a mi perfil</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Ingresar Post
                </button>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Post Inicio -->
    <?php

        if(isset($_SESSION['res_busqueda']) >= 1 ){
            $post = listar_post($db, 'Spring');
            var_dump($post);
        }else{
            $post = listar_post($db);
        }

        if(!empty($post)): 
        foreach($post as $value):
    ?>
    <br>
    <div class="container">
        <div class="card">
            <h5 class="card-header"><?=$value['nombre_categoria']?></h5>
            <div class="card-body">
                <h5 class="card-title"><?=$value['titulo'] ?></h5>
                <p class="card-text"><?=$value['descripcion']?> </p>
                <a href="./includes/detalle-post.php?id=<?=$value['id_post'] ?>" class="btn btn-primary">Ver respuestas</a>
                 <?php
                    if($value['id_usuario'] ==  $usu) :
                 ?>   
                    <a href="./includes/eliminar_post.php?id=<?=$value['id_post'] ?>" class="btn btn-danger">Eliminar</a>
                <?php
                    endif;
                ?>
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

    <!-- Modal Ingresar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form class="form-signin" action="./controllers/controller_post.php" method="POST" >
            <h2 class="form-signin-heading">Ingresa un post</h2>
            <label for="inputEmail" class="sr-only">titulo</label>
            <input type="text" id="inputEmail" class="form-control" id="titulo" name="titulo"  placeholder="Coloca un titulo" required="" autofocus="">
            <label for="inputPassword" class="sr-only">descripcion</label>
            <input type="text" id="inputPassword" class="form-control" id="descripcion" name="descripcion" placeholder="Que deseas preguntar?" required="">
            <select  class="form-control" name="id_categoria" id="">
            <?php
            $categoria = listar_categorias($db);
                if(!empty($categoria)):
                foreach($categoria as $val):
            ?>
                <option value="<?=$val['id_categoria']?>">
                    <?=$val['nombre_categoria']?>    
                </option>
            <?php
                endforeach;
                endif;
            ?>
             </select>
            <?php
               echo  '<input type="hidden" id="inputid_usuario" class="form-control" value="'. $_SESSION['id_usuario'] .'"  id="id_usuario" name="id_usuario" placeholder="id_usuario" required="">';
            ?>  
            <button class="btn btn-lg btn-primary btn-block" id="guardar_data" type="submit">Guardar</button>
        </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
        </div>
        </div>
    </div>
    </div>

</body>
</html>
