<?php
require_once("../3modelo/M_novedad.php");

$fechahoy=getdate();
$FechaActual= $fechahoy["mday"]."-".$fechahoy["mon"]."-".$fechahoy["year"];
$id_novedad=$_POST['id_novedad'];
$fechaNovedad=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];
$Titulo_Novedad=$_POST['titulo_novedad'];
$Desc_Novedad=$_POST['desc_novedad'];
$Contenido_nov=$_POST['conte_novedad'];
//Ruta donde se guardarán las imágenes
// Recibo los datos de la archivo 
$directorio ="../img";
$formatos = array ('.jpg', '.png','.gif');
$Imagen_novedad =$_FILES['Img_novedad']['name'];
$nombreTmparchivo =$_FILES['Img_novedad']['tmp_name'];
// obtener la extension del archivo
// manejar la cadena o extraer dps lo del PUNTO
$ext = substr($Imagen_novedad, strrpos($Imagen_novedad, '.'));
if (in_array($ext, $formatos)){
if (move_uploaded_file($nombreTmparchivo, "../img/$Imagen_novedad")){

	echo "Felicidades , Archivo $Imagen_novedad  subido <br> ";
} else {

	echo "Ocurrio un error.";
}
}else {

	echo " <B> NO CONTIENE LA EXTENSION DESEADA </B>  "; 
}
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