<?php


$user = $_POST['usuario'];
$pass = $_POST['clave'];

require("./Classes/base_datos.php");

$nuevaConexion = new BaseDatos();
$nuevaConexion->conecta();

$query = "SELECT * FROM login WHERE usuario =   '$user'  AND clave =    '$pass'"  ;


$resultado=$nuevaConexion->ejecutar($query);
$fila=$nuevaConexion->ultimorenglon($resultado);

echo "<pre>";
var_dump($fila);
echo "<pre>";


echo $fila[0]['usuario'];
echo "<br>";

foreach($fila as $row1){
     $row1['usuario'];
     $row1['clave'];
}

if(isset($row1['usuario'] )&& isset($row1['clave'])){
    echo $row1['usuario'];
    echo "<br>";
    echo $row1['clave'];
}else{
    echo "usuario o contraseña incorrecto";
}




?>