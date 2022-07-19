<?php

require_once('../includes/init.php');


class user{

    private $conn;
    private $table = "user";

    public $id;
    public $first_name;
    public $last_name;
    public $email;


    //connection to DB
    public function __construct(){
        global $db;
        $this->conn = $db;


    }

    public function read(){
        global $db;
        $query = "SELECT * FROM ".$this->table.  " ORDER BY id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        
        return $stmt;


    }

    public function readSingle(){
        global $db;
        $query = "SELECT * FROM ".$this->table. " Where id= :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->id = $row['id'];
        $this->first_name =$row['first_name'];
        $this->last_name = $row['last_name'];
        $this->email = $row['email'];
        
        return $stmt;


    }


    public function create(){
        global $db;
        $query = "INSERT into ".$this->table. " SET first_name = :first_name, last_name = :last_name, email = :email";
        $stmt = $db->prepare($query);


        $this->first_name = $this->first_name ;
        $this->last_name = $this->last_name ;
        $this->email = $this->email ;


        $stmt->bindParam(':first_name', $this->first_name);
        $stmt->bindParam(':last_name', $this->last_name);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        
        
        return $stmt;


    }

    public function delete(){
        global $db;
        $query = "DELETE FROM ".$this->table. " Where id= :id ";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        
        return $stmt;


    }


    public function update(){
        global $db;
        $query = "UPDATE ".$this->table. " SET first_name = :first_name, last_name = :last_name, email = :email WHERE id=:id";
        $stmt = $db->prepare($query);


        $this->first_name = $this->first_name ;
        $this->last_name = $this->last_name ;
        $this->email = $this->email ;

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':first_name', $this->first_name);
        $stmt->bindParam(':last_name', $this->last_name);
        $stmt->bindParam(':email', $this->email);
        if($stmt->execute()){

            return true;
        }
        else {

            return false;
        }

    }

}

$database = new Connection();
$db = $database->openConnection();




?>