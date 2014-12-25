<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
		<div  align="center" >
     <form name="form" method="post" action="../2controlador/C_Usuario.php" > 
     <table align="center" >   
  <input type="text" name="tipodni_user" title=" " readonly="readonly" value=" <?php echo $_GET['dni'];?>">
         <input type="hidden" name="dni_user" title="dni_user" readonly="readonly" value="">
	<input type="hidden" name="nom_user" title=" " readonly="readonly" value="">

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
                       function desac(){if (confirm('¿Estas seguro de Desactivar el Colaborador?')){ document.form.txtoperacion.value = 'desac';} 
                           else {} } </script>  
						    <td class="registr" colspan="2" align="center">
                                                        <input type="submit" name="Submit" value="Desactivar" onClick="desac()" ><input type='hidden' name='txtoperacion' value='des'></td>
						    </tr>
						</table>        
					</form>		                       
                        </div>


