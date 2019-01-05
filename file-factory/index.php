<?php

require_once 'cnn.php';

$sql = sql("SELECT * FROM users");
$result =  mysqli_fetch_all($sql);

var_dump($result);

?>