<?php
session_start();
if(!isset($_SESSION['usuario'])){
   header('location: login.php');
   die();
}
$operacion="EDITAR";
$id=$_GET['id']; // variable pasada desde listado para editar registro con ese id.

require("./Classes/Cruds_Repuestos.php");
$nuevaConexion = new CrudsRepuestos();
$query = "SELECT nro_parte , designacion , aplicacion , ubicacion , marca , cantidad FROM repuestos WHERE id_repuesto like '$id' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   if($resultado){
                
      while($tabla = $nuevaConexion->ObtenerFilas($resultado)){
         
         $nro = $tabla[0];
         $des = $tabla[1];
         $apl = $tabla[2];
         $ubc = $tabla[3];
         $mar = $tabla[4];
         $can = $tabla[5];
      }
      $nuevaConexion->LimpiarResultado($resultado);
   }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ingreso de repuestos a BD</title>
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/Styles.css?v=<?php echo time(); ?>"> 
     <link rel="stylesheet" href="Estilos/Insert.css?v=<?php echo time(); ?>"> 
     
     
     

</head>
<body>
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_edicion.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
   

   
</body>

</html>