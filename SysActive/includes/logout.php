<?php

session_start();

if(isset($_SESSION['email_most'])){
    session_destroy();
}

header("Location: login.php")

?>