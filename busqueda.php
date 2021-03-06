<?php
   session_start();
   if(!isset($_SESSION['usuario'])){
      header('location: index.php');
      die();
   }
   $operacion="BUSCADOR";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Búsqueda de repuestos</title>
     <!-- CSS only -->
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/Styles.css?v=<?php echo time(); ?>"> 
     <link rel="stylesheet" href="Estilos/Insert.css?v=<?php echo time(); ?>"> 
     
     
     

</head>
<body onload="alert('¡Por favor realice la BUSQUEDA  a través de un solo criterio!')">


   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_buscar.php'; ?>
   <?php include 'plantillas/pie.php'; ?>
   
   <script src="js/buscar.js"></script> 
  
</body>
</html>