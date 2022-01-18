<?php
require ("./Classes/config.php");

class Conexion{

    protected $conn;

    public function __construct(){
        
        $this->conn = new mysqli(DB_HOST , DB_USER, DB_PASSWORD , DB_DATABASE , DB_PORT);
       
        if($this->conn->connect_errno)
        {
            die("Error de  conexión: (" . $this->conn->connect_error . ") " . $this->conn->connect_errno);
        } 
        
        $this->conn->set_charset(DB_CHARSET);
    }

}

?>