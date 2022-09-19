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

    public function save($first_name, $last_name, $city_name, $email,$insertdate){
        $sql = "INSERT INTO $this->employeeTable(names,lastname,city_name,email,date_time) VALUES('$first_name', '$last_name','$city_name','$email','$insertdate')";
        $query = $this->con->query($sql);

        if($query){
            return true;
        }else{
            return false;
        }
    }   
}


?>