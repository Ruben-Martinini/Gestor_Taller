<?php
session_start();
$operacion = "Repuesto actualizado";
$id=$_GET['id'];

require ("./Classes/Cruds_Repuestos.php");
// Mostrar errores PHP (Desactivar en producción)
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// Incluir la libreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

 
$d1 =  $_GET['d1'];
$d2 =  $_GET['d2'];
$d3 =  $_GET['d3'];

//inicializo las variables  de stock en cero
$dp1 = 0;
$dp2 = 0;
$dp3 = 0; 
$npart = $_GET['nr'];
$tipOp = $_POST['radioTipoMov'];
$desde = $_POST['radioDesde'];
$hacia = $_POST['radioHacia'];
$transferido = $_POST['cantTransferir'];
$depos = $_POST['radioDescarga'];
$descontado = $_POST['cantDescargar'];

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

if($tipOp == "Transferir"){
    switch($desde){
        case 'dp1':
            $dp1=$d1-$transferido;
            switch($hacia){
                case 'dp2':
                    $dp2=$d2+$transferido; 
                    $dp3=$d3;       
                break;  
                case 'dp3':
                    $dp3=$d3+$transferido; 
                    $dp2=$d2;
                break;   
            }
            break;
        case 'dp2':
            $dp2=$d2-$transferido;
            switch($hacia){
                case 'dp1':
                    $dp1=$d1+$transferido; 
                    $dp3=$d3; 
                break;  
                case 'dp3':
                    $dp3=$d3+$transferido; 
                    $dp1=$d1; 
                break;   
                }
        break;    
        case 'dp3':
            $dp3=$d3-$transferido;
            switch($hacia){
                case 'dp1':
                    $dp1=$d1+$transferido; 
                    $dp2=$d2;
                break;  
                case 'dp2':
                    $dp2=$d2+$transferido; 
                    $dp1=$d1; 
                break;   
                }
        break;    
    }
    //Inicio del proceso de transferencia de repuestos entre depósitos en la base de datos
    $nuevaConexion = new CrudsRepuestos();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $nuevaConexion->InicioTrans();
    
    $query=" UPDATE destino_repuestos SET dp1 = '$dp1', dp2 = '$dp2', dp3 = '$dp3', usuario_id = '$usu' WHERE repuesto_id = '$id'";
    $query1 = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d WHERE nro_parte like '$npart' AND r.id_repuesto = d.repuesto_id  limit 500 ";
    try {
        $nuevaConexion->Ejecutar($query);
        $resultado=$nuevaConexion->Ejecutar($query1);
        $nuevaConexion->OKTrans();
        

    // Inicio envío de correo x transferencia
    $mail = new PHPMailer(false);//habilitar para enviar correos
 
        try {
            // Configuracion SMTP
            $mail->CharSet = 'UTF8';
            $mail->Encoding = 'quoted-printable';
            $mail->SMTPDebug = 0;                         // Mostrar salida (Desactivar en producción)
            $mail->isSMTP();                                               // Activar envio SMTP
            $mail->Host  = 'smtp.gmail.com ';                     // Servidor SMTP
            $mail->SMTPAuth  = true;                                       // Identificacion SMTP
            $mail->Username  = 'usuorigen@gmail.com';                  // Usuario SMTP
            $mail->Password  = 'pass';	          // Contraseña SMTP
            $mail->SMTPSecure = 'tls';
            $mail->Port  = 587;
            $mail->setFrom('usuorigen@gmail.com', 'Gestor-taller');                // Remitente del correo
            

            // Destinatarios
            $mail->addAddress('usudestino@gmail.com', 'Correo Taller');  // Email y nombre del destinatario

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Movimientos - Acción: '. $tipOp;
            $mail->Body  = 
                '<p>Se ha generado una transferencia de repuesto/s desde: <b>'  . $desde . '</b> hacia: <b>' . $hacia . '</b>. Repuesto N° de parte: <b>' . $npart . '</b></p>
                <p>La cantidad transferida fue de: ' . $transferido . ' unidad/es. </p>  
                <p><b>Responsable de la acción: ' . $_SESSION['usuario'] .'</b>
                </p> <p>La nueva distribución es: </p>
                
                <table width="50%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10" style="background-color: lightgray">
                    <tr>
                        <th valign="middle" align="center">DP1</th>
                        <th valign="middle" align="center">DP2</th>
                        <th valign="middle" align="center">DP3</th>
                    </tr>
                    <tr>
                        <td valign="middle" align="center">'.$dp1.'</td>
                        <td valign="middle" align="center">'.$dp2.'</td>
                        <td valign="middle" align="center">'.$dp3.'</td>
                    </tr>
                </table>';

            $mail->AltBody = 'Transferencia de repuesto';
            $mail->send();
            //echo 'El mensaje se ha enviado';
        } catch (Exception $e) {
            echo "El mensaje no se ha enviado. Mailer Error: {$mail->ErrorInfo}";
        }


    } catch (mysqli_sql_exception $exception) {
        $nuevaConexion->ErrTrans();
        echo 'Algo falló: ',  $er=$exception->getMessage(), "\n";
        header("location: descTransf.php?id=$id&np= $npart&d1=$d1&d2=$d2&d3=$d3&e=$er");
        die();
        
    }



    


}else{

    switch($depos){
        case 'dp1':

            $dp1=$d1-$descontado;
            $dp2=$d2;
            $dp3=$d3;
            
        break;
        case 'dp2':

            $dp2=$d2-$descontado;
            $dp1=$d1;
            $dp3=$d3;
            
        break;    
        case 'dp3':

            $dp3=$d3-$descontado;
            $dp1=$d1;
            $dp2=$d2;
            
        break;    
    } 
    //Inicio del proceso de descarga de repuestos de la base de datos
    $nuevaConexion = new CrudsRepuestos();
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $nuevaConexion->InicioTrans();
    
    $query=" UPDATE destino_repuestos SET dp1 = '$dp1', dp2 = '$dp2', dp3 = '$dp3', usuario_id = '$usu' WHERE repuesto_id = '$id'";
    $query1 = "SELECT r.id_repuesto , r.nro_parte , r.designacion , r.marca , d.dp1 , d.dp2 , d.dp3 FROM repuestos r, destino_repuestos d WHERE nro_parte like '$npart' AND r.id_repuesto = d.repuesto_id  limit 500 ";
    
    try {
        $nuevaConexion->Ejecutar($query);
        $resultado=$nuevaConexion->Ejecutar($query1);
        $nuevaConexion->OKTrans();
         

    // Inicio envío de correo x transferencia
    $mail = new PHPMailer(false);//habilitar para enviar correos
 
        try {
            // Configuracion SMTP
            $mail->CharSet = 'UTF8';
            $mail->Encoding = 'quoted-printable';
            $mail->SMTPDebug = 0;                         // Mostrar salida (Desactivar en producción)
            $mail->isSMTP();                                               // Activar envio SMTP
            $mail->Host  = 'smtp.gmail.com ';                     // Servidor SMTP
            $mail->SMTPAuth  = true;                                       // Identificacion SMTP
            $mail->Username  = 'usuorigen@gmail.com';                  // Usuario SMTP
            $mail->Password  = 'pass';	          // Contraseña SMTP
            $mail->SMTPSecure = 'tls';
            $mail->Port  = 587;
            $mail->setFrom('usuorigen@gmail.com', 'Gestor-taller');                // Remitente del correo
            

            // Destinatarios
            $mail->addAddress('usudestino@gmail.com', 'Correo Taller');  // Email y nombre del destinatario
            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Movimientos - Acción: '. $tipOp;
            $mail->Body  = 
                '<p>Se ha generado una descarga de repuesto/s en el: <b>'  . $depos .  '</b>. Repuesto N° de parte: <b>' . $npart . '</b></p>
                <p>La cantidad descargada fue de: ' . $descontado . ' unidad/es. </p>  
                <p><b>Responsable de la acción: ' . $_SESSION['usuario'] .'</b>
                </p> <p>La nueva distribución es: </p>
                
                <table width="50%" border="2" bordercolor="#0000FF" cellspacing="10" cellpadding="10" style="background-color: lightgray">
                    <tr>
                        <th valign="middle" align="center">DP1</th>
                        <th valign="middle" align="center">DP2</th>
                        <th valign="middle" align="center">DP3</th>
                    </tr>
                    <tr>
                        <td valign="middle" align="center">'.$dp1.'</td>
                        <td valign="middle" align="center">'.$dp2.'</td>
                        <td valign="middle" align="center">'.$dp3.'</td>
                    </tr>
                </table>';

            $mail->AltBody = 'Descarga de repuesto';
            $mail->send();
            //echo 'El mensaje se ha enviado';
            
        } catch (Exception $e) {
            echo "El mensaje no se ha enviado. Mailer Error: {$mail->ErrorInfo}";
        }
    


    } catch (mysqli_sql_exception $exception) {
        $nuevaConexion->ErrTrans();
        echo 'Algo falló: ',  $er=$exception->getMessage(), "\n";
        header("location: descTransf.php?id=$id&np=$npart&d1=$d1&d2=$d2&d3=$d3&e=$er");
        die();
        
    }
}

 
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lista de resultado de actualización stoks</title>
     <!-- CSS only -->
     <script src="https://kit.fontawesome.com/f83f59bfa9.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     
     <link rel="stylesheet" href="Estilos/lista.css"> 
     <link rel="stylesheet" href="Estilos/Styles.css"> 

</head>
<body>
   

   <?php include 'plantillas/cabeza_cruds.php'; ?>
   <?php include 'plantillas/form_lista_ubicacion.php'; ?>
   <?php include 'plantillas/pie.php'; ?>   
  
</body>
</html>