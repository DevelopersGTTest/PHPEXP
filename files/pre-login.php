<?php

require_once 'conexion.php';

$ins = false;
$apli = false;

$sql = "SELECT * FROM bus";
$array = $pdo->query($sql);
$result = $array->fetchAll();

//PAGOS
$sqlx = "SELECT * FROM mes";
$payment = $pdo->query($sqlx);
$resultx = $payment->fetchAll();

if(!empty($_POST)){
    $codigo_barra = $_POST['codigo_barra'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono_encargado = $_POST['telefono_encargado'];
    $email_encargado = $_POST['email_encargado'];
    $id_bus_manana = $_POST['id_bus_manana'];
    $id_bus_tarde = $_POST['id_bus_tarde'];

    //FIxed de nueva consulta
    $insrt = "INSERT INTO config_prelogin(codigo_barra, nombres, apellidos, telefono_encargado, 
    email_encargado, id_bus_manana, id_bus_tarde)
    VALUES(:codigo_barra, :nombres, :apellidos, :telefono_encargado, :email_encargado, 
    :id_bus_manana, :id_bus_tarde)";

    $consulta = $pdo->prepare($insrt);
   

    $ins = $consulta->execute([
        'codigo_barra' =>  $codigo_barra,
        'nombres'=> $nombres,
        'apellidos' => $apellidos,
        'telefono_encargado' => $telefono_encargado,
        'email_encargado' => $email_encargado,
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

    <?php
        $message = 'Tu informacion se inserto!!!';
        if($ins == true){
            echo '<p>'. $message .'</p>'; 
        }
    ?>
  
  <form action="login.php" method="POST" >
    <label for="">codigo_barra</label>
    <input type="number"  name="codigo_barra" id="codigo_barra" placeholder="Ingrese su codigo de barras">
    <label for="nombres">nombres</label>
    <input type="text"  name="nombres" id="nombres" placeholder="Ingrese sus nombres">
    <label for="">apellidos</label>
    <input type="text" name="apellidos" id="apellidos" placeholder="ingrese sus apellidos">
    <label for="">numero de telefono</label>
    <input type="number" name="telefono_encargado" placeholder="Ingrese">
    <label for="">Correo electronico</label>
    <input type="email" name="email_encargado" placeholder="email_encargado" >
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


  <h1>Esta es la seccion de pagos</h1>

  <form action="">
    <label for="">cantidad de pago</label>
    <input type="text" name="cantidad_pago" placeholder="Ingresa tu cantidad pago" >
    <label for="">cantidad de mora</label>
    <input type="text" name="cantidad_mora" placeholder="Ingresa tu cantidad de mora">
    </form>
    <br>
        <a class="toggle" href="#example">APLICAR</a>
    <br>


    <div class="toggle-content" id="example" style="display: none;" >
        <table>
            <th>
                <tr>Mes</tr>
                <tr>pago mens</tr>
                <tr>cant mora</tr>
            </th>
            <?php
              foreach($resultx as $val ){
                  echo '<p>' . $val['id_mes'] .'<>';
              }  
            ?>
        
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <script src="./controller.js" ></script>

</html>