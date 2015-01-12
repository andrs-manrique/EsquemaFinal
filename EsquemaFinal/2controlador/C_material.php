<?php
require_once("../3modelo/M_material.php");

$fechahoy=getdate();
$FechaActual= $fechahoy["mday"]."-".$fechahoy["mon"]."-".$fechahoy["year"];
//$fechare=$_POST['fecha_novedad'];

$id_material=$_POST['id_novedad'];
$fechamaterial=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];
$titulo_material=$_POST['titulo'];
$Contenido=$_POST['conte_novedad'];
$area_material=$_POST['area_material']; 
$tipo_material=$_POST['tipo_material']; 
$url=$_POST['url_material'];
$autor=$_POST['autor_material'];
$operacion=$_POST["txtoperacion"];

$objMaterial= new mat($id_material,$fechamaterial,$titulo_material,$Contenido,$area_material,$tipo_material,$url,$autor);
switch ($operacion) {
    case "adicionarMaterial":
        $objMaterial->agregarMaterial();   
        break;
    case "actualizarMaterial":
        $objMaterial->actualizarMaterial();   
        break;

    
}

?>