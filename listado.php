<?php
session_start();
$operacion = "";

require("./Classes/Cruds_Repuestos.php");



$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];
$usu;
$idR;


$modelosAcum=" ";

//Procesamiento de modelos para enviar a BD
if (isset($_POST['bgrMarca'])) {
    $mar= $_POST['bgrMarca']; 
   //variables 
    $P= array(0,0,0,0,0,0,0,0,0,0);
    $M= array(0,0,0,0,0,0);
    $H= array(0,0,0,0,0,0); 
   switch ($mar) {

    case "Polaris":
        foreach ($_POST['polaris'] as $key => $value) {
  
            switch($value){
                case "Sportman 500 4x2":
                    $P[0] = 1; 
                    $modelosAcum .= " m.SPORTMAN_500_4x2 LIKE '$P[0]' AND ";            
                    break;
                case "Sportman 500 4x4":
                    $P[1] = 1; 
                    $modelosAcum .= " m.SPORTMAN_500_4x4 LIKE '$P[1]' AND ";
                    break;
                case "Sportman 570 4x4":
                    $P[2] = 1; 
                    $modelosAcum .= " m.SPORTMAN_570_4x4 LIKE '$P[2]' AND ";               
                    break;
                case "Ranger 700 4x4":
                    $P[3] = 1;
                    $modelosAcum .= " m.RANGER_700_4x4 LIKE '$P[3]' AND ";              
                    break;
                case "Ranger 700 6x6":
                    $P[4] = 1;
                    $modelosAcum .= " m.RANGER_700_6x6 LIKE '$P[4]' AND ";                 
                    break;
                case "Ranger 900 4x4":
                    $P[5] = 1; 
                    $modelosAcum .= " m.RANGER_900_4x4 LIKE '$P[5]' AND ";                
                    break;   
                case "IQ 600":
                    $P[6] = 1;
                    $modelosAcum .= " m.IQ_600 LIKE '$P[6]' AND "; 
                    break;
                case "LX 500":
                    $P[7] = 1; 
                    $modelosAcum .= " m.LX_500 LIKE '$P[7]' AND ";               
                    break;
                case "LX 550":
                    $P[8] = 1;
                    $modelosAcum .= " m.LX_550 LIKE '$P[8]' AND ";                
                    break;  
                case "120 Pro":
                    $P[9] = 1;
                    $modelosAcum .= " m.120_PRO LIKE '$P[9]' AND ";                
                    break;                          
            }

        }
        break; 
        case "Mercury":          

            foreach ($_POST['mercury'] as $key => $value) {
      
                switch($value){
                    case "25HP 2cyl":
                        $M[0] = 1; 
                        $modelosAcum .= " m.25HP_2CYL LIKE '$M[0]' AND ";            
                        break;
                    case "40HP 2cyl":
                        $M[1] = 1;
                        $modelosAcum .= " m.40HP_2CYL LIKE '$M[1]' AND ";               
                        break;
                    case "40HP 3cyl":
                        $M[2] = 1; 
                        $modelosAcum .= " m.40HP_3CYL LIKE '$M[2]' AND ";               
                        break;
                    case "50HP 2cyl":
                        $M[3] = 1;
                        $modelosAcum .= " m.50HP_2CYL LIKE '$M[3]' AND ";              
                        break;
                    case "50HP 3cyl":
                        $M[4] = 1;
                        $modelosAcum .= " m.50HP_3CYL LIKE '$M[4]' AND ";                 
                        break;
                    case "150HP 6cyl":
                        $M[5] = 1; 
                        $modelosAcum .= " m.150HP_6CYL LIKE '$M[5]' AND ";              
                        break;                          
                }
    
            } 
        break;  
        case "Honda":          

            foreach ($_POST['honda'] as $key => $value) {
      
                switch($value){
                    case "U1000":
                        $H[0] = 1;
                        $modelosAcum .= " m.U1000 LIKE '$H[0]' AND ";               
                        break;
                    case "U2000":
                        $H[1] = 1; 
                        $modelosAcum .= " m.U2000 LIKE '$H[1]' AND ";              
                        break;
                    case "EG6500":
                        $H[2] = 1; 
                        $modelosAcum .= " m.EG6500 LIKE '$H[2]' AND ";               
                        break;
                    case "ET12000":
                        $H[3] = 1;
                        $modelosAcum .= " m.ET12000 LIKE '$H[3]' AND ";              
                        break;
                    case "WB 20XH":
                        $H[4] = 1;
                        $modelosAcum .= " m.WB_20XH LIKE '$H[4]' AND ";                
                        break;
                    case "WB 20XT":
                        $H[5] = 1;
                        $modelosAcum .= " m.WB_20XT LIKE '$H[5]' AND ";               
                        break;                           
                }
    
            } 
        break;          
    }
    

   
}  

$nuevaConexion = new CrudsRepuestos();
 
if(isset($nro) && !empty($nro)){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.nro_parte like '$nro%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   

} else if(isset($apl) && !empty($apl)){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.aplicacion like '%$apl%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
} else if(isset($des) && !empty($des)){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.designacion like '%$des%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}else if((isset($ubc) && !empty($ubc))){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.ubicacion like '%$ubc%' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";
   $resultado=$nuevaConexion->Ejecutar($query);
   
}else if((isset($mar) && !empty($mar))){
   $query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
   m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , 
   (d.dp1 + d.dp2 + d.dp3)cantidad  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE $modelosAcum  r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id limit 500 ";

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