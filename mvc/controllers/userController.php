<?php

class userController{
 
    public function showUsers(){
        require_once '../models/User.php';

        $user = new User();
        //falta logica de negocio
    }

    public function createUser(){
        require_once 'views/userViews/create.php';
    }
    

}



?>