<?php

class Crud{
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "crud";
    public $con;

    public $employeeTable = "employee"; // Mysql Table Names

    public function __construct(){
        try {
            $this->con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);	
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function displayRecord(){
        $sql = "SELECT * FROM $this->employeeTable";
        $query = $this->con->query($sql);
        $data = array();

        if($query->num_rows >0 ){
            while($row = $query->fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }else{
            return false;
        }
    }
}


?>