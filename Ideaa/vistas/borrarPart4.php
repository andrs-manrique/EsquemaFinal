
<div align="center">
<?php
include("../3modelo/conexion.php");
$identificado=$_GET['id'];
mysql_query("delete from t_dipa where id_dipa='$identificado'")  or die(mysql_error());
header('location:listarAspirante.php');
?>
</div>		
