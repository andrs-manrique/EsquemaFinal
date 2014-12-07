<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>


<div id="contenedor">
    <?php include("../3modelo/M_Colaborador.php"); ?>
    <h3> <font color='white'>Bienvenido: INGRESAR NUEVO COLABORADORES HPTA!!!!!! </font></h3><br>
    <form name="form1" method="post" action="../2controlador/C_Colaborador.php">
        <table align="center">


            <tr><td class="registr">Digité su  Numero de identificación:</td><td class="registr"><input type="text"name="dni" title="usuario" value=""required></td></tr>
            <tr><td class="registr">Ingrese  su Tipo de identificación:</td><td class="registr"><input type="text"name="tipodni_user" title="usuario" value=""required></td></tr>
            <tr><td class="registr">Digité su nombre:</td><td class="registr"><input type="text" name="nom_user" title="nombre" value=""required></td></tr>
            <tr><td class="registr">Digité su apellido:</td><td class="registr">
                         <input type="text" name="apell_user" title="apellido" value=""required></td></tr>
            <tr><td class="registr">Digité la contraseña:</td>
                <td class="registr">
                <input name="clave_user" type="password" title="login" value=""required></td></tr>
         
            <tr><td class="registr">Digité el correo:</td>
                <td class="registr"><input type="text" name="mail_user" title="correo" value=""required></td>
            </tr>

            <tr><td class="registr">Digité su celular:</td><td class="registr"><input type="text" name="tel_user" title="celular" value=""required></td></tr>

            <tr><td class="registr">Carrera que cursa:</td><td class="registr">
                    <input type="text"name="carrera_user" title="usuario" value=""></td></tr>
            
 <tr><td class="registr">Sexo</td>
        <td class="registr"><select name="sex_user" id="tipodni_user">
		         <option value="">Seleccione</option>
	                  <option value="Msculino">Masculino</option>
                          <option value="Femenino">Femenino</option>
		         </select>
        </td>

 <td class="registr">Estado Civil</td>
        <td class="registr"><select name="civil_user" id="civil_user">
		         <option value="">Seleccione</option>
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
     <td class="registr"><input type="hidden" name="lugarnac_user" title="¿Donde nacio?" ></td>
    
     <td class="registr">Fecha Nacimiento:</td>
     <td class="registr"><input type="hidden" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" ></td>
    </tr>

     <tr> 


<tr>     
         
     <td class="registr">localidad</td>
     <td class="registr">
         
         <input type="hidden" name="localidad_user" title="Cuando nacio (AAAA-MM-DD)" >
     </td>
     </tr>
     <tr>
     <td class="registr">estrato:</td>
     <td class="registr"><input type="hidden" name="estrato_user" title="estrato de vivenci"  ></td>
    
     <td class="registr">barrio:</td>
     <td class="registr"><input type="hidden" name="barrio_user" title="barrio" ></td>
    
     </tr>

<tr>
         
     <td class="registr">Archivo De registro:</td>
     <td class="registr"><input type="hidden" name="archivo_usuario" title="localidad vive" ></td>
    
     </tr>
    <tr>
         
     <td class="registr">Acudiente Nombre</td>
     <td class="registr"><input type="hidden" name="responsable_user" title=" Nombre" ></td>
     
     <td class="registr">Cel acudiente</td>
     <td class="registr"><input type="hidden" name="cel_respon_user" title="Telefono de Contacto" ></td>
    
     </tr>
    
    <tr>
<tr>
   <td class="registr">Foto</td>
    <td class="registr"><input type="text" name="foto_user" title="foto" ></td>
  
  </tr>
 <tr>
         
     <td class="registr">  </td>
     <td class="registr"><input type="hidden" name="fecha_registro_user" title="Fecha de registro "></td>
     
     <td class="registr">Pregrado Estudia</td>
     <td class="registr"><input type="text" name="carrera_user" title=" Carrera"  ></td>
    <td class="registr">Universidad </td>
     <td class="registr"><input type="text" name="universidad_user" title="Universidad " ></td>
   
     
     </tr>

<tr>
         
     <td class="registr">Tipo Colegio</td>
     <td>
    <select name="id_colegio" id="id_colegio">
    <option value="">Seleccione Colegio</option>
    <?php
    include("../3modelo/conexion.php");
    $consulta1=mysql_query("select *from t_colegio");		
    while($row=mysql_fetch_array($consulta1))
    {
    echo '<option value="'.$row['id_colegio'].'">'.$row['tipo_colegio'].'</option>';
    }	
   ?></select>
     </td>
     </tr>
     
     
     <tr>
     
    <td class="registr">Estado Usuario</td>
    <td class="registr">
    <select name="id_estado" id="id_colegio">
    <option value="">Seleccione </option>
    <?php
    include("../3modelo/conexion.php");
    $consulta2=mysql_query("select *from t_estado_user");		
    while($row=mysql_fetch_array($consulta2))
    {
    echo '<option value="'.$row['id_estado'].'">'.$row['nom_estado'].'</option>';
    }	
   ?></select>
     </td>
   
    <td class="registr">Jornada </td>
    <td class="registr">
    <select name="id_jornada" id="id_colegio">
    <option value="">Seleccione </option>
    <?php
    include("../3modelo/conexion.php");
    $consulta3=mysql_query("select *from t_jornada");		
    while($row=mysql_fetch_array($consulta3))
    {
    echo '<option value="'.$row['id_jornada'].'">'.$row['tipo_jornada'].'</option>';
    }	
   ?></select>
    
    
    </td>
    
    <td class="registr">Materia </td>
    <td class="registr">
        <select name="id_materia_user" id="id_colegio">
    <option value="">Seleccione </option>
    <?php
    include("../3modelo/conexion.php");
    $consulta4=mysql_query("select *from t_materia");		
    while($row=mysql_fetch_array($consulta4))
    {
    echo '<option value="'.$row['id_materia'].'">'.$row['nom_materia'].'</option>';
    }	
   ?></select>
    
    </td>
     </tr> <tr>
    <td class="registr"> Rol usuario</td>
    <td class="registr">
      <select name="rol_user" id="id_colegio">
    <option value="">Seleccione </option>
    <?php
    include("../3modelo/conexion.php");
    $consulta=mysql_query("select *from t_rol");		
    while($row=mysql_fetch_array($consulta))
    {
    echo '<option value="'.$row['identificador_rol'].'">'.$row['rol_de_usuario'].'</option>';
    }	
   ?></select>   
        
  
    </td>
   
     
     </tr>
            
     
            <td colspan="2" align="center" class="registr">
                <input type="submit" name="Submit" value="INGRESARCOLABORADOR" onClick="ingresar()"> 
                <input type='hidden' name='txtoperacion' value='des'></td>
            <!--<td colspan="2" align="center" class="registr"><input type="submit" name="Submit" value="INGRESAR COLABORADOR" </td>-->
     
        
        
        
        
        
        </table>
    </form>
    <div style="clear:both"></div>
    <div style="clear:both"></div>
</div>
<?php include('footer.php'); ?>