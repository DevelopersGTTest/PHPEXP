<?php

class User{

    public $fullname;
    public $username;
    public $password
    public $email

    function getFullname(){
        return $this->fullname;
    }

    function setFullname($fullname){
        $this->fullname = $fullname 
    }

    function getUsername(){
        return $this->username;
    }

    function setUsername($username){
        $this->usename = $username
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password
    }

    function getemail(){
        return $this->email
    }

    function setPassword($password){
        $this->password = $password
    }

}


?>