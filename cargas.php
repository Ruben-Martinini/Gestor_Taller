<?php
session_start();
if(!isset($_SESSION['usuario'])){
   header('location: index.php');
   die();
}
$operacion="Cargar ";
$id=$_GET['id']; // variable pasada desde listado para editar registro con ese id.

require("./Classes/Cruds_Repuestos.php");
$nuevaConexion = new CrudsRepuestos();

$query = " SELECT r.id_repuesto , r.nro_parte , r.designacion , r.aplicacion , r.ubicacion , r.marca , m.SPORTMAN_500_4x2 , m.SPORTMAN_500_4x4 , m.SPORTMAN_570_4x4 , m.RANGER_700_4x4 , m.RANGER_700_6x6 , 
m.RANGER_900_4x4 , m.IQ_600, m.LX_500 , m.LX_550 , m.120_PRO , m.25HP_2CYL , m.40HP_2CYL , m.40HP_3CYL , m.50HP_2CYL , m.50HP_3CYL , m.150HP_6CYL , m.U1000 , m.U2000 , m.EG6500 , m.ET12000 , m.WB_20XH , m.WB_20XT , o.nro_oc, d.dp1   FROM repuestos r, modelo_repuesto m, orden_compra o, destino_repuestos d WHERE r.id_repuesto like '$id' AND  r.id_repuesto = m.repuesto_id AND r.id_repuesto = o.repuesto_id AND r.id_repuesto = d.repuesto_id ";

   $resultado=$nuevaConexion->Ejecutar($query);
   if($resultado){
   //arrays de modelos   
   $modelosEdic="";
   
      while($tabla = $nuevaConexion->ObtenerFilas($resultado)){
         
         $nro = $tabla[1];
         $des = $tabla[2];
         $apl = $tabla[3];
         $ubc = $tabla[4];
         $mar = $tabla[5];
         
         //conversión de variables booleanas a strings de modelos polaris
         if($tabla[6]==1){$modelosEdic.="S500.4x2|";} 
         if($tabla[7]==1){$modelosEdic.="S500.4x4|";}
         if($tabla[8]==1){$modelosEdic.="S570.4x4|";}
         if($tabla[9]==1){$modelosEdic.="R700.4x4|";}
         if($tabla[10]==1){$modelosEdic.="R700.6x6|";}
         if($tabla[11]==1){$modelosEdic.="R900.4x4|";}
         if($tabla[12]==1){$modelosEdic.="IQ|";}
         if($tabla[13]==1){$modelosEdic.="LX500|";}
         if($tabla[14]==1){$modelosEdic.="LX550|";}
         if($tabla[15]==1){$modelosEdic.="120Pro|";}
         //conversión de variables booleanas a strings de modelos mercury
         if($tabla[16]==1){$modelosEdic.="25HP|";} 
         if($tabla[17]==1){$modelosEdic.="40HP.2C|";}
         if($tabla[18]==1){$modelosEdic.="40HP.3C|";}
         if($tabla[19]==1){$modelosEdic.="50HP.2C|";}
         if($tabla[20]==1){$modelosEdic.="50HP.3C|";}
         if($tabla[21]==1){$modelosEdic.="150HP.6C|";}
         //conversión de variables booleanas a strings de modelos Honda
         if($tabla[22]==1){$modelosEdic.="U1000|";}
         if($tabla[23]==1){$modelosEdic.="U2000|";}
         if($tabla[24]==1){$modelosEdic.="EG6500|";}
         if($tabla[25]==1){$modelosEdic.="Et12000|";}
         if($tabla[26]==1){$modelosEdic.="WB20XH|";}
         if($tabla[27]==1){$modelosEdic.="WB20XT|";}
         
         $oc = $tabla[28];
         $can =$tabla[29];
         
      }
      $nuevaConexion->LimpiarResultado($resultado);
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
   <?php include 'plantillas/form_carga.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
   
   <script src="js/alta.js"></script>
   
</body>

</html>