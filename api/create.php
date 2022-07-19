<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");

require_once('../core/users.php');

$user = new user();

$data = json_decode(file_get_contents("php://input"));

$user->first_name = $data->first_name ;
$user->last_name = $data->last_name ;
$user->email = $data->email ;

if($user->create()){

    echo json_encode('User created');
}
else{

    echo json_encode('No user created');

}





?>