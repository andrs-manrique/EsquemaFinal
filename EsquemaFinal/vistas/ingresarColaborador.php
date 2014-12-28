<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>

<div class="container" align="center">

    <?php include("../3modelo/M_Usuario.php"); ?>
    <h1> <font color='white'> Registrar Colaborador </font></h1><br>
    <form name="form" method="post" action="../2controlador/C_Usuario.php" > 
        <table align="center" >
            <tr>
                <td class="registr">No. Documento:</td> 
                <td class="registr"><input type="text" name="dni_user" title="Numero de documento identificacion Nacional"required></td> 


                <td class="registr">Tipo de documento:</td>
                <td class="registr"><select name="tipodni_user"required> >
                        <option value="">Seleccione</option>
                        <option value="Cedula Ciudadania">CC</option>
                        <option value="Tarjeta Identidad">TI</option>
                        <option value="Cedula Extranjera">CE</option> 
                    </select>
                </td>
            </tr>


            <tr>
                <td class="registr">Nombre(s):</td>
                <td class="registr"><input type="text" name="nom_user" title="nombre"required></td>

                <td class="registr">Apellido(s):</td>
                <td class="registr"><input type="text" name="apell_user" title="apellido" required></td>
            </tr>
            <tr>  
                <td class="registr">Sexo</td>
                <td class="registr"><select name="sex_user" id="tipodni_user"required>>
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">Correo</td>
                <td class="registr"><input type="email" name="mail_user" title="correo electronico de contacto" required></td>


            </tr>      

            <tr>
                <td class="registr">Telefono Usuario</td>
                <td class="registr"><input type="text" name="tel_user" title="Telefono de Contacto" ></td>






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
                <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?" ></td>

                <td class="registr">Fecha Nacimiento:</td>
                <td class="registr"><input type="date" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" ></td>
            </tr>

            <tr>

                <td class="registr">Carrera</td>
                <td class="registr"><input type="text" name="carrera_user" title="Carrrera "></td>


                <td class="registr">Universidad </td>
                <td class="registr"><input type="text" name="universidad_user" title="Universidad " ></td>


            </tr>
            <tr>


            </tr>


            <tr>

                <td class="registr">Estado Usuario</td>
                <td class="registr">
                    <select name="id_estado" id="id_colegio">
                        <option value="">Seleccione </option>
                        <?php
                        include("../3modelo/conexion.php");
                        $consulta2 = mysql_query("select *from t_estado_user");
                        while ($row = mysql_fetch_array($consulta2)) {
                            echo '<option value="' . $row['id_estado'] . '">' . $row['nom_estado'] . '</option>';
                        }
                        ?></select>
                </td>

                <td class="registr">Materia </td>
                <td class="registr">
                    <select name="id_materia_user" id="id_colegio">
                        <option value="">Seleccione </option>
                        <?php
                        include("../3modelo/conexion.php");
                        $consulta4 = mysql_query("select *from t_materia");
                        while ($row = mysql_fetch_array($consulta4)) {
                            echo '<option value="' . $row['id_materia'] . '">' . $row['nom_materia'] . '</option>';
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
                        $consulta = mysql_query("select *from t_rol");
                        while ($row = mysql_fetch_array($consulta)) {
                            echo '<option value="' . $row['identificador_rol'] . '">' . $row['rol_de_usuario'] . '</option>';
                        }
                        ?></select>   


                </td>


            </tr>

            <tr><td>

                    <input type="hidden" name="clave_user" title="clavde de Ingreso" value='clave1234'>
                    <input type="hidden" name="localidad_user" title="clavde de Ingreso" value="">
                    <input type="hidden" name="estrato_user" title="clavde de Ingreso" value="">
                    <input type="hidden" name="barrio_user" title="clavde de Ingreso" value="">
                    <input type="hidden" name="archivo_usuario" title="" value="">
                    <input type="hidden" name="responsable_user" title="" value="">
                    <input type="hidden" name="cel_respon_user" title="" value="">
                    <input type="hidden" name="foto_user" title="" value="profesor.png">
                    <input type="hidden" name="id_colegio" title="" value="0">
                    <input type="hidden" name="id_jornada" title="" value="0">

                </td>
            </tr>   
    <tr><br>
  <script language="JavaScript">function insertarDatos(){ document.form.txtoperacion.value = 'insertarDatos';}</script>    
  <td colspan="4" align="center" class="registr"> 
      <input type="submit" name="Submit" value="Insertar Información" onClick="insertarDatos()" >
    <input type='hidden' name='txtoperacion' value=''>
    </td></td>
    </tr>			   

        </table>
    </form>
    <br><br>

</div>





<?php include("footer.php"); ?>	
