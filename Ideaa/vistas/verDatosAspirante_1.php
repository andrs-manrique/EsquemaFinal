<?php include('header_1.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    <section>
        <div id="contieneblog">
            <aside id="articuloss">
                <?php
                include("../3modelo/conexion.php");
                $idaspi = base64_decode($_GET['id']);
                $consulta = mysql_query("select *from t_usuario where (dni_user='$idaspi')");
                if ($row = mysql_fetch_array($consulta)) {
                    $dni = $row["dni_user"];
                    $tipodni_user = $row["tipodni_user"];
                    $nom_user = $row["nom_user"];
                    $apell_user = $row["apell_user"];
                    $clave_user = $row["clave_user"];
                    $sex_user = $row["sex_user"];
                    $mail_user = $row["mail_user"];
                    $tel_user = $row["tel_user"];
                    $civil_user = $row["civil_user"];
                    $lugarnac_user = $row["lugarnac_user"];
                    $nac_user = $row["nac_user"];
                    $localidad_user = $row["localidad_user"];
                    $estrato_user = $row["estrato_user"];
                    $barrio_user = $row["barrio_user"];
                    $archivo_usuario = $row["archivo_usuario"];
                    $responsable_user = $row["responsable_user"];
                    $cel_respon_user = $row["cel_respon_user"];
                    $foto_user = $row["foto_user"];
                    $fecha_registro_user = $row["fecha_registro_user"];
                    $carrera_user = $row["carrera_user"];
                    $universidad_user = $row["universidad_user"];
                    $id_colegio = $row["id_colegio"];
                    $id_estado = $row["id_estado"];
                    $id_jornada = $row["id_jornada"];
                    $rol_user = $row["rol_user"];
                    $id_materia_user = $row["id_materia_user"];
                    $clasificacion_usuario = $row["clasificacion_usuario"];
                    $ultimo_acceso = $row["ultimo_acceso"];
                }
                ?>
                <div>
                    <font color="black"><h3>DATOS PERSONALES ASPIRANTE</h3></font>

                    <form name="form" method="post" action="../2controlador/C_Usuario.php" > 
                        <table align="center" >
                            <tr>
                                <td class="registr">No. Identificación:</td>
                                <td class="registr"><input type="text" name="dni_user" title="documento"  value='<?php echo $idaspi ?>' readonly></td>

                                <td class="registr">Tipo DNI:</td>
                                <td class="registr"><input type="text" name="tipodni_user" title="usuario" value='<?php echo $tipodni_user; ?>' readonly></td>
                                <?php
                                $consulta = mysql_query("select * from t_usuario where dni_user='$idaspi'");
                                while ($fila = mysql_fetch_array($consulta)) {
                                    echo "<h1> <font color='black'>" . $fila['nom_user'] . " " . $fila['apell_user'] . "</font></h1>";
                                    echo "<img src='../fotos/" . $fila['foto_user'] . "' width=150px></td>";
                                }
                                ?>
                            </tr>

                            <tr>
                                <td class="registr">Nombre:</td>
                                <td class="registr"><input type="text" name="nom_user" title="nombre" value='<?php echo $nom_user; ?>' readonly></td>

                                <td class="registr">Apellido:</td>
                                <td class="registr"><input type="text" name="apell_user" title="apellido" value='<?php echo $apell_user; ?>'readonly></td>
                            </tr>
                            <tr>
                                <td class="registr">Sexo:</td>
                                <td class="registr"><input type="text" name="sex_user" title="genero " value='<?php echo $sex_user; ?>' readonly></td>

                                <td class="registr">Correo</td>
                                <td class="registr"><input type="text" name="mail_user" title="correo electronico de contacto" value='<?php echo $mail_user; ?>'readonly></td>
                            </tr>

                            <tr>

                                <td class="registr">Fecha Registro</td>
                                <td class="registr"><input type="text" name="fecha_registro_user" title="localidad vive"  value='<?php echo $fecha_registro_user; ?>'readonly></td>
                                <td class="registr">Imagen:</td>
                                <td class="registr"><input type="text" name="foto_user" title="usuario" value='<?php echo $foto_user; ?>'readonly></td>

                            </tr>
                            <tr>
                                <td class="registr">Contacto:</td>
                                <td class="registr"><input type="text" name="tel_user" title="Telefono " value='<?php echo $tel_user; ?>'readonly></td>

                                <td class="registr">Rol:</td>
                                <td class="registr"><input type="text" name="rol_user" title="¿Col o Aspi?"  
                                                           value='<?php
                                                           include("../3modelo/conexion.php");
                                                           $consulta2 = mysql_query("select * from t_rol where identificador_rol=$rol_user;");
                                                           while ($row = mysql_fetch_array($consulta2)) {
                                                               echo $row['rol_de_usuario'];
                                                           }
                                                           ?> 'readonly></td>

                                <td class="registr"><input type="hidden" name="clave_user" title="clave de Ingreso" value='<?php echo $clave_user; ?>'readonly></td>
                            </tr>
                            <tr>
                                <td class="registr">Fecha Nacimiento:</td> 
                                <td class="registr"><input type="text" name="nac_user" title="Cuando nacio (AAAA-MM-DD)" value='<?php echo $nac_user; ?>'readonly></td>

                                <td class="registr">Estado Civil:</td>
                                <td class="registr"><input type="text" name="civil_user" title="barrio" value='<?php echo $civil_user; ?>'readonly></td>

                            </tr>
                            <tr>
                                <td class="registr">Lugar Nacimiento:</td> 
                                <td class="registr"><input type="text" name="lugarnac_user" title="¿Donde nacio?"  value='<?php echo $lugarnac_user; ?>'readonly></td>
                                <td class="registr">Estrato:</td>
                                <td class="registr"><input type="text" name="estrato_user" title="estrato de vivenci"  value='<?php echo $estrato_user; ?>'readonly></td>

                            </tr>
                            <tr><td  colspan="4" align="center"><hr></td></tr>

                            <tr>
                                <td class="registr">localidad:</td>
                                <td class="registr"><input type="text" name="localidad_user" title="localidad vive"  value='<?php echo $localidad_user; ?>'readonly></td>
                            </tr> 
                            <tr>
                                <td class="registr">Barrio:</td>
                                <td class="registr"><input type="text" name="barrio_user" title="barrio" value='<?php echo $barrio_user; ?>'readonly></td>

                            </tr>

                            <tr>

                                <td class="registr">Archivo</td> 
                                <td class="registr"><input type="text" name="archivo_usuario" title="localidad vive" value='<?php echo $archivo_usuario; ?>'readonly></td>

                            </tr>
                            <tr><td  colspan="4" align="center"><hr></td></tr>
                            <tr>
                                <td class="registr">Acudiente Nombre</td>
                                <td class="registr"><input type="text" name="responsable_user" title=" Nombre"  value='<?php echo $responsable_user; ?>'readonly></td>
                            </tr>
                            <tr>
                                <td class="registr">Cel acudiente</td>
                                <td class="registr"><input type="text" name="cel_respon_user" title="Telefono de Contacto"  value='<?php echo $cel_respon_user; ?>'readonly></td>

                            </tr>
                            <tr><td  colspan="4" align="center"><hr></td></tr>

                            <tr>
                                <td class="registr">Tipo Colegio</td> 
                                <td class="registr"><input type="text" name="id_colegio" title="¿Publico o Privado?"

                                                           value='<?php
                                                           include("../3modelo/conexion.php");
                                                           $consulta = mysql_query("select * from t_colegio where id_colegio=$id_colegio;");
                                                           while ($row = mysql_fetch_array($consulta)) {
                                                               echo $row['tipo_colegio'];
                                                           }
                                                           ?>         'readonly></td>

                                <td class="registr">Jornada </td>
                                <td class="registr"><input type="text" name="id_jornada" title="Jornada Interes"  value='<?php
                                    include("../3modelo/conexion.php");
                                    $consulta = mysql_query("select * from t_jornada where id_jornada=$id_jornada;");
                                    while ($row = mysql_fetch_array($consulta)) {
                                        echo $row['tipo_jornada'];
                                    }
                                    ?>         'readonly></td>
                            </tr>
                            <tr>
                                <td class="registr">Estado actual</td>
                                <td class="registr"><input type="text" name="id_estado" title="¿Activado?" 
                                                           value='<?php
                                                           include("../3modelo/conexion.php");
                                                           $consulta = mysql_query("select * from t_estado_user where id_estado=$id_estado;");
                                                           while ($row = mysql_fetch_array($consulta)) {
                                                               echo $row['nom_estado'];
                                                           }
                                                           ?>         'readonly></td>
                            </tr>
                            <tr>
                                <td class="registr">Clasificacion:</td>
                                <td class="registr"><input type="text" name="clasificacion_usuario" title=" "  value='<?php echo $clasificacion_usuario; ?>'readonly></td>
                                <td class="registr">Ultimo Acceso:</td>
                                <td class="registr"><input type="text" name="ultimo_acceso" title="¿ ?" value='<?php echo $ultimo_acceso; ?> ' readonly></td>
                            </tr>
                            <tr>
                                <td class="registr"></td>
                                <td class="registr"><input type="hidden" name="id_materia_user" title="materia"  value='<?php echo $id_materia_user; ?>'></td>

                            </tr>
                            <tr>
                            <!--  <td class="registr">Pregrado:</td> -->
                                <td class="registr"><input type="hidden" name="carrera_user" title="¿QUE ESTUDIA?"  value='<?php echo $carrera_user; ?>'readonly></td>
                             <!--   <td class="registr">Universidad:</td> -->
                                <td class="registr"><input type="hidden" name="universidad_user" title="¿QUE uNIVERSIDAD?" value='<?php echo $universidad_user; ?> ' readonly></td>
                            </tr>

                                <tr>
                                    <td class="registr">Clasificacion:</td>
                                    <td class="registr"><select  name="clasificacion_usuario" >
                                            <option value="<?php echo $clasificacion_usuario; ?>" >  <?php
                                                include("../3modelo/conexion.php");
                                                $consulta = mysql_query("select * from t_clasificacion where id_clasificacion=$clasificacion_usuario;");
                                                while ($row = mysql_fetch_array($consulta)) {
                                                echo $row['nom_clasificacion'];
                                                }
                                                ?> </option>
                                            <option value="1" >Tipo A</option>
                                            <option value="2" >Tipo B</option>
                                            <option value="3" >Tipo C</option>
                                        </select>
                                    </td>
                               
                                <script language="JavaScript">function modificarClasificacion() {
                                        document.form.txtoperacion.value = 'modificarClasificacion';
                                    }</script>    
                                <td colspan="2" align="center" class="registr"> 
                                    <input type="submit" name="Submit" value="Actualizar Clasificación" onClick="modificarClasificacion()" >
                                    <input type='hidden' name='txtoperacion' value=''>
                                </td>
                                </tr>
                            </table>
                    </form> 	
                </div>
        </div>
    </aside>        </div>
</section>
</div>

<div class="container">
    <div class="margin-top">
        <div class="row">	
            <table cellpadding="0" cellspacing="0" border="1" class="table  table-bordered" id="example"aling='center'>

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;DIPAS</strong>


                </div>
                <thead>
                    <tr>
                        <th>Dipa No. </th>                                 
                        <th>Fecha Ingreso</th>
                        <th>Ver </th>   
                        <th>puntaje</th>   
                        <th>Observaciones</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $user_query2 = mysql_query("select * FROM t_dipa WHERE id_participante=$idaspi;") or die(mysql_error());
                    while ($row = mysql_fetch_array($user_query2)) {
                        $id = $row['id_dipa'];
                        ?>
                        <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['id_dipa']; ?></td> 
                            <td><?php echo$row['fecha_dipa']; ?></td>
                            <td> <?php echo "<a target='_blank' href='../../dipa/{$row['nombre_dipa']}'>" . $row['nombre_dipa'] . "</a> " ?></td>
                            <td><?php echo $row['puntaje_dipa']; ?></td>
                            <td><?php echo $row['obs_dipa']; ?></td> 
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>		
    </div>
</div>
<?php include("footer.php"); ?>