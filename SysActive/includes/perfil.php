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
    <title>Login</title>
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
        </div>
    <?php endif; ?>

</body>
</html>