<?php include('header_1.php'); ?>
<?php include("BarraNavegacionadmin.php"); ?>			
<?php include("../3modelo/autenticacion.php"); ?>
<center>
    <div aling="center">
        <div class="container">
            <div class="margin-top">
                <div class="row">	
                    <div align="left"> <a target="_blank" href="Formula1.php"> <img src='../img/file_add.png' border='0' alt='Link to this page' width= 25px>Registrar usuario</a> </div>

                    <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Aspirantes</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>DNI</th>
                                <th>Nombre</th>                                 
                                <th>Apellido</th>     
                                <th>Estado</th>  
                                <th>Documento</th>
                                <th>Clasificacion</th>
                                <th>Modificacion</th>
                                <th>Acciones</th>                             
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $user_query2 = mysql_query("select *FROM t_usuario where rol_user='3' ORDER BY dni_user ASC") or die(mysql_error());
                            while ($row = mysql_fetch_array($user_query2)) {
                                $id = $row['dni_user'];
                                ?>
                                <tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['dni_user']; ?></td> 
                                    <td><?php echo $row['nom_user']; ?></td> 
                                    <td><?php echo $row['apell_user']; ?></td>
                                    <td><?php
                                        echo $row['id_estado'] . " ";
                                        include("../3modelo/conexion.php");
                                        $consulta = mysql_query("select * from t_estado_user where id_estado=$row[id_estado];");
                                        while ($r = mysql_fetch_array($consulta)) {
                                            echo $r['nom_estado'];
                                        }
                                        ?></td>

                                    <td> <?php echo "<a href='../Archivos/{$row['archivo_usuario']}'> Descargar </a> " ?></td>
                                    <td><?php
                                        echo $row['clasificacion_usuario'] . " ";
                                        include("../3modelo/conexion.php");
                                        $consulta = mysql_query("select * from t_clasificacion where id_clasificacion=$row[clasificacion_usuario];");
                                        while ($a = mysql_fetch_array($consulta)) {
                                            echo $a['nom_clasificacion'];
                                        }
                                        ?></td>
                                    <td width="70">
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" 
                                           href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php
                                           echo"<a href='updateEstado.php?dni=$id'>  "
                                           . " <img src='../img/lock.png' border='0' alt='Link to this page' width=22px></a>"; //include('modal_edit_Colabor.php');   
                                           ?>

                                        <a rel="tooltip"  title="" id="e<?php echo $id; ?>" 
                                           href="#edit<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php
                                           echo"<a href='updateEstadoacti.php?dni=$id'>  <img src='../img/acti.png' border='0' alt='Link to this page' width=22px></a>"; //include('modal_edit_Colabor.php');   
                                           ?>
                                        
                                           <?php
                                           echo"<a href='verDatosAspirante_1.php?id=" . base64_encode($id) . "' target=new ><img src='../img/1252.png' border='0' alt='Link to this page' width= 25px></a>";
                                           ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo"<a href='impDatos.php?id=" . base64_encode($id) . "' target=new ><img src='../img/BUSCAR EN_ICONO.png' border='1' alt='Link to this page' width= 25px></a>";
                                        ?>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                           href="#delete_user<?php echo $id; ?>" data-toggle="modal"></a>
                                           <?php
                                           echo"<a href='modif_asp.php?dni=$id'> <img src='../img/update.png' border='0' alt='Link to this page' width= 22px></a>"; // include('.php');   
                                           ?>
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>"  
                                           href="#delete_user<?php echo $id; ?>" data-toggle="modal"><img src='../img/Delete_Icon.png' border='0' alt='Link to this page' width= 25px></a>
                                           <?php include('borrarPart.php'); ?>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>		
            </div>
        </div>
    </div>
</center>
<?php include('footer.php') ?>