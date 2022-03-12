<?php
session_start();
$operacion = "";

require("./Classes/Cruds_Repuestos.php");


 
$mar = $_POST['inlineRadioOptions'];
$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];



$nuevaConexion = new CrudsRepuestos();
 
if(isset($nro) && !empty($nro)){
   $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d WHERE nro_parte like '$nro%' AND r.id_repuesto = d.repuesto_id  limit 200 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($apl) && !empty($apl)){
   $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d  WHERE aplicacion like '%$apl%' AND r.id_repuesto = d.repuesto_id limit 200";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($des) && !empty($des)){
   $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d WHERE designacion like '%$des%' AND r.id_repuesto = d.repuesto_id limit 200 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

}else if((isset($mar) && !empty($mar))){
   $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d  WHERE marca like '$mar' AND r.id_repuesto = d.repuesto_id limit 200 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}
else{

   header('Location: busquedaXdestino.php');
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
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_lista_ubicacion.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>