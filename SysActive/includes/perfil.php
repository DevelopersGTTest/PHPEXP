<?php
    if(isset($_SESSION['email_most'])){
        echo 'puedes acceder pues tienes sesion';
    }else{
        //header("Location: ../index.php");
        echo 'no tienenes el valor de session definida';
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
    
</body>
</html>