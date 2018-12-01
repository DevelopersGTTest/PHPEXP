<?php

if(isset($_POST)){

    //session_start();
    require_once '../includes/conexion.php';

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $id_categoria =  intval($_POST['id_categoria']);
    $id_usuario =  intval($_POST['id_usuario']);

    $sql = "INSERT INTO post(titulo, descripcion, id_categoria, id_usuario) 
        VALUES('$titulo', '$descripcion', $id_categoria, $id_usuario)";

    $query = mysqli_query($db, $sql);

    if($query){
        header("Location: ../index.php");
    }
}

?>