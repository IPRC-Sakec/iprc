<?php 

trait DB{
    public $conn;
    protected $hostname="localhost";
    protected $username="root";
    protected $dbPassword="";
    protected $dbname="iprc";
    public function connect(){
        $this->conn = new mysqli($this->hostname, $this->username, $this->dbPassword, $this->dbname);
        if($this->conn->connect_errno){
            echo "<script>alert('Database connectivity failed contact admin')</>";
            die("Connection failed: ".$this->conn->connect_error);
            
        }
    }
}


// $conn = mysqli_connect(hostname, username, password, database);

// if (!$conn) {
//   Notify("Database connectivity failed contat admin");
//   die();
// }
