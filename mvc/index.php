<?php

require_once 'controllers/userController.php';

$userCtrl = new userController();

if(isset($_GET['action'])){
    $action = $_GET['action'];
    $userCtrl->$action();
} 






?>