
<div align="center">
<?php
include("../3modelo/conexion.php");
$identificado=$_GET['dni'];
mysql_query("delete from t_usuario where dni_user='$identificado'")  or die(mysql_error());
header('location:listarAspirante.php');
?>
</div>		

