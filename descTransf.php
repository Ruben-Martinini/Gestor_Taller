<?php
session_start();
if(!isset($_SESSION['usuario'])){
   header('location: index.php');
   die();
}
$operacion="STOCKS";
$id=$_GET['id'];
$nro=$_GET['np'];
$dep1=$_GET['d1'];
$dep2=$_GET['d2'];
$dep3=$_GET['d3'];
$err=$_GET['e'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Movimientos y control stocks</title>
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/Styles.css?v=<?php echo time(); ?>"> 
     <link rel="stylesheet" href="Estilos/Insert.css?v=<?php echo time(); ?>"> 
     
     
     

</head>
<body>
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_desTran.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
   
   <script src="js/descTransf.js"></script>
</body>

</html>