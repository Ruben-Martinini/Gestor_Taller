<?php
$refer = $_SERVER['HTTP_REFERER'];//guardo variable de referencia pagina anterior

$user = $_POST['usuario'];
$pass = $_POST['clave'];


require("./Classes/Cruds_Repuestos.php");

$nuevaConexion = new CrudsRepuestos();


$query = "SELECT * FROM login WHERE usuario = '$user'  AND clave = '$pass'"  ;


$resultado=$nuevaConexion->Ejecutar($query);
$fila=$nuevaConexion->ObtenerFilas($resultado);


if($fila){
    session_start();//creo sesion 
    $_SESSION['usuario'] = $_POST['usuario'];//Guardo variable de sesion 
   
    $tipoUsuario;
                
     
         echo $tipoUsuario = $fila[3];
          
      
      if(isset($tipoUsuario) && $tipoUsuario==1){
        header('Location: busqueda.php');
        die();
      }else{
        header('Location: busquedaInv.php');
        die();
      }
} else{
  // "usuario o contraseña incorrecto"
  header("Location: $refer");
  die();
}

?>