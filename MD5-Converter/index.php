<?

//the references : https://www.codeofaninja.com/2017/02/create-simple-rest-api-in-php.html

// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get posted data
$dataCodes = json_decode(file_get_contents("php://input"));
var_dump( $dataCodes );


?>