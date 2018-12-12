<?php

if(isset($_GET)){
    require_once 'conexion.php';
    $id_post = $_GET['id'];

    $sql = "DELETE FROM post WHERE post.id_post = $id_post";
    $resultado = mysqli_query($db, $sql);
    
    header("Location: ../index.php");
}


?>