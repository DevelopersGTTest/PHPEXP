<?php

class userController{
 
    public function showUsers(){
        //require_once '../models/User.php';

        //$user = new User();
        //falta logica de negocio
        require_once 'views/userViews/show.php';
        //ref
    }

    public function createUser(){
        require_once 'views/userViews/create.php';
    }
    

}



?>