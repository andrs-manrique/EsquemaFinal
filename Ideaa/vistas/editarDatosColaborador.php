<!doctype html>
<?php include("header.php");?>
<?php include("../3modelo/autenticacion.php");?>
<?php include("BarraNavegacionadmin.php");?>	
  <?php 
 	include("../3modelo/conexion.php");
    $identificacion = $_SESSION['identificacion'];
$id_col = $_GET['dni'];
$consulta=mysql_query("select *from t_usuario where (dni_user='$id_col')");		
if($row=mysql_fetch_array($consulta))
		{
$dni=$row["dni_user"];
$tipodni_user=$row["tipodni_user"];
$nom_user=$row["nom_user"];
$apell_user=$row["apell_user"];
$clave_user=$row["clave_user"];
$sex_user=$row["sex_user"];
$mail_user=$row["mail_user"];
$tel_user=$row["tel_user"];
$civil_user=$row["civil_user"];
$lugarnac_user=$row["lugarnac_user"];
$nac_user=$row["nac_user"];
$localidad_user=$row["localidad_user"];
$estrato_user=$row["estrato_user"];
$barrio_user=$row["barrio_user"];
$archivo_usuario=$row["archivo_usuario"];
$responsable_user=$row["responsable_user"];
$cel_respon_user=$row["cel_respon_user"];
$foto_user=$row["foto_user"];
$fecha_registro_user=$row["fecha_registro_user"];
$carrera_user=$row["carrera_user"];
$universidad_user=$row["universidad_user"];
$id_colegio=$row["id_colegio"];
$id_estado=$row["id_estado"];
$id_jornada=$row["id_jornada"];
$rol_user=$row["rol_user"];
$id_materia_user=$row["id_materia_user"];
}
?>
<div aling="center">
  <center> 
<h3>DATOS PERSONALES</h3>
<p>Modificar Datos COLABORADOR</p>
    </center>
<form name="form" method="post" action="../2controlador/C_Usuario.php" > 
 <table align="center">
  <tr>
    <td class="registr">No. Documento:</td>
    <td class="registr"><input type="text" name="dni" title="usuario" readonly="readonly" value='<?php echo $_GET['dni']; ?>'></td>
  
    <td class="registr">Tipo de Documento:</td>
    <td class="registr"><input type="text" name="tipodni_user" title="usuario" readonly="readonly" value='<?php echo $tipodni_user; ?>'></td>
  </tr>
  <tr>
    <td class="registr"></td>
    <td class="registr">
   <input type="hidden" name="foto_user" title="usuario" readonly="readonly" value='<?php echo $foto_user; ?>'>
    </td>
  </tr>
  <tr>
    <td class="registr">Nombre(s)</td>
    <td class="registr"><input type="text" name="nom_user" title="nombre" value='<?php echo $nom_user; ?>'></td>
 
    <td class="registr">Apellido(s)</td>
    <td class="registr"><input type="text" name="apell_user" title="apellido" value='<?php echo $apell_user;?>'></td>
  </tr>      
  <tr>
   <td class="registr">Sexo</td>
   <td class="registr"><input type="text" name="sex_user" title="apellido" value='<?php echo $sex_user;?>'></td>
   <td class="registr">Correo</td>
   <td class="registr"><input type="text" name="mail_user" title="correo" value='<?php echo $mail_user;?>'></td>
  </tr>
        <tr>
	 <td class="registr"></td>
	 <td class="registr"><input type="hidden" name="clave_user" title="nac_user" value='<?php echo $clave_user;?>'></td>
	</tr>      
        
        <tr>
    <td class="registr">Telefono </td>
    <td class="registr"><input type="text" name="tel_user" title="nombre" value='<?php echo $tel_user; ?>'></td>
 
	 <td class="registr">Estado Civil</td>
	 <td class="registr"><input type="text" name="civil_user" title="apellido" value='<?php echo $civil_user;?>'></td>
	</tr> 
    <tr>
     <td class="registr">Lugar Nacimiento:</td>
     <td class="registr"><input type="text" name="lugarnac_user" title="clave_user" readonly="readonly" value='<?php echo $lugarnac_user;?>'></td>
    
     <td class="registr">Fecha Nacimiento:</td>
     <td class="registr"><input type="text" name="nac_user" title="clave_user" readonly="readonly" value='<?php echo $nac_user;?>'></td>
    </tr>

     <tr>
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="localidad_user" title="localidad vive" readonly="readonly" value='<?php echo $localidad_user;?>'></td>
    
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="estrato_user" title="estrato de vivenci" readonly="readonly" value='<?php echo $estrato_user;?>'></td>
    
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="barrio_user" title="barrio" readonly="readonly" value='<?php echo $barrio_user;?>'></td>
    
     </tr>

     <tr>
         
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="archivo_usuario" title="localidad vive" readonly="readonly" value='<?php echo $archivo_usuario;?>'></td>
    
     </tr>
    <tr>
         
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="responsable_user" title="localidad vive" readonly="readonly" value='<?php echo $responsable_user;?>'></td>
     
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="cel_respon_user" title="localidad vive" readonly="readonly" value='<?php echo $cel_respon_user;?>'></td>
    
     </tr>
    
    <tr>
         
     <td class="registr">Fecha Registro</td>
     <td class="registr"><input type="text" name="fecha_registro_user" title="localidad vive" readonly="readonly" value='<?php echo $fecha_registro_user;?>'></td>
    </tr>
    <tr>
     <td class="registr">Pregrado:</td>
     <td class="registr"><input type="text" name="carrera_user" title="localidad vive" readonly="readonly" value='<?php echo $carrera_user;?>'></td>
    <td class="registr">Universidad:</td>
     <td class="registr"><input type="text" name="universidad_user" title="localidad vive" readonly="readonly" value='<?php echo $universidad_user;?>'></td>
     
     </tr>
     <tr>
     <td class="registr">Estado Usuario</td>
     <td class="registr"><input type="text" name="id_estado" title="localidad vive" readonly="readonly" value='<?php echo $id_estado;?>'></td>
     
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="id_colegio" title="localidad vive" readonly="readonly" value='<?php echo $id_colegio;?>'></td>
     
     <td class="registr"> </td>
     <td class="registr"><input type="hidden" name="id_jornada" title="localidad vive" readonly="readonly" value='<?php echo $id_jornada;?>'></td>
     </tr>
         
         
     <tr>
     <td class="registr"> Rol usuario</td>
     <td class="registr"><input type="text" name="rol_user" title="localidad vive" readonly="readonly" value='<?php echo $rol_user;?>'></td>
    <td class="registr">Materia </td>
     <td class="registr"><input type="text" name="id_materia_user" title="localidad vive" readonly="readonly" value='<?php echo $id_materia_user;?>'></td>
   
     
     </tr>
     <tr>
  <script language="JavaScript">function actualizar(){ document.form.txtoperacion.value = 'actualizar';}</script>    
    <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Modificar Datos" onClick="actualizar()" >
    <input type='hidden' name='txtoperacion' value='des'>
    </td>
    </tr>
</table>
</form> 					
</div>

<?php include("footer.php");?>	
