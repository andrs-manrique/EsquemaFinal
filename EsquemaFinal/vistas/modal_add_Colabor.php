

	<div id="add_user" class="modal hide fade" tabindex="-80" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add Colaborador</strong></div>
	<form class="form" method="post">
			

<div class="control-group">
	<table>


<tr>
	<td>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Tipo Identificación:</label>
			<div class="controls">
			<select  name="Tipo_doc" required>
                                     <option></option>
									<option>Cédula Ciudadania</option>   <?php // tipo de documento insertar opciones?>
									<option>Tarjeta de Identidad</option>
									<option>Cedula Extranjeria</option>					
				</select>
			</div>
		</div>	

		</td>
		<td>
			<div class="control-group">
				<label class="control-label" for="inputEmail">No. Documento</label>
				<div class="controls">
				<input type="text" name="id_colaborador" id="inputEmail" placeholder="1111" required>
				</div>
			</div>
</td>
		</tr>

	<tr><td>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Nombre:</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="nom_colaborador" placeholder="andres" required>
				</div>
			</div></td>
			<td>
			<div class="control-group">
				<label class="control-label" for="inputEmail">Apellido:</label>
				<div class="controls">
				<input type="text" name="apell_colaborador" id="inputEmail" placeholder="manrique" required>
				</div>
			</div></td>
		</tr>

</table>
<div class="control-group">
	 <label for="fecha"> FECHA DE NACIMIENTO:
    <input type="text" name="fenac_colaborador" id="fecha" placeholder="1990-02-28"  /> 
    </div>
    </label>
</div>

   <div class="control-group">
			<label class="control-label" for="inputPassword">No. Celular:</label>
			<div class="controls">
			<input type="tel" pattern="[0-9]{10,10}" class="search" name="cel_colaborador"  placeholder="3215405622 "  autocomplete="on"  maxlength="10" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail" required>Genero:</label>
			<div class="controls">
		  <span>
          <input  name="genero_colaborador"  type="radio" value="Femenino"  checked="checked" />  FEMENINO
          <input  name="genero_colaborador" type="radio" value="Masculino"  />  MASCULINO 
		  </span>          
         </div>
		</div>
		<div class="control-group">
				<label class="control-label" for="inputEmail">Entidad/Universidad:</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="u_colaborador" placeholder="Universidad Nacional" >
				</div>
			</div>
<div class="control-group">
				<label class="control-label" for="inputEmail">Carrera:</label>
				<div class="controls">
				<input type="text" id="inputEmail" name="pregrado_colaborador" placeholder="Psicología" >
				</div>
			</div>


<div class="control-group">
			<label class="control-label" for="inputEmail">Area:</label>
			<div class="controls">
			<select  name="materia_colaborador" required>
                                     <option></option>
									<option>Matemáticas</option>   <?php // tipo de documento insertar opciones?>
									<option>Sociales</option>
									<option>Química</option>	
									<option>Biología</option>
									<option>Física</option>
									<option>Analisis De Imagen</option>	
									<option>Analisis Textual</option>					
				</select>
			</div>
		</div>	

			<div class="control-group">
			<label class="control-label" for="inputEmail">Correo:</label>
			<div class="controls">
			<input type="text"  placeholder="correo@ejemplo.com" id="inputEmail" name="correo_colaborador"  pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  required/>
			</div>
		</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Guardar</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cerrar</button>
		</div>
    </div>
	<?php

	if (isset($_POST['submit'])){

$fechahoy=getdate();
$FechaActual= $fechahoy["mday"] ."-".$fechahoy["mon"]."-".$fechahoy["year"];
$FechaRegistro=$fechahoy["year"]."-".$fechahoy["mon"]."-".$fechahoy["mday"];

$tipod_colaborador=$_POST['Tipo_doc'];
$id_colaborador=$_POST['id_colaborador'];
$nom_colaborador=$_POST['nom_colaborador'];
$apell_colaborador=$_POST['apell_colaborador'];
$cel_colaborador=$_POST['cel_colaborador'];
$genero_colaborador=$_POST['genero_colaborador'];
$u_colaborador=$_POST['u_colaborador'];
$pregrado_colaborador=$_POST['pregrado_colaborador'];
$correo=$_POST['correo_colaborador'];
$materia_colaborador=$_POST['materia_colaborador'];
$fenac_colaborador=$_POST['fenac_colaborador'];
$clave_colaborador='Clave';
$clave2_colaborador='Clave2';
	//insert into tabla_colaborador (tipod_colaborador,id_colaborador,nom_colaborador,apell_colaborador,genero_colaborador,clave_colaborador,clave2_colaborador) 
	//	values('cdedula','111111','juan','toomas','masculino','femenino','aaa');

	$inserta =mysql_query( "insert INTO tabla_colaborador(`tipod_colaborador`, `id_colaborador`, `nom_colaborador`, `apell_colaborador`, `edad_colaborador`, `cel_colaborador`, `tel_colaborador`,
 `genero_colaborador`, `u_colaborador`,`pregrado_colaborador`, `correo_colaborador`, `conficorreo_colaborador`, `clave_colaborador`, `clave2_colaborador`, `desc_colaborador`,
  `foto_colaborador`, `web_colaborador`, `area_colaborador`, `feregistro_colaborador`, `fenac_colaborador`)
  values('$tipod_colaborador','$id_colaborador','$nom_colaborador','$apell_colaborador','20','$cel_colaborador','00000',
			'$genero_colaborador','$u_colaborador','$pregrado_colaborador','$correo','$correo','$id_colaborador','$id_colaborador','null',
			'default.jpg','null','$materia_colaborador','$fenac_colaborador','$FechaRegistro')")or die(mysql_error());
if ( mysql_query($inserta)){
echo " <br> Envio correcto de informacion  a la BD";
	}
}
	?>