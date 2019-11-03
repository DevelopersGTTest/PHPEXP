<?php
    header('Content-Type: text/html; charset=UTF-8');  
    require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Random Example  </title>
</head>
<body>
    <a href="add.php"> Add </a>
    <table style="width:60%">
  <tr>
    <th>Firstname</th>
    <th>Age</th>
  </tr>
  <?php 
    $query = "SELECT * FROM entity";
    $resultQ = sql($query);
    foreach( $resultQ as $key => $value ):
        var_dump($value);
  ?>
  <tr>
    <td><?=$value['name'] ?></td>
    <td><?=$value['age'] ?></td>
  </tr>
  <?php
    endforeach;
  ?>
  </table>
</body>
</html>