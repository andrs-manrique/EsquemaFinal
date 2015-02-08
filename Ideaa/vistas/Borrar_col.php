<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    <script>alert("Quiere eliminar este aspirante")</script>
<?php
//<?php
include("../3modelo/conexion.php");
$identificacion=$_GET['dni'];
mysql_query("delete from t_usuario where dni_user='$identificacion'")  or die(mysql_error());
header('location:ListasColaborador.php');
?>
</div>		
    
<?php include("footer.php"); ?>	


