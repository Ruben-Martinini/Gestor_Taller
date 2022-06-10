<?php
session_start();
$operacion = "Repuesto Cargado";
$id=$_GET['id'];
$cantA=$_GET['cantA'];

require ("./Classes/Cruds_Repuestos.php");
 
$can = $_POST['cantidad'];
$oc =  $_POST['FormaAdquisicion'];
$usu;
$cantOc=$can-$cantA; // esta es la cantidad a utilizar en la actualización del registro de la planilla de oc

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
        
           
                $query2=" UPDATE destino_repuestos SET dp1 = '$can', usuario_id = '$usu' WHERE repuesto_id = '$id'";
        
                $resul2=$nuevaConexion->Ejecutar($query2);
    
                if($resul2){


                    $consultaIdOc= "INSERT INTO orden_compra( repuesto_id, usuario_id , nro_oc, cant_ingresada) VALUES ('$id','$usu','$oc','$cantOc') ";

                    $resulIdOc=$nuevaConexion->Ejecutar($consultaIdOc);
                    
                
                    if($resulIdOc){
       
                   
                           
                        $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d  WHERE id_repuesto like '$id' AND r.id_repuesto = d.repuesto_id limit 500 ";
                               
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
    
    <title>Lista de resultado de actualización en proceso de alta</title>
     <!-- CSS only -->
     <script src="https://kit.fontawesome.com/f83f59bfa9.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/lista.css"> 
     <link rel="stylesheet" href="Estilos/Styles.css"> 

</head>
<body>
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_lista_carga.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>