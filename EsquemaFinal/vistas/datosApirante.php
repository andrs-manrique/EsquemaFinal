<?php include('header.php'); ?>
<?php include("./BarrNavCol.php");?>			
<?php include("../3modelo/autenticacion.php");?>		

		<div id="contenedor" align="center">
			<section>
				<div id="contieneblog">
				<?php // include("header.php");?>
				<aside id="articuloss">
				
<div><br>
    <h3> <font color="white"> DATOS PERSONALES </font></h3>
	<font color="white"><p>..::Verificar Su Nombre::..</p>
        </font>
        <form name="form" method="post" action="../2controlador/C_Usuario.php" >           
        <table align="center">
	<tr>
     
	<td class="registr">
        <input type="text" align="middle" name="nom_user" title="nombre" readonly="readonly" value="<?php include("../3modelo/conexion.php");
		$identificacion = $_SESSION['identificacion'];
		$consulta=mysql_query("select * from t_usuario where dni_user='$identificacion'");
		while($fila=mysql_fetch_array($consulta))
						{
							echo $fila['nom_user'];
						}?>"> </td>
						  </tr>
			                 <input type="hidden" name="tipodni_user" title=" " readonly="readonly" value="">
                                         <input type="hidden" name="dni_user" title="dni_user" readonly="readonly" value="">
				         <input type="hidden" name="apell_user" title=" " readonly="readonly" value="">
		                         <input type="hidden" name="sex_user" title=" " readonly="readonly" value="">
                                         <input type="hidden" name="tel_user" title=" " readonly="readonly" value="">
                                         <input type="hidden" name="civil_user" title="Estado Civil" readonly="readonly" value="">
                                         <input type="hidden" name="lugarnac_user" title=" " readonly="readonly" value="">
                                         <input type="hidden" name="clave_user" title=" " readonly="readonly" value="">
            
					 <input type="hidden" name="mail_user" title="mail_user" readonly="readonly" value="">
					 <input type="hidden" name="nac_user" title="nac_user " readonly="readonly" value="">
					 <input type="hidden" name="localidad_user" name="localidad_user " readonly="readonly" value="">
                                         <input type="hidden" name="estrato_user" title="mail_user" readonly="readonly" value="">
					 <input type="hidden" name="barrio_user" title="clave_user" readonly="readonly" value="">
					 <input type="hidden" name="archivo_usuario" name="permiso" readonly="readonly" value="">
                                         <input type="hidden" name="responsable_user" title="mail_user" readonly="readonly" value="">
					 <input type="hidden" name="foto_user" title="clave_user" readonly="readonly" value="">
					 <input type="hidden" name="fecha_registro_user" name="permiso" readonly="readonly" value="">
                                         <input type="hidden" name="carrera_user" title="mail_user" readonly="readonly" value="">
					 <input type="hidden" name="universidad_user" title="clave_user" readonly="readonly" value="">
				        <input type="hidden" name="cel_respon_user" title="clave_user" readonly="readonly" value="">
                                         <input type="hidden" name="id_colegio" name="permiso" readonly="readonly" value="">
                                         <input type="hidden" name="id_estado" title="mail_user" readonly="readonly" value="">
					 <input type="hidden" name="id_jornada" title="clave_user" readonly="readonly" value="">
					 <input type="hidden" name="rol_user"  readonly="readonly" value="">
                                         <input type="hidden" name="id_materia_user"  readonly="readonly" value="">
                                                                                
                                                                     <tr>    
		 <script language="JavaScript">
                 function   consultarDatosCol(){ document.form.txtoperacion.value = 'consultarDatosCol';}
                              </script>    
						    <td colspan="2" align="center" class="registr"> 
                      <input type="submit" name="Submit" value="Ver" onClick="consultarDatosCol()" >
						    <input type='hidden' name='txtoperacion' value='des'>
						    </td></td>
						    </tr>
						</table>
						</form> 
				  </div>
				</aside>
				</div>
			</section>
                </div>
			                                		<?php include("footer.php");?>		

