<?php 
class Connection{

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'kredo_perf';
    private $conn;


    public function __construct()
    {
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->database);

        if($this->conn->connect_error){
            die($this->conn->connect_error);
        }else{
            return $this->conn;
        }
    }
    



}



?>