<!doctype html>
<?php include('header.php'); ?>
<?php include("./BarrNavAsp.php");?>
        <?php include("../../3modelo/autenticacion.php"); ?>
            <section>
                <div id="contieneblog">
                    <?php //include("header.php"); ?>

                    <aside id="articuloss">
                        <div>
                            <article  contenteditable="true">
                                <h3>Bienvenido PARTICI en esta sección usted puede cambiar su contraseña</h3><br>
                                <div class="imagenarticuloblog" id="imgblog2"></div>
                            </article>
                        </div>
                        <div><br>
                            <h3>CAMBIAR CONTRASEÑA</h3><br>
                            
                            <form name="form3" method="post" action="../../2controlador/C_Password.php">
                                <table align="center">
                                    <input type="text" name="estado" value="<?php echo $_SESSION['autenticado'];?>">
                                    <tr><td class="registr">Usuario</td><td class="registr">
                                            
                                         <input name="nom_user" title="cedula" value="<?php
                                            include("../../3modelo/conexion.php");

                                            $identificacion = $_SESSION['identificacion'];

                                            $consulta = mysql_query("select*from t_usuario where dni_user='$identificacion'");

                                            while ($fila = mysql_fetch_array($consulta)) {
                                                echo $fila['nom_user'];
                                            }
                                            ?>"size="30" maxlength="2048" readonly="readonly"></td></tr>
                                    
                                     <tr><td class="registr">Documento</td><td class="registr">
                                            
                                         <input name="dni_user" title="cedula" value="<?php
                                            include("../../3modelo/conexion.php");

                                            $identificacion = $_SESSION['identificacion'];

                                            $consulta = mysql_query("select*from t_usuario where dni_user='$identificacion'");

                                            while ($fila = mysql_fetch_array($consulta)) {
                                                echo $fila['dni_user'];
                                            }
                                            ?>"size="30" maxlength="2048" readonly="readonly"></td></tr>

                                    <tr><td class="registr">Digite contraseña actual: </td><td class="registr"><input name="password" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">Digite la nueva contraseña: </td><td class="registr"><input name="passwordNueva" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">Verifique la nueva contraseña: </td><td class="registr">
                                            <input name="passwordRepeat" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr" colspan="2" align="center">
                                    <input type="submit" name="Submit" value="Cambiar Contraseña" onClick="cambioContrasena()" > 
                                    <input type='hidden' name='txtoperacion' value='clave_par'></td></tr>
                                </table>
                            </form>
                        </div>
                    </aside>
              
                </div>
            </section>
           <?php                                            include '../footer.php'; ?>












































