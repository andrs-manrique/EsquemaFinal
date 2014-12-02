
<?php include("header.php");?>
<?php include("head.php");?>	
<?php include("../3modelo/autenticacion.php");?>
<?php include("BarraNavegacionadmin.php");?>			

		<div id="contenedor">
			<section>
				<div id="contieneblog">
				<?php // include("header.php");?>
				<aside id="articuloss">
				
<div><br>
    <h3> <font color="white"> DATOS PERSONALES </font></h3><br>
	<font color="white"><p>en esta sección usted puede ver sus datos personales como tambien modificarlos</p>
        </font><br>
	<form name="form" method="post" action="../2controlador/C_Usuario.php" > 
            
            <?php  // se genera un fomulario de mostrar datos de la DB?>
	<table align="center">
	<tr>
        <td class="registr">Nombre</td>
	<td class="registr">
        <input type="text" name="nombre" title="nombre" readonly="readonly" value="<?php include("../3modelo/conexion.php");
		$identificacion = $_SESSION['identificacion'];
		$consulta=mysql_query("select*from t_usuario where dni_user='$identificacion'");
		while($fila=mysql_fetch_array($consulta))
						{
							echo $fila['nom_user'];
						}?>"></td>
						  </tr>
						    <input type="hidden" name="dni" title="dni_user" readonly="readonly" value="">
						    <input type="hidden" name="apell_user" title="apell_user" readonly="readonly" value="">
						    <input type="hidden" name="mail_user" title="mail_user" readonly="readonly" value="">
						    <input type="hidden" name="clave_user" title="clave_user" readonly="readonly" value="">
						    <input type="hidden" name="permiso" name="permiso" readonly="readonly" value="">
						    <tr>    
						  <script language="JavaScript">function consultarDatos(){ document.form.txtoperacion.value = 'consultarDatos';}</script>    
						    <td colspan="2" align="center" class="registr"> <input type="submit" name="Submit" value="Consultar Datos" onClick="consultarDatos()" >
						    <input type='hidden' name='txtoperacion' value='des'>
						    </td></td>
						    </tr>
						</table>
						</form> 
				  </div>
				</aside>
				<div style="clear:both"></div>
				</div>
			</section>
			                                		<?php include("footer.php");?>		

