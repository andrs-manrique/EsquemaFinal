<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<div align="center">
    <section>
        <div id="contieneblog">

            <aside id="articuloss">

                <?php
                include("../3modelo/conexion.php");

                $idmat = $_GET['dni'];
                //$identificacion = $_SESSION['identificacion'];
                $consulta = mysql_query("select *from t_materia where (id_materia='$idmat')");


                if ($row = mysql_fetch_array($consulta)) {
                    $id_matt = $row["id_materia"];
                    $nombre_mat = $row["nom_materia"];
                    $obj_mat = $row["objetivo_materia"];
                    $des_materia = $row["desc_materia"];
                }
                ?>
                <div>
                    <font color="white"><h3>DATOS GENERALES  MATERIA DE ESTUDIO</h3></font>
                    <form name="form" method="post" action="../2controlador/C_Materia.php" > 
                        <table align="center" >
                            <tr>

                            <tr><td class="registr">Identificacion de la Materia: </td><td class="registr"><input name="id_materia" type="text" title="Identificacion Materia" value='<?php echo $id_matt ?>'  /></td></tr>
                            <tr><td class="registr">Materia: </td><td class="registr"><input name="Materia" type="text" title="Materia" value= '<?php echo $nombre_mat; ?>' size="20" maxlength="2048" /></td></tr>
                            <tr><td class="registr">Objetivos de la Materia: </td><td class="registr"> <textarea name="obj_materia"><?php echo $obj_mat; ?> </textarea>
                                </td></tr>
                            <tr><td class="registr">Descripcion de la Materia: </td><td class="registr"> <textarea name="desc_materia"><?php echo $des_materia; ?> </textarea>
                                    </div> 
                                    <script language="JavaScript">function modificar() {
                                            document.form1.txtoperacion.value = 'modificar';
                                        }</script>  
                                    <td colspan="2"  class="registr"><input type="submit" name="Submit" value="Modificar" onClick="modificar()" > <input type='hidden' name='txtoperacion' value='modificar'></td>
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
