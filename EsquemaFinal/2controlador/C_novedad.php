
<?php

require_once("../3modelo/M_novedad.php");

$fechaNovedad;
$id_novedad=$_POST['novedad'];
$Titulo_Novedad=$_POST['titulo_novedad'];
$Imagen_novedad=$_POST['Img_novedad'];
$Desc_Novedad=$_POST['desc_novedad'];
$Contenido_nov=$_POST['conte_novedad']; 
$operacion=$_POST["txtoperacion"];
$obj_novedad= new Novedad ($fechaNovedad,$id_novedad,$Titulo_Novedad,$Imagen_novedad,$Desc_Novedad,$Contenido_nov);
$objMateria->insertaNovedad();
