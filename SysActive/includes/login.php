<?php
    
    require_once 'conexion.php';
    require_once 'navbar.php';

    session_start();
?>
<br><br>
<div>
    <?php
        if(isset($_SESSION['completado'])){
            echo $_SESSION['completado'];
        }
    ?>
</div>

    <?php if(isset($_SESSION['no_user'])) : ?>
        <script>
            alert("Usuario/Contraseña incorrecta");
        </script>
    <?php endif; ?>

<div class="container">

<form class="form-signin" method="POST" action="../controllers/controller_login.php" >
    <h2 class="form-signin-heading">Coloca tus credenciales</h2>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" name="email"  placeholder="Email address" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Password" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
</form>

</div>