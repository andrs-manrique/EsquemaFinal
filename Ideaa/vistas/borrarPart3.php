
<div align="center">
<?php
include("../3modelo/conexion.php");
$identificado=$_GET['id'];
mysql_query("delete from t_novedad where id='$identificado'")  or die(mysql_error());
header('location:listaNovedades.php');
?>
</div>		
