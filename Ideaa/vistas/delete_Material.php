<?php
        include("../3modelo/conexion.php");
$id=$_GET['id'];
mysql_query("delete from t_material where id_material='$id'") or die(mysql_error());
header('location:Material.php');
?>