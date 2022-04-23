<?php
session_start();
$operacion = "Repuesto actualizado";
$id=$_GET['id'];

require ("./Classes/Cruds_Repuestos.php");
 
$mar = $_POST['bgrMarca'];
$Imar = $_GET['ma'];
$nro = $_POST['nroparte'];
$apl = $_POST['aplica'];
$des = $_POST['designa'];
$ubc = $_POST['ubica'];
$can = $_POST['cantidad'];
$oc =  $_POST['FormaAdquisicion'];
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

    $P=unserialize($_GET['pol']);
    $M=unserialize($_GET['mer']);
    $H=unserialize($_GET['hon']);


//Procesamiento de modelos para enviar a BD

if (isset($mar)){
    //variables Modelos
    $P= array(0,0,0,0,0,0,0,0,0,0);
    $M= array(0,0,0,0,0,0);
    $H= array(0,0,0,0,0,0);

   switch ($mar) {
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

} else{
    
    $mar=$Imar;
}  


$nuevaConexion = new CrudsRepuestos();



$query=" UPDATE repuestos SET nro_parte = '$nro', designacion = '$des' , aplicacion = '$apl' , ubicacion = '$ubc' , marca = '$mar' , usuario_id = '$usu' WHERE id_repuesto = '$id'";

$resul=$nuevaConexion->Ejecutar($query);


    if($resul){
    
        
        $query1=" UPDATE modelo_repuesto SET marca = '$mar' , SPORTMAN_500_4x2 = '$P[0]', SPORTMAN_500_4x4 = '$P[1]' , SPORTMAN_570_4x4 = '$P[2]', RANGER_700_4x4 = '$P[3]', RANGER_700_6x6 = '$P[4]' , RANGER_900_4x4 = '$P[5]' , IQ_600 = '$P[6]' , LX_500 = '$P[7]' , LX_550 = '$P[8]' , 120_PRO = '$P[9]', 25HP_2CYL = '$M[0]', 40HP_2CYL = '$M[1]' , 40HP_3CYL = '$M[2]' , 50HP_2CYL = '$M[3]' , 50HP_3CYL = '$M[4]' , 150HP_6CYL = '$M[5]' , U1000 = '$H[0]' , U2000 = '$H[1]' , EG6500 = '$H[2]' , ET12000 = '$H[3]' , WB_20XH = '$H[4]' , WB_20XT = '$H[5]' WHERE repuesto_id = '$id'";

        $resul1=$nuevaConexion->Ejecutar($query1);
        
    
        
        if($resul1){    
                $query2=" UPDATE destino_repuestos SET dp1 = '$can' WHERE repuesto_id = '$id'";
        
                $resul2=$nuevaConexion->Ejecutar($query2);
    
                if($resul2){

                    $consultaIdOc= " SELECT id_oc FROM orden_compra ORDER by id_oc DESC limit 1  ";
                    $resulIdOc=$nuevaConexion->Ejecutar($consultaIdOc);
                    while($tablaId=mysqli_fetch_array($resulIdOc)){
                        $idOc=$tablaId[0];
                    }
                    
                       
                    

                    if($resulIdOc){
       
                    $query3=" UPDATE orden_compra SET nro_oc = '$oc' WHERE id_oc = '$idOc' ";
        
                    $resul3=$nuevaConexion->Ejecutar($query3);
    
                        if($resul3){
                           
                                $query = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , m.marca , m.SPORTMAN_500_4x2, m.SPORTMAN_500_4x4, m.SPORTMAN_570_4x4, m.RANGER_700_4x4, m.RANGER_700_6x6, m.RANGER_900_4x4, m.IQ_600, m.LX_500, m.LX_550, m.120_PRO, m.25HP_2CYL, m.40HP_2CYL, m.40HP_3CYL, m.50HP_2CYL, m.50HP_3CYL, m.150HP_6CYL, m.U1000, m.U2000, m.EG6500, m.ET12000, m.WB_20XH, m.WB_20XT, d.dp1, o.nro_oc  FROM repuestos r, destino_repuestos d, modelo_repuesto m, orden_compra o WHERE r.nro_parte = '$nro' AND r.id_repuesto = d.repuesto_id  AND r.id_repuesto = m.repuesto_id AND id_oc = '$idOc[0]' ";
                                $resultado=$nuevaConexion->Ejecutar($query);

                            
                        }  
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
   <?php include 'plantillas/form_listaAlta.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
    
  
</body>
</html>