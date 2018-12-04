<?php

function listar_post($cnn){

    $sql = "SELECT  categoria.nombre_categoria AS nombre_categoria, 
	post.titulo AS titulo, post.descripcion AS descripcion
    FROM categoria , post WHERE categoria.id_categoria = post.id_categoria";

    $post = mysqli_query($cnn, $sql);

    $resultado;

    if($post && mysqli_num_rows($post) >= 1 ){
        $resultado = $post;
    }

    return $resultado;
}

function listar_categorias($cnn){

    $sql = "SELECT * FROM categoria";

    $categoria = mysqli_query($cnn, $sql);

    $resultado;
    
    if($categoria &&  mysqli_num_rows($categoria) >= 1 ){
        $resultado = $categoria;
    }
    return $resultado;
}

function listar_datos_usuario($cnn, $sess){
    
    $sql = "SELECT * FROM usuarios WHERE id_usuario = '$sess'";
    
    $datos_usuario = mysqli_query($cnn, $sql);

    $resultado;
    if($datos_usuario && mysqli_num_rows($datos_usuario) >= 1 ){
        $resultado = $datos_usuario;
    }

    return $resultado;
}

?>