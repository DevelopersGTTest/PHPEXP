<?php

    if(isset($_POST)){
        $nombres =    isset($_POST['nombres']) ?  $_POST['nombres'] : false ;
        $apellidos =  isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
        $email =      isset($_POST['email']) ? $_POST['email'] : false;
        $pass =       isset($_POST['pass']) ? $_POST['pass'] : false;

        $save_user = false;
    }

?>