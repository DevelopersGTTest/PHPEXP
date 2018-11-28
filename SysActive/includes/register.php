<?php
    
    require_once 'conexion.php';
    require_once 'navbar.php';

?>
<br><br>
<div class="container">

    <div>
        <?php
            if(isset( $_SESSION['completado'])){
                echo  $_SESSION['completado'];
            }
        ?>
    </div>

<form class="form-signin" action="../controllers/controller_register.php" method="POST" >
    <h2 class="form-signin-heading">Registrate</h2>
    <label for="" class="sr-only">Nombres</label>
    <input type="text" id="inputNombres" class="form-control" name="nombres"  placeholder="Escribe tus nombres">
    <label for="" class="sr-only">Apellidos</label>
    <input type="text" id="inputEmail" class="form-control" name="apellidos"  placeholder="Escribe tus apellidos">
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Escribe tu email" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="escribe tu password" required="">
    <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Acceder</button>
</form>

</div>