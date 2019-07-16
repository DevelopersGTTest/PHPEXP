<?php

require_once 'lib/nusoap.php';

/**
 * Configuration Basic
 */
$service  = new soap_server();
$name_space = "urn:hellowsoapwsdl";
$service->configureWSDL("hackobo-ws", $name_space);
$service->schemaTargetNamespac = $name_space;

//register functions
$service->register("helow", 
    array('param' => 'xsd:string' ), 
    array('return' => 'xsd:string' ), 
    $name_space);

function helow($param){
    $result = "helow :" .$param;
    return $result;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$service->service($HTTP_RAW_POST_DATA);




?>