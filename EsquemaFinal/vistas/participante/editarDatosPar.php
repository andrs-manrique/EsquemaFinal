<!doctype html>
<?php include("header.php");?>
<?php include("../../3modelo/autenticacion.php");?>
<?php include("./BarrNavAsp.php");?>					
 <?php 
 include("../../3modelo/conexion.php");
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
<div align="center">
    <section>
				<div id="contieneblog">
<font color="white"><h3>DATOS PERSONALES</h3> <p>Modificar</p></font>
<form name="form" method="post" action="../../2controlador/C_Usuario.php" enctype="multipart/form-data"> 
 <table align="center" >
       <tr> 
 <?php $consulta=mysql_query("select * from t_usuario where dni_user='$identificacion'");
while($fila=mysql_fetch_array($consulta))
{echo "<h1> <font color='white'>".$fila['nom_user']." ".$fila['apell_user']."</font></h1>";
 echo "<img src='../../fotos/".$fila['foto_user']."' width=150px></td>";
}   ?>
  </tr>
  <tr><br>
    <td class="registr">No. Identificación:</td>                                  
    <td class="registr"><input type="text" name="dni_user" title="usuario"  value='<?php echo base64_decode($_GET['dni']);?>' readonly="readonly"></td>
  
    <td class="registr">Tipo DNI:</td>
    <td>
     <select name="tipodni_user" >
                        <option value='<?php echo $tipodni_user; ?>'><?php echo $tipodni_user; ?></option>
                        <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                        <option value="Tarjeta Identidad">Tarjeta Identidad</option>
                        <option value="Cedula Extranjera">Cedula Extranjera</option> 
    </select></td>
     </tr>
    
  <tr>
    <td class="registr">Nombre</td>
    <td class="registr"><input type="text" name="nom_user" title="nombre" value='<?php echo $nom_user; ?>'readonly="readonly"></td>
 
	 <td class="registr">Apellido</td>
         <td class="registr"><input type="text" name="apell_user" title="apellido" value='<?php echo $apell_user;?>'readonly="readonly" ></td>
	</tr>
         <tr>
	 <td class="registr">Sexo</td>
	 <td class="registr">
         <select name="sex_user" id="tipodni_user">
                        <option value='<?php echo $sex_user;?>'><?php echo $sex_user;?></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
         
         </td>
	 <td class="registr">Correo</td>
	 <td class="registr"><input type="text" name="mail_user" title="correo electronico de contacto" value='<?php echo $mail_user;?>'></td>
	
         </tr>
	<tr>
            <td>clave</td>
            <td class="registr"><input type="text" name="clave_user" title="clavde de Ingreso" value='<?php echo $clave_user;?>' readonly=""></td>
	</tr>      
        
        <tr>
    <td class="registr">Contacto:</td>
    <td class="registr"><input type="text" name="tel_user" title="Telefono de Contacto" value='<?php echo $tel_user; ?>'></td>
 
	 <td class="registr"> Estado Civil</td>	
          <td class="registr"><select name="civil_user" id="civil_user" readonly="readonly" >
                        <option value="<?php echo $civil_user;?>"><?php echo $civil_user;?></option>
                        <option value="Solter@">Solter@</option>
                        <option value="union_Libre">Union_Libre</option>
                        <option value="Comprometid@">Comprometid@</option>
                        <option value="Casad@">Casad@</option>
                        <option value="Divorciad@">Divorciad@</option>
                    </select>
                </td>
        
        
        </tr>
       
    <tr>
     <td class="registr">Lugar Nacimiento:</td>
     <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?"  value='<?php echo $lugarnac_user;?>'></td>
    
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" value='<?php echo $nac_user;?>'></td>
    </tr>

     <tr>
    
                <td class="registr">Localidad:</td>
                <td class="registr"><select  name="localidad_user" readonly="readonly">
                        <option value="<?php echo $localidad_user;?>" > <?php echo $localidad_user;?> </option>
                        <option value="1.Usaquen" >1.Usaquen</option>
                        <option value="2. Chapinero" >2. Chapinero</option>
                        <option value="3.Santafe" >3.Santa fe</option>
                        <option value="4. San Cristobal" >4.San Cristobal</option>
                        <option value="5. Usme" >5.Usme</option>                <option value="6. Tunjuelito" >6. Tunjuelito</option>
                        <option value="7. Bosa" >7. Bosa</option>             <option value="8. Kennedy" >8. Kenendy</option>
                        <option value="9. Fontibon" >9. Fontibon</option>
                        <option value="10. Engativa" >10. Engativa</option>         <option value="11. Suba" >11.Suba</option>
                        <option value="12. B. Unidos" >12.B. Unidos</option>
                        <option value="13. Teusaquillo" >13. Teusaquillo</option>     <option value="14. Martires" >14. Martires</option>     <option value="15 Antonio Nariño" >15. Antonio Nariño</option>
                        <option value="16. Puente Aranda" >16. Puente Aranda</option>    <option value="17. Candelaria" >17. La Candelaria</option>  <option value="18 R. uribe uribe" >18. R. uribe uribe</option>
                        <option value="19 C. bolivar" >19. ciudad Bolivar</option>    <option value="20. Sumapaz" >20. Sumapaz</option>
                    </select>
                </td>
           
     
     
     
     
     
     <td class="registr">Estrato</td>
    <td class="registr"><input type="number" min="1" max="6" value="<?php echo $estrato_user;?>" name="estrato_user" title="Estrato de Vivienda"  ></td>

     
     </tr>
     <tr>
     <td class="registr">Barrio:</td>
     <td class="registr"><input type="text" name="barrio_user" title="barrio" value='<?php echo $barrio_user;?>'></td>
    
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="archivo_usuario" title="localidad vive" value='<?php echo $archivo_usuario;?>'></td>
    
     </tr>
    <tr>
         
     <td class="registr">Acudiente Nombre:</td>
     <td class="registr"><input type="text" name="responsable_user" title=" Nombre"  value='<?php echo $responsable_user;?>'></td>
     
     <td class="registr">Cel: Acudiente:</td>
     <td class="registr"><input type="number" name="cel_respon_user" title="Telefono de Contacto"  value='<?php echo $cel_respon_user;?>'></td>
    
     </tr>
     <tr>
     <td class="registr"> </td>
     <td class="registr"><input type="hidden" name="universidad_user" title="localidad vive" value='<?php echo $universidad_user;?>'></td>
     
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="carrera_user" title="localidad vive"  value='<?php echo $carrera_user;?>'></td>
    </tr>
     <tr>
         
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="id_colegio" title="¿Publico o Privado?" value='<?php echo $id_colegio;?>'></td>
     
     <td class="registr"></td>
     <td class="registr"><input type="hidden" name="id_estado" title="¿Ativado?"  value='<?php echo $id_estado;?>'></td>
     </tr>
     <tr>
     
     <td class="registr"> </td>
      <td class="registr"><input type="hidden" name="id_jornada" title="Jornada Interes"  value='<?php echo $id_jornada;?>'></td>
     </tr>
     
     <tr>
     <td class="registr"> </td>
     <td class="registr"><input type="hidden" name="rol_user" title="¿Col o Aspi?"  value='<?php echo $rol_user;?>'></td>
      <td class="registr"></td>
      <td class="registr"><input type="hidden" name="fecha_registro_user"  value='<?php echo $fecha_registro_user;?>' disabled></td>
     
     </tr>
     <tr>
      <td class="registr">  </td>
     <td class="registr"><input type="hidden" name="id_materia_user" title="materia"  value='<?php echo $id_materia_user;?>'></td>
      <td class="registr">  </td>
     <td class="registr"><input type="hidden" name="foto_user" title="materia"  value='<?php echo $foto_user;?>'></td>
     
    
     </tr>
     
     
     <tr><br>
  <script language="JavaScript">function actualizarPar(){ document.form.txtoperacion.value = 'actualizarPar';}</script>    
  <td colspan="4" align="center" class="registr"> 
      <input type="submit" name="Submit" value="Modificar Información" onClick="actualizarPar()" >
    <input type='hidden' name='txtoperacion' value=''>
    </td></td>
    </tr>
</table>
</form> 					
</div>
        			</section>

</div>
<?php include("../footer.php");?>	
