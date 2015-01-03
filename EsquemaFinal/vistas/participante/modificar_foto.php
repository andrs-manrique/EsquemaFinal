<?php include('header.php'); ?>
<?php include("./BarrNavAsp.php");?>			
<?php include("../../3modelo/autenticacion.php");?>
		<div  align="center" >
				
				  <ul>
                                      <font color="white">  <a>ADMIN</font>
				   <li></a>
 <?php
//session_start();
include("../../3modelo/conexion.php");
$identificacion = $_SESSION['identificacion'];

$directorio ="../../fotos";
$formatos = array ('.jpg', '.png','.gif','.docx');
$nombreArchivo =$_FILES['fotografia']['name'];
$nombreTmparchivo =$_FILES['fotografia']['tmp_name'];
// obtener la extension del archivo
// manejar la cadena o extraer dps lo del PUNTO
$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
if (in_array($ext, $formatos)){
if (move_uploaded_file($nombreTmparchivo, "../../fotos/$nombreArchivo")){
         echo "El archivo ". basename( $_FILES['fotografia']['name']). " ha sido subido";
}
        
        
        
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
$consultafoto="update t_usuario set foto_user='$nombreArchivo' where(dni_user='$identificacion')";                 
if ( mysql_query($consultafoto)){
echo " <br> Envio correcto de informacion  a la BD";
echo"<script language='javascript'>location.href=\" ../../vistas/participante/aspirante.php   \"   </script>";		

}else { echo"ERORRRR UPDATE FOTO";}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>

