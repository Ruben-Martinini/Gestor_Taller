<?php

//guardo variable de referencia pagina anterior
$refer = $_SERVER['HTTP_REFERER'];



$user = $_POST['usuario'];
$pass = $_POST['clave'];

require("./Classes/base_datos.php");

$nuevaConexion = new BaseDatos();
$nuevaConexion->conecta();

$query = "SELECT * FROM login WHERE usuario = '$user'  AND clave = '$pass'"  ;


$resultado=$nuevaConexion->ejecutar($query);
$fila=$nuevaConexion->ultimorenglon($resultado);


foreach($fila as $row1){
     $row1['usuario'];
     $row1['clave'];
}

if(isset($row1['usuario'] )&& isset($row1['clave'])){
   //creo sesion 
    session_start();
  //Guardo variable de sesion 
  $_SESSION['usuario'] = $_POST['usuario'];
  
    header('Location: busqueda.php');
    die();
}else{
    // "usuario o contraseña incorrecto"
    header("Location: $refer");
    die();
}




?>