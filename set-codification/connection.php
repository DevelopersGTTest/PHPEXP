<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'develop-data';

    
    try{
        
        $db = mysqli_connect($server, $user, $pass, $dbName);
        
        function sql($consulta){
            global $db; 
            $resultado;
            $resultado = mysqli_query($db, utf8_decode($consulta));
            return $resultado;
        }

        /**
         * 
         * function sql(db, query ) //compose
         */


        if(mysqli_connect_errno()){
            echo 'No se puede acceder a la base de datos' . mysqli_connect_errno();
        }else{
            //echo 'Conexion Exitosa!!';
            
        }
    
    } catch (mysqli_sql_exception $e) { 
        throw $e; 
    } 

    
?>