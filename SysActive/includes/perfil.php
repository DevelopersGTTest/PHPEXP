<?php
    session_start();
    require_once './funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once './cdn.php';
    ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis datos</title>
    <?php 
        require_once './navbar.php';
    ?>
</head>
<body>
    
    <?php  if(isset($_SESSION['email_most'])) :?>
        <div>
        <?php  if(isset($_SESSION['id_usuario'])): ?>
            <h3>Bienvenido <?=$_SESSION['email_most'] ; ?></h3>
            <a href="./logout.php">Salir</a>
            <a href="../index.php">Regresar</a>
               <!-- Post Inicio -->
                <?php
                    $datos_usuario = listar_datos_usuario($db, $_SESSION['id_usuario']);
                    if(!empty($datos_usuario)):      
                    foreach($datos_usuario as $val):
                ?>
                <br>
                    <form class="form-signin" action="../controllers/controller_usuario.php" method="POST" >
                        <h2 class="form-signin-heading">Actualiza tus datos</h2>
                        <label for="" class="sr-only">Nombres</label>
                        <input type="text" id="inputNombres" class="form-control" name="nombres"  value="<?=$val['nombres']?>"  placeholder="Escribe tus nombres">
                        <label for="" class="sr-only">Apellidos</label>
                        <input type="text" id="inputEmail" class="form-control" name="apellidos" value="<?=$val['apellidos']?>"  placeholder="Escribe tus apellidos">
                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="email" id="inputEmail" class="form-control" name="email" value="<?=$val['email']?>" placeholder="Escribe tu email" required="" autofocus="">
                        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Acceder</button>
                    </form>       
                <?php  
                    endforeach;   
                    endif;
                ?>    
            <?php endif; ?>
        </div>
    <?php endif; ?>

</body>
</html>