<?php 
class DB{
    public $conn;
    public function __construct(){
        $this->conn = mysqli_connect(hostname, username, password, database);
        if (!$this->conn) {
            Notify("Database connectivity failed contat admin");
            die();
        }
    }
}