
<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    
    <script>//alert("Quiere eliminar este aspirante")</script>
<?php
//<?php
include("../3modelo/conexion.php");
$identificacion=$_GET['id'];
mysql_query("delete from t_materia where id_materia='$identificacion'")  or die(mysql_error());
//header('location:listarMaterias.php');
?>

</div>		
    
<?php include("footer.php"); ?>	
