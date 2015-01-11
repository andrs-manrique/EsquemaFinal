<?php include('header.php'); ?>
<?php include("./BarrNavCol.php"); ?>			
<?php include("../../3modelo/autenticacion.php");?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <link rel=stylesheet href="../css/pc1.css" type="text/css" />
    </head>
    <body>

        <div id="contenedor">

            <section>
                <div id="contieneblog">

                    <aside id="articuloss">
 <?php
                $identificacion = $_SESSION['identificacion'];?>
   
             
             
             
        
                        
                        <div><br>
                            <h3> <center> Ingresa Material</center></h3><br>
                            <form name="form1" method="post" action="../../2controlador/C_material.php">
                                <table align="center">  
<input name="autor_material" type="text" title=" " value='<?php
                           include("../../3modelo/conexion.php");
                        $consulta = mysql_query("select * from t_usuario where dni_user=$identificacion;");
                                                           while ($row = mysql_fetch_array($consulta)) {
                                                               echo $row['nom_user'];
                                                           }
                                                           ?>' readonly/>
                                    <tr><td class="registr"></td>
                                        <td class="registr"><input name="id_novedad" type="hidden" title="Identificacion Novedad" value="0" /></td></tr>
                                    <tr><td class="registr">Titulo</td>
                                        <td class="registr"><input name="titulo" type="text" title=" " value="" size="80" maxlength="1000" /></td></tr>                          
                                
                                    <tr><td class="registr">Url</td>
                                        <td class="registr"><input name="url_material" type="text" title=" " value="" size="90" maxlength="1000" /></td></tr>                          
                                   
                                                                      
                                    <tr>
                                      <td class="registr">Contenido</td>
                                        <td class="registr"><textarea id="element_3" name="conte_novedad" class="element textarea medium" style="width: 800px; height: 150px;  resize: vertical;"></textarea> 
                                        </td>
                                    </tr>
                                    
                                     <tr>
                <td class="registr">Area</td>
                <td class="registr"><select name="area_material" >
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
                <td class="registr"><select name="tipo_material" >
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
                                         </div> 

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
                            <?php include("../footer.php"); ?>	
