<?php
if(isset($_POST)){
    require_once 'conexion.php';
    require_once 'funciones.php';
    $termino = $_POST['termino'];

    $consulta = listar_post($db, $termino);
    $result = mysqli_fetch_assoc($consulta);
    $_SESSION['res_busqueda'] = $consulta;
    $_SESSION['ter'] = $termino;

    //var_dump($_SESSION['res_busqueda']);
    //var_dump($_SESSION['ter'] );
    

    header("Location: ../index.php ");
}
?>