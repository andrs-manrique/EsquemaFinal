<?php
require_once("../3modelo/M_novedad.php");
$fechahoy=getdate();
$FechaActual= $fechahoy["mday"]."-".$fechahoy["mon"]."-".$fechahoy["year"];


$fechare=$_POST['fecha_novedad'];
$id_novedad=$_POST['id_novedad'];
$fechaNovedad=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];

$Titulo_Novedad=$_POST['titulo_novedad'];
$Imagen_novedad=$_POST['Img_novedad'];
$Desc_Novedad=$_POST['desc_novedad'];
$Contenido_nov=$_POST['conte_novedad']; 
$operacion=$_POST["txtoperacion"];
$obj_novedad= new Novedad ($id_novedad,$fechaNovedad,$Titulo_Novedad,$Imagen_novedad,$Desc_Novedad,$Contenido_nov);



switch ($operacion) {
    case "adicionar":
        $obj_novedad->agregarNovedad();
        break;
    case "consultarDatos":
       	
        
        
        break;

}

?>