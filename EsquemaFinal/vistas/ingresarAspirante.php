<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>			
<?php include("../3modelo/autenticacion.php");?>
	

<div class="container" align="center">
    
    <?php include("../3modelo/M_Usuario.php");?>
    <h1> <font color='white'> Registrar Aspirantes </font></h1>
    <form name="form" method="post" action="../2controlador/C_Usuario.php" > 
        <table align="center" border="1">
            <tr>
                <td class="registr">No. Documento:</td> 
                <td class="registr"><input type="text" name="dni_user" title="Numero de documento identificacion Nacional"></td>


                <td class="registr">Tipo de documento:</td>
                <td class="registr"><select name="tipodni_user" >
                        <option value="">Seleccione</option>
                        <option value="Cedula Ciudadania">CC</option>
                        <option value="Tarjeta Identidad">TI</option>
                        <option value="Cedula Extranjera">CE</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">Foto</td>
                <td class="registr"><input type="text" name="foto_user" title="foto" value="estudiante.png"></td>

            </tr>

            <tr>
                <td class="registr">Nombre(s):</td>
                <td class="registr"><input type="text" name="nom_user" title="nombre"></td>

                <td class="registr">Apellido(s):</td>
                <td class="registr"><input type="text" name="apell_user" title="apellido" ></td>
            </tr>
            <tr>  
                <td class="registr">Sexo</td>
                <td class="registr"><select name="sex_user" id="tipodni_user">
                        <option value="">Seleccione</option>
                        <option value="Msculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">Correo</td>
                <td class="registr"><input type="text" name="mail_user" title="correo electronico de contacto" ></td>

                <td class="registr">clave</td>
                <td class="registr"><input type="hidden" name="clave_user" title="clavde de Ingreso"></td>
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
                <td class="registr"><input type="text" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" ></td>
            </tr>

            <tr>     

                <td class="registr">localidad:</td>
                <td class="registr"><select  name="localidad_user" >
                        <option></option>
                        <option value="1.Usaquen" >1.Usaquen</option>
                        <option value="2 Chapinero" >2 Chapinero</option>
                        <option value="3.Santafe" >3.Santa fe</option>
                        <option value="4 San Cristobal" >4.San Cristobal</option>
                        <option value="5 Usme" >5.Usme</option>                <option value="6 Tunjuelito" >6. Tunjuelito</option>
                        <option value="7 Bosa" >7. Bosa</option>             <option value="8 Kennedy" >8. Kenendy</option>
                        <option value="9 Fontibon" >9. Fontibon</option>
                        <option value="10 Engativa" >10. Engativa</option>         <option value="11 Suba" >11.Suba</option>
                        <option value="12 B. Unidos" >12.B. Unidos</option>
                        <option value="13 Teusaquillo" >13. Teusaquillo</option>     <option value="14 Martires" >14. Martires</option>     <option value="15 Antonio Nariño" >15. Antonio Nariño</option>
                        <option value="16 Puente Aranda" >16. Puente Aranda</option>    <option value="17 Candelaria" >17. La Candelaria</option>  <option value="18 R. uribe uribe" >18. R. uribe uribe</option>
                        <option value="19 C. bolivar" >19. ciudad Bolivar</option>    <option value="20 Sumapaz" >20. Sumapaz</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="registr">estrato:</td>
                <td class="registr"><input type="text" name="estrato_user" title="estrato de vivenci"  ></td>

                <td class="registr">barrio:</td>
                <td class="registr"><input type="text" name="barrio_user" title="barrio" ></td>

            </tr>

            <tr>

                <td class="registr">Archivo De registro:</td>
                <td class="registr"><input type="text" name="archivo_usuario" title="localidad vive" ></td>

            </tr>
            <tr>

                <td class="registr">Acudiente Nombre</td>
                <td class="registr"><input type="text" name="responsable_user" title=" Nombre" ></td>

                <td class="registr">Cel acudiente</td>
                <td class="registr"><input type="text" name="cel_respon_user" title="Telefono de Contacto" ></td>

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
                        $consulta1 = mysql_query("select *from t_colegio");
                        while ($row = mysql_fetch_array($consulta1)) {
                            echo '<option value="' . $row['id_colegio'] . '">' . $row['tipo_colegio'] . '</option>';
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
                        $consulta2 = mysql_query("select *from t_estado_user");
                        while ($row = mysql_fetch_array($consulta2)) {
                            echo '<option value="' . $row['id_estado'] . '">' . $row['nom_estado'] . '</option>';
                        }
                        ?></select>
                </td>

                <td class="registr">Jornada </td>
                <td class="registr">
                    <select name="id_jornada" id="id_colegio">
                        <option value="">Seleccione </option>
                        <?php
                        include("../3modelo/conexion.php");
                        $consulta3 = mysql_query("select *from t_jornada");
                        while ($row = mysql_fetch_array($consulta3)) {
                            echo '<option value="' . $row['id_jornada'] . '">' . $row['tipo_jornada'] . '</option>';
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
            <tr>
            <script language="JavaScript">function insertarDatos() {
                    document.form1.txtoperacion.value = 'insertarDatos';
                }
            </script>  
            <td colspan="6" align="center" class="registr">
                <input type="submit" name="Submit" value="insertarDatos" onClick="insertar()" > 
                <input type='hidden' name='txtoperacion' value='des'></td>
            </tr>			   

        </table>
    </form>
    <br><br>

</div>





<?php include("footer.php"); ?>	
