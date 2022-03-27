<?php
session_start();
if(!isset($_SESSION['usuario'])){
   header('location: index.php');
   die();
}
$operacion="EDITAR";
$id=$_GET['id']; // variable pasada desde listado para editar registro con ese id.

require("./Classes/Cruds_Repuestos.php");



$nuevaConexion = new CrudsRepuestos();

$query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT  FROM repuestos r, modelo_repuesto m WHERE r.id_repuesto like '$id' AND  r.id_repuesto = m.repuesto_id  ";

   $resultado=$nuevaConexion->Ejecutar($query);
   /*
   $P= array(0,0,0,0,0,0,0,0,0,0);
   $M= array(0,0,0,0,0,0);
   $H= array(0,0,0,0,0,0);
   */
    if($resultado){
     //string acumulador de modelos   
     $modelosEdic="";
    
     
        while($tabla = $nuevaConexion->ObtenerFilas($resultado)){
           
           $nro = $tabla[1];
           $des = $tabla[2];
           $apl = $tabla[3];
           $ubc = $tabla[4];
           $mar = $tabla[5];
   
           //conversión de variables booleanas a strings de modelos polaris
           //$P[0]=$tabla[6];
           if($tabla[6]==1){$modelosEdic.="S500.4x2|";} 
           //$P[1]=$tabla[7];
           if($tabla[7]==1){$modelosEdic.="S500.4x4|";}
           //$P[2]=$tabla[8];
           if($tabla[8]==1){$modelosEdic.="S570.4x4|";}
           //$P[3]=$tabla[9];
           if($tabla[9]==1){$modelosEdic.="R700.4x4|";}
           //$P[4]=$tabla[10];
           if($tabla[10]==1){$modelosEdic.="R700.6x6|";}
           //$P[5]=$tabla[11];
           if($tabla[11]==1){$modelosEdic.="R900.4x4|";}
           //$P[6]=$tabla[12];
           if($tabla[12]==1){$modelosEdic.="IQ|";}
           //$P[7]=$tabla[13];
           if($tabla[13]==1){$modelosEdic.="LX500|";}
           //$P[8]=$tabla[14];
           if($tabla[14]==1){$modelosEdic.="LX550|";}
           //$P[9]=$tabla[15];
           if($tabla[15]==1){$modelosEdic.="120Pro|";}
           //conversión de variables booleanas a strings de modelos mercury
           //$M[0]=$tabla[16];
           if($tabla[16]==1){$modelosEdic.="25HP|";} 
           //$M[1]=$tabla[17];
           if($tabla[17]==1){$modelosEdic.="40HP.2C|";}
           //$M[2]=$tabla[18];
           if($tabla[18]==1){$modelosEdic.="40HP.3C|";}
           //$M[3]=$tabla[19];
           if($tabla[19]==1){$modelosEdic.="50HP.2C|";}
           //$M[4]=$tabla[20];
           if($tabla[20]==1){$modelosEdic.="50HP.3C|";}
           //$M[5]=$tabla[21];
           if($tabla[21]==1){$modelosEdic.="150HP.6C|";}
           //conversión de variables booleanas a strings de modelos Honda
           //$H[0]=$tabla[22];
           if($tabla[22]==1){$modelosEdic.="U1000|";}
           //$H[1]=$tabla[23];
           if($tabla[23]==1){$modelosEdic.="U2000|";}
           //$H[2]=$tabla[24];
           if($tabla[24]==1){$modelosEdic.="EG6500|";}
           //$H[3]=$tabla[25];
           if($tabla[25]==1){$modelosEdic.="Et12000|";}
           //$H[4]=$tabla[26];
           if($tabla[26]==1){$modelosEdic.="WB20XH|";}
           //$H[5]=$tabla[27]; 
           if($tabla[27]==1){$modelosEdic.="WB20XT|";}
         
        }
        //$nuevaConexion->LimpiarResultado($resultado);
         
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
   
   <script src="js/alta.js"></script>
   
</body>

</html>