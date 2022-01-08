<?php
class BaseDatos 
{
    //definicion de atributos
    private $host;
    private $user;
    private $password;
    private $database;
    private $port;
    private $conn;
    public $mostrar;
    
    public function __construct()
    {
        $this->user = 'root';
        $this->password = '';
        $this->database = 'bd_taller';
        $this->port = 3308;
        $this->host = "localhost";
    }

    public function conecta()
    {
        //creamos y retornamos conexion a bd
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database, $this->port);
        if($this->conn->connect_errno)
        {
            die("Error de  conexión: (" . $this->conn->connect_error . ") " . $this->conn->connect_errno);
        } /*else {
            echo "se conecto ok";
            echo "<br>";
        }*/
    }

    public function cerrarBD()
    {
        //cerramos la conexion con la bd
        $this->conn->close();
    }

    public function ejecutar($sql)
    {
        //retorna resultado de una consulta
        $result = $this->conn->query($sql);
        return $result;
    }

    public function renglones()
    {
        //devuelve la cantidad e filas en juego
        return $this->conn->affected->rows;
    }

    public function ultimorenglon($result)
    {    
        //nos arroja el ultimo registro
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function limpiarquery($result)
    {
        $result->free_result();
    }
}



?>