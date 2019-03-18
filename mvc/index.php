<?php

require_once 'controllers/userController.php';

if(isset($_GET['ctrlName']) 
    && class_exists($_GET['ctrlName'])){
        
        /*
            CALL URL = http://localhost:8082/PHPEXP/mvc/?ctrlName=userController&action=showUsers        
        */
        $name_Ctrl = $_GET['ctrlName'];
        $userCtrl = new  $name_Ctrl();

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