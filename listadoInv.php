<?php
session_start();
$operacion = "";

require("./Classes/Cruds_Repuestos.php");


 
$mar = $_POST['inlineRadioOptions'];
$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];


$nuevaConexion = new CrudsRepuestos();
 
if(isset($nro) && !empty($nro)){
   $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad FROM repuestos WHERE nro_parte like '$nro%' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($apl) && !empty($apl)){
   $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad FROM repuestos WHERE aplicacion like '%$apl%' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($des) && !empty($des)){
   $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad FROM repuestos WHERE designacion like '%$des%' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

}else if((isset($ubc) && !empty($ubc))){
   $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad  FROM repuestos WHERE ubicacion like '$ubc' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

}else if((isset($mar) && !empty($mar))){
   $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad  FROM repuestos WHERE marca like '$mar' ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}
else{

   header('Location: busqueda.php');
   die();
}

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista de resultado de búsqueda</title>
     <!-- CSS only -->
     <script src="https://kit.fontawesome.com/f83f59bfa9.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/Styles.css"> 
     <link rel="stylesheet" href="Estilos/lista.css"> 
     

</head>
<body>
   

   <?php include 'plantillas/cabezaInv.php'; ?>
   <?php include 'plantillas/form_listaInv.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>