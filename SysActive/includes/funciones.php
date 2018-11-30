<?php

function listar_post($db){

    $sql = "SELECT  categoria.nombre_categoria AS nombre_categoria, 
	post.titulo AS titulo, post.descripcion AS descripcion
    FROM categoria , post WHERE categoria.id_categoria = post.id_categoria";

    $post = mysqli_query($db, $sql);

    $resultado = array();

    if($post && mysqli_num_rows($post) >= 1 ){
        $resultado = $post;
    }

    return $resultado;
}

?>