
<div align="center">
<?php
include("../3modelo/conexion.php");
$identificado=$_GET['id'];
mysql_query("delete from t_usuario where dni_user='$identificado'")  or die(mysql_error());
header('location:ListarColaborador.php');
?>
</div>		

