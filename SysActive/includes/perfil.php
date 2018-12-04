<?php
    session_start();
    if(isset($_SESSION))
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
            <h3>Bienvenido <?=$_SESSION['email_most'] ; ?></h3>
            <a href="./logout.php">Salir</a>
            <a href="../index.php">Regresar</a>

            <form class="form-signin" action="../controllers/controller_usuario.php" method="POST" >
                <h2 class="form-signin-heading">Actualiza tus datos</h2>
                <label for="" class="sr-only">Nombres</label>
                <input type="text" id="inputNombres" class="form-control" name="nombres"  placeholder="Escribe tus nombres">
                <label for="" class="sr-only">Apellidos</label>
                <input type="text" id="inputEmail" class="form-control" name="apellidos"  placeholder="Escribe tus apellidos">
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Escribe tu email" required="" autofocus="">
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Acceder</button>
            </form>

           
        </div>
    <?php endif; ?>

</body>
</html>