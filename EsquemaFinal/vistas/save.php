<?php 
                include("../3modelo/conexion.php");
//Obtiene la hora y la fecha actuales
$fechahoy=getdate();
$FechaActual= $fechahoy["mday"] ."-".$fechahoy["mon"]."-".$fechahoy["year"];
$FechaRegistro=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];
echo $FechaActual;
// si se envia un formulario hace la asingacion 
if (isset($_POST['submit'])){
$dni=$_POST["dni_user"];
$tipodni_user=$_POST["tipodni_user"];
$nom_user=$_POST["nom_user"];
$apell_user=$_POST["apell_user"];
$clave_user=$_POST["clave_user"];
$clave_user = md5($clave_user); 
$sex_user=$_POST["sex_user"];
$mail_user=$_POST["mail_user"];
$tel_user=$_POST["tel_user"];
$civil_user=$_POST["civil_user"];
$lugarnac_user=$_POST["lugarnac_user"];

$fecha_inicio=$_POST["nac_user"]; 
$fecha1= date("m-d-Y", strtotime("$fecha_inicio"));
$nac_user=date("Y-m-d",strtotime($fecha1));

echo $nac_user;
$localidad_user=$_POST["localidad_user"];
$estrato_user=$_POST["estrato_user"];
$barrio_user=$_POST["barrio_user"];
//$archivo_usuario=$_POST["archivo_usuario"];  
$responsable_user=$_POST["responsable_user"];
$cel_respon_user=$_POST["cel_respon_user"];
$foto_user=$_POST["foto_user"]; //Linea 22
//$fecha_registro_user=$_POST["fecha_registro_user"];
$carrera_user=$_POST["carrera_user"];
$universidad_user=$_POST["universidad_user"];
$id_colegio=$_POST["id_colegio"];
$id_estado=$_POST["id_estado"];
$id_jornada=$_POST["id_jornada"];
$rol_user=$_POST["rol_user"];
$id_materia_user=$_POST["id_materia_user"];

//Ruta donde se guardarán las imágenes
   
// Recibo los datos de la archivo 
$directorio ="../Archivos";
$formatos = array ('.doc', '.xlsx','.pdf','.docx');
$archivo_usuario =$_FILES['archivo_usuario']['name'];
$nombreTmparchivo =$_FILES['archivo_usuario']['tmp_name'];
// obtener la extension del archivo
// manejar la cadena o extraer dps lo del PUNTO
$ext = substr($archivo_usuario, strrpos($archivo_usuario, '.'));
if (in_array($ext, $formatos)){
if (move_uploaded_file($nombreTmparchivo, "../Archivos/$archivo_usuario")){

	echo "Felicidades , Archivo $archivo_usuario  subido <br> ";
} else {

	echo "Ocurrio un error.";
}
}else {

	echo " El registro se realizo pero el documento <B> NO CONTIENE LA EXTENSION DESEADA </B> <br>Su registro será Anulado <br> Contacte al ADMINISTRADOR "; 
}

$inserta= "INSERT into t_usuario(dni_user,tipodni_user,nom_user,apell_user,clave_user,sex_user,mail_user,tel_user,civil_user,lugarnac_user,nac_user,localidad_user,estrato_user,barrio_user,archivo_usuario,responsable_user,cel_respon_user,foto_user,fecha_registro_user,carrera_user,universidad_user,id_colegio,id_estado,id_jornada,rol_user,id_materia_user) values('$dni','$tipodni_user','$nom_user','$apell_user','$clave_user','$sex_user','$mail_user','$tel_user','$civil_user','$lugarnac_user','$nac_user','$localidad_user','$estrato_user','$barrio_user','$archivo_usuario','$responsable_user','$cel_respon_user','$foto_user','$FechaRegistro','$carrera_user','$universidad_user','$id_colegio','$id_estado','$id_jornada','$rol_user','$id_materia_user')";         

if ( mysql_query($inserta)){
echo " <br> Envio correcto de informacion  a la BD";
?>
<div class="text_content" align="center" >
<h1> Registrado correctamente </h1>
<IMG SRC="../img/bien.jpg"  width='100' height='100' /><br>
<a href="../index.php">Volver al Inicio </a><br>
 <input type="button" value="Cerrar Ventana" onclick="window.close()" />
</div>
<?php
}else {
	echo " <B> Error al insertar al REGISTRAR </B> , O  Usuario ya se encuentra Registrado, <br> contacte al <b>ADMINISTRADOR</b>";
}
//}
/* echo "
 <script type=text/javascript>
  alert(I am an alert box!);
 </script>";sleep(5);
header('location:registro.php');
*/
}

?>