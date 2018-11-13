<?php

session_start();
require_once 'conexion.php';

if(isset($_SESSION['codigo_barra'])){
    
    echo 'tu codigo de barras es' . $_SESSION['codigo_barra'];
    $sessActual =  $_SESSION['codigo_barra'];

    $sql = "SELECT * FROM config_prelogin WHERE codigo_barra = '$sessActual'"; 
    $preparando_consulta = $pdo->query($sql);
    $result = $preparando_consulta->fetchAll();

    //var_dump($result);
    
}else{
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th> nombres    </th>
            <th> apellidos  </th>
            <th> telefonos_encargados  </th>      
        </tr>
        <?php
        foreach($result as $row){
            echo '<tr>';
            echo '<td>'. $row['nombres'] .'</td>';
            echo '<td>'. $row['apellidos'] .'</td>';
            echo '<td>'. $row['telefono_encargado'] .'</td>';
            echo '</tr>';
        }   
        ?>
        
    </table>

    
</body>
</html>
