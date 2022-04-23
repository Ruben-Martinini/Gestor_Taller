<?php
session_start();
$operacion = "Repuesto ingresado";

require ("./Classes/Cruds_Repuestos.php");
$mar= $_POST['bgrMarca']; 


$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];
$can = $_POST['cantidad'];
$fad = $_POST['FormaAdquisicion'];
$usu;
$idR;

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

//variables Modelos
$P= array(0,0,0,0,0,0,0,0,0,0);
$M= array(0,0,0,0,0,0);
$H= array(0,0,0,0,0,0);


//Procesamiento de modelos para enviar a BD
if (isset($_POST['submitAlta'])) {
   switch ($_POST['bgrMarca']) {

    case "Polaris":
        foreach ($_POST['polaris'] as $key => $value) {
  
            switch($value){
                case "Sportman 500 4x2":
                    $P[0] = 1;              
                    break;
                case "Sportman 500 4x4":
                    $P[1] = 1;               
                    break;
                case "Sportman 570 4x4":
                    $P[2] = 1;                
                    break;
                case "Ranger 700 4x4":
                    $P[3] = 1;              
                    break;
                case "Ranger 700 6x6":
                    $P[4] = 1;                
                    break;
                case "Ranger 900 4x4":
                    $P[5] = 1;                
                    break;   
                case "IQ 600":
                    $P[6] = 1;              
                    break;
                case "LX 500":
                    $P[7] = 1;               
                    break;
                case "LX 550":
                    $P[8] = 1;                
                    break;  
                case "120 Pro":
                    $P[9] = 1;               
                    break;                          
            }

        }
        break; 
        case "Mercury":          

            foreach ($_POST['mercury'] as $key => $value) {
      
                switch($value){
                    case "25HP 2cyl":
                        $M[0] = 1;             
                        break;
                    case "40HP 2cyl":
                        $M[1] = 1;               
                        break;
                    case "40HP 3cyl":
                        $M[2] = 1;               
                        break;
                    case "50HP 2cyl":
                        $M[3] = 1;              
                        break;
                    case "50HP 3cyl":
                        $M[4] = 1;                
                        break;
                    case "150HP 6cyl":
                        $M[5] = 1;               
                        break;                          
                }
    
            } 
        break;  
        case "Honda":          

            foreach ($_POST['honda'] as $key => $value) {
      
                switch($value){
                    case "U1000":
                        $H[0] = 1;              
                        break;
                    case "U2000":
                        $H[1] = 1;              
                        break;
                    case "EG6500":
                        $H[2] = 1;               
                        break;
                    case "ET12000":
                        $H[3] = 1;              
                        break;
                    case "WB 20XH":
                        $H[4] = 1;               
                        break;
                    case "WB 20XT":
                        $H[5] = 1;               
                        break;                           
                }
    
            } 
        break;          
    }
    

   
}   

$nuevaConexion = new CrudsRepuestos();

            

$query0="INSERT INTO repuestos( nro_parte , designacion , aplicacion , ubicacion , marca, usuario_id) VALUES ('$nro','$des','$apl','$ubc','$mar','$usu') ";

$resul=$nuevaConexion->Ejecutar($query0);

    if($resul){
            $query = "SELECT *  FROM repuestos ORDER BY id_repuesto DESC LIMIT 1";
            $resulta=$nuevaConexion->Ejecutar($query);
            
            $rowid = $nuevaConexion->ObtenerFilas($resulta);
                $idR = $rowid[0];
                
            $query1="INSERT INTO destino_repuestos( repuesto_id , dp1 , dp2 , dp3 , usuario_id) VALUES ('$idR', '$can', 0 , 0 , '$usu') ";
            $resul1=$nuevaConexion->Ejecutar($query1);

                if($resul1){
                    $query2="INSERT INTO orden_compra( repuesto_id, usuario_id , nro_oc) VALUES ('$idR','$usu','$fad') ";
                    $resul2=$nuevaConexion->Ejecutar($query2);
                        
                            if($resul2){
                                $query3="INSERT INTO modelo_repuesto( repuesto_id, marca, SPORTMAN_500_4x2, SPORTMAN_500_4x4, SPORTMAN_570_4x4, RANGER_700_4x4, RANGER_700_6x6, RANGER_900_4x4, IQ_600, LX_500, LX_550, 120_PRO, 25HP_2CYL, 40HP_2CYL, 40HP_3CYL, 50HP_2CYL, 50HP_3CYL, 150HP_6CYL, U1000, U2000, EG6500, ET12000, WB_20XH, WB_20XT	) VALUES ('$idR','$mar','$P[0]','$P[1]','$P[2]','$P[3]','$P[4]','$P[5]','$P[6]','$P[7]','$P[8]','$P[9]','$M[0]','$M[1]','$M[2]','$M[3]','$M[4]','$M[5]','$H[0]','$H[1]','$H[2]','$H[3]','$H[4]','$H[5]') ";
                                $resul3=$nuevaConexion->Ejecutar($query3);
                                    if($resul3){
 
                                                $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2, m.SPORTMAN_500_4x4, m.SPORTMAN_570_4x4, m.RANGER_700_4x4, m.RANGER_700_6x6, m.RANGER_900_4x4, m.IQ_600, m.LX_500, m.LX_550, m.120_PRO, m.25HP_2CYL, m.40HP_2CYL, m.40HP_3CYL, m.50HP_2CYL, m.50HP_3CYL, m.150HP_6CYL, m.U1000, m.U2000, m.EG6500, m.ET12000, m.WB_20XH, m.WB_20XT, d.dp1  FROM repuestos r, destino_repuestos d, modelo_repuesto m WHERE r.nro_parte = '$nro' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id ";
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
    
    <title>Lista de resultado de Inserción de repuesto</title>
     <!-- CSS only -->
     <script src="https://kit.fontawesome.com/f83f59bfa9.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/lista.css"> 
     <link rel="stylesheet" href="Estilos/Styles.css"> 

</head>
<body>
   

    <?php include 'plantillas/cabeza_cruds.php'; ?>
    <?php include 'plantillas/form_listaAlta.php'; ?>
    <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>