
<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    
    <script>alert("Quiere eliminar este aspirante")</script>
<?php
//<?php
include("../3modelo/conexion.php");
$identificadorNovedad=$_GET['id'];
mysql_query("delete from t_novedad where id='$identificadorNovedad'")  or die(mysql_error());
header('location:ListaNovedades.php');
?>

</div>		
    
<?php include("footer.php"); ?>	


