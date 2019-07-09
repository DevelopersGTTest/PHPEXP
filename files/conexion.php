<?php
$host = 'localhost';
$user = 'root';
$dbname = 'pruebasphp';
$pass = '';

//build
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}
?>