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
      
//Ruta donde se guardarán las imágenes
// Recibo los datos de la archivo 
$directorio ="../../material";
$formatos = array ('.doc', '.xlsx','.pdf','.docx');
$archivo_usuario =$_FILES['archivo_material']['name'];
$nombreTmparchivo =$_FILES['archivo_material']['tmp_name'];
// obtener la extension del archivo
// manejar la cadena o extraer dps lo del PUNTO
$ext = substr($archivo_usuario, strrpos($archivo_usuario, '.'));
if (in_array($ext, $formatos)){
if (move_uploaded_file($nombreTmparchivo, "../material/$archivo_usuario")){

	echo "Felicidades , Archivo $archivo_usuario  subido <br> ";
} else {

	echo "Ocurrio un error.";
}
}else {

	echo " <B> NO CONTIENE LA EXTENSION DESEADA </B> Contacte al ADMINISTRADOR "; 
}

$operacion=$_POST["txtoperacion"];


$objMaterial= new mat($id_material,$fechamaterial,$titulo_material,$Contenido,$area_material,$tipo_material,$url,$autor,$archivo_usuario);
switch ($operacion) {
    case "adicionarMaterial":     
 
        $objMaterial->agregarMaterial();   
        break;
    case "actualizarMaterial":
        $objMaterial->actualizarMaterial();   
        break;

    
}

?>