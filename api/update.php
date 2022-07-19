<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: PUT");

require_once('../core/users.php');

$user = new user();

$data = json_decode(file_get_contents("php://input"));
$user->id = isset($_GET['id']) ? $_GET['id'] : die();


$user->first_name = $data->first_name ;
$user->last_name = $data->last_name ;
$user->email = $data->email ;

if($user->update()){

    echo json_encode('User updated');
}
else{

    echo json_encode('No user updated');

}





?>