<?php
    
    require_once 'conexion.php';
    require_once 'navbar.php';

?>
<br><br>
<div>
    <?php
        if(isset($_SESSION['completado'])){
            echo $_SESSION['completado'];
        }
    ?>
</div>

<div class="container">

<form class="form-signin">
    <h2 class="form-signin-heading">Coloca tus credenciales</h2>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
</form>

</div>