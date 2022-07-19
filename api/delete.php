<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: DELETE");

require_once('../core/users.php');

$user = new user();

$user->id = isset($_GET['id']) ? $_GET['id'] : die();
//$user->delete();

if($user->delete()){

    echo json_encode('User deleted');
}
else{

    echo json_encode('No user deleted');

}






?>