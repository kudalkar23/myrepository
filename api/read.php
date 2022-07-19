<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET");

require_once('../core/users.php');

$user = new user();
$result = $user->read();

if ($result->rowCount() > 0){
    $user_arr = array();
    $user_arr['data'] = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $user_item = array(
            'id' => $id,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email

        );
    array_push($user_arr['data'], $user_item); 


    }
    echo json_encode($user_arr);
}
else{

    echo json_encode(array('message'=>'No data found'));
}


?>