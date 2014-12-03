<!doctype html>
<?php include("header.php");?>
<?php include("../3modelo/autenticacion.php");?>
<?php include("head.php");?>	
<?php include("BarraNavegacionadmin.php");?>	
			<div id="contenedor">
			
			<section>
				<div id="contieneblog">
				
				<aside id="articuloss">
				  <div>
					<article  contenteditable="true">
                                            <font color="white"> 	<h3>Bienvenido AMIGO en esta sección usted puede cambiar sus datos personales</h3></font>
						<br>
						<div class="imagenarticuloblog" id="imgblog2"></div>
					</article>
				  </div>
				  <?php 
                                  
				  	include("../3modelo/conexion.php");

				    $identificacion = $_SESSION['identificacion'];

				    $consulta=mysql_query("select *from t_usuario where (dni_user='$identificacion')");		
				
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
				  <div><br>
				<font color="white">     <h3>DATOS PERSONALES</h3><br>
                                <p>esta seccion usted puede observar sus datos personales y modificarlos</p><br> </font>
<form name="form" method="post" action="../2controlador/C_Usuario.php" > 
 <table align="center">
  <tr>
    <td class="registr">Identificación</td>
    <td class="registr"><input type="text" name="dni" title="usuario"  value='<?php echo $_GET['dni']; ?>' disabled></td>
  
    <td class="registr">Tipo DNi</td>
    <td class="registr"><input type="text" name="tipodni_user" title="usuario" value='<?php echo $tipodni_user; ?>'></td>
  
   <td class="registr">Foto</td>
    <td class="registr"><input type="text" name="foto_user" title="usuario" value='<?php echo $tipodni_user; ?>'></td>
  
  </tr>
  
  <tr>
    <td class="registr">Nombre</td>
    <td class="registr"><input type="text" name="nom_user" title="nombre" value='<?php echo $nom_user; ?>'></td>
 
	 <td class="registr">Apellido</td>
	 <td class="registr"><input type="text" name="apell_user" title="apellido" value='<?php echo $apell_user;?>'></td>
	</tr>
         <tr>
	 <td class="registr">Sexo</td>
	 <td class="registr"><input type="text" name="sex_user" title="genero " value='<?php echo $sex_user;?>'></td>
	</tr>
	<tr>
	 <td class="registr">Correo</td>
	 <td class="registr"><input type="text" name="mail_user" title="correo electronico de contacto" value='<?php echo $mail_user;?>'></td>
	
	 <td class="registr">clave</td>
	 <td class="registr"><input type="password" name="clave_user" title="clavde de Ingreso" value='<?php echo $clave_user;?>'></td>
	</tr>      
        
        <tr>
    <td class="registr">Telefono Usuario</td>
    <td class="registr"><input type="text" name="tel_user" title="Telefono de Contacto" value='<?php echo $tel_user; ?>'></td>
 
	 <td class="registr">Estado Civil</td>
	 <td class="registr"><input type="text" name="civil_user" title="Estado Actual" value='<?php echo $civil_user;?>'></td>
	</tr>
        
        
    <tr>
     <td class="registr">Lugar Nacimiento:</td>
     <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?"  value='<?php echo $lugarnac_user;?>'></td>
    
     <td class="registr">Fecha Nacimiento:</td>
     <td class="registr"><input type="text" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" value='<?php echo $nac_user;?>'></td>
    </tr>

     <tr>
     <td class="registr">localidad:</td>
     <td class="registr"><input type="text" name="localidad_user" title="localidad vive"  value='<?php echo $localidad_user;?>'></td>
    
     <td class="registr">estrato:</td>
     <td class="registr"><input type="text" name="estrato_user" title="estrato de vivenci"  value='<?php echo $estrato_user;?>'></td>
    
     <td class="registr">barrio:</td>
     <td class="registr"><input type="text" name="barrio_user" title="barrio" value='<?php echo $barrio_user;?>'></td>
    
     </tr>

     <tr>
         
     <td class="registr">Archivo De registro:</td>
     <td class="registr"><input type="text" name="archivo_usuario" title="localidad vive" value='<?php echo $archivo_usuario;?>'></td>
    
     </tr>
    <tr>
         
     <td class="registr">Acudiente Nombre</td>
     <td class="registr"><input type="text" name="responsable_user" title=" Nombre"  value='<?php echo $responsable_user;?>'></td>
     
     <td class="registr">Cel acudiente</td>
     <td class="registr"><input type="text" name="cel_respon_user" title="Telefono de Contacto"  value='<?php echo $cel_respon_user;?>'></td>
    
     </tr>
    
    <tr>
         
     <td class="registr">Fecha Registro</td>
     <td class="registr"><input type="text" name="fecha_registro_user" title="localidad vive"  value='<?php echo $fecha_registro_user;?>'></td>
     
     <td class="registr">carrera_user</td>
     <td class="registr"><input type="text" name="carrera_user" title="localidad vive"  value='<?php echo $carrera_user;?>'></td>
    <td class="registr">Universidad </td>
     <td class="registr"><input type="text" name="universidad_user" title="localidad vive" value='<?php echo $universidad_user;?>'></td>
   
     
     </tr>
     <tr>
         
     <td class="registr">Tipo Colegio</td>
     <td class="registr"><input type="text" name="id_colegio" title="¿Publico o Privado?" value='<?php echo $id_colegio;?>'></td>
     
     <td class="registr">Estado Usuario</td>
     <td class="registr"><input type="text" name="id_estado" title="¿Ativado?"  value='<?php echo $id_estado;?>'></td>
    <td class="registr">Jornada </td>
     <td class="registr"><input type="text" name="id_jornada" title="Jornada Interes"  value='<?php echo $id_jornada;?>'></td>
   <td class="registr"> Rol usuario</td>
     <td class="registr"><input type="text" name="rol_user" title="¿Col o Aspi?"  value='<?php echo $rol_user;?>'></td>
    <td class="registr">Materia </td>
     <td class="registr"><input type="text" name="id_materia_user" title="materia"  value='<?php echo $id_materia_user;?>'></td>
   
     
     </tr>
    
     <tr><br>
  <script language="JavaScript">function actualizar(){ document.form.txtoperacion.value = 'actualizar';}</script>    
    <td colspan="10" align="center" class="registr"> <input type="submit" name="Submit" value="Modificar Información" onClick="actualizar()" >
    <input type='hidden' name='txtoperacion' value='des'>
    </td></td>
    </tr>
</table>
</form> 					
				  </div>
				</aside>
				</div>
			</section>
<?php include("footer.php");?>	
