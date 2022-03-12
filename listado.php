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
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE nro_parte like '$nro%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($apl) && !empty($apl)){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE aplicacion like '%$apl%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
} else if(isset($des) && !empty($des)){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE designacion like '%$des%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}else if((isset($ubc) && !empty($ubc))){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE ubicacion like '$ubc' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}else if((isset($mar) && !empty($mar))){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE marca like '$mar' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
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
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_lista.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>