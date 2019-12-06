<?php

function listar_post($cnn, $whr = null ){

    $sql = "SELECT  post.id_post AS id_post, categoria.nombre_categoria AS nombre_categoria, 
	post.titulo AS titulo, post.descripcion AS descripcion,
    post.id_usuario AS id_usuario
    FROM categoria , post WHERE categoria.id_categoria = post.id_categoria";

    if(!empty($whr)){
        $sql .= " AND post.titulo LIKE '%$whr%'";
        $post = mysqli_query($cnn, $sql);

    }
    
    $post = mysqli_query($cnn, $sql);
    
    $resultado = array();

    if($post && mysqli_num_rows($post) >= 1 ){
        $resultado = $post;
    }else{
        echo 'No se encontro coincidencias'; //por la busqueda
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

function listar_detalle_post($cnn, $id_post ){
    
    $sql_list = "SELECT  post.id_post AS id_post, categoria.nombre_categoria 
    AS nombre_categoria, 
	    post.titulo AS titulo, post.descripcion AS descripcion
    FROM categoria , post WHERE categoria.id_categoria = post.id_categoria
    AND post.id_post =" . $id_post;

    $detalle_post = mysqli_query($cnn, $sql_list );
    $resultado;
    if($detalle_post && mysqli_num_rows($detalle_post) >= 1 ){
        $resultado = $detalle_post;
    }
    return $resultado;
}



?>