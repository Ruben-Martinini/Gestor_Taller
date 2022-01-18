<?php
session_start();
$operacion = "Repuesto actualizado";
$id=$_GET['id'];

require ("./Classes/Cruds_Repuestos.php");
 
$mar = $_POST['inlineRadioOptions'];
$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];
$can = $_POST['cantidad'];
$usu;

switch ($_SESSION['usuario']) {
    case 'mecanico1':
        $usu=1;
        break;
    case 'mecanico2':
        $usu=2;
        break;
    case 'mecanico3':
        $usu=3;
        break;
    
}


$nuevaConexion = new CrudsRepuestos();


$query="UPDATE repuestos SET nro_parte = '$nro', designacion = '$des' , aplicacion = '$apl' , ubicacion = '$ubc' , marca = '$mar' , cantidad = '$can', usuario_id = '$usu' WHERE id_repuesto = '$id'";

$resul=$nuevaConexion->Ejecutar($query);
    if($resul){
       
        $RowCount =  $nuevaConexion->CantFilasAfectadas();
        if($RowCount > 0){
           
        $query = "SELECT id_repuesto , nro_parte , designacion , aplicacion , ubicacion , marca , cantidad FROM repuestos WHERE nro_parte like '$nro' ";
         $resultado=$nuevaConexion->Ejecutar($query);
         
        }
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
     
     <link rel="stylesheet" href="Estilos/lista.css"> 
     <link rel="stylesheet" href="Estilos/Styles.css"> 

</head>
<body>
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_lista.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>