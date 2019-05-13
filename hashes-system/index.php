<?php


//Encoded
$user = 'pablo@h!cK__id';
$other = '12';

$mixed = $user ."." . $other;

$data_encoded = base64_encode( $mixed );

var_dump( $data_encoded);
//die();
//Decoded
/*

fix encrypt building 13/05/2019


$data_decoded = base64_decode( $data_encoded );
echo $data_decoded;
die();

//individual parts
$part_one  = explode('.', $data_decoded, 0 );
var_dump($part_one);
die();

$part_two   explode('.', $data_decoded, 1 ); 
*/


?>
