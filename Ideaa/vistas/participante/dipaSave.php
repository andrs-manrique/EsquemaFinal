<?php 
include("../../3modelo/conexion.php");
//Obtiene la hora y la fecha actuales
$fechahoy=getdate();
$FechaActual= $fechahoy["mday"] ."-".$fechahoy["mon"]."-".$fechahoy["year"];
$FechaRegistro=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];
echo $FechaActual;
// si se envia un formulario hace la asingacion 
if (isset($_POST['submit'])){
$id=$_POST["id"];
$id_participante=$_POST["id_participante"];
$obs_dipa=$_POST["obs_dipa"];
//Ruta donde se guardarán las imágenes
   
// Recibo los datos de la archivo 
$directorio ="../../dipa";
$formatos = array ('.doc', '.jpg','.png','.docx');
$archivo_usuario =$_FILES['archivo_dipa']['name'];
$nombreTmparchivo =$_FILES['archivo_dipa']['tmp_name'];
// obtener la extension del archivo
// manejar la cadena o extraer dps lo del PUNTO
$ext = substr($archivo_usuario, strrpos($archivo_usuario, '.'));
if (in_array($ext, $formatos)){
if (move_uploaded_file($nombreTmparchivo, "../../dipa/$archivo_usuario")){

	echo "Felicidades , Archivo $archivo_usuario  subido <br> ";
} else {

	echo "Ocurrio un error.";
}
}else {

	echo " El registro se realizo pero el documento <B> NO CONTIENE LA EXTENSION DESEADA </B> <br>Su registro será Anulado <br> Contacte al ADMINISTRADOR "; 
}

$insertaDipa= "INSERT into t_dipa(id_dipa,fecha_dipa,nombre_dipa,obs_dipa,id_participante) values('$id','$FechaRegistro','$archivo_usuario','$obs_dipa','$id_participante')";         

if ( mysql_query($insertaDipa)){
echo " <br> Envio correcto de informacion  a la BD";
?>
<div class="text_content" align="center" >
<h1> Registrado  </h1>
<IMG SRC="../img/bien.jpg"  width='100' height='100' /><br>
<a href="dipa.php">Ver </a><br>
 <input type="button" value="Cerrar Ventana" onclick="window.close()" />
</div>
<?php
}else {
	echo " <B> Error al insertar DIPA </B> , O  Usuario ya se encuentra Registrado, <br> contacte al <b>ADMINISTRADOR</b>";
}

}

?>