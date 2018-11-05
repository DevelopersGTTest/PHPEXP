<?php

require_once 'conexion.php';

$sql = "SELECT * FROM bus";
$array = $pdo->query($sql);
$result = $array->fetchAll();


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
  
   
<!-- Dinamico -->
<select>
<?php
    foreach($result as $val){
        echo "<option value=".$val['id_bus'].">". $val['nombre_bus'] . "</option>";
    }
                      
   ?>  
</select>

</body>
</html>