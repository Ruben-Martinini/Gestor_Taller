<?php
session_start();
$operacion = "Repuesto eliminado";
$id=$_GET['id'];

require ("./Classes/Cruds_Repuestos.php");
/* 
$mar = $_POST['inlineRadioOptions'];
$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];
$can = $_POST['cantidad'];
*/
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


$query="DELETE FROM destino_repuestos WHERE repuesto_id ='$id'";
$resul=$nuevaConexion->Ejecutar($query);

if($resul){
    $query1=" DELETE FROM modelo_repuesto  WHERE repuesto_id = '$id'";
    $resul1=$nuevaConexion->Ejecutar($query1);

    if($resul1){
        $query2="DELETE FROM repuestos WHERE id_repuesto ='$id'";
        $resul2=$nuevaConexion->Ejecutar($query2);
            if($resul2){
                $RowCount =  $nuevaConexion->CantFilasAfectadas();
                if($RowCount > 0){
                
                    $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , m.marca , m.SPORTMAN_500_4x2, m.SPORTMAN_500_4x4, m.SPORTMAN_570_4x4, m.RANGER_700_4x4, m.RANGER_700_6x6, m.RANGER_900_4x4, m.IQ_600, m.LX_500, m.LX_550, m.120_PRO, m.25HP_2CYL, m.40HP_2CYL, m.40HP_3CYL, m.50HP_2CYL, m.50HP_3CYL, m.150HP_6CYL, m.U1000, m.U2000, m.EG6500, m.ET12000, m.WB_20XH, m.WB_20XT, d.dp1  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.nro_parte = '$nro' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id ";
                    $resultado=$nuevaConexion->Ejecutar($query);

                
                }
            }
    }  
}
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Resultado de eliminación de repuesto</title>
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