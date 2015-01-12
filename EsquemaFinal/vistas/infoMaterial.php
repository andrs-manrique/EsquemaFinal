<?php include('header.php'); ?>
<?php include("./BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    <section>
        <div id="contieneblog">
            <aside id="articuloss">
                <?php
                include("../3modelo/conexion.php");
                $identificacion = $_GET['id'];
                $consulta = mysql_query("select *from t_material where (id_material='$identificacion')");
                if ($row = mysql_fetch_array($consulta)) {
                    $fecha_registro=$row['fecha_material'];
$id_material=$row['id_material'];
$titulo_material=$row['Titulo_material'];
$Contenido=$row['Contenido'];
$area_material=$row['area_material']; 
$tipo_material=$row['tipo_material']; 
$url=$row['url_material'];
$autor=$row['autor_material'];
                }
                ?>
                <div>
                    <font color="white">     <h3>Informacion  Material</h3></font>
                    <form name="form" method="post" action="../2controlador/C_material.php" > 
                        <table align="center" >
                            <tr>
                                <td class="registr">No. Identificación:</td>
                                <td class="registr"><input type="text" name="id_novedad" title="usuario"  value='<?php echo $id_material ?>' ></td>

                                <td class="registr">TITULO</td>
                                <td class="registr">
                                    <input type="text" name="titulo" title="TILE" value='<?php echo $titulo_material; ?>' ></td>
                            </tr>

                            <tr>
                                <td class="registr">Contenido:</td>
                                <td class="registr"><input type="text" name="conte_novedad" title="nombre" value='<?php echo $Contenido; ?>' ></td>

                                <td class="registr">Apellido:</td>
                                <td class="registr"><input type="text" name="area_material" title="apellido" value='<?php echo $area_material; ?>' ></td>
                            </tr><tr>
                                <td class="registr">TIPO MATERIAL:</td>
                                <td class="registr"><input type="text" name="tipo_material" title="genero " value='<?php echo $tipo_material; ?>' ></td>

                                <td class="registr">URL</td>
                                <td class="registr"><input type="text" name="url_material" title="correo electronico de contacto" value='<?php echo $url; ?>' ></td>
                            </tr>

                            <tr>

                                <td class="registr">Fecha Registro</td>
                                <td class="registr"><input type="text" name="fecha_registro_user" title="localidad vive"  value='<?php echo $fecha_registro; ?>' readonly=""></td>


                                <td class="registr">Colaborador</td>
                                <td class="registr"><input type="text" name="autor_material" title="usuario" value='<?php echo $autor; ?>' ></td>

                            </tr>
                            
                              <tr><br>
  <script language="JavaScript">function actualizarMaterial(){ document.form.txtoperacion.value = 'actualizarMaterial';}</script>    
  <td colspan="4" align="center" class="registr"> 
      <input type="submit" name="Submit" value="Actualizar Material" onClick="actualizarMaterial()" >
    <input type='hidden' name='txtoperacion' value='actualizarMaterial'>
    </td></td>
    </tr>
                            

                        </table>
                    </form> 					
                </div>
            </aside>
            <div style="clear:both"></div>
        </div>
    </section>
</div>
<?php include("footer.php"); ?>	
