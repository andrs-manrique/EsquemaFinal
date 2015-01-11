<!doctype html>
<?php include('header.php'); ?>
<?php include("./BarrNavAsp.php");?>
        <?php include("../../3modelo/autenticacion.php"); ?>
            <section>
                <div id="contieneblog">
                    <?php //include("header.php"); ?>
                    <aside id="articuloss">
                         <div align="center"><br>
                            <h3>Modificar Clave</h3><br>
                            <form name="form3" method="post" action="../../2controlador/C_Password.php">
                                <table align="center">
                                    <input type="hidden" name="estado" value="<?php echo $_SESSION['autenticado'];?>">                              
                                            <input name="nom_user"  type="hidden" title="nomb" value="<?php
                                            include("../../3modelo/conexion.php");
                                            $identificacion = $_SESSION['identificacion'];
                                            $consulta = mysql_query("select*from t_usuario where dni_user='$identificacion'");
                                            while ($fila = mysql_fetch_array($consulta)) { echo $fila['nom_user'];}
                                            ?>"size="30" maxlength="2048" readonly="readonly">                                                                            
                                            <input name="dni_user" type="hidden" title="" value="<?php
                                            include("../../3modelo/conexion.php");
                                            $identificacion = $_SESSION['identificacion'];
                                            $consulta = mysql_query("select*from t_usuario where dni_user='$identificacion'");
                                            while ($fila = mysql_fetch_array($consulta)) {
                                                echo $fila['dni_user'];
                                            }
                                            ?>"size="30" maxlength="2048" readonly="readonly">

                                    <tr><td class="registr">Digite Clave actual: </td><td class="registr">
                                            <input name="password" type="password" title="Campo de Clave Anterior" value="" size="30" maxlength="2048" required/></td></tr>
                                    
                                    <tr><td class="registr">Digite la nueva Clave: </td><td class="registr">
                                            <input name="passwordNueva" type="password" title="Nueva clave" value="" size="30" maxlength="2048" required/></td></tr>
                                    
                                    <tr><td class="registr">Verifique la nueva Clave: </td><td class="registr">
                                            <input name="passwordRepeat" type="password" title="Repetir Nueva Clave" value="" size="30" maxlength="2048" required/></td></tr>
                                    <tr><td class="registr" colspan="2" align="center">
                                    <input type="submit" name="Submit" value="Actualizar Clave" onClick="cambioContrasena()" > 
                                    <input type='hidden' name='txtoperacion' value='clave_par'></td></tr>
                                </table>
                            </form>
                        </div>
                    </aside>
              
                </div>
            </section>
           <?php                                            include '../footer.php'; ?>