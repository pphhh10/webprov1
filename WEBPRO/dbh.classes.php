<?php

class Dbh {

    public $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    
    protected function connect(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error! : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}