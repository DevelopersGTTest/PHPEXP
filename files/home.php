<?php

session_start();

if(isset($_SESSION['codigo_barra'])){
    echo 'tu codigo de barras es' . $_SESSION['codigo_barra'];
}else{
    echo 'tu codigo de barra es invalido o no existe';
}

?>