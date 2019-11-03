<?php

if(!empty($_POST)){
    require_once 'connection.php';

    $names = $_POST['lname'];
    $age = $_POST['age'];

    $query = "INSERT INTO entity( names, age) VALUES('$names', $age);";
    $result = sql($query);
    var_dump( $result );
    die();
    if( $result ){
        echo 'se inserto algo en la db';
    }

}

?>

<form action="add.php" method="POST" >
    <label for=""> name <input type="text" name="lname" ></label>
    <label for=""> age  <input type="text" name="age" id=""></label>
    <input type="submit">
</form>