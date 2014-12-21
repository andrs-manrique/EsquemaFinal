<!doctype html>
<?php include('header.php'); ?>
<?php include("BarraNavegacionadmin.php");?>
        <?php include("../3modelo/autenticacion.php"); ?>
        <div id="contenedor">
            <section>
                <div id="contieneblog">
                    <?php //include("header.php"); ?>

                    <aside id="articuloss">
                        <div>
                            <article  contenteditable="true">
                                <h3>Bienvenido ADMINISTRADOR en esta sección usted puede cambiar su contraseña</h3><br>
                                <div class="imagenarticuloblog" id="imgblog2"></div>
                            </article>
                        </div>
                        <div><br>
                            <h3>CAMBIAR CONTRASEÑA</h3><br>
                            
                            <form name="form3" method="post" action="../2controlador/C_Password.php">
                                <table align="center">
                                    <input type="hidden" name="id_prueba" value="<? echo $_SESSION['autenticado'];?>">
                                    <tr><td class="registr">Usuario</td><td class="registr"><input name="usuario" title="cedula" value="                            <?php
                                            include("../3modelo/conexion.php");

                                            $identificacion = $_SESSION['identificacion'];

                                            $consulta = mysql_query("select*from t_usuario where dni_user='$identificacion'");

                                            while ($fila = mysql_fetch_array($consulta)) {
                                                echo $fila['nom_user'];
                                            }
                                            ?>"size="30" maxlength="2048" readonly="readonly"></td></tr>
                                    <tr><td class="registr">Digite contraseña actual: </td><td class="registr"><input name="password" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">Digite la nueva contraseña: </td><td class="registr"><input name="passwordNueva" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr">Verifique la nueva contraseña: </td><td class="registr"><input name="passwordRepeat" type="password" title="login" value="" size="30" maxlength="2048" /></td></tr>
                                    <tr><td class="registr" colspan="2" align="center"><input type="submit" name="Submit" value="Cambiar Contraseña" onClick="cambioContrasena()" > <input type='hidden' name='txtoperacion' value='cambioContrasena'></td></tr>
                                </table>
                            </form>
                        </div>
                    </aside>
                    <div style="clear:both"></div>
                </div>
            </section>
            <div style="clear"></div>
            <footer>
                <h3><center>Universidad Distrital Francisco Jose de Caldas</center></h3>
            </footer>
        </div>
    </body>
</html>













































