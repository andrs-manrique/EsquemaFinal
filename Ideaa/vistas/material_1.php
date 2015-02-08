<?php include('header.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
        <section>
            <div id="contieneblog">
                <aside id="articuloss">
                    <?php $identificacion = $_SESSION['identificacion']; ?>
                    <div>
                        <h3> <center> Ingresa Material</center></h3>
                        <form name="form1" method="post" action="../2controlador/C_material.php" enctype="multipart/form-data">
                            <table align="center" border="0">  
                                <input name="autor_material" type="hidden" title=" " value='<?php include("../3modelo/conexion.php");
                                $consulta = mysql_query("select * from t_usuario where dni_user=$identificacion;");
                                while ($row = mysql_fetch_array($consulta)) {
                                    echo $row['nom_user'];
                                }
                                ?>' readonly/>
                                <tr><td class="registr"></td>
                                    <td class="registr"><input name="id_novedad" type="hidden" title="Identificacion Novedad" value="0" /></td></tr>
                                <tr><td class="registr">Titulo</td>
                                    <td class="registr"><input name="titulo" type="text" title=" " value="" size="80" maxlength="1000" required=""/></td></tr>                                                      
                                <tr><td class="registr">Url</td>
                                 <td class="registr"><input name="url_material" type="text" title=" " value="" size="90" maxlength="1000" /></td></tr>                                                                                            
                                <tr>
                                <td class="registr">Archivo:</td>
                                <td>
                                <input type="file" name="archivo_material"/>
                                    </td>
                                    </tr>
                                    <tr> 
                                    <td class="registr">Contenido</td>
                                    <td class="registr"><textarea id="element_3" name="conte_novedad" class="element textarea medium" style="width: 800px; height: 150px;  resize: vertical;" required></textarea> 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="registr">Area</td>
                                    <td class="registr"><select name="area_material"required="" >
                                            <option value="">Seleccione</option>
                                            <option value="Ciencias Naturales">Ciencias Naturales</option>
                                            <option value="Ciencias Sociales">Ciencias Sociales</option>
                                            <option value="Matematicas">Matematicas</option> 
                                            <option value="Analisis de Imagen">Imagen</option> 
                                            <option value="Fisica">Fisica</option>
                                            <option value="Quimica">Quimica</option>
                                            <option value="Analisis Textual">Textual</option>
                                            <option value="Ocio">Ocio</option>
                                            <option value="Otros">Otros</option> 
                                        </select>
                                    </td>
                                </tr>
                                <tr> 
                                    <td class="registr">Material:</td>
                                    <td class="registr"><select name="tipo_material"required="" >
                                            <option value="">Seleccione</option>
                                            <option value="Pdf">Pdf</option>
                                            <option value="Video">Video</option>
                                            <option value="Taller">Taller</option> 
                                            <option value="Audisiovisual">Audiovisual</option> 
                                            <option value="Url">Link</option>                  
                                            <option value="Otros">Otros</option> 
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <script language="JavaScript">function agregarNovedad() {
                                        document.form1.txtoperacion.value = 'adicionarMaterial';
                                    }
                                </script>

                                <td class="registr" colspan="2" align="center">
                                    <input type="submit" name="Submit" value="Agregar" onClick="agregarNovedad();" > 
                                    <input type='hidden' name='txtoperacion' value='des'></td>


                                </tr>
                            </table>
                        </form>
                    </div>
                </aside>
            </div>
        </section>
        <?php include("./footer.php"); ?>	
