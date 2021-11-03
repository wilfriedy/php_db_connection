<?php

class Dbcon{
    public $connection;
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_password = '';
    private $db_name = 'database name';

    public function __construct(){
        $this->connectToDb();
    }

    public function connectToDb(){
        $this->connection = new mysqli($this->db_host , $this->db_user , $this->db_password , $this->db_name);

        if(!$this->connection){
            echo ' Failed to connect ' . $this->connection -> connect_error;
        } 
    }


}


?>