<?php

require_once 'conexion.php';

$ins = false;

$sql = "SELECT * FROM bus";
$array = $pdo->query($sql);
$result = $array->fetchAll();

if(!empty($_POST)){
    $codigo_barra = $_POST['codigo_barra'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $id_bus_manana = $_POST['id_bus_manana'];
    $id_bus_tarde = $_POST['id_bus_tarde'];

    $insrt = "INSERT INTO config_prelogin(codigo_barra, nombres, apellidos,id_bus_manana, id_bus_tarde)
    VALUES(:codigo_barra, :nombres, :apellidos, :id_bus_manana, :id_bus_tarde)";

    $consulta = $pdo->prepare($insrt);
   

    $ins = $consulta->execute([
        'codigo_barra' =>  $codigo_barra,
        'nombres'=> $nombres,
        'apellidos' => $apellidos,
        'id_bus_manana' => $id_bus_manana,
        'id_bus_tarde' => $id_bus_tarde, 
    ]);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRE LOGIN</title>
</head>
<body>
  
  <form action="login.php" method="POST" >
    <label for="">codigo_barra</label>
    <input type="number"  name="codigo_barra" id="codigo_barra" placeholder="Ingrese su codigo de barras">
    <label for="nombres">nombres</label>
    <input type="text"  name="nombres" id="nombres" placeholder="Ingrese sus nombres">
    <label for="">apellidos</label>
    <input type="text" name="apellidos" id="apellidos" placeholder="ingrese sus apellidos">
    <label for="">bus por la mañana</label>
    <select name="id_bus_manana" id="id_bus_manana" >
    <?php
    foreach($result as $val){
        echo "<option value=".$val['id_bus'].">". $val['nombre_bus'] . "</option>";
    }
    ?>
    </select>
    <label for="">bus por la tarde</label>
    <select name="id_bus_tarde" id="id_bus_tarde" >
    <?php
    foreach($result as $val){
        echo "<option  value=".$val['id_bus'].">". $val['nombre_bus'] . "</option>";
    }
    ?>                                  
    </select>
    <input type="submit" value="Save" >
  </form>


</html>