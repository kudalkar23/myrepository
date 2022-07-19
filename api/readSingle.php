<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET");

require_once('../core/users.php');

$user = new user();

$user->id = isset($_GET['id']) ? $_GET['id'] : die();
$user->readSingle();

$user_item = array(
    'id' => $user->id,
    'first_name' => $user->first_name,
    'last_name' => $user->last_name,
    'email' => $user->email

);
echo json_encode($user_item);






?>