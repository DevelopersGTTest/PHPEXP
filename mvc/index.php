<?php

require_once 'controllers/userController.php';

if(isset($_GET['controleerName']
    && class_exists($_GET['controleerName']))){
        
        $nameCtrl = $_GET['controleerName'];
        $userCtrl = new $nameCtrl();

    if(isset($_GET['action']) 
        && method_exists($userCtrl, $_GET['action'])){
            
            $action = $_GET['action'];
            $userCtrl->$action();
    
        }else{
        echo 'llamada incorrecta a la referencia';
    }

}else{
    echo 'llamada incorrecta al controler';
}










?>