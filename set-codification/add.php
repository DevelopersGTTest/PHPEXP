<?php

if(!empty($_POST)){
    require_once 'connection.php';

    $names = $_POST['lname'];
    $age = $_POST['age'];

    $query = "INSERT INTO entity( name, age) VALUES('$names', $age);";
    $resultQ = mysqli_query($db, $query);
    var_dump($resultQ);
    if( $resultQ ){
        echo 'se inserto algo en la db';
        //this a insert
    }

}

?>

<form action="add.php" method="POST" >
    <label for=""> name <input type="text" name="lname" ></label>
    <label for=""> age  <input type="text" name="age" id=""></label>
    <input type="submit">
</form>