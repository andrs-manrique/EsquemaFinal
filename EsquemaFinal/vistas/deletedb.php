<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
<?php
//<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "db_ideaa");
mysqli_query($link, "TRUNCATE TABLE t_registro");
mysqli_close($link);
// Cerramos la conexion con la base de datos
echo 'Se ha ejecutado la consulta TRUNCATE';
header('location:importEcxel.php');
?>
</div>		
    
<?php include("footer.php"); ?>	
